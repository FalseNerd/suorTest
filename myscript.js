function mostramessaggio() {
  document.getElementById("message").textContent = "Registrazione effettuata!";
}

// Aggiungi l'evento al bottone
document.getElementById("myButton").addEventListener("click", mostramessaggio);
