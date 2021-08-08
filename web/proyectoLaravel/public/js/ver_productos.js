


const iniciarEliminacion = async function(){
    let id = this.idProductos;
    let resp = await Swal.fire({title:"Esta seguro?",text:"Esta operacion es irreversible"
    , icon:"error",showCancelButton:true});
    if(resp.isConfirmed){
        Swal.fire("La persona quiere eliminar: ");
        if(await eliminarProductos(id)){
            let Productos = await getProductos();
            cargarTabla(Productos);
            Swal.fire("Producto eliminado", "Producto eliminado exitosamente", "info");
        }else{
            Swal.fire("Error", "No se pudo atender la solicitud", "error");
        }
    }else{
        Swal.fire("Cancelado", "Cancelado a peticion del usuario", "info");
    }
}


const cargarTabla = (producto) =>{
    let tbody = document.querySelector("#tbody-productos");
    tbody.innerHTML = "";
    for(let i=0; i < producto.length; ++i){
        let tr = document.createElement("tr");


        let tdNombre = document.createElement("td");
        tdNombre.innerText = producto[i].nombre;
        let tdDescripcion = document.createElement("td");
        tdDescripcion.innerText = producto[i].descripcion;
        let tdMarca = document.createElement("td");
        tdMarca.innerText = producto[i].marca;
        let tdEtiqueta = document.createElement("td");
        tdEtiqueta.innerText = producto[i].etiquetas;

        let tdAcciones = document.createElement("td");
        
        let botonEliminar = document.createElement("button");
        botonEliminar.innerText = "Eliminar producto";
        botonEliminar.classList.add("btn","btn-danger");
        botonEliminar.idProductos = producto[i].id;
        botonEliminar.addEventListener("click", iniciarEliminacion);
        
        
        
        tr.appendChild(tdNombre);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdMarca);
        tr.appendChild(tdEtiqueta);
        tr.appendChild(tdAcciones);
        tdAcciones.appendChild(botonEliminar);


        tbody.appendChild(tr);
    }
}





const cargarEtiquetas = async ()=>{
    let filtroCbx = document.querySelector("#filtro-cbx");
    let etiquetas = await getEtiquetas();
    
    etiquetas.forEach(m => {
        let option = document.createElement("option");
        option.innerText = m.nombre;
        option.value = m.nombre;
        filtroCbx.appendChild(option);

    });
};



document.querySelector("#filtro-cbx").addEventListener("change", async()=>{
    let filtro = document.querySelector("#filtro-cbx").value;
    let productos = await getProductos(filtro);
    cargarTabla(productos);
});

document.addEventListener("DOMContentLoaded" , async()=>{
    await cargarEtiquetas();
    let producto = await getProductos();
    cargarTabla(producto);
});