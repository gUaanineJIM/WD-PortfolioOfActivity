@extends('layout')

@section('content')

<main>
    <article>
        <section class="section projects" aria-labelledby="projects-label">
            <div class="container">

                <div class="title-wrapper" data-reveal="top">
                    <div>
                        <h2 class="h2 section-title" id="projects-label">WEB DEV Projects</h2>
                        <p class="section-text">
                            Explore some of our latest projects in Web Development.
                        </p>
                    </div>
                </div>

                <ul class="projects-list">

                    <!-- Project 1 -->
                    <li class="project-item" data-reveal="bottom">
                        <div class="project-card" style="background-color: #f8f5fb">

                            <div class="project-content" data-reveal="left">
                                <p class="project-tag" style="color: #a07cc5">Laboratory 1</p>
                                <h3 class="h3 project-title">SETUP</h3>
                                <p class="project-description">
                                    This laboratory activity involves setting up a Laravel application with database
                                    configuration,
                                    creating views and routes, documenting the process with screenshots, and organizing
                                    the documentation into a PDF, all to be submitted via a Git repository.
                                </p>

                                <div class="project-images" data-reveal="right">
                                    <img src="{{ asset('images/routes1.png') }}" alt="Snowlake Theme Image 1"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/setup1.png') }}" alt="Snowlake Theme Image 2"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/routes3.png') }}" alt="Snowlake Theme Image 3"
                                        class="project-image" onclick="enlargeImage(this)">
                                </div>
                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Image</span>
                                    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <br>
                                <!-- View Project Button -->
                                <a href="{{ route('lab1') }}" class="btn btn-primary">
                                    View Project
                                </a>
                                <br>

                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Button to Show Captions</span>
                                    <ion-icon name="arrow-down-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <!-- Description Button -->
                                <button class="btn btn-info"
                                    onclick="showDescriptionModal('SETTING UP LARAVEL', 'I installed Laravel and its dependencies, created a Git repository, and documented the project development process, which included setting up the environment, creating views and routes, and giving an overview of key directories and files in Laravel. Upon installation of Laravel, I utilized the command laravel new project_name to establish a new Laravel project, thereby producing the essential framework files. The next step is to establish version control by creating a Git repository. I initialized the repository with git init, added the project files with git add . and then committed the changes with git commit -m Initial commit. The next step involves setting up the .env file with the necessary database connection information. Up next is the task of making a view, and I made three views – homepage, about, and content – all found in the resources/views directory. In order to allow for moving between pages, I established paths in the routes/web.php document. ')">
                                    Description
                                </button>

                                <!-- Struggles Button -->
                                <button class="btn btn-warning"
                                    onclick="showStrugglesModal('STRUGGLES ON SETTING UP', 'In the first laboratory activity I set up a Laravel application and created a simple website about myself implementing views and basic routes During the setup process I faced difficulties in installing Laravel and running the php artisan command To resolve this I had to modify the php ini file located at C Users username config herd bin php83 php ini by deleting a specific line E $_ENVIRONMENT Additionally I encountered some challenges with setting up routes but I was able to overcome them and successfully configure navigation between the homepage about and content views.')">
                                    Struggles
                                </button>

                            </div>
                        </div>
                    </li>



                    <!-- Project 2 -->
                    <li class="project-item" data-reveal="bottom">
                        <div class="project-card" style="background-color: #f8f5fb">

                            <div class="project-content" data-reveal="left">
                                <p class="project-tag" style="color: #a07cc5">Laboratory 2</p>
                                <h3 class="h3 project-title">ROUTES</h3>
                                <p class="project-description">
                                    In this laboratory activity, basic routes are established to redirect from /home to
                                    / and
                                    display views for the homepage, "About Us" page, and a "Contact Us" form. In order
                                    to customize the welcome message, additional routes are constructed with both
                                    required and optional parameter. Regular expression constraints are implemented to
                                    guarantee that only alphabetic characters are utilized.
                                </p>

                                <div class="project-images" data-reveal="right">
                                    <img src="{{ asset('images/rr1.png') }}" alt="Snowlake Theme Image 1"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/rr2.png') }}" alt="Snowlake Theme Image 2"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/rr3.png') }}" alt="Snowlake Theme Image 3"
                                        class="project-image" onclick="enlargeImage(this)">
                                </div>
                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Image</span>
                                    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <br>
                                <!-- View Project Button -->
                                <a href="{{ route('lab2') }}" class="btn btn-primary">
                                    View Project
                                </a>
                                <br>

                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Button to Show Captions</span>
                                    <ion-icon name="arrow-down-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <!-- Description Button -->
                                <button class="btn btn-info"
                                    onclick="showDescriptionModal('Creating Optional and Required ROUTES', 'In this project, we set up several routes for navigating between different pages of a Laravel application. The main routes include the homepage, about page, content page, and contact page. These routes are defined using the Route::get() method, which specifies how Laravel handles HTTP GET requests. Each route displays a corresponding view, such as the homepage with a welcome message or the (Contact Us) form where users can submit their details. Additionally, the routes include optional parameters that allow users to log in with a username or proceed as a guest, offering a personalized or default experience. <br><br> To enhance the functionality, we implemented routes with optional username parameters. If the user does not provide a username, they are welcomed as (Guest) For example, when visiting /user/janine, the route returns a view with a personalized welcome message like (Welcome, Janine.) If no username is provided, the default message (Welcome, Guest) is displayed. We also added a regular expression constraint to the routes to ensure that only alphabetic characters (a-z, A-Z) are accepted for usernames. The flexibility of optional parameters and validation improves user experience by offering personalized interactions while maintaining input integrity. <br> <br> In addition to basic routing, the project includes a contact form that allows users to send emails. The form submits data to the /homepage route using the POST method, and Laravels built-in CSRF protection ensures security. The form also validates the input using regular expressions and error handling, ensuring that the username provided matches the allowed format. The navigation between pages is seamless, with route helpers dynamically generating URLs, making it easy to move between the homepage, about, content, and contact sections. This approach provides a smooth and user-friendly way to interact with the website while ensuring robust routing and validation mechanisms.')">
                                    Description
                                </button>

                                <!-- Struggles Button -->
                                <button class="btn btn-warning"
                                    onclick="showStrugglesModal('STRUGGLES AND LESSONS', 'I encountered a struggle when passing the optional parameter while navigating between different pages. The issue arose when the parameter name failed to output correctly, causing errors when I hovered over certain links. After troubleshooting, I found that the problem occurred because the parameter was not being passed correctly in the route definitions. To solve this, I ensured that the optional parameter was properly defined in the route, and I modified the route helpers in the Blade templates to correctly handle the absence of a parameter by providing a default value when necessary. <br> <br> By working through these challenges, I learned how to handle dynamic parameters in Laravel routes more effectively and ensure smooth navigation across the website. This experience strengthened my understanding of routing and parameter handling, which will be valuable for future web development projects.')">
                                    Struggles
                                </button>

                            </div>
                        </div>
                    </li>


                    <!-- Project 3 -->
                    <li class="project-item" data-reveal="bottom">
                        <div class="project-card" style="background-color: #f8f5fb">

                            <div class="project-content" data-reveal="left">
                                <p class="project-tag" style="color: #a07cc5">Laboratory 3</p>
                                <h3 class="h3 project-title">LAYOUT</h3>
                                <p class="project-description">
                                    In this laboratory activity, I worked on creating a consistent layout system for a
                                    web
                                    application using Laravel's Blade templating engine.
                                </p>

                                <div class="project-images" data-reveal="right">
                                    <img src="{{ asset('images/layout1.png') }}" alt="Snowlake Theme Image 1"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/layout2.png') }}" alt="Snowlake Theme Image 2"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/layout3.png') }}" alt="Snowlake Theme Image 3"
                                        class="project-image" onclick="enlargeImage(this)">
                                </div>
                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Image</span>
                                    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <br>
                                <!-- View Project Button -->
                                <a href="{{ route('lab3') }}" class="btn btn-primary">
                                    View Project
                                </a>
                                <br>

                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Button to Show Captions</span>
                                    <ion-icon name="arrow-down-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <!-- Description Button -->
                                <button class="btn btn-info"
                                    onclick="showDescriptionModal('Layout Implementation Process', '<br>In this project, I worked on creating a consistent layout system for a web application using Laravels Blade templating engine. The core of the task involved setting up a layout file that held the common elements such as the header, navigation bar, and footer. These elements were reused across multiple views such as home.blade.php, about.blade.php, and contact.blade.php, ensuring that the website had a unified look and feel. I used Laravels @ extends directive to link these views with the layout file and @ section to inject unique content into the appropriate sections of the layout. <br><br> The layout file was structured using the @ yield directive, which allowed specific areas like the main content to vary from view to view, while maintaining a cohesive design. This resulted in views like about.blade.php being able to display content about the shop while still sharing the same navigation and footer as the other pages. This approach ensured consistency and simplicity when updating the design, as changes made to the layout file would be reflected across all views instantly.<br><br> For routing, I defined routes in the web.php file, each mapping to a specific view. By using named routes, I ensured maintainability and clarity in the code. For example, navigating to /about rendered the about.blade.php view. This routing setup made it straightforward to manage page requests and serve the correct content efficiently.')">
                                    Description
                                </button>

                                <!-- Struggles Button -->
                                <button class="btn btn-warning"
                                    onclick="showStrugglesModal('LAYOUT STRUGGLES', 'One of the main challenges I encountered was with the @ extends directive, specifically with file paths. Initially, I placed the layout file in the Components folder and attempted to extend it using @ extends(layout). However, this resulted in the layout not rendering correctly. After troubleshooting, I realized that I needed to specify the full path to the layout file using @ extends(Components.layout), which resolved the issue and allowed the views to extend the layout properly. <br> <br> Another challenge I faced was deciding whether to use { { $ slot }} or @ yield in the layout file. While slots offer flexibility, I opted for @ section and @ yield because they provided better structure for my project. This method allowed me to define and control specific sections like the header, footer, and content more effectively. The flexibility and precision of @ section helped me maintain a consistent layout while allowing for customization of each view. <br> <br> This lab exercises most important takeaway is the fact that important it is to understand a frameworks structure and make sure directives are used correctly to prevent pathing issues. It also highlighted how important it is to start larger projects with a consistent and effective design framework in place because it makes maintenance and scaling easier.')">
                                    Struggles
                                </button>
                            </div>
                        </div>
                    </li>



                    <!-- Project 4 -->
                    <li class="project-item" data-reveal="bottom">
                        <div class="project-card" style="background-color: #f8f5fb">

                            <div class="project-content" data-reveal="left">
                                <p class="project-tag" style="color: #a07cc5">Laboratory 4</p>
                                <h3 class="h3 project-title">Middleware</h3>
                                <p class="project-description">
                                    In this laboratory activity, the primary task involved creating and registering
                                    middleware in a web application to manage user access based on age.
                                </p>

                                <div class="project-images" data-reveal="right">
                                    <img src="{{ asset('images/midd1.png') }}" alt="Snowlake Theme Image 1"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/midd2.png') }}" alt="Snowlake Theme Image 2"
                                        class="project-image" onclick="enlargeImage(this)">
                                    <img src="{{ asset('images/midd3.png') }}" alt="Snowlake Theme Image 3"
                                        class="project-image" onclick="enlargeImage(this)">
                                </div>
                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Image</span>
                                    <ion-icon name="arrow-up-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <br>
                                <!-- View Project Button -->
                                <a href="{{ route('lab4') }}" class="btn btn-primary">
                                    View Project
                                </a>
                                <br>

                                <a href="#" class="btn-text" style="color: #a07cc5">
                                    <span>Click Button to Show Captions</span>
                                    <ion-icon name="arrow-down-outline" aria-hidden="true"></ion-icon>
                                </a>

                                <!-- Description Button -->
                                <button class="btn btn-info"
                                    onclick="showDescriptionModal('MIDDLEWARE Implementation', 'In this laboratory activity, the primary task involved creating and registering middleware in a web application to manage user access based on age. The first middleware, named CheckAge, was developed to verify if the users age is 18 or older. If not, the user is redirected to an (ccess Denied)page. Another middleware, LogRequests, was implemented to log details of all HTTP requests, including the URL, method, and timestamp, to a log file. These middleware components were registered globally as well as for specific routes in the application, allowing selective application of access control and request logging.<br><br> In the second part of the lab, the CheckAge middleware was assigned to specific routes to control access based on age. The main route prompts the user for their age, and if they are below 18, they are denied access. The middleware was applied to routes such as those leading to the welcome and dashboard pages, ensuring that the system only allowed users meeting the age requirement to proceed. Various tests were performed by simulating different user ages to confirm that the middleware correctly filtered access based on the inputted age.<br><br>The third section of the lab involved enhancing the middleware by adding parameters. Specifically, the CheckAge middleware was modified to accept a minimum age parameter, allowing different age-based access rules. For instance, users aged between 18 and 20 were directed to a home view, while those 21 and older were directed to an adult-specific view. This demonstrated the flexibility of middleware parameters in enforcing different access levels depending on the age of the user. The middleware was further tested by creating routes with different age restrictions, such as a route specifically for users 21 years and older​.')">
                                    Description
                                </button>

                                <!-- Struggles Button -->
                                <button class="btn btn-warning"
                                    onclick="showStrugglesModal('Struggles and Lesson', 'During the lab activity, one of the main challenges was getting the middleware and kernel implemented and configured correctly. There were difficulties in configuring the CheckAge middleware to reliably verify user ages and guarantee (Access Denied)page redirection. It required rigorous testing and fine-tuning to debug faults like improper handling of user input or failure to deploy the middleware universally across routes. It also required more work to create the kernel to register the middleware correctly because it required several iterations to make sure the middleware was identified and applied correctly in the application. Additionally, there were problems with handling file permissions and precisely capturing request data when configuring the LogRequests middleware to log HTTP request information to a file. <br> <br> These difficulties provided valuable insights to learn the value of thorough testing and debugging when interacting with the kernel and middleware. The use of parameter-accepting middleware—which allows for dynamic age limitations, for example—highlighted the necessity of understanding how middleware can be customized to certain conditions. Also, ensuring the application behaves as planned requires proper middleware registration management, which was highlighted by working on the kernel. Applying middleware both globally and route-specifically to preserve appropriate security and functionality was another significant lesson learned. Overall, the laboratory activity improved my knowledge of middleware features related to web application logging and access control management.')">
                                    Struggles
                                </button>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </section>

    </article>

    <!-- Image Modal (Enlarges Images) -->
    <div id="imageModal" class="modal">
        <span class="close" onclick="closeImageModal()">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <!-- Description Modal -->
    <div id="descriptionModal" class="modal">
        <span class="close" onclick="closeDescriptionModal()">&times;</span>
        <div class="modal-content">
            <h3 id="descriptionTitle"></h3>
            <p id="descriptionContent"></p>
        </div>
    </div>

    <!-- Struggles Modal -->
    <div id="strugglesModal" class="modal">
        <span class="close" onclick="closeStrugglesModal()">&times;</span>
        <div class="modal-content">
            <h3 id="strugglesTitle"></h3>
            <p id="strugglesContent"></p>
        </div>
    </div>


</main>

@endsection