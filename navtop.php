
<?php
// session startas
session_start();
// not logged in goes to navbar.php annars navbarlogin.php
if (!isset($_SESSION['loggedin'])) {
    include 'navbar.php';
}
else {
    include 'navbarlogin.php';
}


?>