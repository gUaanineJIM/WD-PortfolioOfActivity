@extends('layout')

@section('content')

<main>
    <article>

        <!-- 
      - #HERO
    -->

        <section class="section hero" id="home" aria-label="home">
            <div class="container">

                <figure class="hero-banner">
                    <img src="{{ asset('images/ish.png') }}" width="560" height="540" alt="Janine" class="w-100"
                        data-reveal="top">

                </figure>



                <div class="hero-content">

                    <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
                        BS Information Technology Student .
                    </h1>

                    <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
                        Hi, I'm Janine Ishe Matamorosa, currently in my 3rd year of BSIT, taking this major subject Web
                        Development. So far,
                        I'm really enjoying the journey and all the exciting challenges that come with it!
                    </p>

                    <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
                        <a href="{{ route('projects') }}" class="btn btn-primary">Projects</a>

                        <a href="{{ route('about') }}" class="btn btn-secondary">More About Me</a>
                    </div>

                </div>

            </div>
        </section>

        <!-- 
      - #ABOUT
    -->

        <section class="section about" id="about" aria-label="about">
            <div class="container">

                <div class="wrapper">

                    <div data-reveal="left">
                        <h2 class="h2 section-title">How to use the page?</h2>

                        <p class="section-text">
                            <b>Instructions to View Project Files:</b><br>
                            1. <b>Go to the project.</b><br>
                            2. <b>Click "View Project"</b> to see images, descriptions, and summaries of the laboratory
                            activity.<br>
                            3. <b>Use the "Description" and "Struggles" buttons</b> for easy access to specific
                            information.<br><br>

                            <b>Middleware Implementation:</b><br>
                            1. <b>Start at the root page (index).</b><br>
                            2. <b>Click the button labeled "More About Me."</b><br>
                            3. <b>Enter your username and age.</b><br>
                            4. <b>Note:</b> Users aged 18 and above can access the restricted content.
                        </p>

                    </div>

                    <ul class="progress-list" data-reveal="right">

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Web Design</p>

                                <span class="span">65 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 65%; background-color: #c7b1dd"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Mobile Design</p>

                                <span class="span">35 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 35%; background-color: #8caeec"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Back-End Development</p>

                                <span class="span">35 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 35%; background-color: #b0d4c1"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p>Willingness to Learn MORE</p>

                                <span class="span">100 %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: 10 0%; background-color: #e3a6b6"></div>
                            </div>

                        </li>

                    </ul>

                </div>

                <ul class="grid-list">

                    <li data-reveal="bottom">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="{{ asset('images/icon-1.svg') }}" width="52" height="52" loading="lazy"
                                    alt="web design icon">
                            </div>

                            <h3 class="h4 card-title">Web Design</h3>

                            <p class="card-text">

                            </p>

                        </div>
                    </li>

                    <li data-reveal="bottom" data-reveal-delay="0.25s">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="{{ asset('images/icon-2.svg') }}" width="52" height="52" loading="lazy"
                                    alt="mobile design icon">
                            </div>

                            <h3 class="h4 card-title">Mobile Design</h3>

                            <p class="card-text">
                            </p>

                        </div>
                    </li>

                    <li data-reveal="bottom" data-reveal-delay="0.5s">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="{{ asset('images/icon-3.svg') }}" width="52" height="52" loading="lazy"
                                    alt="web development icon">
                            </div>

                            <h3 class="h4 card-title">Development</h3>

                            <p class="card-text">
                            </p>

                        </div>
                    </li>

                    <li data-reveal="bottom" data-reveal-delay="0.75s">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="{{ asset('images/icon-4.svg') }}" width="52" height="52" loading="lazy"
                                    alt="web seo icon">
                            </div>

                            <h3 class="h4 card-title">LEARN MORE LANGUAGE</h3>

                            <p class="card-text">
                            </p>

                        </div>
                    </li>

                </ul>

            </div>
        </section>

        <!-- 
      - #PROJECT
    -->

        <section class="section project" id="projects" aria-labelledby="project-label">
            <div class="container">

                <div class="title-wrapper" data-reveal="top">

                    <div>
                        <h2 class="h2 section-title" id="project-label">Latest Projects</h2>

                        <p class="section-text">
                            Check out my latest projects.
                        </p>
                    </div>

                    <a href="{{ route('projects') }}" class="btn btn-secondary">See All Projects</a>

                </div>

                <ul class="grid-list">

                    <li>
                        <div class="project-card project-card-1" style="background-color: #f8f5fb">

                            <div class="card-content" data-reveal="left">

                                <p class="card-tag" style="color: #a07cc5">Web Design</p>

                                <h3 class="h3 card-title">LAYOUT <br> Laboratory 3</h3>

                                <p class="card-text">
                                    In this laboratory activity, I worked on creating a consistent layout system for a
                                    web
                                    application using Laravel's Blade templating engine.
                                </p>

                                <a href="{{ route('projects') }}" class="btn-text" style="color: #a07cc5">
                                    <span class="span">See Project</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>

                            <figure class="card-banner" data-reveal="right">
                                <img src="{{ asset('images/layout2.png') }}" width="650" height="370" loading="lazy"
                                    alt="Web Design" class="w-100">
                            </figure>

                        </div>
                    </li>

                    <li>
                        <div class="project-card project-card-2" style="background-color: #f1f5fd">

                            <div class="card-content" data-reveal="right">

                                <p class=" card-tag" style="color: #3f78e0">Web Design</p>

                                <h3 class="h3 card-title">ROUTES <br> Laboratory 2</h3>

                                <p class="card-text">
                                    In this laboratory activity, basic routes are established to redirect from /home to
                                    / and
                                    display views for the homepage, "About Us" page, and a "Contact Us" form.
                                </p>

                                <a href="{{ route('projects') }}" class="btn-text" style="color: #3f78e0">
                                    <span class="span">See Project</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>

                            <figure class="card-banner" data-reveal="left">
                                <img src="{{ asset('images/routes1.png') }}" width="650" height="370" loading="lazy"
                                    alt="Mobile Design" class="w-100">
                            </figure>

                        </div>
                    </li>

                </ul>

            </div>
        </section>



        <section class="section contact" id="contact" aria-label="contact">
            <div class="container">

                <div class="contact-card">

                    <div class="contact-content" data-reveal="left">

                        <div class="card-icon">
                            <img src="{{ asset('images/icon-5.svg') }}" width="44" height="44" loading="lazy"
                                alt="envelop icon">
                        </div>

                        <h2 class="h2 section-title">Send me an Email!</h2>

                        <p class="section-text">
                            <b>Janine Ishe M.</b> <br>
                            Email: moralishe6423@gmail.com <br>
                            Phone: 091234567891
                        </p>

                    </div>

                    <form action="" class="contact-form" data-reveal="right">

                        <div class="input-wrapper">
                            <input type="text" name="name" placeholder="Name *" required class="input-field">

                            <input type="email" name="email_address" placeholder="Email *" required class="input-field">
                        </div>

                        <textarea name="message" placeholder="Message *" required class="input-field"></textarea>

                        <button type="submit" class="btn btn-secondary">Send message</button>

                    </form>

                </div>

            </div>
        </section>

    </article>
</main>

@endsection