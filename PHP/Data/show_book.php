<?php
    session_start();
    $book = $_SESSION['currentBook'];
    echo $book;
?>
