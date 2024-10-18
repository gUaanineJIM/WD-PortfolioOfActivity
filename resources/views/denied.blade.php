@extends('layout')

@section('content')

<main>
    <article>

        <section class="section access-denied" id="access-denied" aria-label="access-denied">
            <div class="container">

                <div class="access-denied-content" data-reveal="top">

                    <h1 class="h1 access-denied-title" data-reveal="top" data-reveal-delay="0.5s">
                        Access Denied
                    </h1>

                    <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
                        We're sorry, but you do not have permission to view this page.
                    </p>
                    <br>

                    <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
                        If you believe this is a mistake, please contact the administrator.
                    </p>

                    <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">

                        <a href="{{ route('home') }}" class="btn btn-primary">Go to Home</a>
                        <a href="{{ route('home') }}#contact" class="btn btn-secondary">Contact Support</a>
                    </div>

                </div>

            </div>
        </section>

    </article>
</main>

@endsection




