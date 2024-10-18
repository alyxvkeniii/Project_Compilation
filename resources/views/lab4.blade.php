@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
    <!--CONTENT SECTION--> 
        <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="text-container cute-font">

            <section id="content-section" class="text-image-container">

                <div class="section-title-container"> <br>
                    <h2 class="section-title">LABORATORY 4 - Middleware</h2>
                    <p>In this lab, I focused on creating and registering new middleware in my Laravel project, specifically CheckAge and LogRequests. I also assigned this middleware to specific routes and modified the CheckAge middleware to accept parameters for age restrictions.</p>
                </div>

                <section id= "content-section" class="wrapper">
                    <div class="container">
                        <input type="radio" name="slide" id="d1" checked>
                        <label for="d1" class="card">
                            <div class="row">
                                <div class="icon">1</div>
                                <div class="description">
                                    <h4>Check Age</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="d2" checked>
                        <label for="d2" class="card">
                            <div class="row">
                                <div class="icon">2</div>
                                <div class="description">
                                    <h4>Log Request</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="d3" checked>
                        <label for="d3" class="card">
                            <div class="row">
                                <div class="icon">3</div>
                                <div class="description">
                                    <h4>Middlware in Kernel</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="d4" checked>
                        <label for="d4" class="card">
                            <div class="row">
                                <div class="icon">4</div>
                                <div class="description">
                                    <h4>Route Group</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="d5" checked>
                        <label for="d5" class="card">
                            <div class="row">
                                <div class="icon">5</div>
                                <div class="description">
                                    <h4>Test Scenarios</h4>
                                </div>
                            </div>
                        </label>
                    </div>
                </section>

                <h2 style="color: #d13469;">WHAT I HAVE LEARNED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Creating Middleware</h3> <br>
                            <p>I learned how to create middleware using the command line, specifically CheckAge to enforce age restrictions and LogRequests to log HTTP request details.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Age Validation Logic</h3> <br>
                            <p>I implemented logic in the CheckAge middleware to check if a user’s age is 18 or older, redirecting those who don’t meet the requirement to an “Access Denied” page.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Logging HTTP Requests</h3> <br>
                            <p>I set up the LogRequests middleware to log the details of all HTTP requests to a file called log.txt, capturing the URL, method, and timestamp.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Registering Middleware</h3> <br>
                            <p>I learned how to register middleware in the app/Http/Kernel.php file, both as global middleware and for specific routes.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Route Groups</h3>
                            <p>I created a route group to apply the CheckAge middleware to specific routes, ensuring users meet age requirements to access certain pages.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Testing Middleware</h3>
                            <p><br>I practiced testing the middleware by simulating different age values in requests to see how it behaves under various conditions.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Middleware with Parameters</h3>
                            <p><br> I modified the CheckAge middleware to accept a parameter for the minimum age requirement, enhancing its flexibility.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Dynamic Age Restrictions</h3> 
                            <p><br> I created a new route that assigned the middleware with a parameter to enforce a different age restriction (e.g., 21 years old).</p>
                        </div>
                    </div>
                </div>

                <h2 style="color: #d13469;">CHALLENGES I FACED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Middleware Creation</h3> <br>
                            <p>I initially found it challenging to create middleware correctly using the command line.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Logic Implementation</h3> <br>
                            <p>Writing the logic for the CheckAge middleware required careful thought to ensure the age validation worked as intended.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">File Logging</h3>
                            <p><br>Setting up the logging functionality in LogRequests took some troubleshooting to ensure it logged the correct details.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Registering Middleware</h3> <br>
                            <p>I struggled with the correct placement and registration of middleware in the Kernel.php file.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Testing Scenarios</h3> <br>
                            <p>Simulating different age values for testing the middleware proved to be more complex than I anticipated.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Understanding Route Groups</h3>
                            <p>Grasping how route groups work and how to assign middleware to them took some time to fully understand.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Parameter Handling:</h3>
                            <p><br>Modifying the CheckAge middleware to accept parameters presented a learning curve as I adapted to its implementation.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Debugging Middleware</h3> 
                            <p><br>Debugging issues related to middleware functionality required me to thoroughly check my routes and logic, which was sometimes frustrating.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <!--END OF CONETNT SECTION-->

@endsection