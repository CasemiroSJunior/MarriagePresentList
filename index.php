<?php
include 'db/products.php';
$produtos = new productsQuery();
$produtos->createConnection();
$listaProdutos = $produtos->listProducts();
?>
<script>
  alert(<?php echo $listaProdutos ?>);
</script>
<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="" />
  <meta name="generator" content="Hugo 0.122.0" />
  <title>Presentes Ana Beatriz & Casemiro</title>

  <link
    rel="canonical"
    href="https://getbootstrap.com/docs/5.3/examples/cover/" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@docsearch/css@3" />

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet" />

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

      h1 {
        font-size: 52px;
      }

      h2 {
        font-size: 86px;
      }
    }

    @media (max-width: 767px) {
      h1 {
        font-size: 32px;
      }

      h2 {
        font-size: 48px;
      }
    }

    .product-image {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: #F5DEB3;
      border: solid rgba(0, 0, 0, 0.15);
      border-width: 1px 0;
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -0.125em;
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

    .btn-light,
    .btn-light:hover,
    .btn-light:focus {
      color: #333;
      text-shadow: none;
      /* Prevent inheritance from `body` */
    }

    .cover-container {
      max-width: 42em;
    }

    .nav-masthead .nav-link {
      color: rgba(255, 255, 255, .5);
      border-bottom: .25rem solid transparent;
    }

    .nav-masthead .nav-link:hover,
    .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
    }

    .nav-masthead .nav-link+.nav-link {
      margin-left: 1rem;
    }

    .nav-masthead .active {
      color: #fff;
      border-bottom-color: #fff;
    }

    body::before,
    body::after {
      content: "";
      position: fixed;
      top: 0;
      width: 50%;
      height: 100%;
      background-repeat: repeat-y;
      background-size: 100%;
      z-index: -1;
    }


    .frontImg {
      width: 25%;
      height: 25%;
    }

    @media screen and (max-width: 768px) {
      .frontImg {
        width: 25%;
        height: 25%;
      }
    }


    body::before {
      left: 10;
      background-image: url('./assets/Lflower.png');
    }

    body::after {
      right: 0%;
      background-image: url('./assets/Rflower.png');
    }
  </style>

</head>

<body class="d-flex text-center" style="background-color: #F5DEB3 !important;">

  <div class="d-flex w-100 h-100 p-5 mx-auto flex-column">
    <header class="mb-auto">
      <div>
        <h1 class="float-md-middle mb-0" style="font-family: 'Great Vibes', cursive; ">
          Presentes
        </h1>
        <h2 class="float-md-middle mb-0" style="font-family: 'Great Vibes', cursive; ">
          Ana Beatriz &nbsp;&nbsp; & &nbsp;&nbsp; Casemiro
        </h2>
        <style>

        </style>
      </div>
      <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    </header>

    <main class="px-3">
      <div class="d-flex justify-content-center align-content-center">
        <img src="./assets/casamento2.jpg" class="m-2 frontImg" style=" border: 2px solid #000;" alt="..." />
        <img src="./assets/casamento3.jpg" class="m-2 frontImg" style="border: 2px solid #000;" alt="..." />
        <img src="./assets/casamento1.jpg" class="m-2 frontImg" style="border: 2px solid #000;" alt="..." />
      </div>
      <div class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php foreach ($listaProdutos as $items) { ?>
              <div class="col" id=<?php echo $items["id"] ?>>
                <div class="card shadow-sm">
                  <img class="product-image" src="<?php echo $items['image'] ?>" alt="..." />
                  <div class="card-body">
                    <p class="card-text">
                      <?php echo $items["nome"] ?>
                    </p>
                    <div
                      class="d-flex justify-content-center align-items-center">
                      <div class="btn-group p-2 d-flex ">
                        <a
                          href="<?php echo $items["link"] ?>"
                          target="_blank"
                          class="btn btn-md btn-primary m-2">
                          Sugestão de site
                        </a>
                        <form action="presentear.php" method="post">
                          <input type="hidden" name="id" value="<?php echo $items['id']; ?>">
                          <?php if ($items['claimed'] == 1) { ?>
                            <button style="height: 100%; width: 100%;" disabled class="btn btn-md btn-danger py-2 mt-2">
                              Presenteado por <?php echo $items['firstname'] . " " . $items['lastname']; ?>
                            </button>
                          <?php } else { ?>
                            <button style="height: 100%; width: 100%;" type="submit" class="btn btn-md btn-success py-2 mt-2">
                              Presentear
                            </button>
                          <?php
                          }
                          ?>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            <div class="col">
              <div class="card shadow-sm">
                <a href="add_presente.php" class="btn btn-md" style="display: block; height: 100%; text-align: center; background-color: white; border-radius: 0; color: black;">
                  <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
                    <img src="./assets/plus-circle.svg" alt="Add">
                  </div>
                  <div class="card-body text-center">
                    <h4 class="card-text">
                      Outro presente
                    </h4>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </main>



  <footer class="mt-auto text-white-50">
  </footer>
  </div>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>