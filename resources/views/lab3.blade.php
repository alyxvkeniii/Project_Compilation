@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
    <!--CONTENT SECTION--> 
        <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="text-container cute-font">

            <section id="content-section" class="text-image-container">

                <div class="section-title-container"> <br>
                    <h2 class="section-title">LABORATORY 3 - Layout</h2>
                    <p>In this lab, I worked on creating a layout file for my Laravel project, defining its basic HTML structure, and then creating views that extend this layout. I also updated the routes to return the appropriate views.</p>
                </div>

                <section id= "content-section" class="wrapper">
                    <div class="container">
                        <input type="radio" name="slide" id="c1" checked>
                        <label for="c1" class="card">
                            <div class="row">
                                <div class="icon">1</div>
                                <div class="description">
                                    <h4>Components Folder</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="c2" checked>
                        <label for="c2" class="card">
                            <div class="row">
                                <div class="icon">2</div>
                                <div class="description">
                                    <h4>HTML Structure in Layout File</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="c3" checked>
                        <label for="c3" class="card">
                            <div class="row">
                                <div class="icon">3</div>
                                <div class="description">
                                    <h4>Extending the layout file</h4>
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="c4" checked>
                        <label for="c4" class="card">
                            <div class="row">
                                <div class="icon">4</div>
                                <div class="description">
                                    <h4>Updating Route</h4>
                                </div>
                            </div>
                        </label>
                    </div>
                </section>

                <h2 style="color: #d13469;">WHAT I HAVE LEARNED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Creating a Layout File</h3> <br>
                            <p>I learned how to organize my views by creating a layout file in the "Components" folder, which helps in maintaining a consistent structure across my application.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Defining Basic HTML Structure</h3> <br>
                            <p></p>I figured out how to set up the basic HTML structure in Layout.blade.php, including sections for the head, navigation, and footer.
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Extending Layouts</h3><br>
                            <p>I discovered how each view file can extend the layout file, allowing me to insert page-specific content while keeping a uniform layout.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Using Blade Syntax</h3> <br>
                            <p>I practiced using Blade syntax to include dynamic content in my views, making my application more flexible and easier to manage.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Creating Multiple Views</h3>
                            <p> I created three different Blade files that utilize the layout, helping me understand how to structure content for various pages.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Updating Routes</h3>
                            <p><br>I updated the routes/web.php file to define routes that return my views, which is essential for linking everything together.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Organizing Views</h3>
                            <p><br>I learned the importance of organizing my views into separate files for better readability and maintenance.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Separation of Concerns</h3> 
                            <p><br> I appreciated how separating layout and content promotes better code organization and simplifies updates in the future.</p>
                        </div>
                    </div>
                </div>

                <h2 style="color: #d13469;">CHALLENGES I FACED</h2>
                <div style="background: linear-gradient(135deg, #ffe6f3, #fffbc5, #ffe6f3);" class="grid-container">
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Double Content of our web</h3> <br>
                            <p>We used both section and x-layout in the views. This caused the content to appear twice on the web pages.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Different CSS Styles in every Blade View</h3> <br>
                            <p>We weren’t sure how to apply different styles for each page since the header is only in one place which is in the layout. If we used that every blade view, we have  the same css style in which we don’t want to happen.</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Linking Views</h3>
                            <p><br> Linking my views back to the layout and ensuring they displayed correctly required some troubleshooting.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Blade Syntax</h3> <br>
                            <p>I found it challenging to fully grasp Blade syntax and how to use it effectively in my views.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Updating Routes</h3> <br>
                            <p>I encountered difficulties in updating the routes to properly return my newly created views.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Maintaining Consistency</h3>
                            <p>Keeping a consistent style and structure across different views while using the layout was tricky at first.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Learning Curve</h3>
                            <p><br>Adapting to the Laravel framework and understanding its conventions required a steep learning curve.</p>
                        </div>
                    </div>
        
                    <div class="box">
                        <div class="box-text">
                            <h3 style="color: #d13469;">Debugging</h3> 
                            <p><br>I faced issues with debugging when routes didn’t return the expected views, necessitating careful review of my code.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    <!--END OF CONTENT SECTION-->
@endsection