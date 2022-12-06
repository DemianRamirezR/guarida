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
    include 'php/global.php';
    include 'php/connect.php';
    ?>

    <!-- header section starts  -->

    <header class="header" id="home">

        <div class="header-1">

            <a href="Index.php" class="logo"> <i class="fas fa-book"></i> La Guarida Freaky </a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="Buscar Historietas..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

            <div class="icons">
                <div id="search-btn" class="fas fa-search"></div>
                <a href="#" class="fas fa-shopping-cart"><span>(0)</span></a>
                <a href="forms/login.php" id="login-btn" class="fas fa-user"></a>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="Index.php#home">Inicio</a>
                <a href="Index.php#featured">Destacados</a>
                <a href="Index.php#Novedades">Novedades</a>
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
        <a href="#home" class="fas fa-home"></a>
        <a href="#featured" class="fa-solid fa-fire"></a>
        <a href="#Novedades" class="fa-solid fa-book-medical"></a>
    </nav>

    <!-- bottom navbar ends -->







    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Podria interesarte tambien...</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado11.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Naruto: Volumen 1</h3>
                        <div class="price">$</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>


                <div class="swiper-slide box">
                    <form action="">
                        <input type="hidden" name="titulo" id="titulo" value="">
                        <input type="hidden" name="precio" id="precio" value="">
                        <input type="hidden" name="cantidad" id="cantidad" value="">
                        <input type="hidden" name="" id="">
                        <div class="image">
                            <img src="image/destacado12.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Detective conan: Volumen 1</h3>
                            <div class="price">$455.87</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado13.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Black Jack: Volumen 1</h3>
                        <div class="price">$310.82</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado14.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Doraemon: Volumen 1</h3>
                        <div class="price">$310.82</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado15.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>KochiKame: Volumen 1</h3>
                        <div class="price">$361.24</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado16.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Demon Slayer: Volumen 1</h3>
                        <div class="price">$276.16</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado17.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Crayon Shinchan</h3>
                        <div class="price">$503.76</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado18.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Tokyo Ghoul: Volumen 1</h3>
                        <div class="price">$</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado19.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Bleach: Volumen 1</h3>
                        <div class="price">$</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <div class="image">
                        <img src="image/destacado20.jpg" alt="">
                    </div>
                    <div class="content">
                        <h3>Gleipnir: Volumen 1</h3>
                        <div class="price">$</div>
                        <button class="btn" type="submit" value="Agregar">
                            Añadir al carrito
                        </button>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- featured section ends -->







    <section>
        <h1 class="heading"> <span> Catálogo de Historietas:</span> </h1>
        <h1 class="heading"> <span style="color: var(--cherry);"> Mangas </span> </h1>
    </section>

    <!-- Mangas section starts -->

        <section class="featured" id="featured">
        
            <div class="swiper featured-slider">
        
                <div class="swiper-wrapper">
        
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/manga1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>My home hero: Volumen 1</h3>
                            <div class="price">$350.65</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
        
                    <div class="swiper-slide box">
                        <form action="">
                            <input type="hidden" name="titulo" id="titulo" value="">
                            <input type="hidden" name="precio" id="precio" value="">
                            <input type="hidden" name="cantidad" id="cantidad" value="">
                            <input type="hidden" name="" id="">
                            <div class="image">
                                <img src="image/manga2.jpg" alt="">
                            </div>
                            <div class="content">
                                <h3>Dr. Stone: Volumen 1</h3>
                                <div class="price">$455.87</div>
                                <button class="btn" type="submit" value="Agregar">
                                    Añadir al carrito
                                </button>
                            </div>
                        </form>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/manga3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Las vacaciones de Jesús y Buda</h3>
                            <div class="price">$310.82</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado14.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Doraemon: Volumen 1</h3>
                            <div class="price">$310.82</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado15.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>KochiKame: Volumen 1</h3>
                            <div class="price">$361.24</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado16.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Demon Slayer: Volumen 1</h3>
                            <div class="price">$276.16</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado17.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Crayon Shinchan</h3>
                            <div class="price">$503.76</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado18.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Tokyo Ghoul: Volumen 1</h3>
                            <div class="price">$</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado19.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Bleach: Volumen 1</h3>
                            <div class="price">$</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                    <div class="swiper-slide box">
                        <div class="image">
                            <img src="image/destacado20.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Gleipnir: Volumen 1</h3>
                            <div class="price">$</div>
                            <button class="btn" type="submit" value="Agregar">
                                Añadir al carrito
                            </button>
                        </div>
                    </div>
        
                </div>
        
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        
            </div>
        
        </section>



    <!-- Mangas section ends -->








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