const botonesCategorias = document.querySelectorAll(".boton-categoria");
const contenedorProductos = document.getElementById("contenedor-productos");

const categoriaArchivoMap = {
  todos: "stock.html",
  abrigos: "Sneakers.html",
  camisetas: "Contact_Us.html",
};

window.addEventListener("DOMContentLoaded", async () => {
  const archivoHTML = categoriaArchivoMap.todos;

  try {
    const response = await fetch(`./${archivoHTML}`);
    const contenido = await response.text();
    contenedorProductos.innerHTML = contenido;
  } catch (error) {
    console.error("Error al cargar el contenido por defecto:", error);
  }
});

botonesCategorias.forEach((boton) => {
  boton.addEventListener("click", async (e) => {
    const categoria = e.currentTarget.id;
    botonesCategorias.forEach((boton) => boton.classList.remove("active"));
    e.currentTarget.classList.add("active");

    const archivoHTML = categoriaArchivoMap[categoria];

    if (archivoHTML) {
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
