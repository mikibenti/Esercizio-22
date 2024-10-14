<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio22</title>
</head>
<body>
    <?php
        $video1 = array("titolo" => "con le clingeeeer", "idVideo" => "NOiK5Y3IPDg");
        $video2 = array("titolo" => "pack opening piu grande", "idVideo" => "EXy83qr9jrI");
        $video3 = array("titolo" => "lore benve", "idVideo" => "XXXZZWBpKvk");
        $listaVideo = array($video1,$video2,$video3);
        function inserisciVideoYoutube($video,$largPerc,$altPx) {
            echo "<h2>{$video["titolo"]}</h2><iframe style ='width: {$largPerc}%; height: {$altPx}px;' src='https://www.youtube.com/embed/{$video["idVideo"]}'></iframe>";
        }
        inserisciVideoYoutube($listaVideo[0], 50, 250);
        $largPerc = 50;
        $altPx = 250;
        foreach ($listaVideo as $video) {
            inserisciVideoYoutube($video, $largPerc, $altPx);
            $largPerc += 25;
            $altPx += 125;
        }
    ?>
</body>
</html>