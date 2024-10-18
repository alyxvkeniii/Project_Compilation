<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Compilation Verification</title>
    
        <!-- Google Font link here -->
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/assets/css/login.css">
    </head>

    <body>

        <!-- HEADER -->
        <header>
    
            <div class="logo">
                <img src="/assets/images/logo.png" alt="WDPC Logo">
            </div>

        </header>
        <!-- END OF HEADER -->
        <main>
            <div class="cat-container-wrapper">
                <!-- Login Form Container -->
                <div class="login-container">
                    <div class="cat-holder">
                        <img src="/assets/images/kit.png" alt="Cat holding the login container" class="cat-image">
                    </div>
                    <h2>WebDev Project Access</h2>
            
                    <form action="{{ route('age.verify') }}" method="POST" class="age-verification-form">
                        @csrf
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username" 
                            pattern="[A-Za-z]*" 
                            title="Only alphabetic characters (a-z, A-Z) are allowed." 
                            placeholder="Enter username (optional)">
                        <label for="age">Please Type your age:</label>
                        <input type="number" name="age" id="age" required min="1" class="age-input">
                        <button type="submit" class="submit-btn">Please Access</button>
                    </form>
                <!-- End of Login Form Container -->
                </div>
            </div>
        </main>

        @if ($errors->has('age'))
            <div class="error-message">
                {{ $errors->first('age') }}
            </div>
        @endif

    </body>
</html>