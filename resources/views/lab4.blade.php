@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <h2 class="section-title">Laboratory 3 LAYOUT <br> Gallery</h2>
        <div class="projects-list">
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/midd1.png') }}" target="_blank">
                    <img src="{{ asset('images/midd1.png') }}" alt="Image 1" class="project-image">
                </a>
                <p class="project-description">Age verification above 18. Showing the page to login since user is 19</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb">
                <a href="{{ asset('images/midd2.png') }}" target="_blank">
                    <img src="{{ asset('images/midd2.png') }}" alt="Image 2" class="project-image">
                </a>
                <p class="project-description">Age verification, user is age 22, the page will show restricted content
                    available only to user that is age 21 and above.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/midd3.png') }}" target="_blank">
                    <img src="{{ asset('images/midd3.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">Access denied id user's age does not meet the minimum age which is 18 and
                    above.</p>
            </div>
            <div class="project-card" style="background-color: #f8f5fb;">
                <a href="{{ asset('images/midd4.png') }}" target="_blank">
                    <img src="{{ asset('images/midd4.png') }}" alt="Image 3" class="project-image">
                </a>
                <p class="project-description">If you click view more it will redirect to another page which is a
                    dashboard.</p>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Documentation</h2>
        <p class="section-text">
            In this laboratory activity, I created and registered middleware in a web application to manage user access
            based on age. The first middleware, CheckAge, verified if users were 18 or older and redirected those under
            18 to an "Access Denied" page. The second middleware, LogRequests, logged details of all HTTP requests to a
            log file.

            In the second part, CheckAge was applied to specific routes, such as the welcome and dashboard pages,
            ensuring only users who met the age requirement could access them. I tested the middleware by simulating
            different user ages to confirm it worked correctly.

            Finally, I enhanced the CheckAge middleware to accept a minimum age parameter, allowing for different access
            rules. For example, users aged 18 to 20 were directed to a home view, while those 21 and older were sent to
            an adult-specific view. This demonstrated the flexibility of middleware in managing access based on user
            age.
        </p>
    </div>
</section>

<section class="section">
    <div class="project-card" style="background-color: #f8f5fb; display: center; margin: 10%; margin-top: -200px">
        <h2 class="section-title">Summary</h2>
        <p class="section-text">
            During the lab activity, I faced challenges implementing and configuring middleware and the kernel. Ensuring
            the CheckAge middleware correctly verified user ages and redirected users under 18 required extensive
            testing and debugging. Additionally, creating the kernel involved multiple iterations to ensure proper
            middleware registration, and I encountered file permission issues with the LogRequests middleware.

            These challenges highlighted the importance of thorough testing, the customization of middleware with
            parameters, and the need for proper registration to maintain security and functionality. Overall, the
            activity improved my understanding of middleware in web application logging and access control.
        </p>
    </div>
</section>

@endsection