<?php
if (!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION["user"])) {
    unset($_SESSION);
    session_destroy();
    header("Location: ./view/index.php");

}

?>

