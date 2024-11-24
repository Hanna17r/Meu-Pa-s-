document.getElementById('countryForm').addEventListener('submit', function(event) {
    const countryInput = document.getElementById('country').value;
    if (!countryInput.trim()) {
        alert('Por favor, insira um nome de país.');
        event.preventDefault(); // Previne o envio do formulário
    }
});
