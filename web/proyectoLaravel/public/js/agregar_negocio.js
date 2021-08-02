
document.querySelector("#registrar_negocio-btn").addEventListener("click", async() =>{
    let patente = document.querySelector("#patente-txt").value.trim();
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let direccion = document.querySelector("#direccion-txt").value.trim();
    let numero = document.querySelector("#numero-txt").value.trim();
    
    


    let errores = [];
    if(patente === ""){
        errores.push("Debe ingresar una patente");
    }else{
        let negocios = await getNegocio();
        let negocioEncontrado = negocios.find(c=>c.patente.toLowerCase() === patente.toLowerCase());
        if(negocioEncontrado != undefined){
            errores.push("El negocio ya existe");
        }
    }

    if(errores.length == 0){
        let negocio = {};
        negocio.patente = patente;
        negocio.nombre = nombre;
        negocio.direccion = direccion;
        negocio.numero = numero;

        
        let resultado = await crearNegocios(negocio);
        await Swal.fire("negocio creado", "negocio creado exitosamente", "success");
    }else{
        Swal.fire({
            title: "Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});