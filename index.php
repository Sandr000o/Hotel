<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <title>Hotel Website</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <script src="https://kit.fontawesome.com/cc9a69383c.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
    integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudfla  re.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>

  

</head>

<body>
  <header class="header" id="navigation-menu">
    <div class="container">
      <nav>
        <a href="#" class="logo"> <img src="image/logo.png" alt=""> </a>

        <ul class="nav-menu">
          <li> <a href="#home" class="nav-link">Inicio</a> </li>
          <li> <a href="#about" class="nav-link">Nosotros</a> </li>
          <li> <a href="#rooms" class="nav-link">Habitaciones</a> </li>
          <li> <a href="menu.php" class="nav-link">Restobar</a> </li>
          <li> <a href="#gallery" class="nav-link">Galeria</a> </li>
          <li> <a href="#contactanos" class="nav-link">Contactanos</a> </li>
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
          <p>Disfruta y relájate con los lujosos servicios que te ofrecemos, incluyendo jacuzzi con hidromasaje, sauna,
            habitaciones de lujo, una elegante barra para degustar una amplia variedad de tragos exquisitos, y nuestro
            exclusivo restaurante que ofrece una selección de platillos exquisitos y deliciosos. </p>
        
        </div>
      </div>
      <div class="image">
        <img src="image/home1.jpg" class="slide">
      </div>
      <div class="image_item">
        <img src="image/home1.jpg" alt="" class="slide active" onclick="img('image/home1.jpg')">
        <img src="image/home2.jpg" alt="" class="slide" onclick="img('image/home2.jpg')">
        <img src="image/home3.jpg" alt="" class="slide" onclick="img('image/home3.jpg')">
        <img src="image/home4.jpg" alt="" class="slide" onclick="img('image/home4.jpg')">
      </div>
    </div>
  </section>

  <form method="post" action="consulta.php">
    <section class="book">
      <div class="container flex">
        <div class="input grid">
          <div class="box">
            <label>Check-in:</label>
            <input type="date" name="check_in"  placeholder="Check-in-Date">
          </div>
          <div class="box">
            <label>Check-out:</label>
            <input type="date" name="check_out" placeholder="Check-out-Date">
          </div>
          <div class="box">
            <label>Adultos:</label> <br>
            <input type="number" placeholder="0">
          </div>
          <div class="box">
            <label>Niños:</label> <br>
            <input type="number" placeholder="0">
          </div>
        </div>
        <div class="search">
          <input type="submit" value="BUSCAR">
        </div>
      </div>
    </section>
  </form>
 
  <section class="about top" id="about">
    <div class="container flex">
      <div class="left">
        <div class="img">
          <img src="image/fachada.png" alt="" class="image1">
          <!--   -->
        </div>
      </div>
      <div class="right">
        <div class="heading">
          <h5>DISFRUTA UNA EXPERIENCIA DE LUJO</h5>
          <h2>Bienvenido al Hotel Colonial</h2>
          <p>Sumérgete en un mundo de indulgencia y serenidad con los servicios de lujo que hemos diseñado
            exclusivamente para ti. Desde la relajante experiencia del jacuzzi con hidromasaje que acaricia suavemente
            tus sentidos, hasta la exquisita calidez de nuestra sauna que te invita a una profunda relajación, cada
            detalle está meticulosamente elaborado para ofrecerte un deleite inigualable.</p>

          <!-- <button class="btn1">READ MORE</button> -->
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper top">
    <div class="container">
      <div class="text">
        <h2>NUESTROS SERVICIOS</h2>
        <p>Disfruta y relájate con los lujosos servicios que te ofrecemos, incluyendo jacuzzi con hidromasaje, sauna,
          habitaciones de lujo, una elegante barra para degustar una amplia variedad de tragos exquisitos, y nuestro
          exclusivo restaurante que ofrece una selección de platillos exquisitos y deliciosos. </p>

        <div class="content">
          <div class="box flex">
            <i class="fas fa-swimming-pool"></i>
            <span>Pisicina</span>
          </div>

          <div class="box flex">
            <i class="fas fa-spa"></i>
            <span>Spa y Masajes</span>
          </div>

          <div class="box flex">
            <i class="fa-solid fa-wine-glass-empty"></i>
            <span>Barrra de tragos</span>
          </div>
          <div class="box flex">
            <i class="fa-solid fa-couch"></i>
            <span>Sala de descanso</span>
          </div>
          <div class="box flex">
            <img src="image/jacuzzi.png" alt="">
            <span>Jacuzzi con hidromasajes</span>
          </div>
          <div class="box flex">
            <img src="image/restaurant.png" alt="">
            <span>Restaurant (Chifa)</span>
          </div>


        </div>
      </div>
    </div>
  </section>
  <section class="room top" id="room">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>RELÁJATE Y DISFRUTA</h5>
          <h2>Tipos de habitaciones</h2>
        </div>
        
      </div>

      <div class="content grid">
        <div class="box">
          <div class="img">
            <img src="image/h1.jpg" alt="">
          </div>
          <div class="text">
            <h3>Háb. Matrimonial</h3>
            <p> <span>s/</span>120 <span>/por noche</span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/h2.jpg" alt="">
          </div>
          <div class="text">
            <h3>Háb. con Jacuzzi</h3>
            <p> <span>s/</span>180 <span>/por noche</span> </p>
          </div>
        </div>
        <div class="box">
          <div class="img">
            <img src="image/h3.jpg" alt="">
          </div>
          <div class="text">
            <h3>Háb. con Sauna</h3>
            <p> <span>s/</span>250 <span>/por noche</span> </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="wrapper wrapper2 top">
    <div class="container">
      <div class="text">
        <div class="heading">
          <h2>Invitación para disfrutar placenteramente</h2>
        </div>

        <div class="para">
          <p>¡Bienvenidos a nuestro acogedor hotel! Estamos encantados de tenerlos como nuestros huéspedes. Aquí podrán
            disfrutar de un ambiente tranquilo y confortable, acompañado de un servicio excepcional. Nuestro personal
            está listo para asegurarse de que su estadía sea inolvidable. ¡Esperamos que disfruten al máximo de su
            tiempo con nosotros! </p>

          <div class="box flex">
            <div class="img">
              <img src="image/pedro.jpg" alt="">
            </div>
            <div class="name">
              <h5>Pedro</h5>
              <h5>Chavez Tafur</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="restaurant top" id="restaurant">
    <div class="container flex">
      <div class="left">
        <img src="image/restobar.jpg" alt="">
      </div>
      <div class="right">
        <div class="text">
          <h2>RESTOBAR</h2>
          <p> Restobar con una amplia selección de tragos artesanales, refrescantes jugos naturales y exquisito menú
            oriental.</p>
        </div>
        <div class="accordionWrapper">
          <div class="accordionItem open">
            <h2 class="accordionIHeading">Menú Oriental</h2>
            <div class="accordionItemContent">
              <p>Disfruta del menú de nuestro restaurante, con una amplia selección de platos orientales exquisitos,
                desde el clásico Chaufa y Tallarín con Pollo hasta platos más especializados como el Kamlu Wantán y
                Langostino Saltado con Verduras. ¡Esperamos que disfrutes de una experiencia culinaria inolvidable con
                nosotros!
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Tragos</h2>
            <div class="accordionItemContent">
              <p>
                Contamos con una emocionante selección de cócteles, que incluye el clásico Daiquiri Frozen y la
                refrescante Piña Colada, así como el estimulante Machu Picchu y la deliciosa Algarrobina. También
                ofrecemos una variedad de opciones, desde el famoso Pisco Sour hasta el exótico Caipiriña y el clásico
                Whisky on the Rocks. ¡Sumérgete en la experiencia de nuestros exclusivos cócteles y disfruta de una
                explosión de sabores durante tu visita!
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Bebidas</h2>
            <div class="accordionItemContent">
              <p>
                Contamos con una selección de bebidas, desde cervezas como Pilsen y Cusqueña en diferentes
                variedades, hasta opciones internacionales como Corona Extra, Budweiser y Stella Artois. También
                ofrecemos cervezas artesanales como Barbarian Quinua y Barbarian Trigo. Además, contamos con una
                variedad de refrescos como Inca Kola, Coca-Cola y Fanta, así como una selección de aguas y bebidas
                energéticas como Red Bull y Powerade. Disfruta de nuestra amplia gama de bebidas durante tu estancia con
                nosotros.
              </p>
            </div>
          </div>
          <div class="accordionItem close">
            <h2 class="accordionIHeading">Jugos</h2>
            <div class="accordionItemContent">
              <p>Contamos con una amplia variedad de jugos naturales y deliciosos, desde opciones
                refrescantes como el Jugo de Papaya y Limonada hasta sabores más exóticos como el Jugo de Chirimoya y
                Guanábana. También ofrecemos una gama de jugos especiales con leche, como el Jugo de Arándano y el Jugo
                de Lúcuma, que seguramente te encantarán. ¡Disfruta de nuestra refrescante selección de jugos durante tu
                estancia!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <section class="gallary mtop " id="gallary">
    <div class="container">
      <div class="heading_top flex1">
        <div class="heading">
          <h5>GALERÍA DE FOTOS</h5>
          <h2>Fotos de las instalaciones</h2>
        </div>
       
      </div>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="image/g1.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g2.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g3.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g4.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g5.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g6.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g7.jpg" alt="">
        </div>
        <div class="item">
          <img src="image/g8.jpg" alt="">
        </div>
      </div>

    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $('.owl-carousel').owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    })
  </script>



  <section class="map top">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.875639053849!2d-77.08781259999999!3d-12.052076600000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c94f01a0b1ad%3A0x2b427006bb97ea0e!2sHotel%20Colonial!5e0!3m2!1ses-419!2spe!4v1697223218429!5m2!1ses-419!2spe"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>

  </section>


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



      <div class="box">
        <h3>Contáctanos</h3>

        <ul>
          <li>Av. Óscar R. Benavides 5342, Bellavista 07006</li>
          <li><i class="far fa-envelope"></i> hotelsauna_colonial@hotmail.com </li>
          <li><i class="fa-solid fa-phone" style="color: #ffffff;"></i></i>  (01)6486642 </li>
          <li><i class="fa-solid fa-mobile" style="color: #ffffff;"></i></i>  970 193 282 </li>
          <li><i class="far fa-comments"></i>  24/ 7 Servicio al cliente </li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="js/js.js"></script>
</body>

</html>