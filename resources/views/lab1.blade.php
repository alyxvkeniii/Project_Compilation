@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
    <!--CONTENT SECTION--> 
        <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="text-container cute-font">

            <section id="content-section" class="text-image-container">

                <div class="section-title-container"> <br>
                    <h2 class="section-title">LABORATORY 1 - Set Up</h2>
                    <p>In this lab exercise, I set up a Laravel project, installed its dependencies, and initialized a Git repository. I configured the .env file with database details and created three essential views: homepage, about, and content. I also defined routes to navigate between these views. Additionally, I explored and documented the key directories and files in Laravel, taking screenshots of each step from installation to page navigation. This lab is a great stepping stone for learning how to create my first project using Herd.</p>
                </div>

                <section id= "content-section" class="wrapper">
                    <div class="container">
                        <input type="radio" name="slide" id="a1" checked>
                        <label for="a1" class="card">
                            <div class="row">
                                <div class="icon">1</div>
                                <div class="description">
                                    <h4>Herd Setup</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="a2" checked>
                        <label for="a2" class="card">
                            <div class="row">
                                <div class="icon">2</div>
                                <div class="description">
                                    <h4>Uploading in Github</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="a3" checked>
                        <label for="a3" class="card">
                            <div class="row">
                                <div class="icon">3</div>
                                <div class="description">
                                    <h4>Database Connection</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="a4" checked>
                        <label for="a4" class="card">
                            <div class="row">
                                <div class="icon">4</div>
                                <div class="description">
                                    <h4>Views</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="a5" checked>
                        <label for="a5" class="card">
                            <div class="row">
                                <div class="icon">5</div>
                                <div class="description">
                                    <h4>Routes</h4>
                                </div>
                            </div>
                        </label>
                    </div>
                </section>

                <h2 style="color: red;">WHAT I HAVE LEARNED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Laravel Installation</h3> <br>
                            <p>I learned how to install Laravel and set up all the necessary dependencies.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Initializing a Project</h3> <br>
                            <p> I figured out how to create a new Laravel project and put it in a Git repository for version control.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Configuring the Environment</h3> <br>
                            <p>I got to configure the .env file to include database connection details.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Creating Views</h3> <br>
                            <p>I created three views like the homepage, about, and content to structure the front-end of the project.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Setting Up Routes</h3>
                            <p>I set up routes so I could navigate between the different views I created.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Understanding the Project Structure</h3>
                            <p><br>I explored and documented the key directories and files in Laravel, learning what each one is used for.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Version Control with Git</h3>
                            <p><br>I gained experience in committing changes and managing my project with Git.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Documenting My Work</h3> 
                            <p><br>I learned how to effectively document the process and compile it into a PDF.</p>
                        </div>
                    </div>
                </div>

                <h2 style="color: red;">CHALLENGES I FACED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Laravel Installation</h3> <br>
                            <p>Ensuring Laravel and its dependencies were installed without issues, particularly with compatibility.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Composer Installation</h3> <br>
                            <p> Figuring out how to manage dependencies using Composer.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Setting Up Git</h3>
                            <p><br>Initializing and managing the Git repository, including commits and branches, was a bit challenging.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Configuring the Environment</h3> <br>
                            <p>Making sure the database connection details were accurate to avoid connection problems.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Creating Views</h3> <br>
                            <p>Designing and formatting views using Blade templates without errors in the layout.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Setting Up Routes</h3>
                            <p>Setting up routes correctly, ensuring no 404 errors or mismatches.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Exploring Laravel’s Directory Structure</h3>
                            <p><br>Understanding the purpose of each directory and file within the Laravel project.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Documenting the Process</h3> 
                            <p><br>Taking screenshots and organizing them into a well-documented PDF took more time than expected.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <!--END OF CONETNT SECTION-->

@endsection