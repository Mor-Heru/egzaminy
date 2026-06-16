<?php
    header("Refresh: 10");
    $conn=mysqli_connect("localhost","root","","opony");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPONY</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <aside>
            <?php
            $qw="SELECT * FROM opony ORDER BY cena ASC LIMIT 10;";
            $que=mysqli_query($conn,$qw);
            while($row=mysqli_fetch_array($que)){
                echo '<section class="opona">';
                if($row["sezon"]=="letnia"){
                    echo '<img src="lato.png">';
                }
                elseif($row["sezon"]=="zimowa"){
                    echo '<img src="zima.png">';
                }
                else{
                    echo '<img src="uniwer.png">';
                }
                echo '<h4>Opona: '.$row["producent"].' '.$row["model"].'</h4>';
                echo '<h3>Cena: '.$row["cena"].'</h3>';
                echo '</section>';
            }
            ?>
            <p><a href="https://opona.pl/">więcej ofert</a></p>
        </aside>
        <section class="kontener">
            <section class="sekcja1">
                <img src="opona.png">
                <h2>Opona dnia</h2>
                <?php
                $qw="SELECT producent, model,sezon,cena FROM opony where nr_kat =9;";
                $que=mysqli_query($conn,$qw);
                while($row=mysqli_fetch_array($que)){
                    echo '<h2>'.$row["producent"].' model '.$row["model"].'</h2>';
                    echo '<h2>Sezon: '.$row["sezon"].'</h2>';
                    echo '<h2>Tylko '.$row["cena"].'</h2>';
                }
                ?>
            </section>
            <section class="sekcja2">
                <h2>Najnowsze zamówienie</h2>
                <?php
                $qw="SELECT id_zam, ilosc,model,cena FROM zamowienie join opony on zamowienie.nr_kat=opony.nr_kat order by rand() limit 1;";
                $que=mysqli_query($conn,$qw);
                while($row=mysqli_fetch_array($que)){
                    echo '<h2>'.$row["id_zam"].' '.$row["ilosc"].' sztuki modelu '.$row["model"].'</h2>';
                    echo '<h2>Wartość zamówienia '.$row["ilosc"]*$row["ilosc"].' zł</h2>';
                }
                ?>
            </section>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 0000</p>
    </footer>
</body>
</html>
<?php
mysqli_close($conn);
?>