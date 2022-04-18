<?php
    session_start();
    $author = $_SESSION['currentAuthor'];
    echo $author;
?>
