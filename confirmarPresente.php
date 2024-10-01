<?php
include_once 'db/products.php';
$products = new productsQuery();
print_r($_POST);
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$products->claimProduct($id, $firstname, $lastname);

if ($products) {
?>
    <script>
        alert('Presente confirmado com sucesso!');
    </script>
<?php
} else {
?>
    <script>
        alert("Erro ao confirmar presente!");
    </script>
<?php
}
header('Location: index.php');
?>
