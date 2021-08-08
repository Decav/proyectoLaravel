
var global_nombre_usuario = "";
var global_logged = false;
const iniciarSesion = (u) =>{
    global_nombre_usuario = u.nombre_usuario;
    console.log(global_nombre_usuario);
    global_logged = true;
}

const cerrarSesion = () =>{
    global_nombre_usuario = "";
    global_logged = false;
}

