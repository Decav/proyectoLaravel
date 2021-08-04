

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

const cargarEtiquetas = async() =>{
    let etiqueta = await getEtiquetas();

    let etiquetaselect = $('#etiquetas-select');
    etiqueta.forEach(m=>{
        let option = document.createElement("option");
        option.innerText = m.nombre;
        option.value = m.nombre;
        etiquetaselect.append(option).multipleSelect('refresh');
        //$('#etiquetas-select').append(option).multipleSelect('refresh');
    });
};



document.addEventListener("DOMContentLoaded" ,()=>{
    $('#etiquetas-select').multipleSelect();
    cargarEtiquetas(); 
    
});

document.querySelector("#registrar_productos-btn").addEventListener("click", async() =>{
    
    let nombre = document.querySelector("#nombre-txt").value.trim();
    let descripcion = document.querySelector("#descripcion-txt").value.trim();
    let marca = document.querySelector("#marca-select").value.trim();
    let etiquetasarray = $("#etiquetas-select").multipleSelect('getSelects','text');
    let etiquetas ="";
    etiquetasarray.forEach(m=>{
        etiquetas += " "+ m + ",";
    });
    

    let producto = {};
    producto.nombre = nombre;
    producto.descripcion = descripcion;
    producto.marca = marca;
    producto.etiquetas = etiquetas.substring(0, etiquetas.length - 1);

    
    let resultado = await crearProductos(producto);
    await Swal.fire("producto creado", "producto creado exitosamente", "success");

});



