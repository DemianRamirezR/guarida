<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Guarida Freaky | Historietas</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="image/favicon.jpg">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <script src="libraries/f42030a039.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/products.css">

</head>

<body>
    <?php
    include 'php/connect.php';
    ?>

    <!-- header section starts  -->

    <header class="header" id="home">

        <div class="header-1">

            <a href="Index.php" class="logo"> <i class="fas fa-book"></i> La Guarida Freaky </a>

            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"><span></span></a>
                <a href="forms/login.php" id="login-btn" class="fas fa-user"></a>
                <a href="php/user.php" id="login-btn" class="fa-solid fa-right-to-bracket"></a>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="Index.php#home">Inicio</a>
                <a href="Index.php#featured">Destacados</a>
                <a href="Index.php#deal">Oferta Del Dia</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->



    <!-- Banner section -->
    <div class="banner-prod">
        <div class="bannerCapa-prod">
            <div class="banner-cont">
                <h1>Apartado de</h1>
                <h2>Historietas</h2>
            </div>
        </div>
    </div>
    <!-- Banner section ends -->




    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fa-solid fa-angle-up"></a>
        <a href="#featured" class="fa-solid fa-fire"></a>
        <a href="#catalogo" class="fa-solid fa-book-open"></a>
    </nav>

    <!-- bottom navbar ends -->







    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Podria interesarte . . . </span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado11.jpg">
                        <input type="hidden" name="titulo" value="Naruto: Volumen 1">
                        <input type="hidden" name="precio" value="257.74">
                    <div class="image">
                        <img src="image/destacado11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Naruto: Volumen 1</h3>
                        <div class="price">$257.74</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado12.jpg">
                        <input type="hidden" name="titulo" value="Detective conan: Volumen 1">
                        <input type="hidden" name="precio" value="248.59">
                        <div class="image">
                            <img src="image/destacado12.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Detective conan: Volumen 1</h3>
                            <div class="price">$248.59</div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado13.jpg">
                        <input type="hidden" name="titulo" value="Black Jack: Volumen 1">
                        <input type="hidden" name="precio" value="310.82">
                    <div class="image">
                        <img src="image/destacado13.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Black Jack: Volumen 1</h3>
                        <div class="price">$310.82</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado14.jpg">
                        <input type="hidden" name="titulo" value="Doraemon: Volumen 1">
                        <input type="hidden" name="precio" value="310.82">
                    <div class="image">
                        <img src="image/destacado14.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Doraemon: Volumen 1</h3>
                        <div class="price">$310.82</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado15.jpg">
                        <input type="hidden" name="titulo" value="KochiKame: Volumen 1">
                        <input type="hidden" name="precio" value="361.24">
                    <div class="image">
                        <img src="image/destacado15.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>KochiKame: Volumen 1</h3>
                        <div class="price">$361.24</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado16.jpg">
                        <input type="hidden" name="titulo" value="Demon Slayer: Volumen 1">
                        <input type="hidden" name="precio" value="276.16">
                    <div class="image">
                        <img src="image/destacado16.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Demon Slayer: Volumen 1</h3>
                        <div class="price">$276.16</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado17.jpg">
                        <input type="hidden" name="titulo" value="Crayon Shinchan">
                        <input type="hidden" name="precio" value="503.76">
                    <div class="image">
                        <img src="image/destacado17.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Crayon Shinchan</h3>
                        <div class="price">$503.76</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado18.jpg">
                        <input type="hidden" name="titulo" value="Tokyo Ghoul: Volumen 1">
                        <input type="hidden" name="precio" value="144.84">
                    <div class="image">
                        <img src="image/destacado18.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Tokyo Ghoul: Volumen 1</h3>
                        <div class="price">$144.84</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado19.jpg">
                        <input type="hidden" name="titulo" value="Bleach: Volumen 1">
                        <input type="hidden" name="precio" value="125.00">
                    <div class="image">
                        <img src="image/destacado19.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Bleach: Volumen 1</h3>
                        <div class="price">$125.00</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado20.jpg">
                        <input type="hidden" name="titulo" value="Gleipnir: Volumen 1">
                        <input type="hidden" name="precio" value="238.68">
                    <div class="image">
                        <img src="image/destacado20.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Gleipnir: Volumen 1</h3>
                        <div class="price">$238.68</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->







    <section>
        <h1 class="heading" id="catalogo"> <span> Catálogo de Historietas:</span> </h1>
    </section>

    <!-- Mangas section starts -->

    <section class="featured" id="featured mangas">
        <h1 class="heading"> <span style="color: var(--cherry);"> Mangas </span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga1.jpg">
                        <input type="hidden" name="titulo" value="My home hero: Volumen 1">
                        <input type="hidden" name="precio" value="350.65">
                    <div class="image">
                        <img src="image/manga1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>My home hero: Volumen 1</h3>
                        <div class="price">$350.65</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga2.jpg">
                        <input type="hidden" name="titulo" value="Dr. Stone: Volumen 1">
                        <input type="hidden" name="precio" value="455.87">
                        <div class="image">
                            <img src="image/manga2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Dr. Stone: Volumen 1</h3>
                            <div class="price">$455.87</div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga3.jpg">
                        <input type="hidden" name="titulo" value="Las vacaciones de Jesús y Buda">
                        <input type="hidden" name="precio" value="310.82">
                    <div class="image">
                        <img src="image/manga3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Las vacaciones de Jesús y Buda</h3>
                        <div class="price">$310.82</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga4.jpg">
                        <input type="hidden" name="titulo" value="One Piece: Volumen 1">
                        <input type="hidden" name="precio" value="310.82">
                    <div class="image">
                        <img src="image/manga4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>One Piece: Volumen 1</h3>
                        <div class="price">$310.82</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga5.jpg">
                        <input type="hidden" name="titulo" value="Saint Seiya: Volumen 1">
                        <input type="hidden" name="precio" value="361.24">
                    <div class="image">
                        <img src="image/manga5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Saint Seiya: Volumen 1</h3>
                        <div class="price">$361.24</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga6.jpg">
                        <input type="hidden" name="titulo" value="Ranma 1/2: Volumen 1">
                        <input type="hidden" name="precio" value="276.16">
                    <div class="image">
                        <img src="image/manga6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Ranma 1/2: Volumen 1</h3>
                        <div class="price">$276.16</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga7.jpg">
                        <input type="hidden" name="titulo" value="Urusei Yatsura: Volumen 1">
                        <input type="hidden" name="precio" value="503.76">
                    <div class="image">
                        <img src="image/manga7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Urusei Yatsura: Volumen 1</h3>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <div class="price">$503.76</div>
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga8.jpg">
                        <input type="hidden" name="titulo" value="Uzumaki (3 en 1 Edicion Deluxe)">
                        <input type="hidden" name="precio" value="532.81">
                    <div class="image">
                        <img src="image/manga8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Uzumaki (3 en 1 Edicion Deluxe)</h3>
                        <div class="price">$532.81</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga9.jpg">
                        <input type="hidden" name="titulo" value="The Boys: Volumen 1">
                        <input type="hidden" name="precio" value="591.82">
                    <div class="image">
                        <img src="image/manga9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Boys: Volumen 1</h3>
                        <div class="price">$591.82</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga10.jpg">
                        <input type="hidden" name="titulo" value="Sailor Moon: Volumen 1">
                        <input type="hidden" name="precio" value="143.84">
                    <div class="image">
                        <img src="image/manga10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Sailor Moon: Volumen 1</h3>
                        <div class="price">$143.84</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga11.jpg">
                        <input type="hidden" name="titulo" value="Jujutsu Kaisen: Volumen 1">
                        <input type="hidden" name="precio" value="165.37">
                    <div class="image">
                        <img src="image/manga11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Jujutsu Kaisen: Volumen 1</h3>
                        <div class="price">$165.37</div>
                        
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga12.jpg">
                        <input type="hidden" name="titulo" value="Kemono Jihen: Volumen 1">
                        <input type="hidden" name="precio" value="353.37">
                    <div class="image">
                        <img src="image/manga12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Kemono Jihen: Volumen 1</h3>
                        <div class="price">$353.37</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/manga13.jpg">
                        <input type="hidden" name="titulo" value="Chainsaw Man: Volumen 1">
                        <input type="hidden" name="precio" value="413.76">
                    <div class="image">
                        <img src="image/manga13.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Chainsaw Man: Volumen 1</h3>
                        <div class="price">$413.76</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </form>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>



    <!-- Mangas section ends -->








    <!-- DC section starts -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span style="color: var(--cherry);"> DC Comics </span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc1.jpg">
                        <input type="hidden" name="titulo" value="Superman: Crisis en tierras infinitas">
                        <input type="hidden" name="precio" value="499.00">
                    <div class="image">
                        <img src="image/Dc1.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Superman: Crisis en tierras infinitas</h3>
                        <div class="price">$499.00</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                    </form>
                </div>


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc2.jpg">
                        <input type="hidden" name="titulo" value="Kingdom Come">
                        <input type="hidden" name="precio" value="3,768.00">
                        <div class="image">
                            <img src="image/Dc2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Kingdom Come</h3>
                            <div class="price">$3,768.00</div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc3.jpg">
                        <input type="hidden" name="titulo" value="Flash: The Return of Barry Allen">
                        <input type="hidden" name="precio" value="356.95">
                    <div class="image">
                        <img src="image/Dc3.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Flash: The Return of Barry Allen.</h3>
                        <div class="price">$356.95</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc4.jpg">
                        <input type="hidden" name="titulo" value="Batman: Endgame Special Edition">
                        <input type="hidden" name="precio" value="59.25">
                    <div class="image">
                        <img src="image/Dc4.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Batman: Endgame Special Edition</h3>
                        <div class="price">$59.25</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc5.jpg">
                        <input type="hidden" name="titulo" value="Whatever Happened To The Man of Tomorrow?">
                        <input type="hidden" name="precio" value="117.51">
                    <div class="image">
                        <img src="image/Dc5.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Whatever Happened To The Man of Tomorrow?</h3>
                        <div class="price">$117.51</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc6.jpg">
                        <input type="hidden" name="titulo" value="Before Watchmen: Rorschach Vol 11">
                        <input type="hidden" name="precio" value="279.00">
                    <div class="image">
                        <img src="image/Dc6.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Before Watchmen: Rorschach Vol 11</h3>
                        <div class="price">$279.00</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc7.jpg">
                        <input type="hidden" name="titulo" value="Wonder Twins: Volumen 1">
                        <input type="hidden" name="precio" value="404.84">
                    <div class="image">
                        <img src="image/Dc7.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Wonder Twins: Volumen 1</h3>
                        <div class="price">$404.84</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc8.jpg">
                        <input type="hidden" name="titulo" value="The Legend of Wonder Woman">
                        <input type="hidden" name="precio" value="488.64">
                    <div class="image">
                        <img src="image/Dc8.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>The Legend of Wonder Woman</h3>
                        <div class="price">$488.64</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc9.jpg">
                        <input type="hidden" name="titulo" value="Liga de la Justicia 4: La Sexta Dimensión">
                        <input type="hidden" name="precio" value="360.99">
                    <div class="image">
                        <img src="image/Dc9.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Liga de la Justicia 4: La Sexta Dimensión</h3>
                        <div class="price">$360.99</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc10.jpg">
                        <input type="hidden" name="titulo" value="Harley Quinn Omnibus 1">
                        <input type="hidden" name="precio" value="1,853.59">
                    <div class="image">
                        <img src="image/Dc10.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Harley Quinn Omnibus 1</h3>
                        <div class="price">$1,853.59</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc11.jpg">
                        <input type="hidden" name="titulo" value="Superman: Red Son">
                        <input type="hidden" name="precio" value="624.57">
                    <div class="image">
                        <img src="image/Dc11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Superman: Red Son</h3>
                        <div class="price">$624.57</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc12.jpg">
                        <input type="hidden" name="titulo" value="Aquaman 1: Unspoken Water">
                        <input type="hidden" name="precio" value="346.11">
                    <div class="image">
                        <img src="image/Dc12.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Aquaman 1: Unspoken Water</h3>
                        <div class="price">$346.11</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/Dc13.jpg">
                        <input type="hidden" name="titulo" value="Injustice Gods Among Us">
                        <input type="hidden" name="precio" value="372.73">
                    <div class="image">
                        <img src="image/Dc13.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Injustice Gods Among Us</h3>
                        <div class="price">$372.73</div>
                        <input type="number" name="cantidad" placeholder="Cantidad">
                        <button class="btn" type="submit">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>



    <!-- DC section ends -->











    <!-- footer section starts  -->

    <section class="footer">

        <div class="credit"> Web creada por <span>Jose Demian Rmz. Rmz.</span> | ¡Todos Los Derechos Reservados! </div>

    </section>

    <!-- footer section ends -->










    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>