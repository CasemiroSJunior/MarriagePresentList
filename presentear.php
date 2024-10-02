<?php
include_once 'db/products.php';
if (!isset($_POST['id']) || $_SERVER['REQUEST_METHOD'] != 'POST') {
  header('Location: index.php');
}
$products = new productsQuery();
$product = $products->readProduct($_POST['id']);
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    <link href="./css/presentear.css" rel="stylesheet">
  </head>

  <body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
      <form action="confirmarPresente.php" method="post">

        <h1 class="h3 mb-3 fw-normal">Você irá garantir o seguinte produto: </h1>
        <h2 class="h4 mb-3 fw-normal"><?php echo $product['nome'] ?></h2>
        <img class="mb-4" src="<?php echo $product['image'] ?>" alt="" width="100%" height="100%">
        <p class="text-muted">Preencha os campos abaixo para selecionar o presente.</p>

        <div class="form-floating">
          <input type="hidden" id="id" name="id" value=<?php echo $product['id'] ?>>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" name="firstname" id="firstname" required>
          <label for="firstname">Nome: </label>
        </div>
        <select class="form-select mt-2" name="lastname" id="lastname" aria-label="Conhecido do(a)" required>
            <option value="Noivo">Noivo</option>
            <option value="Noiva">Noiva</option>
        </select>

        <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Selecionar presente</button>
      </form>
    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>