
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
        
        
        
        
        tr.appendChild(tdNombre);
        tr.appendChild(tdDescripcion);
        tr.appendChild(tdMarca);
        tr.appendChild(tdEtiqueta);
        tr.appendChild(tdAcciones);
        tdAcciones.appendChild(botonEliminar);


        tbody.appendChild(tr);
    }
}

document.addEventListener("DOMContentLoaded" , async()=>{
    let producto = await getProductos() ;
    cargarTabla(producto);
});