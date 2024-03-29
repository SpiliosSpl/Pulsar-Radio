<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Listen to Pulsar Web Radio for a diverse mix of music, talk shows and exclusive interviews. Tune in and join the Pulsar community.">
    <meta name="keywords" content="Radio, Web Player, Music, Diverse">
    <title>Pulsar Radio</title>

    <!--Twitter:-->
    <!--
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    -->
    <!--FB - linkedin meta -->
    <!--
    <meta property="og:title" content="Pulsar Radio">
    <meta property="og:url" content="index.html">
    <meta property="og:image" content="Pulsar.jpg">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Tune in to Pulsar Radio">
    -->

    <link rel="stylesheet" href="styles/styles_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="favicon.ico">
    <!----- font ----->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!----- font ----->
    <script src="https://kit.fontawesome.com/4c18a30d29.js" crossorigin="anonymous"></script>
    <script src="jsfile.js"></script>
</head>
<body>
    <?php include("pages/nav.html") ?>
    <main>
        <div class="logo">
            <a href=""><img src="logo/Pulsar-removebg.png" alt="Pulsar Radio logo"></a>
        </div>
        <div id="player">
        <video controls autoplay name="media">
            <source src="http://62.217.73.168:41999/pulsar%22%3E">
        </video>
        </div>
    </main>
    <?php include("pages/footer.html") ?>
</body>
</html>