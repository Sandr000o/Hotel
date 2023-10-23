<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleMenu.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <script src="https://kit.fontawesome.com/cc9a69383c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="js/js.js"></script>
    <title>Carta</title>
</head>

<body>
    <header class="header" id="navigation-menu">
        <div class="container">
            <nav>
                <a href="#" class="logo"> <img src="image/logo.png" alt=""> </a>

                <ul class="nav-menu">
                    <li> <a href="index.php" class="nav-link">Inicio</a> </li>
                    <li> <a href="#restaurant" class="nav-link">Restobar</a> </li>
                    <li> <a href="#contactanos" class="nav-link">contactanos</a> </li>
                </ul>

                <div class="hambuger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </nav>
        </div>
    </header>

    <section class="home" id="home">
        <div class="head_container">
            <div class="box">
                <div class="text">
                    <h1>Hotel Colonial</h1>
                    <p>Disfruta y relájate con los lujosos servicios que te ofrecemos, incluyendo jacuzzi con
                        hidromasaje, sauna,
                        habitaciones de lujo, una elegante barra para degustar una amplia variedad de tragos exquisitos,
                        y nuestro
                        exclusivo restaurante que ofrece una selección de platillos exquisitos y deliciosos. </p>
                   
                </div>
            </div>
            <div class="image">
                <img src="image/chifa.jpg" class="slide">
            </div>
            <div class="image_item">
                <img src="image/chaufa.avif" alt="" class="slide active" onclick="img('image/chaufa.avif')">
                <img src="image/barra.jpg" alt="" class="slide" onclick="img('image/barra.jpg')">
                <img src="image/tragos.jpg" alt="" class="slide" onclick="img('image/tragos.jpg')">
                <img src="image/fusion.jpg" alt="" class="slide" onclick="img('image/fusion.jpg')">
            </div>
        </div>
    </section>

    <div class="wraper">
        <div class="search-container">
            <input type="search" id="search-input" placeholder="Busque lo que desea..">
            <button id="search">Buscar</button>
        </div>


        <div id="buttons">
            <button class="button-value" onclick="filterProduct('todo')">Todo</button>
            <button class="button-value" onclick="filterProduct('menu')">Menú</button>
            <button class="button-value" onclick="filterProduct('tragos')">Tragos</button>
            <button class="button-value" onclick="filterProduct('bebidas')">Bebidas</button>
            <button class="button-value" onclick="filterProduct('jugos')">Jugos</button>
        </div>
        <div id="products"></div>
    </div>



    <footer>
        <div class="container grid top">
            <div class="box">
                <img
                    src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/48/000000/external-hotel-hotel-services-and-city-elements-flatart-icons-flat-flatarticons-1.png" />
                <p> Ofrecemos una amplia variedad de métodos de pago, para que solo te enofoques en disfrutar tu estadía
                </p>
                <br>
                <p>Métodos de pago aceptados</p>
                <div class="payment grid">
                    <img src="https://img.icons8.com/color/48/000000/visa.png" />
                    <img src="https://img.icons8.com/color/48/000000/mastercard.png" />
                    <img src="https://img.icons8.com/color-glass/48/000000/paypal.png" />
                    <img src="/image/yape.png" alt="">
                </div>
            </div>

            <div class="box">
                <h3>Noticias Recientes</h3>

                <ul>
                    <li>Disfruta de platillos exquisitos</li>
                    <li>Relajate en las sesiones de acupuntura</li>
                    <li>Disfruta de los partidos de fútbol</li>
                    <li>Relájate en el sauna con cámara de vapor y seca</li>
                </ul>
            </div>



            <div class="box" id="contactanos">
                <h3>Contáctanos</h3>

                <ul>
                    <li>Av. Óscar R. Benavides 5342, Bellavista 07006</li>
                    <li><i class="far fa-envelope"></i> hotelsauna_colonial@hotmail.com </li>
                    <li><i class="fa-solid fa-phone" style="color: #ffffff;"></i></i> (01)6486642 </li>
                    <li><i class="fa-solid fa-mobile" style="color: #ffffff;"></i></i> 970 193 282 </li>
                    <li><i class="far fa-comments"></i> 24/ 7 Servicio al cliente </li>
                </ul>
            </div>
        </div>
    </footer>

</body>

</html>