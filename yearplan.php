<?php
require ('abLeht/conf.php');
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Aastane plaan Tapa Katleri</title>
    <link href="css/style_year.css" rel="stylesheet" type="text/css">
</head>
<body>

<ul>
    <h1 id="tkt">Tapa Katleri Taekwondo</h1>
    <li><a href="main.php">Avaleht</a></li>
    <li><a href="information.php">Info</a></li>
    <li><a href="history.php">Ajalugu</a></li>
    <li><a href="informationstudent.php">Õpilasele</a></li>
    <li><a href="yearplan.php">Aastane plaan</a></li>
</ul>

<div id="kalender">
    <?php
    global $yhendus;
    //tabeli sisu näitamine
    $kask=$yhendus->prepare("SELECT id, kuupaev, koht, nimivoistlus FROM voistlus");
    $kask->bind_result($id, $kuupaev, $koht, $nimivoistlus);
    $kask->execute();
    echo "<table>";
    echo "<tr>
<th>Kuupäev</th>
<th>Võistluste koht</th>
<th>Võistlus</th>
</tr>";
    //fetch() - извлечение данных из набора данных
    while($kask->fetch()){
        echo "<tr>";
        echo "<td>$kuupaev</td>";
        echo "<td>$koht</td>";
        echo "<td>$nimivoistlus</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</div>

</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<!--footer-->
<footer class="footer" style="margin-top: 20px">
    <div class="container bottom_border">
        <div class="row">
            <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                <h4 class="headin5_amrc col_white_amrc pt2">Spordiklubi Tapa Katleri</h4>
                <!--headin5_amrc-->
                <p class="mb10">Tervislik, kvaliteetne ja motiveeritud eluviis läbi spordi!</p>
                <p class="mb10">Tule tegema taekwondo!</p>
            </div>
            <div class=" col-sm-4 col-md  col-6 col">
                <h4 class="headin5_amrc col_white_amrc pt2">Tapa</h4>
                <div class="textwidget"><div class="icon-block">
                        <p><i class="fa fa-envelope"></i>&nbsp; tapa.katleri@gmail.com</p>
                    </div>
                    <div class="icon-block">
                        <p><i class="fa fa-mobile"></i>&nbsp; +372 5624 6990</p>
                    </div>
                    <div class="icon-block">
                        <p><i class="fa fa-building"></i>&nbsp; Tapa Vene Gümnaasium, Nooruse 2</p>
                    </div>
                    <div class="icon-block">
                        <p><i class="fa fa-briefcase"></i>&nbsp; Spordiklubi Tapa Katleri</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
</html>