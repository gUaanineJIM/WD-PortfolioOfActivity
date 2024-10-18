@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <h2 class="section-title">Laboratory 1 SETUP <br> Gallery</h2>
        <div class="projects-list">
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/routes1.png') }}" target="_blank">
                    <img src="{{ asset('images/routes1.png') }}" alt="Image 1" class="project-image">
                </a>
                <p class="project-description">Homepage.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/routes2.png') }}" target="_blank">
                    <img src="{{ asset('images/routes2.png') }}" alt="Image 2" class="project-image">
                </a>
                <p class="project-description">Additional Features.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/routes3.png') }}" target="_blank">
                    <img src="{{ asset('images/routes3.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">The Routes.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/setup1.png') }}" target="_blank">
                    <img src="{{ asset('images/setup1.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">The Setup Process.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Documentation</h2>
        <p class="section-text">
            I installed Laravel and its dependencies, created a Git repository, and documented the project development
            process. This first laboratory activity focused on setting up the Laravel application and creating a simple
            website about myself, implementing views and basic routes. To start, I used the command laravel new
            project_name to establish a new Laravel project, which generated the essential framework files. Next, I set
            up version control by initializing a Git repository with git init, added the project files using git add .,
            and committed the changes with git commit -m 'Initial commit'. I then configured the .env file with the
            necessary database connection information. As part of the activity, I created three views – homepage, about,
            and content – all located in the resources/views directory. To enable navigation between these pages, I
            defined routes in the routes/web.php file.
        </p>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Summary</h2>
        <p class="section-text">
            In the first laboratory activity I set up a Laravel application and created a simple website about myself
            implementing views and basic routes During the setup process I faced difficulties in installing Laravel and
            running the php artisan command To resolve this I had to modify the php ini file located at C Users username
            config herd bin php83 php ini by deleting a specific line E $_ENVIRONMENT Additionally I encountered some
            challenges with setting up routes but I was able to overcome them and successfully configure navigation
            between the homepage about and content views
        </p>
    </div>
</section>

@endsection