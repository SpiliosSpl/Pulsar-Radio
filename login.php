<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pulsar Radio | Log-In</title>

    <!--Twitter:-->
    <!--
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    -->
    <!--FB - linkedin meta -->
    <!--
    <meta property="og:title" content="Pulsar Radio">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="Pulsar.jpg">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Tune in to Pulsar Radio">
    -->

    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="favicon.ico">
    <!----- font ----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!----- font ----->
    <script src="https://kit.fontawesome.com/4c18a30d29.js" crossorigin="anonymous"></script>
    <script src="jsfile.js"></script>
</head>
<body>
    <?php include("pages/nav.html") ?>
    <main>
        <div class="logo">
            <a href="index.php"><img src="logo/Pulsar-removebg.png" alt="Pulsar Radio logo"></a>
        </div>
        <div class="form-section">
            <h2>Log-In </h2>
            <p>or <a href="javascript:void(0);" onclick="popup()">Sign-Up</a></p>
            <form action="authentication.php" method="post" class="form-container">
                <div class="label-field form_item">
                    <label class="user-label" for="user"><b><i class="fa-solid fa-user label-icon"></i></b></label>
                    <input type="text" placeholder="Username" id="user" class="field" name="user" required>
                </div>
                <div class="label-field form_item password-item">
                    <label class="pass-label" for="pass"><b><i class="fa-solid fa-lock label-icon"></i></b></label>
                    <input type="password" placeholder="Password" id="password" class="field" name="pass" required>
                    <span class="show_pass"><a href="javascript:void(0);" onclick="show_pass('password', 'pass_icon')"><i id="pass_icon" class="fa-solid fa-eye"></i></a></span>
                </div>
                <div class="pass-recovery">
                    <a href="">Forgot your password?</a>
                </div>
                <div class="form_item">
                    <button type="submit" class="btn" value="login">
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="signup-background" id="background">
            <div class="signup-section" id="signup">
                <h2>Sign-Up</h2>
                <p>Fill all fields</p>
                <a href="javascript:void(0);" onclick="close_popup()" class="close-btn"><i class="fa-solid fa-xmark"></i></a>
                <form action="authentication.php" method="post" class="form-container">
                    <div class="label-field form_item">
                        <label class="name-label" for="name"></label>
                        <input type="text" placeholder="Full Name" id="name" class="field" name="name" required>
                    </div>
                    <div class="label-field form_item">
                        <label class="email-label" for="email"></label>
                        <input type="text" placeholder="E-mail" id="email" class="field" name="email" required>
                    </div>
                    <div class="label-field form_item">
                        <label class="user-label" for="username"></label>
                        <input type="text" placeholder="Username" id="user" class="field" name="username" required>
                    </div>
                    <div class="label-field form_item password-item-signup">
                        <label class="pass-label" for="pass"></label>
                        <input type="password" placeholder="Password" id="password_new" class="field" name="pass" required>
                        <span class="show_pass_signup"><a href="javascript:void(0);" onclick="show_pass('password_new', 'pass_icon_signup')"><i id="pass_icon_signup" class="fa-solid fa-eye"></i></a></span>
                    </div>
                    <div class="label-field form_item password-item-signup">
                        <label class="pass-repeat-label" for="pass"></label>
                        <input type="password" placeholder="Repeat Password" id="password_repeat" class="field" name="pass-repeat" required>
                        <span class="show_pass_signup"><a href="javascript:void(0);" onclick="show_pass('password_repeat', 'pass_icon_signup2')"><i id="pass_icon_signup2" class="fa-solid fa-eye"></i></a></span>
                    </div>
                    <div class="form_item">
                        <button type="submit" class="btn" value="signup">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </main>
    <?php include("pages/footer.html") ?>
</body>
</html>