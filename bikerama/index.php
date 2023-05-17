<?php
session_start();
if (isset($_GET['submit'])) {
    session_destroy();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bikeram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <link rel="stylesheet" href="" />
</head>

<body>
    <div class="container">
        <header>
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                    <img src="https://wiki.sj.ifsc.edu.br/images/2/2e/Sao_jose_horizontal_marca2015_PNG.png" alt="ifsc" width="100px" />
                </div>
                <div class="col-4 pt-1">
                    <a class="link-secondary" href="#bike">Bikerama</a>
                </div>
                <div class="col-4 pt-1">
                    <form class="d-flex" role="search">
                        <div id="nome"></div>
                        <?php

                        if (isset($_SESSION["user"])) {
                            echo $_SESSION["user"];
                            echo "<form action='' method='GET'>
              
              <button type='submit' class='btn btn-danger' name='submit'>SAIR</button>
              </form>
              ";
                        } else
                            echo "<a href='php/index.php' class='btn btn-outline-success'> LOGIN</a>"; ?>

                    </form>
                </div>
            </div>
        </header>
        <hr />
        <div class="nav-scroller py-1 mb-2">
            <ul class="nav nav-underline flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ranking.html">Ranking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tecnologia</a>
                </li>
            </ul>
        </div>
    </div>
    <main class="container">
        <div class="p-4 p-md-5 mb-5 text-white rounded bg-dark">
            <!--Slide ou carrosel-->
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <h1 class="text-center">Pagina um</h1>
                    </div>
                    <div class="carousel-item">
                        <h1 class="text-center">Pagina dois</h1>
                    </div>
                    <div class="carousel-item">
                        <h1 class="text-center">Pagina três</h1>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row md-2">
            <div class="col-md-6">
                <div class="card mb-6">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary">
                                    janilson</strong>
                                <h3 class="mb-0"><b>Campus</b></h3>
                                <p class="card-text mb-auto">
                                    Trabalho desenvolvido no campus de Chapecó, através de
                                    projeto de extensão
                                </p>
                                <a href="#" class="stretched-link">Continue Lendo</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="https://www.ifsc.edu.br/documents/23504/23634/Foto_C%C3%A2mpusChapec%C3%B3_2017.jpg/70658386-f096-6cff-e453-d76b289be4f8?t=1504298890892" class="img-fluid rounded-start" alt="..." style="border-radius: 5px" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-6">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary">
                                    Games</strong>
                                <h3 class="mb-0"><b>Outra Coisa</b></h3>
                                <p class="card-text mb-auto">
                                    This is a wider card with supporting text below as a natural
                                    lead-in to additional content. .
                                </p>
                                <a href="#" class="stretched-link">Continue Lendo</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="https://static.amazonasbike.com.br/public/amazonasbike/imagens/produtos/bicicleta-amazonas-max-unissex-aro-20-1395-1836.png" class="img-fluid rounded-start" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3">
            <div class="col-md-8 p-4">
                <article class="blog-post">
                    <h2 class="blog-post-title" id="post01">Post 01</h2>
                    <p class="blog-post-meta">MArço, 2023 <a href="#">Link</a></p>
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        quis elit tellus. Nullam pretium sed quam facilisis commodo. Morbi
                        quis arcu quis lorem sollicitudin aliquet at in eros. Nunc a neque
                        at elit semper sagittis id vel magna. Fusce nisi arcu, pharetra
                        eget sagittis et, pellentesque sit amet mauris. Fusce tempus,
                        libero et tempus elementum, turpis nisl consectetur ipsum, vitae
                        eleifend nibh lectus dignissim sapien. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos. Donec faucibus velit eget dolor bibendum dictum. Donec
                        viverra ex a erat finibus, nec placerat sem pellentesque.
                        Phasellus mattis turpis mauris, eget maximus turpis consequat non.
                        Nullam nec ante nec ipsum ullamcorper posuere.
                    </p>
                    <p style="text-align: justify">
                        Aliquam erat volutpat. Duis a leo non neque elementum congue. Duis
                        nec velit neque. Quisque consequat imperdiet mi et consequat.
                        Maecenas et cursus quam, sed ornare est. Praesent viverra
                        porttitor augue, dignissim imperdiet risus. Suspendisse dapibus
                        facilisis dolor, ut convallis nibh varius et. Vestibulum dui sem,
                        blandit id augue a, congue bibendum turpis. Nulla dignissim velit
                        eu nulla tincidunt mollis. Nulla facilisi. Nam vel elementum
                        turpis, a scelerisque ipsum. Orci varius natoque penatibus et
                        magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </article>
                <article class="blog-post">
                    <h2 class="blog-post-title" id="post02">Post 02</h2>
                    <p class="blog-post-meta">MArço, 2023 <a href="#">Link</a></p>
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        quis elit tellus. Nullam pretium sed quam facilisis commodo. Morbi
                        quis arcu quis lorem sollicitudin aliquet at in eros. Nunc a neque
                        at elit semper sagittis id vel magna. Fusce nisi arcu, pharetra
                        eget sagittis et, pellentesque sit amet mauris. Fusce tempus,
                        libero et tempus elementum, turpis nisl consectetur ipsum, vitae
                        eleifend nibh lectus dignissim sapien. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos. Donec faucibus velit eget dolor bibendum dictum. Donec
                        viverra ex a erat finibus, nec placerat sem pellentesque.
                        Phasellus mattis turpis mauris, eget maximus turpis consequat non.
                        Nullam nec ante nec ipsum ullamcorper posuere.
                    </p>
                    <p style="text-align: justify">
                        Aliquam erat volutpat. Duis a leo non neque elementum congue. Duis
                        nec velit neque. Quisque consequat imperdiet mi et consequat.
                        Maecenas et cursus quam, sed ornare est. Praesent viverra
                        porttitor augue, dignissim imperdiet risus. Suspendisse dapibus
                        facilisis dolor, ut convallis nibh varius et. Vestibulum dui sem,
                        blandit id augue a, congue bibendum turpis. Nulla dignissim velit
                        eu nulla tincidunt mollis. Nulla facilisi. Nam vel elementum
                        turpis, a scelerisque ipsum. Orci varius natoque penatibus et
                        magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </article>
                <article class="blog-post">
                    <h2 class="blog-post-title" id="post03">Post 03</h2>
                    <p class="blog-post-meta">MArço, 2023 <a href="#">Link</a></p>
                    <p style="text-align: justify">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                        quis elit tellus. Nullam pretium sed quam facilisis commodo. Morbi
                        quis arcu quis lorem sollicitudin aliquet at in eros. Nunc a neque
                        at elit semper sagittis id vel magna. Fusce nisi arcu, pharetra
                        eget sagittis et, pellentesque sit amet mauris. Fusce tempus,
                        libero et tempus elementum, turpis nisl consectetur ipsum, vitae
                        eleifend nibh lectus dignissim sapien. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos
                        himenaeos. Donec faucibus velit eget dolor bibendum dictum. Donec
                        viverra ex a erat finibus, nec placerat sem pellentesque.
                        Phasellus mattis turpis mauris, eget maximus turpis consequat non.
                        Nullam nec ante nec ipsum ullamcorper posuere.
                    </p>
                    <p style="text-align: justify">
                        Aliquam erat volutpat. Duis a leo non neque elementum congue. Duis
                        nec velit neque. Quisque consequat imperdiet mi et consequat.
                        Maecenas et cursus quam, sed ornare est. Praesent viverra
                        porttitor augue, dignissim imperdiet risus. Suspendisse dapibus
                        facilisis dolor, ut convallis nibh varius et. Vestibulum dui sem,
                        blandit id augue a, congue bibendum turpis. Nulla dignissim velit
                        eu nulla tincidunt mollis. Nulla facilisi. Nam vel elementum
                        turpis, a scelerisque ipsum. Orci varius natoque penatibus et
                        magnis dis parturient montes, nascetur ridiculus mus.
                    </p>
                </article>
            </div>
            <div class="col-md-4 p-4">
                <div class="position-sticky" style="top: 2rem">
                    <div class="p4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">Sobre</h4>
                        <p class="mb-0"><a href="#post01"> Post 01</a></p>
                        <p class="mb-0"><a href="#post02"> Post 02</a></p>
                        <p class="mb-0"><a href="#post03"> Post 03</a></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div id="foot">
        <footer>
            <div class="align-items-center" id="foot2">
                Instituto Federal de Educação, Ciência e Tecnologia de Santa Catarina
                - IFSC
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" src="sript.js"></script>
</body>

</html>