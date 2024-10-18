@extends('layout')

@section('content')

<section class="section project" id="projects" aria-labelledby="project-label" >
    <div class="container">

        <div class="title-wrapper" data-reveal="top">

            <div>
                <h2 class="h2 section-title" id="project-label">GET TO KNOW MORE ABOUT ME!!</h2>
            </div>

            <a href="{{ route('home') }}" class="btn btn-secondary">BACK</a>

        </div>

        <div class="image-grid" >
            

            <div class="image-item">
                <figure class="image-container">
                    <img src="{{ asset('images/f2.jpeg') }}" width="650" height="370" loading="lazy"
                        alt="Mobile Design" class="w-100">
                    <figcaption class="image-caption">FAVORITE MOBILE GAME </figcaption>
                </figure>
            </div>

            <div class="image-item">
                <figure class="image-container">
                    <img src="{{ asset('images/f3.jpg') }}" width="650" height="370" loading="lazy"
                        alt="Mobile Design" class="w-100">
                    <figcaption class="image-caption">My babies</figcaption>
                </figure>
            </div>

            <div class="image-item">
                <figure class="image-container">
                    <img src="{{ asset('images/f4.jpg') }}" width="650" height="370" loading="lazy"
                        alt="Mobile Design" class="w-100">
                    <figcaption class="image-caption">Sunset photography</figcaption>
                </figure>
            </div>

            <div class="image-item">
                <figure class="image-container">
                    <img src="{{ asset('images/f5.jpg') }}" width="650" height="370" loading="lazy"
                        alt="Mobile Design" class="w-100">
                    <figcaption class="image-caption">taking photo of favorite foods</figcaption>
                </figure>
            </div>

            <div class="image-item">
                <figure class="image-container">
                    <img src="{{ asset('images/f6.jpg') }}" width="650" height="370" loading="lazy"
                        alt="Mobile Design" class="w-100">
                    <figcaption class="image-caption">full time BSIT student</figcaption>
                </figure>
            </div>


        </div>

    </div>
</section>

@endsection
