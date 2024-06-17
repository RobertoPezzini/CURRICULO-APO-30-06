<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $education = htmlspecialchars($_POST['education']);
    $experiences = $_POST['experience'];
    $references = $_POST['references'];
} else {
    echo "Método de solicitação inválido ou não suportado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo $name; ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .cv-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
        .section p, .section li {
            padding-left: 15px;
        }
    </style>
</head>
<body>
    <div class="cv-container">
        <h1>Currículo de <?php echo $name; ?></h1>

        <div class="section">
            <h2>Informações Pessoais</h2>
            <p><strong>Nome:</strong> <?php echo $name; ?></p>
            <p><strong>Email:</strong> <?php echo $email; ?></p>
            <p><strong>Telefone:</strong> <?php echo $phone; ?></p>
            <p><strong>Endereço:</strong> <?php echo $address; ?></p>
        </div>

        <div class="section">
            <h2>Educação</h2>
            <p><?php echo nl2br($education); ?></p>
        </div>

        <div class="section">
            <h2>Experiência Profissional</h2>
            <ul>
                <?php foreach ($experiences as $experience) {
                    echo "<li>" . htmlspecialchars($experience) . "</li>";
                } ?>
            </ul>
        </div>

        <div class="section">
            <h2>Referências Pessoais</h2>
            <ul>
                <?php foreach ($references as $reference) {
                    echo "<li>" . htmlspecialchars($reference) . "</li>";
                } ?>
            </ul>
        </div>
    </div>
</body>
</html>