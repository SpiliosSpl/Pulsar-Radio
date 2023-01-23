<?php
    include_once 'header.php';
?>

<div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h1 class="text-center">Login</h1>
                <form class="mt-5" action="includes/login.inc.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="uid" class="form-control" id="exampleInputUserName" aria-describedby="username" placeholder="Username/Email...">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="pwd" class="form-control" id="exampleInputPassword1" placeholder="Password...">
                    </div>
                    <button class="btn btn-primary mx-auto d-block" type="submit" name="submit" class="btn btn-primary">Login</button>
                  </form>
                  <?php 
        if(isset($_GET["error"])){
            if($_GET["error"] == "emptyinput"){
            echo "<p>Fill in all fields<p/>";
            }
            else if($_GET["error"] == "wronglogin"){
                echo "<p>Incorrect login information!<p/>";
            }
        }
    ?>
            </div>
        </div>
    </div>
<?php
include_once 'footer.php';
?>