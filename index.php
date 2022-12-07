    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="images/logo.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>FreeKey 2.0</title>
    </head>

    <body>
        <header>
            <div class="logo"><img src="images/logo.png" alt="Logo">
                <p class="text-small">Noisy.io</p>
            </div>
            <nav class="top-nav">
                <div class="links">
                    <a href="#home">home</a>
                    <a href="#feature">features</a>
                    <a href="#">pricing</a>
                    <a href="terms.html">terms</a>
                </div>
                <div class="sign-in">
                    <a href="./Pages/login.php" class="login-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        sign in | <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <!-- INTRO SECTION STARTS -->
            <div id="home"></div>
            <section id="intro">
                <div class="description">
                    <!-- optional: documentation add in future-->
                    <p class="text-extra-large">Authentication system for .NET</p>
                    <p class="text-small">Best sites for secure connection ,Very secure authentication system, free and easy
                        to integrate into your applications, created by programmers for programmers.</p>
                    <div class="sign-in">
                        <a href="#" class="login-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            get started
                        </a>
                    </div>
                </div>
                <div class="intro-img">
                    <img src="images/main.png" alt="">
                </div>
            </section>
            <!--   INTRO SECTION ENDS   -->
            <!-- ---------------------- -->
            <!-- FEATURE SECTION STARTS -->
            <p class="text-large" style="margin: 80px; font-size: 2rem; font-weight: 500;" id="feature">
                FEATURES</p>
            <section class="features">
                <div class="grid-sections">
                    <img src="images/user-lock.png">
                    <p class="feature-title text-large">Secure</p>
                    <p class="feature-description text-small">We work hard to make our system as secure as possible and keep
                        your
                        product out of the hands of hackers.</p>
                </div>
                <div class="grid-sections">
                    <img src="images/saving.png">
                    <p class="feature-title text-large">Affordable</p>
                    <p class="feature-description text-small">Although we do everything for you, you still have full
                        control, you can create, delete, edit variables, users and much more in one click from the control
                        panel.</p>
                </div>
                <div class="grid-sections">
                    <img src="images/setting.png">
                    <p class="feature-title text-large">Easy to integrate</p>
                    <p class="feature-description text-small">It will take you less than 2 minutes to integrate our system
                        to your program and be able to manage your licenses, easy, don't you think?</p>
                </div>
                <div class="grid-sections">
                    <img src="images/cloud.png">
                    <p class="feature-title text-large">Cloud SED</p>
                    <p class="feature-description text-small">Your data and your clients data are very well stored in our
                        servers, encrypted and safely stored to keep it away from possible hackers.</p>
                </div>
                <div class="grid-sections">
                    <img src="images/rocket.png">
                    <p class="feature-title text-large">High level security</p>
                    <p class="feature-description text-small">Client-server communication is always kept military-grade
                        encrypted and client-side checksum, making it impossible for potential attackers to bypass login.
                    </p>
                </div>
                <div class="grid-sections">
                    <img src="images/key.png">
                    <p class="feature-title text-large">API RESTful</p>
                    <p class="feature-description text-small">We have multiple APIs so you can control your application from
                        outside the panel in a safe and simple way, documentation: </p>
                </div>
            </section>
            <p class="text-large" style="margin: 80px; font-size: 2rem; font-weight: 500;">
                TALK TO US</p>
            <section class="talk-to-us">
                <p class="text-extra-large">Suggestions or Help</p>
                <p class="text-small">If you have any suggestions or need help?, you can send us a message from</p>
                <a href="#" class="text-small">here on
                    discord!</a>
            </section>
        </main>
        <footer>
            <p class="company-name text-large">&#169;NOISY.io</p>
            <div class="links">
                <a href="#"><img src="images/discord.png" alt=""></a>
                <a href="#"><img src="images/email.png" alt=""></a>
            </div>
        </footer>
        <script type="text/javascript">
            window.addEventListener("scroll", function() {
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrollY > 0);
            })
        </script>
    </body>

    </html>