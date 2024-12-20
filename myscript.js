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
document
  .getElementById("changeColorButton")
  .addEventListener("click", cambiaColoreSfondo);

function contaMaiuscole() {
  const str1 = document.getElementById("stringa1").value;
  const str2 = document.getElementById("stringa2").value;
}

function contaMaiuscoleInStringa(stringa) {
  let count = 0;
  for (let i = 0; i < stringa.length; i++) {
    if (
      stringa[i] === stringa[i].toUpperCase() &&
      stringa[i] !== stringa[i].toLowerCase()
    ) {
      count++;
    }
  }
  return count;
}

function contaMinuscoleInStringa(str) {
  let count = 0;
  for (let i = 0; i < str.length; i++) {
    if (str[i] === str[i].toLowerCase() && str[i] !== str[i].toUpperCase()) {
      count++;
    }
  }
  return count;
}

const maiuscoleStr1 = contaMaiuscoleInStringa(str1);
const maiuscoleStr2 = contaMaiuscoleInStringa(str2);

const minuscoleStr1 = contaMinuscoleInStringa(str1);
const minuscoleStr2 = contaMinuscoleInStringa(str2);
