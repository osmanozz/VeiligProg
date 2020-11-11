<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <input type="text" name="zoekopdracht" placeholder="Zoekopdracht" required>
        <input type="submit" value="Zoek">

    </form>
    <font color="blue">                                     <!-- met de font color blue wordt gprintte teksten blauw -->
    Coole website <script>alert("XSS voorbeeld")</script>?  <!-- Hier wordt een alert verschijnt met de tekst "XSS voorbeeld"-->
                                                            <!-- En de de tekst coole website verschijnt voor mijn echo -->
                                                            <!-- OPDR3 == Met htmlspeacialchars kan je XSS injecties voorkomen -->
    
</body>
</html>

<?php

$zoekopdracht = $_GET['zoekopdracht'];
$zoekopdracht = htmlspecialchars($zoekopdracht);

if (isset($zoekopdracht)) {
    echo "De zoekopdracht is:" . $zoekopdracht . "<br>" . "Geen resultaat gevonden!";
} 


?>