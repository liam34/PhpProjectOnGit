<?php
include("includes/config.php");

//session clear
//session_destroy();

if(isset($_SESSION['$userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
}

else {
    header("Location: register.php");
}

?>


<head>
    <title>Document</title>
</head>
<body>
    <p>
    Registration Complete!
    </p>
</body>
</html>