<?php
    include('./views/header.html');
    include('./views/content.html');
    include('./database/database.php');

    if(isset($_POST['inserir'])) {
        $nome = $_POST['produto'];
        $cor = $_POST['cor'];

        $sql = $pdo->prepare("INSERT INTO `produtos` VALUES (null,?,?)");

        $sql->execute([$nome, $cor]);
    }

    if(isset($_POST['inserir'])) {
        $preco = $_POST['preco'];

        $sql = $pdo->prepare("INSERT INTO `precos` VALUES (null,?)");

        $sql->execute([$preco]);
    }

    include('./views/footer.html');
?>