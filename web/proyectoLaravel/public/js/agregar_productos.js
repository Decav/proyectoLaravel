

const cargarMarcas = async() =>{
    let marcas = await getMarcas();

    let marcaSelect = document.querySelector("#marca-select");
    marcas.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m;
        marcaSelect.appendChild(option);
    });
};

document.addEventListener("DOMContentLoaded" ,()=>{
    cargarMarcas();
});




document.querySelector("#registrar_productos-btn").addEventListener("click", async() =>{
    
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let descripcion = document.querySelector("#descripcion-txt").value.trim();
    let marca = document.querySelector("#marca-select").value.trim();
    
    


    let producto = {};
    producto.nombre = nombre;
    producto.descripcion = descripcion;
    producto.marca = marca;

    
    let resultado = await crearProductos(producto);
    await Swal.fire("producto creado", "producto creado exitosamente", "success");

});

pureScriptSelect('#multiSelect');

