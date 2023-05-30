//Pregunta antes de entrar

function confirmacion(event) {
    if (confirm("¿Estas seguro de eliminar/modificar el registro?")) {
        return true;
    } else {
        event.preventDefault()
    }
}

let linkDelete = document.querySelectorAll(".table_item_link");

for (var i = 0; i < linkDelete.length; i++) {
    linkDelete[i].addEventListener("click", confirmacion);
}