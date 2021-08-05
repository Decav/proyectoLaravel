//getproductos
const getProductos = async()=>{
    let respuesta = await axios.get("api/productos/get");
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