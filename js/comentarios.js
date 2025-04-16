function agregarComentario() {
    // Capturar el comentario del usuario
    var comentario = document.getElementById("comment").value;

    // Crear un nuevo div para el comentario
    var nuevoComentario = document.createElement("div");
    nuevoComentario.className = "comment";

    // Crear una imagen para el usuario (puedes cambiar la ruta a la imagen que desees)
    var imagenUsuario = document.createElement("img");
    imagenUsuario.src = "ruta/a/la/imagen-de-usuario.jpg"; // Cambiar la ruta de la imagen
    imagenUsuario.alt = "Imagen de usuario";
    imagenUsuario.className = "profile-picture"; // Clase para la imagen redonda

    // Crear un párrafo para el texto del comentario
    var textoComentario = document.createElement("p");
    textoComentario.textContent = comentario;

    // Agregar la imagen y el texto al nuevo comentario
    nuevoComentario.appendChild(imagenUsuario);
    nuevoComentario.appendChild(textoComentario);

    // Obtener el contenedor de comentarios
    var contenedorComentarios = document.querySelector(".comment-wrapped");

    // Agregar el nuevo comentario al contenedor de comentarios
    contenedorComentarios.appendChild(nuevoComentario);
}