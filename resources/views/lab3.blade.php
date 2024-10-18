@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <h2 class="section-title">Laboratory 3 LAYOUT <br> Gallery</h2>
        <div class="projects-list">
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/layout1.png') }}" target="_blank">
                    <img src="{{ asset('images/layout1.png') }}" alt="Image 1" class="project-image">
                </a>
                <p class="project-description">Homepage.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/layout2.png') }}" target="_blank">
                    <img src="{{ asset('images/layout2.png') }}" alt="Image 2" class="project-image">
                </a>
                <p class="project-description">Another page showing the design consitency on header and footer.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/layout3.png') }}" target="_blank">
                    <img src="{{ asset('images/layout3.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">The implementation of layout on one of the views.</p>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Documentation</h2>
        <p class="section-text">
            In this laboratory activity, I created a consistent layout system for a web application using Laravel's Blade templating
            engine. The main task was to set up a layout file that included common elements like the header, navigation
            bar, and footer. These elements were reused across multiple views, such as home.blade.php, about.blade.php,
            and contact.blade.php, giving the website a unified look.

            I used Laravels @ extends directive to connect these views to the layout file and @ section to add unique
            content where needed. The layout file was organized using the @ yield directive, which allowed the main
            content to differ between views while keeping a cohesive design. For instance, about.blade.php could show
            information about the shop while sharing the same navigation and footer as other pages. This approach
            ensured consistency and made it easy to update the design, as any changes to the layout file were reflected
            across all views immediately.
        </p>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Summary</h2>
        <p class="section-text">
            One of the main challenges I encountered was with the @ extends directive, particularly regarding file paths.
            I initially placed the layout file in the Components folder and tried to extend it using @ extends(layout ), which didnt render correctly. After troubleshooting, I realized I needed to specify the full path us
 i          ng @ extends(Components . layout), which resolved the issue and allowed the views to extend the layout properly.

            Another challenge was deciding whether to use { { $slot }} or @ yield in the layout file. I chose @ section and
            @ yield because they provided better structure for my project. This approach let me define and control
            specific sections, like the header, footer, and content, more effectively. The precision of @ section helped
            maintain a consistent layout while allowing customization of each view.

            The most important lesson from this lab exercise is understanding the framework's structure and using
            directives correctly to avoid pathing issues. It also emphasized the importance of starting larger projects
            with a consistent design framework, making maintenance and scaling easier.
        </p>
    </div>
</section>

@endsection