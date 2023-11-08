<?php

require_once __DIR__ . "/model/Movie.php";

$movies = [

    new Movie (
        'img/Biancaneve.jpg', 
        'Biancaneve e i sette nani', 
        'il primo lungometraggio animato della storia realizzato in animazione tradizionale, uscito nelle sale cinematografiche nel 1937. Quando nel 1934 Walt Disney rese pubblico al New York Times questo progetto, tutti lo definirono Disney’s Folly, ovvero “la follia di Disney”.'
    ),

    new Movie (
        'img/Pinocchio.jpg',
        'Pinocchio',
        'uscito al cinema nel 1940 e penalizzato nella sua diffusione dallo scoppio della Seconda Guerra Mondiale. Come il precedente film, anche Pinocchio è basato su una fiaba: l’ispirazione è in questo caso il romanzo per ragazzi di fine 800 Le avventure di Pinocchio di Carlo Collodi.'
    ),

    new Movie (
        'img/Fantasia.jpg',
        'Fantasia',
        'il rivoluzionario e ambizioso film del 1940, realizzato in animazione e live action, in cui musica e immagine si fondono in una sinergia perfetta. Il design moderno di Topolino fu concepito appositamente per l’episodio L’Apprendista Stregone. Walt Disney avrebbe voluto rinnovare all’incirca ogni tre anni il film, aggiungendo sempre nuovi segmenti, ma il risultato non soddisfacente al botteghino lo fece desistere.'
    ),

    new Movie (
        'img/Dumbo.jpg',
        'Dumbo',
        'il film, uscito nel 1941, è stato prodotto con poco budget per recuperare le perdite finanziarie successive a Fantasia. È una favola sulla diversità con protagonista il celebre elefantino con le orecchie giganti. Con i suoi 64 minuti di durata è il lungometraggio più breve della lista dei Classici Disney. Il film è tornato in auge dopo recenti controversie.'
    ),

    new Movie (
        'img/Bambi.jpg',
        'Bambi',
        'del 1942 è l’ultimo film dell’Epoca d’oro. È basato sul libro Bambi, la vita di un capriolo di Felix Salten ed era nei progetti di Walt Disney già dopo Biancaneve, ma per problemi di soggetto e animazione realistica è stato posticipato in favore di Pinocchio.'
    ),

    new Movie (
        'img/Saludos.jpg',
        'Saludos Amigos',
        'uscito nelle sale cinematografiche nel 1942 è il primo dei sei film a episodi che compongono l’epoca di guerra. Grazie alla sua durata di soli 42 minuti, il mediometraggio animato detiene il primato di Classico Disney più breve. Consiste in una sorta di diario di viaggio in giro per il Sudamerica tra episodi in animazione tradizionale e spezzoni in live action. In uno dei cortometraggi, Aquerela do Brazil, fa la sua prima apparizione José Carioca.'
    ),

    new Movie (
        'img/Itrecaballeros.jpg',
        'I tre caballeros',
        'uscito nel 1945, è il secondo film nato per favorire l’amicizia tra gli Stati del continente americano. Anche qui gli episodi mostrano scene ambientati in vari Paesi del Centro e Sudamerica il cui filo conduttore sono i regali di Paperino, inviatigli – tra gli altri – dai suoi amici Panchito Pistoles e José Carioca, con cui forma il trio dei Tre Caballeros (che per poco non sono stati i Quattro Caballeros).'
    ),

    new Movie (
        'img/Bongo.jpg',
        'Bongo e i tre avventurieri',
        'del 1947 è diviso in due segmenti: Bongo, la storia di un orsacchiotto scappato dal circo che vorrebbe vivere libero nella natura, e Topolino e il fagiolo magico, l’adattamento del racconto popolare Jack e la pianta di fagioli con protagonisti Topolino, Paperino e Pippo. L’ultimo segmento è narrato dal ventriloquo Edgar Bergen con l’aiuto dei suoi pupazzi Charlie e Mortimer.'
    ),

    new Movie (
        'img/Leavventure.jpg',
        'Le avventure di Ichabod e Mr. Toad',
        'è un film del 1949 diviso in due segmenti, basati su Il vento tra i salici e La leggenda di Sleepy Hollow. È l’ultimo film a episodi, che pone fine al ciclo dell’Epoca di guerra.'
    ),

    new Movie (
        'img/Cenerentola.jpg',
        'Cenerentola',
        'del 1950 è il primo film nella lista dei Classici Disney a includere canzoni protette da copyright, detenuto dalla società Walt Disney Music Company. Le origini della fiaba di Charles Perrault da cui è tratto il lungometraggio derivano da antichi racconti popolari, riadattati nel corso del tempo da numerosi novellieri.'
    )
];

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>

    <link rel="stylesheet" href="style.css">

    <title>Film Disney</title>

  </head>

  <body class="sfondo">
  <div class=" d-flex flex-md-wrap justify-content-center">
   <?php foreach ($movies as $movie): ?>
    <div class="card border m-4" style="width: 20rem;">
        <img src="<?php echo $movie->image; ?>" class="card-img-top" alt="">
        <div class="card-body colore">
            <h3 class="card-title text-center"><?php echo $movie->title; ?></h3>
            <hr>
            <p class="card-text"><?php echo $movie->description; ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>

  </body>
</html>