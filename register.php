<?php

include("includes/config.php");
include("includes/classes/Account.php");
include("includes/classes/Constants.php");

$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Slotify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>

<body>
    <div id="background">

        <div id="loginContainer">

            <div id="inputContainer">
                <form id="loginForm" action="register.php" method="POST"><! --Comment -->
                    <h2>Login to your Account</h2>
                    <p>
                    <?php echo $account->getError(Constants::$loginFailed); ?>
                    <label for="loginUsername">Username</label>
                        <input id="loginUsername" name="loginUsername" type="text" placeholder="John Doe" required/>
                    </p>
                    <p>
                    <label for="loginPassword">Password</label>
                    <input id="password" name="loginPassword" type="password" placeholder="Your Password" required/>
                    </p>  
                    <button type="submit" name="loginButton">LOG IN</button>
                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span> 
                    </div>
                </form>
                <br>
                <br>
                <form id="registerForm" action="register.php" method="POST">
                    <h2>Create your free Account</h2>
                    <p>
                        <?php echo $account->getError(Constants::$usernameCharacters); ?>
                        <?php echo $account->getError(Constants::$usernameTaken); ?>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="e.g John Doe" value="<?php getInputValue('username') ?>" required/>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                        <label for="firstName">First Name</label>
                        <input id="firstName" name="firstName" type="text" placeholder="e.g John" value="<?php getInputValue('firstName') ?>" required/>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                        <label for="lastname">Last Name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="e.g Doe" value="<?php getInputValue('lastName') ?>" required/>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                        <?php echo $account->getError(Constants::$emailInvalid); ?>
                        <?php echo $account->getError(Constants::$emailTaken); ?>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="e.g JohnDoe@email.com" value="<?php getInputValue('email') ?>" required/>
                    </p>

                    <p>
                        <label for="email2">Confirm Email</label>
                        <input id="email2" name="email2" type="email" placeholder="e.g JohnDoe@email.com" value="<?php getInputValue('email2') ?>" required/>
                    </p>

                    <p>
                        <?php echo $account->getError(Constants::$passswordDoNotMatch); ?>
                        <?php echo $account->getError(Constants::$passswordNotAlphanumeric); ?>
                        <?php echo $account->getError(Constants::$passswordCharacters); ?>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" placeholder="Your Password" required/>
                    </p>  

                    <p>
                        <label for="password2">Confirm Password</label>
                        <input id="password2" name="password2" type="password" placeholder="Your Password" required/>
                    </p>  
                    <button type="submit" name="registerButton" >SIGN UP</button>
                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account? Log in here.</span> 
                    </div>
                </form>
            </div>
         </div>
    </div>
</body>
</html>