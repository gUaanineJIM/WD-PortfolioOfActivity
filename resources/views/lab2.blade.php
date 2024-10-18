@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <h2 class="section-title">Laboratory 2 ROUTES <br> Gallery</h2>
        <div class="projects-list">
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/rr1.png') }}" target="_blank">
                    <img src="{{ asset('images/rr1.png') }}" alt="Image 1" class="project-image">
                </a>
                <p class="project-description">Log in with optional and required parameter. Guest if no username.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/rr2.png') }}" target="_blank">
                    <img src="{{ asset('images/rr2.png') }}" alt="Image 2" class="project-image">
                </a>
                <p class="project-description">Required parameter and redirect to homepage.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/rr3.png') }}" target="_blank">
                    <img src="{{ asset('images/rr3.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">Optional parameter without given username, log in as default GUEST.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/rr4.png') }}" target="_blank">
                    <img src="{{ asset('images/rr4.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">The routes for the lab2.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Documentation</h2>
        <p class="section-text">
            Creating Optional and Required ROUTES', 'In this project, we set up several routes for navigating between
            different pages of a Laravel application. The main routes include the homepage, about page, content page,
            and contact page. These routes are defined using the Route::get() method, which specifies how Laravel
            handles HTTP GET requests. Each route displays a corresponding view, such as the homepage with a welcome
            message or the (Contact Us) form where users can submit their details. Additionally, the routes include
            optional parameters that allow users to log in with a username or proceed as a guest, offering a
            personalized or default experience. <br><br> To enhance the functionality, we implemented routes with
            optional username parameters. If the user does not provide a username, they are welcomed as (Guest) For
            example, when visiting /user/janine, the route returns a view with a personalized welcome message like
            (Welcome, Janine.) If no username is provided, the default message (Welcome, Guest) is displayed. We also
            added a regular expression constraint to the routes to ensure that only alphabetic characters (a-z, A-Z) are
            accepted for usernames. The flexibility of optional parameters and validation improves user experience by
            offering personalized interactions while maintaining input integrity. <br> <br> In addition to basic
            routing, the project includes a contact form that allows users to send emails. The form submits data to the
            /homepage route using the POST method, and Laravels built-in CSRF protection ensures security. The form also
            validates the input using regular expressions and error handling, ensuring that the username provided
            matches the allowed format. The navigation between pages is seamless, with route helpers dynamically
            generating URLs, making it easy to move between the homepage, about, content, and contact sections. This
            approach provides a smooth and user-friendly way to interact with the website while ensuring robust routing
            and validation mechanisms.
        </p>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Summary</h2>
        <p class="section-text">
            I encountered a struggle when passing optional parameters while navigating between different pages. The
            issue arose when the parameter name failed to output correctly, causing errors when I hovered over certain
            links. I had difficulty passing the parameters to each route, which led to these errors. After
            troubleshooting, I discovered that the problem occurred because the parameter was not being passed correctly
            in the route definitions.

            To solve this, I ensured that the optional parameter was properly defined in each route and modified the
            route helpers in the Blade templates to correctly handle the absence of a parameter by providing a default
            value when necessary.

            By working through these challenges, I learned how to handle dynamic parameters in Laravel routes more
            effectively and ensure smooth navigation across the website. This experience strengthened my understanding
            of routing and parameter handling, which will be valuable for future web development projects.
        </p>
    </div>
</section>

@endsection