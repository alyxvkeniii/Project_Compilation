@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
    <!--CONTENT SECTION--> 
        <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="text-container cute-font">

            <section id="content-section" class="text-image-container">

                <div class="section-title-container"> <br>
                    <h2 class="section-title">LABORATORY 2 - Routes</h2>
                    <p>In this lab exercise, I learned how to define basic routes in a Laravel application, create views for different pages, and utilize route parameters for dynamic content. This included implementing required and optional parameters, as well as applying regular expression constraints to ensure valid input.</p>
                </div>

                <section id= "content-section" class="wrapper">
                    <div class="container">
                        <input type="radio" name="slide" id="b1" checked>
                        <label for="b1" class="card">
                            <div class="row">
                                <div class="icon">1</div>
                                <div class="description">
                                    <h4>Display a Welcome Message</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="b2" checked>
                        <label for="b2" class="card">
                            <div class="row">
                                <div class="icon">2</div>
                                <div class="description">
                                    <h4>Create a Contact Form</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="b3" checked>
                        <label for="b3" class="card">
                            <div class="row">
                                <div class="icon">3</div>
                                <div class="description">
                                    <h4>Used Login Controller</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="b4" checked>
                        <label for="b4" class="card">
                            <div class="row">
                                <div class="icon">4</div>
                                <div class="description">
                                    <h4>Used Route Parameters</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="b5" checked>
                        <label for="b5" class="card">
                            <div class="row">
                                <div class="icon">5</div>
                                <div class="description">
                                    <h4>Regular Expression Constraints</h4>
                                </div>
                            </div>
                        </label>
                    </div>
                </section>

                <h2 style="color: #d13469;">WHAT I HAVE LEARNED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Basic Route Definition</h3> <br>
                            <p>I figured out how to create simple routes that return views for different pages, like the homepage and "About Us."</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Route Redirection</h3> <br>
                            <p>I learned how to redirect users from one route to another, which improves navigation within my app.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Dynamic Route Parameters</h3> <br>
                            <p>I understood how to define routes with required parameters to display user-specific content, making the application more interactive.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Optional Parameters</h3> <br>
                            <p>I discovered how to create routes that handle optional parameters, adding flexibility to my routing.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Regular Expression Constraints</h3>
                            <p>I practiced applying regex constraints to ensure route parameters meet specific formats, which helps enhance security and data integrity.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">View Creation</h3>
                            <p><br> I learned how to create and return views to present information clearly to users.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Form Handling</h3>
                            <p><br>I got the basics of displaying a "Contact Us" form, preparing me for future form submissions.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Routing Best Practices</h3> 
                            <p><br>I gained insight into structuring routes logically for better organization and user experience.</p>
                        </div>
                    </div>
                </div>

                <h2 style="color: #d13469;">CHALLENGES I FACED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Understanding Route Syntax</h3> <br>
                            <p>I initially struggled with the correct syntax for defining routes in Laravel.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">View Creation Issues</h3> <br>
                            <p>I encountered difficulties linking my views properly to the routes I created.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Parameter Handling</h3>
                            <p><br>I felt confused about managing required and optional parameters effectively.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Regular Expression Constraints</h3> <br>
                            <p>Applying regex constraints to my routes was a bit challenging at first.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Redirection Logic</h3> <br>
                            <p>Figuring out the best way to implement redirection without causing a loop or error took some time.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Debugging Errors</h3>
                            <p>I faced challenges with debugging when routes didn’t work as expected, requiring me to examine my code carefully.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Styling Views</h3>
                            <p><br>I found it tricky to style the views to match the expected design while learning the best practices for Laravel.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Integrating Forms</h3> 
                            <p><br>Integrating form elements and ensuring they function correctly with my routing setup presented some hurdles.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <!--END OF CONETNT SECTION-->

@endsection