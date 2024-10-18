@extends('Components.layout')

@section('additional-styles')
<link rel="stylesheet" href="/css/styles.css">
@endsection

@section('content')
        <!-- ABOUT SECTION --> 
        <section id="about-section">
            <div class="image-container left" style="color: #6b0024;">
                <img src="/assets/images/WDPC.png" alt="Left Image">
                    <div class="text-container cute-font">
                        <h2 style="color: #d13469;">About the Compilation Project!</h2>
                        <p>Hi! I'm <b>Ken Anne</b>, and I'm excited to share with you my journey through these Laravel laboratories. In this project, I'll walk you through the basics 
                            of setting up Laravel, including creating projects, setting up databases, and working with views, routes, and middleware. Throughout these labs, 
                            I've learned how to structure a Laravel project, handle routes with and without parameters, and even use middleware to manage access control. 
                            Each task helped me dive deeper into Laravel's powerful features, and I'm excited to document and share my progress and experience with you!</p>
                    </div>
            </div>
    
            <div class="image-container right">
                <img src="/assets/images/me.png" alt="Right Image">
            </div>
        </section>
        <!--END OF ABOUT SECTION -->
        
        <!-- BACKGROUND MUSIC -->
        <audio id="background-music" src="/css/assets/audio/mizutama.mp3" preload="auto" loop></audio
@endsection