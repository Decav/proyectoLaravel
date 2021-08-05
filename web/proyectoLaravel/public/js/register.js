
document.querySelector("#register-btn").addEventListener("click", async() =>{
    
    let nombre_usuario = document.querySelector("#nombre_usuario-txt").value.trim();
    let correo_electronico = document.querySelector("#correo_electronico-txt").value.trim();
    let clave = document.querySelector("#clave-txt").value.trim();
    let confirmar_clave = document.querySelector("#confirmar_clave-txt").value.trim();
    
    
    


    

    if(clave==confirmar_clave){
        let usuario = {};
        let tipo = 3;
        usuario.correo_electronico = correo_electronico;
        usuario.nombre_usuario = nombre_usuario;
        usuario.clave = clave;
        usuario.tipo = tipo;

        
        let resultado = await registrarUsuario(usuario);
        await Swal.fire("usuario creado", "usuario creado exitosamente", "success");
    }else{
        Swal.fire("Contraseña erronea", "Las contraseñas no son equivalentes", "error");
    }
    
    
});