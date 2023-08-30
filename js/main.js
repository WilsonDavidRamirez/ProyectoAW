const botonesCategorias = document.querySelectorAll(".boton-categoria");
const contenedorProductos = document.getElementById("contenedor-productos");

// Mapeo de nombres de categoría a nombres de archivos HTML
const categoriaArchivoMap = {
  todos: "stock.html",
  abrigos: "Sneakers.html",
  camisetas: "contacto.html",
  // Agrega más categorías y nombres de archivos según sea necesario
};

botonesCategorias.forEach((boton) => {
  boton.addEventListener("click", async (e) => {
    const categoria = e.currentTarget.id;
    botonesCategorias.forEach((boton) => boton.classList.remove("active"));
    e.currentTarget.classList.add("active");

    // Obtener el nombre de archivo correspondiente desde el mapa
    const archivoHTML = categoriaArchivoMap[categoria];

    if (archivoHTML) {
      // Cargar el contenido HTML del archivo correspondiente
      try {
        const response = await fetch(`./${archivoHTML}`);
        const contenido = await response.text();
        contenedorProductos.innerHTML = contenido;
      } catch (error) {
        console.error("Error al cargar el contenido:", error);
      }
    }
  });
});
