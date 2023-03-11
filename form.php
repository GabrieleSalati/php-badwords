<?php

// PARAGRAPH PARAMETER CHECK

if (isset($_GET["paragraph"])) {
    $paragraph = $_GET["paragraph"];
} else {
    $paragraph = "";
}

$badword = $_GET["badword"];

// PARAGRAPH LENGTH

$paragraph_length = strlen($paragraph);

// CENSOR FUNCTION

$censored_paragraph = str_replace($badword, "***", $paragraph);

// CENSORED PARAGRAPH LENGTH

$censored_paragraph_length = strlen($censored_paragraph);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- BOOTSTRAP -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<p><?= $paragraph ?></p>
<h4><?= $paragraph_length ?></h4>
<p><?= $censored_paragraph ?></p>
<h4><?= $censored_paragraph_length ?></h4>
</body>
</html>