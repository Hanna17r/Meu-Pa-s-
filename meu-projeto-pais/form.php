<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar País</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"> <!-- CSS customizado -->
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Informe o nome de um país</h1>
        <form id="countryForm" action="process.php" method="GET" class="mt-3">
            <div class="mb-3">
                <label for="country" class="form-label">País:</label>
                <input type="text" class="form-control" id="country" name="country" required>
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
