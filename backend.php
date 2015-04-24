<!DOCTYPE>
<html>
<head>
    <meta charset="UTF-8">
    <title>CloudTechnolgoies</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div id="container">
    <?php

        include('source.php');

        $source = new Source('http://www.phorum.pl/', 'ISO-8859-2');
        $source->setRegex('/użytkownicy:\s*<.*?>(.*?)<.*?>/');
        echo 'Zarejestrowani użytkownicy na stronie www.phorum.pl - ' . $source->getSourcePart()[1];

    ?>

    <br><br>
    <button><a href="index.html">Back</a></button>
</div>
</body>
</html>
