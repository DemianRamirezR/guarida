<?php session_start();
include 'php/connect.php';

$result = mysqli_query($conn, "SELECT count(*) FROM carrito");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Guarida Freaky</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="image/favicon.jpg">

    <link rel="stylesheet" href="libraries/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <script src="libraries/f42030a039.js"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header" id="home">

        <div class="header-1">

            <a href="Index.php" class="logo"> <i class="fas fa-book"></i> La Guarida Freaky </a>

            <div class="icons">
                <a href="carrito.php" class="fas fa-shopping-cart"><span>()</span></a>
                <a href="forms/login.php" id="login-btn" class="fas fa-user"></a>
            </div>

        </div>

        <div class="header-2">
            <nav class="navbar">
                <a href="#home">Inicio</a>
                <a href="#featured">Destacados</a>
                <a href="productos.php">Historietas</a>
            </nav>
        </div>

    </header>

    <!-- header section ends -->



    <!-- Banner section -->
    <div class="banner">
        <div class="bannerCapa">
            <div class="banner-cont">
                <h1>Bienvenidos a</h1>
                <h2>La Guarida Freaky</h2>
                <a href="productos.php" class="btn">Ver más</a>
            </div>
        </div>
    </div>
    <!-- Banner section ends -->




    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
        <a href="#home" class="fa-solid fa-angle-up"></a>
        <a href="#featured" class="fa-solid fa-fire"></a>
        <a href="#deal" class="fa-solid fa-tag"></a>
    </nav>

    <!-- bottom navbar ends -->







    <!-- home section starts  -->

    <section class="home">

        <div class="row">

            <div class="content">
                <h3>Nuevos mangas proximamente</h3>
                <p>Con esta lista de tomos iniciamos la colección Relatos terroríficos, destinada a conformar toda una
                    biblioteca integrada por las
                    historias que han hecho a Junji Ito merecedor de la etiqueta de maestro del terror.</p>
                <p>~ (6 - 18 partes)</p>
            </div>

            <div class="swiper books-slider">
                <div class="swiper-wrapper">
                    <a class="swiper-slide"><img src="image/relato-1.png"></a>
                    <a class="swiper-slide"><img src="image/relato-2.png"></a>
                    <a class="swiper-slide"><img src="image/relato-3.png"></a>
                    <a class="swiper-slide"><img src="image/relato-4.png"></a>
                    <a class="swiper-slide"><img src="image/relato-5.png"></a>
                    <a class="swiper-slide"><img src="image/relato-6.png"></a>
                </div>
                <img src="image/stand.png" class="stand">
            </div>

        </div>

    </section>

    <!-- home section ends  -->





    <!--  Categories section starts  -->



    <!--  Categories section starts  -->







    <!-- featured section starts  -->

    <section class="featured" id="featured">

        <h1 class="heading"> <span>Historietas Destacados</span> </h1>

        <div class="swiper featured-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado1.jpg">
                        <input type="hidden" name="titulo" value="Wolverine: Origen">
                        <input type="hidden" name="precio" value="457.65">
                        <div class="image">
                            <img src="image/destacado1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Wolverine: Origen</h3>
                            <div class="price">$457.65 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>


                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado2.jpg">
                        <input type="hidden" name="titulo" value="Wolverine: Origen II">
                        <input type="hidden" name="precio" value="416.04">
                        <div class="image">
                            <img src="image/destacado2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Wolverine: Origen II</h3>
                            <div class="price">$416.04 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado3.jpg">
                        <input type="hidden" name="titulo" value="Wolverine: Arma X">
                        <input type="hidden" name="precio" value="312.03">
                        <div class="image">
                            <img src="image/destacado3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Wolverine: Arma X</h3>
                            <div class="price">$312.03 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado4.jpg">
                        <input type="hidden" name="titulo" value="Daredevil: El hombre sin miedo">
                        <input type="hidden" name="precio" value="312.03">
                        <div class="image">
                            <img src="image/destacado4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Daredevil: El hombre sin miedo</h3>
                            <div class="price">$312.03 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado5.jpg">
                        <input type="hidden" name="titulo" value="Hulk: Gris">
                        <input type="hidden" name="precio" value="276.84">
                        <div class="image">
                            <img src="image/destacado5.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Hulk: Gris.</h3>
                            <div class="price">$276.84 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado6.jpg">
                        <input type="hidden" name="titulo" value="Capitan América: Blanco">
                        <input type="hidden" name="precio" value="276.84">
                        <div class="image">
                            <img src="image/destacado6.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Capitan América: Blanco</h3>
                            <div class="price">$276.84 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado7.jpg">
                        <input type="hidden" name="titulo" value="Daredevil: Amarillo">
                        <input type="hidden" name="precio" value="316.41">
                        <div class="image">
                            <img src="image/destacado7.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Daredevil: Amarillo</h3>
                            <div class="price">$316.41 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado8.jpg">
                        <input type="hidden" name="titulo" value="Vengadores: La Guerra Kree-Skrull">
                        <input type="hidden" name="precio" value="391.80">
                        <div class="image">
                            <img src="image/destacado8.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Vengadores: La Guerra Kree-Skrull</h3>
                            <div class="price">$391.80 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado9.jpg">
                        <input type="hidden" name="titulo" value="Los X-men: La saga de Fénix Oscura">
                        <input type="hidden" name="precio" value="312.03">
                        <div class="image">
                            <img src="image/destacado9.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Los X-men: La saga de Fénix Oscura</h3>
                            <div class="price">$312.03 <span>c/u</span></div>
                            <input type="number" name="cantidad" placeholder="Cantidad">
                            <button class="btn" type="submit">
                                Añadir al carrito
                            </button>
                        </div>
                    </form>
                </div>

                <div class="swiper-slide box">
                    <form action="php/carrito.php" method="POST">
                        <input type="hidden" name="imagen" value="image/destacado10.jpg">
                        <input type="hidden" name="titulo" value="Daredevil: Born Again">
                        <input type="hidden" name="precio" value="312.03">
                        <div class="image">
                            <img src="image/destacado10.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Daredevil: Born Again</h3>
                            <div class="price">$312.03 <span>c/u</span></div>
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








    <!-- deal section starts  -->

    <section class="deal" id="deal">

        <div class="content">
            <h3>Oferta del dia</h3>
            <h1>Con 50% de descuento</h1>
            <p>Atrevete a explorar y encuentra los grandes descuentos que tenemos para ti hoy!.</p>
            <a href="productos.php" class="btn">Ver Productos</a>
        </div>

        <div class="image">
            <img src="image/50Off.png" alt="">
        </div>

    </section>

    <!-- deal section ends -->









    <!-- footer section starts  -->

    <section class="footer">

        <div class="credit"> Web creada por <span>Jose Demian Rmz. Rmz.</span> | ¡Todos Los Derechos Reservados! </div>

    </section>

    <!-- footer section ends -->










    <!-- loader  -->

    <div class="loader-container" id="onload">
        <img src="image/load-1.gif">
    </div>

    <!-- loader ends -->










    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>