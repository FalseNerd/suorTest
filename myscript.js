function mostramessaggio() {
  document.getElementById("message").textContent = "Registrazione effettuata!";
}

// Aggiungi l'evento al bottone
document.getElementById("myButton").addEventListener("click", mostramessaggio);

function cambiaColoreSfondo() {
  const form = document.getElementById("myForm");
  form.style.backgroundColor = "lightblue"; // Cambia il colore a lightblue
}

// Aggiungi l'evento click al bottone
document.getElementById("changeColorButton").addEventListener("click", cambiaColoreSfondo);