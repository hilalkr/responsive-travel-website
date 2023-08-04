<?php
include("header.php")
?>

    <!-- HOME -->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- SERVICES -->
    <div class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tours guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </div>

    <!-- HOME ABOUT -->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" class="img" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos et ex molestiae minus commodi perferendis unde harum voluptatibus animi voluptas delectus ipsam dolorem rerum dolore quam, inventore error sapiente in!</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>
    <!-- PACKAGES -->
    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
        <div class="box">
                <div class="image">
                    <img src="images/img-7.jpg"  alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, ipsam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
        </div>
        <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg"  alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, ipsam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg"  alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut, ipsam.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more">
            <a href="package.php" class="btn">load more</a>
        </div>
    </section>
    <!-- OFFER -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum molestiae possimus optio? Fugit, autem accusantium est nobis 
                quasi eos minima.
            </p>
            <a href="book.php" class="btn">book now</a>

        </div>
    </section>
    <?php
        include("footer.php")
    ?>


    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
    var swiper = new Swiper(".home-slider", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>


