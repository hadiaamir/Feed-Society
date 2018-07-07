<?php

    include_once 'dbconnect.php';
    include 'header.php';

    if (isset($_POST['signup'])) 
    {
        $uname = trim($_POST['uname']); // get posted data and remove whitespace
        $email = trim($_POST['email']);
        $upass = trim($_POST['pass']);

        // hash password with SHA256;
        $password = hash('sha256', $upass);

        // check email exist or not
        $stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();

        $count = $result->num_rows;

        if ($count == 0) 
        { // if email is not found add user

            $stmts = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?, ?, ?)");
            $stmts->bind_param("sss", $uname, $email, $password);
            $res = $stmts->execute();//get result
            $stmts->close();

            $user_id = mysqli_insert_id($conn);
            if ($user_id > 0) 
            {
                $_SESSION['user'] = $user_id; // set session and redirect to index page
                if (isset($_SESSION['user'])) 
                {
                    print_r($_SESSION);
                    header("Location: index.php");
                    exit;
                }

            } 
            else 
            {
                $errTyp = "danger";
                $errMSG = "Something went wrong, try again";
            }
        } 
        else 
        {
            $errTyp = "warning";
            $errMSG = "Email is already used";
        }
}

?>

<div class="user-container">

    <div id="user-form">
        <form method="post" autocomplete="off">

            <div class="col-md-12">

                <div class="form-group">
                    <h2 class="">Create an account</h2>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <?php
                if (isset($errMSG)) {

                    ?>
                    <div class="form-group">
                        <div class="alert alert-<?php echo ($errTyp == "success") ? "success" : $errTyp; ?>">
                            <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                        </div>
                    </div>
                    <?php
                }
                ?>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" name="uname" class="form-control" placeholder="Enter Username" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="pass" class="form-control" placeholder="Enter Password"
                               required/>
                    </div>
                </div>

                <div class="terms">
                    <label class = "checkbox">
                         <input  type="checkbox" id="TOS" value="This">
                        <span class="checkmark"></span>
                            
                    </label>
              
                    <a  class="terms-link" href="#">I agree with
                            terms of service</a>
                 </div>
                <div class="form-group">
                    <button type="submit" class="btn    btn-block btn-primary" name="signup" id="reg">Continue</button>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <div class="form-group">
                    <a href="login.php" type="button" class="btn btn-block btn-success" name="btn-login">Sign in</a>
                </div>

            </div>

        </form>
    </div>

</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="Assets/Action/bootstrap.min.js"></script>
<script type="text/javascript" src="Assets/Action/tos.js"></script>



<?php 

    include "footer.php";

?>