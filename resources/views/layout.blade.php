<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>JANINE - WEBDEV PORTFOLIO.</title>
    <meta name="title" content="Janine Ishe - BSIT.">
    <meta name="description" content="Janine Ishe's, Web Dev projects">

    <link rel="icon" href="{{ asset('images/ishee.png') }}" type="image/png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preload" as="image" href="{{ asset('images/ishe.png') }}">
    <link rel="preload" as="image" href="{{ asset('images/ishee.png') }}">
</head>


<body>
    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <h2>JANINE</h2>
            </a>

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <a href="#" class="logo">
                        <img src="{{ asset('images/ishe.png') }}" width="64" height="24" alt="Janine home">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li>
                        <a href="{{ route('home') }}" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}#about" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="{{ route('projects') }}" class="navbar-link">Projects</a>
                    </li>


                    <li>
                        <a href="{{ route('home') }}#contact" class="navbar-link">Contact</a>
                    </li>

                </ul>

                <div class="wrapper">
                    <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

                    <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
                </div>

                <ul class="social-list">

                    <li>
                        <a href="https://www.facebook.com/livinglifeasjimrg/" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/guaanine/" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://github.com/gUaanineJIM" class="social-link">
                            <ion-icon name="logo-github"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.linkedin.com/in/janine-ishe-matamorosa-3952442b3/" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                </ul>

            </nav>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>

    <main>
        @yield('content')
    </main>


    <footer class="footer">
        <div class="container">

            <p class="copyright">
                &copy; 2024 Janine Ishe M. Matamorosa || BSIT 3C
            </p>

            <ul class="social-list">

                <li>
                    <a href="https://www.facebook.com/livinglifeasjimrg/" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://www.instagram.com/guaanine/" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://github.com/gUaanineJIM" class="social-link">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://www.linkedin.com/in/janine-ishe-matamorosa-3952442b3/" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>
            </ul>

        </div>
    </footer>

    <script src="{{ asset('js/script.js') }}"></script>

    <script src="{{ asset('js/reveal.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>