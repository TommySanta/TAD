// Obtener el elemento <ol> donde mostrar los números
const listaNumeros = document.getElementById("numeroLista");
const botonNumeros = document.getElementById("calcularbtn");

// Función para mostrar los números del 1 al 10
function mostrarNumeros() {
    // let numero=window.prompt("dime un número");
    const numero=document.getElementById("numero").value;
    
    for (let i = 1; i <= 10; i++) {
    // Crear un elemento <li> para cada número y agregarlo a la lista
    const listItem = document.createElement("li");
    listItem.textContent = i*numero;
    console.log(i*numero);
    listaNumeros.appendChild(listItem);
  }
}
botonNumeros.addEventListener("click",mostrarNumeros)
