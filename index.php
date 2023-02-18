<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mario Pixels</title>
    <link rel="stylesheet" href="asset/css/style.min.css">
</head>
<body>
    <table>
    <?php
    //Notes taille : Largeur tableau -> 18 (16 utilisés, reste bleu) / Hauteur tableau -> 16

    //définition de l'array général combinant toutes les lignes

    $l1 = ["b","b","b","b","b","b","b","b","b","b","b","b","b","b","j","j","j","b"];
    $l2 = ["b","b","b","b","b","b","b","r","r","r","r","r","b","b","j","j","j","b"];
    $l3 = ["b","b","b","b","b","b","r","r","r","r","r","r","r","r","r","j","j","b"];
    $l4 = ["b","b","b","b","b","b","m","m","m","j","j","m","j","b","m","m","m","b"];
    $l5 = ["b","b","b","b","b","m","j","m","j","j","j","m","j","j","j","m","m","b"];
    $l6 = ["b","b","b","b","b","m","j","m","m","j","j","j","m","j","j","j","m","b"];
    $l7 = ["b","b","b","b","b","m","m","j","j","j","j","j","m","m","m","m","b","b"];
    $l8 = ["b","b","b","b","b","b","b","j","j","j","j","j","j","j","m","b","b","b"];
    $l9 = ["b","b","b","m","m","m","m","m","r","m","m","m","r","m","b","b","b","b"];
    $l10 = ["b","b","m","m","m","m","m","m","m","r","m","m","m","r","b","b","b","b"];
    $l11 = ["b","j","j","m","m","m","m","m","m","r","r","r","r","r","b","b","m","b"];
    $l12 = ["b","j","j","j","b","b","r","m","r","r","r","j","r","j","r","m","m","b"];
    $l13 = ["b","b","j","b","m","b","r","r","r","r","r","r","r","r","r","m","m","b"];
    $l14 = ["b","b","b","m","m","m","r","r","r","r","r","r","r","r","r","m","m","b"];
    $l15 = ["b","b","m","m","m","r","r","r","r","r","r","r","b","b","b","b","b","b"];
    $l16 = ["b","b","m","b","r","r","r","r","b","b","b","b","b","b","b","b","b","b"];

    $arrayGeneral = [$l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $l9, $l10, $l11, $l12, $l13, $l14, $l15, $l16];

    //boucle permettant d'attribuer les classes aux td
    foreach ($arrayGeneral as $key => $value) {
        echo "<tr>";
        foreach ($arrayGeneral[$key] as $cle => $valeur) {
            if($valeur == "r"){
                echo "<td class='r'></td>";
            } else if($valeur == "j") {
                echo "<td class = 'j'></td>";
            } else if($valeur == "m") {
                echo "<td class = 'm'></td>";
            } else {
                echo "<td class = 'b'></td>";
            }
        }
        echo "</tr>";
    }
        
    ?>
    </table>
</body>
</html>