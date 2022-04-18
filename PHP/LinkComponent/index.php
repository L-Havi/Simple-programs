<?php

ini_set('log_error', '1');
ini_set('error_log', 'libraryapplicationerrors.log');  

$links = [
    [0, 'Tiikeripiirakka Omarkuorutteella', 'https://i.pinimg.com/474x/9d/bf/38/9dbf3828455d6286bc07a5784a27cc61.jpg', 'http://kirsinkeittio.blogspot.com/2017/03/tiikeripiirakka-omar-kuorrutteella.html?spref=pi']
];


function getLinkComponent($link){
    return "<div class=\"component\">".
    "<div class=\"container\">".
    "<img src=".$link[2]." alt=\"".$link[1]."\" style=\"width:300px\">".
    "<a href=".$link[3]."><button class=\"btn\">kirsinkeittiö</button></a>".
    "<button class=\"empty1\">-</button>".
    "<button class=\"empty2\">...</button>".
    "<button class=\"tallenna\">Tallenna</button>".
    "</div>".
    "<div class=\"otsikko\">".
    "<h1>".$link[1]."</h1>".
    "</div>".
    "</div>";
}


function printLinkComponent($linkComponent){
    echo "<ul>";
    echo "<li>".$linkComponent."</li>";
    echo "<li>".$linkComponent."</li>";
    echo "<li>".$linkComponent."</li>";
    echo "<li>".$linkComponent."</li>";
    echo "</ul>";
}


?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tiikeripiirakka Omarkuorutteella</title>
    <link rel="stylesheet" href="tyyli.css" type='text/css'>
    </style>
</head>
<body>
<h3>Links</h3>
<?php

foreach($links as $link){
    $linkComponent = getLinkComponent($link);
    printLinkComponent($linkComponent);
}


?>
</body>
</html>
