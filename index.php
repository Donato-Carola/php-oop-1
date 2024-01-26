<?php
include_once __DIR__ . '/Models/Movie.php';





$Movie =[
        new Movie('https://i.ebayimg.com/images/g/OBoAAOSw2vBfbDFb/s-l1600.jpg', 'Avengers', 'Action Movie', 
               'I leggendari supereroi Iron Man, Hulk, Thor, Capitan America, Occhio di Falco e la Vedova Nera vengono reclutati da un\' agenzia 
               governativa segreta per combattere un nemico inatteso che minaccia la sicurezza della Terra.'),

        new Movie('https://pad.mymovies.it/filmclub/2012/08/035/locandina.jpg', 'Avengers  - Age of ultron', 'Action Movie', 
        'Gli Avengers si ricongiungono allo scopo di unire le proprie forze a quelle dei nuovi arrivati Quicksilver e Scarlet. 
        Il loro obiettivo è sconfiggere il robot malefico chiamato Ultron, creato da Tony Stark con intenzioni pacifiche e poi 
        trasformato in una macchina assetata di sangue.')


        ] 


?>






<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body>
    <header class="text-center text-uppercase p-4 container ">
        <h1>movie</h1>
    </header>
    <main class="container ">
        <section class="row">

            <?php foreach ($Movie as $movie) { ?>
                <div class="col-sm-12 col-md-6 col-lg-3 ">
                    <div class="card mb-3" >
                        <img src="<?php echo $movie->img; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $movie->title; ?></h5>
                            <h5 class="card-text"><?php echo $movie->getTrama(); ?></h5>
                            <p><?php echo $movie->description; ?></p>
                        </div>
                    </div>

                </div>

            <?php } ?>
        </section>

    </main>
</body>

</html>