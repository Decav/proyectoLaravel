//getetiquetas
const getEtiquetas = async()=>{
    let respuesta = await axios.get("api/etiquetas/get");
    return respuesta.data;

};

//crearetiquetas
const crearEtiquetas = async(etiqueta)=>{
    console.log(etiqueta);
    let respuesta = await axios.post("api/etiquetas/post", etiqueta, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};

const eliminarEtiqueta = async(id)=>{
    try{
        let respuesta = await axios.post("api/etiquetas/delete", {id},{
            headers:{
                'Content-Type': 'application/json'
            }
        })
        return respuesta.data == "ok";
    }catch(e){
        return false;
    }
    
}