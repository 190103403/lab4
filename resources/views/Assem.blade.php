<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="style.css">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <img src="unnamed-removebg-preview.png" class="nav__logo">
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.html" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="portfolio.html" class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href="contact.html" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <!--===== ABOUT =====-->
        <section class="about section" id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="rBp8DwJ9huQ-removebg-preview.png" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Assem</h2>
                    <span class="about__profession">Student of SDU</span>
                    <p class="about__text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci consectetur, architecto quas fugiat, iste inventore facere repellendus delectus id, vitae blanditiis.</p>

                    
                </div>
            </div>
        </section>
         <!--===== SCROLL REVEAL =====-->
         <script src="https://unpkg.com/scrollreveal"></script>

         <!--===== MAIN JS =====-->
         <script src="app.js"></script>
    </body>
    </html>