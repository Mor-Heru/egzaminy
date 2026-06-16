<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="shortcut icon" href="obraz2.png" type="image/x-icon">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <?php
            $conn=mysqli_connect("localhost","root","","medica");
            $qw1="SELECT nazwa,cena,opis FROM `abonamenty`;";
            $res=mysqli_query($conn,$qw1);
            while($row=mysqli_fetch_row($res)){
                echo "<h3>Pakiet $row[0] - cena $row[1]</h3><p>$row[2]</p>";
            }
        ?>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
            <h2>Standardowy</h2>
            <ul>
            <?php
                $conn=mysqli_connect("localhost","root","","medica");
                $id=1;
                $qw3="SELECT cechy.cecha FROM abonamenty join szczegolyabonamentu on abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy on szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id=$id;";
                $res=mysqli_query($conn,$qw3);
                while($row=mysqli_fetch_row($res)){
                    echo "<li>$row[0]</li>";
                }
                mysqli_close($conn);
            ?>
            </ul>
        </section>
        <section>
            <h2>Premium</h2>
            <ul>
                <?php
                $conn=mysqli_connect("localhost","root","","medica");
                $id=2;
                $qw3="SELECT cechy.cecha FROM abonamenty join szczegolyabonamentu on abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy on szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id=$id;";
                $res=mysqli_query($conn,$qw3);
                while($row=mysqli_fetch_row($res)){
                    echo "<li>$row[0]</li>";
                }
            ?>
            </ul>
        </section>
        <section>
            <h2>Dziecko</h2>
            <ul>
                <?php
                $conn=mysqli_connect("localhost","root","","medica");
                $id=3;
                $qw3="SELECT cechy.cecha FROM abonamenty join szczegolyabonamentu on abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy on szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id=$id;";
                $res=mysqli_query($conn,$qw3);
                while($row=mysqli_fetch_row($res)){
                    echo "<li>$row[0]</li>";
                }
                mysqli_close($conn);
            ?>
            </ul>
        </section>
    </main>
    <footer>
        <p><img src="obraz2.png" alt="przychodnia">Stronę przygotował:0000000</p>
    </footer>
</body>
</html>