<?php
    session_start();
    $_SESSION['js'] = isset($_GET['js']) && $_GET['js'] == "0" ? "0" : "1";
    header('location: /portfolio');
?>
