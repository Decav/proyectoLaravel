

const iniciarEliminacion = async function(){
    let id = this.idUsuario;
    let resp = await Swal.fire({title:"Esta seguro?",text:"Esta operacion es irreversible"
    , icon:"error",showCancelButton:true});
    if(resp.isConfirmed){
        if(await eliminarUsuario(id)){
            let usuario = await getUsuario();
            cargarTabla(usuario);
            Swal.fire("Usuario eliminado", "Usuario eliminado exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
}

document.querySelector("#registrar_usuario-btn").addEventListener("click", async() =>{
    
    let nombre_usuario = document.querySelector("#nombre_usuario-txt").value.trim();
    let correo_electronico = document.querySelector("#correo_electronico-txt").value.trim();
    let rb = document.querySelector("#tipo-si").checked;
    let clave = "0";

    let tipo = 0;
    if(rb == true){
        tipo = 1;
    }else{
        tipo = 2;
    }
    


    let usuario = {};
    usuario.nombre_usuario = nombre_usuario;
    usuario.correo_electronico = correo_electronico;
    usuario.clave = clave;
    usuario.tipo = tipo;

    let resultado = await registrarUsuario(usuario);
    await Swal.fire("usuario creado", "usuario creado exitosamente", "success");
    let listaUsuarios = await getUsuario();
    cargarTabla(listaUsuarios);
});


const cargarTabla = (usuario) =>{
    let tbody = document.querySelector("#tbody-usuario");
    tbody.innerHTML = "";
    for(let i=0; i < usuario.length; ++i){
        let tr = document.createElement("tr");
        let TipoVar = "";
        
        switch(usuario[i].tipo){
            case 1:
                TipoVar = "Vendedor";
                break;
            case 2:
                TipoVar = "Cliente";
                break;  
            case 3:
                TipoVar = "Administrador";
                break;
            default:
                break;

        }

        let tdNombre = document.createElement("td");
        tdNombre.innerText = usuario[i].nombre_usuario;
        let tdCorreo_electronico = document.createElement("td");
        tdCorreo_electronico.innerText = usuario[i].correo_electronico;
        let tdTipo = document.createElement("td");
        tdTipo.innerText = TipoVar;

        let tdAcciones = document.createElement("td");
        
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar usuario";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idUsuario = usuario[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        
        
        tr.appendChild(tdNombre);
        tr.appendChild(tdCorreo_electronico);
        tr.appendChild(tdTipo);
        tr.appendChild(tdAcciones);
        tdAcciones.appendChild(botonEliminar);

        if(tdTipo.innerText == "Administrador"){
            botonEliminar.innerText = "Deshabilitado";
            botonEliminar.disabled = true;
        }
        tbody.appendChild(tr);
    }
}

document.addEventListener("DOMContentLoaded" , async()=>{
    let usuario = await getUsuario();
    cargarTabla(usuario);
});