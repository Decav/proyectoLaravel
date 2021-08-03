
document.querySelector("#registrar_etiqueta-btn").addEventListener("click", async() =>{    
    let nombre = document.querySelector("#nombre-txt").value.trim();
    
    let errores = [];
    if(nombre === ""){
        errores.push("Debe ingresar una nombre");
    }else{
        let etiqueta = await getEtiquetas();
        let etiquetaEncontrada = etiqueta.find(c=>c.nombre.toLowerCase() === nombre.toLowerCase());
        if(etiquetaEncontrada != undefined){
            errores.push("El etiqueta ya existe");
        }
    }
  
    if(errores.length == 0){
        let etiqueta = {};
        etiqueta.nombre = nombre;


        
        let resultado = await crearEtiquetas(etiqueta);
        await Swal.fire("etiqueta creada", "etiqueta creada exitosamente", "success");
        let Etiqueta = await getEtiquetas();
        cargarTabla(Etiqueta);
    }else{
        Swal.fire({
            title: "Errores de validacion",
            icon: "warning",
            html: errores.join("<br />")
        });
    }
});





const iniciarEliminacion = async function(){
    let id = this.idEtiqueta;
    let resp = await Swal.fire({title:"Esta seguro?",text:"Esta operacion es irreversible"
    , icon:"error",showCancelButton:true});
    if(resp.isConfirmed){
        Swal.fire("La persona quiere eliminar: ");
        if(await eliminarEtiqueta(id)){
            let Etiqueta = await getEtiquetas();
            cargarTabla(Etiqueta);
            Swal.fire("Etiqueta eliminada", "Etiqueta eliminada exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
}




const cargarTabla = (etiqueta) =>{
    let tbody = document.querySelector("#tbody-etiqueta");
    tbody.innerHTML = "";
    for(let i=0; i < etiqueta.length; ++i){
        let tr = document.createElement("tr");

        let tdId = document.createElement("td");
        tdId.innerText = (i+1);
        let tdNombre = document.createElement("td");
        tdNombre.innerText = etiqueta[i].nombre;

        let tdAcciones = document.createElement("td");
        
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idEtiqueta = etiqueta[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        
        tr.appendChild(tdId);
        tr.appendChild(tdNombre);
        tr.appendChild(tdAcciones);
        tdAcciones.appendChild(botonEliminar);
        

        tbody.appendChild(tr);
    }
}

document.addEventListener("DOMContentLoaded" , async()=>{
    let etiqueta = await getEtiquetas() ;
    cargarTabla(etiqueta);
});