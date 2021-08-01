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