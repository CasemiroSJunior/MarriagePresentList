<?php
    include 'db/products.php';
    $products = new productsQuery();
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $link = $_POST['link'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    if ($_POST['claimed'] == "on") {
        $claimed = 1;
    } else {
        $claimed = 0;
    }
    $image = "https://via.placeholder.com/150";
    $products->createProduct($nome, $descricao, $image, $link, $claimed, $firstname, $lastname);
    if ($products) {
    ?>
        <script>
            alert('Presente cadastrado com sucesso!');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Erro ao cadastrar presente!");
        </script>
    <?php
    }
    header('Location: index.php');
?>