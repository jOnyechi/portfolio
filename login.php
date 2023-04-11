<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects: Jacob Onyechi Portfolio</title>
    <!--CSS FILES FOR MAIN WEBSITE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/reset.css">
    <link rel="stylesheet" href="/portfolio/css/main.css">
    <link rel="stylesheet" href="/portfolio/css/login.css">
    <!--CSS FILES FOR MOBILE VIEW-->
    <link rel="stylesheet" href="/portfolio/css/mobile-version/main.css">
    <link rel="stylesheet" href="/portfolio/css/mobile-version/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />">
    <!--<link rel="stylesheet" href="/portfolio/resources/fontawesome/fontawesome-free-6.3.0-web/css/all.min.css">-->
    <link rel="shortcut icon" href="/portfolio/resources/images/favicon-new.png" type="image/x-icon">
</head>
<body>
    <!-- website header -->
    <?php
        include("header.php");
    ?>
    <main>
        <div class="container">
            <div id="login" class="form-container hide">
                <form action="" method="post" autocomplete="off">
                    <div class="copy">
                        <h2>Login</h2>
                        <p>Sign for the latest content and exlusive look into new projects</p>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email-login" placeholder="Email">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password-login" placeholder="Password">                        
                        <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="form-links">
                        <a href="#">Not registered? Sign up today.</a>
                    </div>
                    <button class="cta">Login</button>
                </form>
            </div>
            <div id="sign-up" class="form-container ">
                <form action="" method="post" autocomplete="off">
                    <div class="copy">
                        <h2>Sign Up</h2>
                        <p>Sign for the latest content and exlusive look into new projects</p>
                    </div>
                    <div class="input-container">
                        <input type="email" name="email-sign-up" placeholder="Email">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                    </div>
                    <div class="input-container">
                        <input type="password" name="password-sign-up" placeholder="Password">                        
                        <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="input-container">
                        <input type="password" name="con-password-sign-up"  placeholder="Confirm Password">                        
                        <i class="fa-solid fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="form-links">
                        <a href="#">Already have an account?</a>
                        <a href="#">Recover Password</a>
                    </div>
                    
                    <button class="cta">Sign Up</button>
                    
                </form>
            </div>
        </div>
    </main>
    <?php
        include('footer.php')
    ?>
    <script src="scripts/main.js"></script>
</body>
</html>