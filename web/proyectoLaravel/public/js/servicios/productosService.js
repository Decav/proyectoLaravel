//getproductos
const getProductos = async(filtro ="todos")=>{
    let respuesta = await axios.get("api/productos/get");
    if(filtro == "todos"){
        respuesta = await axios.get("api/productos/get");
    }else{
        respuesta = await axios.get(`api/productos/filtrar?filtro=${filtro}`);
    }
    console.log(respuesta.data);
    return respuesta.data;

};

//crearproductos
const crearProductos = async(producto)=>{
    console.log(producto);
    let respuesta = await axios.post("api/productos/post", producto, {
        headers: {
            'Content-Type': 'application/json'
        }
    });
    return respuesta.data;
};

const eliminarProductos = async(id)=>{
    try{
        let respuesta = await axios.post("api/productos/delete", {id},{
            headers:{
                'Content-Type': 'application/json'
            }
        })
        return respuesta.data == "ok";
    }catch(e){
        return false;
    }
    
}