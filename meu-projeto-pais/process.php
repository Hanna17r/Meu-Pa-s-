<?php
if (isset($_GET['country'])) {
    $country = urlencode($_GET['country']);
    $url = "https://restcountries.com/v3.1/name/$country?fullText=true";

    // Requisição à API REST Countries
    $response = file_get_contents($url);
    if ($response !== false) {
        $data = json_decode($response, true);
        if (isset($data[0])) {
            $countryInfo = $data[0];
            $name = $countryInfo['name']['common'];
            $capital = $countryInfo['capital'][0] ?? 'Não disponível';
            $population = $countryInfo['population'];
            $area = $countryInfo['area'];
            $flag = $countryInfo['flags']['png'];
        } else {
            $error = "País não encontrado.";
        }
    } else {
        $error = "Erro ao buscar informações do país.";
    }
} else {
    $error = "Nenhum país informado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"> <!-- CSS customizado -->
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Resultado da Consulta</h1>
        <?php if (isset($error)): ?>
            <p class="alert alert-danger"><?php echo $error; ?></p>
        <?php else: ?>
            <h2>Informações sobre <?php echo $name; ?></h2>
            <p><strong>Capital:</strong> <?php echo $capital; ?></p>
            <p><strong>População:</strong> <?php echo number_format($population); ?></p>
            <p><strong>Área:</strong> <?php echo number_format($area); ?> km²</p>
            <p><img src="<?php echo $flag; ?>" alt="Bandeira de <?php echo $name; ?>" width="100"></p>
            <p><a href="form.php" class="btn btn-secondary">Voltar ao formulário</a></p>
        <?php endif; ?>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>
