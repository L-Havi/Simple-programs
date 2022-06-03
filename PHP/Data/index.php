<?php

ini_set('log_error', '1');
ini_set('error_log', 'libraryapplicationerrors.log');  

$books = [
    [0, 'Viisikko karkuteillä', 'Enid Blyton', 1942],
    [1, 'Pieni merenneito', 'HC Andersen', 1870],
    [2, 'Lumikki ja seitsemän kääpiötä', 'Grimm', 1720],
    [3, 'Lumikuningatar', 'HC Anderssen', 1890],
];

$authors = [
[0, 'Enid Blyton', 'Englanti', 1880],
[1, 'HC Andersen', 'Tanska', 1830],
[2, 'Grimm', 'Saksa', 1700],
];

function printBookComponent($book){
    echo "<table><tbody>";
    echo "<tr><td>Nimi</td><td><a href='index.php?bookid=".$book[0]."'>".$book[1]."</a></td></tr>";
    echo "<tr><td>Kirjailija</td><td><a href='index.php?authorid=".$book[0]."'>".$book[2]."</td></tr>";
    echo "<tr><td>Julkaisuvuosi</td><td>".$book[3]."</td></tr>";
    echo "</table>";
}

function getBookComponent($book){
    return "<table><tbody>".
    "<tr><td>Nimi</td><td><a href='index.php?bookid=".$book[0]."'>".$book[1]."</a></td></tr>".
    "<tr><td>Kirjailija</td><td><a href='index.php?authorid=".$book[0]."'>".$book[2]."</td></tr>".
    "<tr><td>Julkaisuvuosi</td><td>".$book[3]."</td></tr>".
    "</table>";
}


function printAuthorComponent($author){
    echo "<table><tbody>";
    echo "<tr><td>Nimi</td><td>".$author[1]."</td></tr>";
    echo "<tr><td>Maa</td><td>".$author[2]."</td></tr>";
    echo "<tr><td>Syntymävuosi</td><td>".$author[3]."</td></tr>";
    echo "</table>";
}

function getAuthorComponent($author){
    return "<table><tbody>".
    "<tr><td>Id</td><td>".$author[0]."</td></tr>".
    "<tr><td>Nimi</td><td>".$author[1]."</a></td></tr>".
    "<tr><td>Kirjailija</td><td>".$author[2]."</td></tr>".
    "<tr><td>Julkaisuvuosi</td><td>".$author[3]."</td></tr>".
    "</table>";
}

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Kirjalista</title>
</head>
<body>
<h3>Kirjat</h3>
<?php

foreach($books as $book){
    //printBookComponent($book);

    $bookComponent = getBookComponent($book);
    echo $bookComponent;

}

if(isset($_GET['authorid']) && ($_GET['authorid'] >= 0) && ($_GET['authorid'] <= 2)){
    $authorid = $_GET['authorid'];
    foreach($authors as $author){
        if($authorid == $author[0]){
            $authorComponent = getAuthorComponent($author);
        }
    }
    session_start();
    $_SESSION['currentAuthor'] = $authorComponent;
    header("Location: show_author.php");
    die();
}

if(isset($_GET['bookid']) && ($_GET['bookid'] >= 0) && ($_GET['bookid'] <= 3)){
    $bookid = $_GET['bookid'];
    foreach($books as $book){
        if($bookid == $book[0]){
            $bookComponent = getBookComponent($book);
        }
    }
    session_start();
    $_SESSION['currentBook'] = $bookComponent;
    header("Location: show_book.php");
    die();
}

?>
</div>
</body>
</html>
