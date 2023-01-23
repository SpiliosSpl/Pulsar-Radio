<?php
    include_once 'header.php';
?>

<div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h1 class="text-center">Sign Up</h1>
                <form class="mt-5" action="includes/signup.inc.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" id="exampleInputFullName" aria-describedby="fullname"   
                         placeholder="Full name...">
                    </div>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" 
                      placeholder="Email...">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="uid" class="form-control" id="exampleInputUserName" aria-describedby="username" 
                         placeholder="Username...">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password...">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="pwdrepeat" class="form-control" id="exampleInputPassword2" placeholder="Repeat password...">
                      </div>

                    <button class="btn btn-primary mx-auto d-block" type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                  </form>
                  <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields<p/>";
            }
            else if($_GET["error"] == "invaliduid"){
                echo "<p>Choose a proper Username<p/>";
            }
            else if($_GET["error"] == "invalidemail"){
                echo "<p>Choose a proper Email<p/>";
            }
            else if($_GET["error"] == "passwordsdontmatch"){
                echo "<p>Passwords doesn't match!<p/>";
            }
            else if($_GET["error"] == "usernametaken"){
                echo "<p>Username already taken!<p/>";
            }
            else if($_GET["error"] == "stmtfailed"){
                echo "<p>Something went wrong, try again!<p/>";
            }
            else if($_GET["error"] == "none"){
                echo "<p>You have signed up!<p/>";
            }

        }
    ?>
            </div>
        </div>
    </div>



<?php
include_once 'footer.php';
?>