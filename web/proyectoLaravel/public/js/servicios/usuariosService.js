//getusuarios
const getUsuarios = async()=>{
    let respuesta = await axios.get("api/usuarios/get");
    return respuesta.data;

};

//crearusuarios
const registrarUsuario = async(usuario)=>{
    console.log(usuario);
    let respuesta = await axios.post("api/usuarios/post", usuario, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};

const eliminarUsuario = async(id)=>{
    try{
        let respuesta = await axios.post("api/usuarios/delete", {id},{
            headers:{
                'Content-Type': 'application/json'
            }
        })
        return respuesta.data == "ok";
    }catch(e){
        return false;
    }
    
}