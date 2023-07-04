var numerosInput = document.getElementById("numeros_nls");

numerosInput.addEventListener("input", function() {
  if (numerosInput.value.length > 11) {
    numerosInput.value = numerosInput.value.slice(0, 11);
  }
});