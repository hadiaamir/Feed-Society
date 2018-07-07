<?php

    ob_start();
    session_start();

    include 'header.php';
    require_once 'dbconnect.php';

    if (isset($_POST['btn-login'])) 
    {
        $email = $_POST['email'];
        $upass = $_POST['pass'];

        $password = hash('sha256', $upass); // password hashing using SHA256
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email= ?");
        $stmt->bind_param("s", $email);
        /* execute query */
        $stmt->execute();
        //get result
        $res = $stmt->get_result();
        $stmt->close();

        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

        $count = $res->num_rows;
        if ($count == 1 && $row['password'] == $password) 
        {
            $_SESSION['user'] = $row['id'];
            header("Location: index.php");
        } 
        elseif ($count == 1) 
        {
            $errMSG = "Wrong password";
        } 
        else $errMSG = "User not found";
    }

?>

<section class="user-container">

    <div id="user-form">
        <form method="post" autocomplete="off">

            <div class="col-md-12">

                <div class="form-group">
                    <h2 class="">Welcome Back!</h2>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <?php
                if (isset($errMSG)) 
                {

                ?>
                    <div class="form-group">
                        <div class="alert alert-danger">
                            <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                        </div>
                    </div>
                <?php
                }
                ?>

                <div class="form-group">
                    <div class="login-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" name="email" class="form-control" placeholder="Email" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="login-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required/>
                    </div>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary" name="btn-login">Login</button>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <div class="form-group">
                    <a href="register.php" type="button" class="btn btn-block btn-danger"
                       name="btn-login">Register</a>
                </div>

            </div>

        </form>

    </section>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="Assets/Action/bootstrap.min.js"></script>
</body>
</html>


<?php 

    include "footer.php";

?>