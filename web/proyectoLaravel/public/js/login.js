
document.querySelector("#login-btn").addEventListener("click", async() =>{
    let correo_electronico = document.querySelector("#correo_electronico-txt").value;
    let clave = document.querySelector("#clave-txt").value;
    let exitoso = false

    
    let busquedaUsuario = await getUsuario();
    busquedaUsuario.forEach(u => {
        if(correo_electronico == u.correo_electronico && clave == u.clave){
            exitoso = true;
        }
 
    });
    if(exitoso == true){
        Swal.fire("Usuario correcto", "Inicio de sesion exitoso", "success");
        window.location.href ="home";    
    }else{
        Swal.fire("Usuario no encontrado", "Inicio de sesion fallido", "error");
    }
});


document.addEventListener("DOMContentLoaded", () =>{
    cerrarSesion();
});