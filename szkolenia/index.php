<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section class="lewa">
            <table>
                <tr>
                    <th>Kurs</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </tr>
                <?php
                    $conn=mysqli_connect("localhost","root","","szkolenia");
                    $que=mysqli_query($conn,"SELECT `kod`,`nazwa`,`cena` FROM `kursy` ORDER BY cena ASC;");
                    while($row=mysqli_fetch_array($que)){
                        echo "<tr>";
                        echo '<td><img src="'.$row["kod"].'.jpg" alt="kurs"></td>';
                        echo '<td>'.$row["nazwa"].'</td>';
                        echo '<td>'.$row["cena"].'</td>';
                        echo "</tr>";
                    }
                ?>
            </table>
        </section>
        <section class="prawa">
            <h2>Zapisy na kursy</h2>
            <form method="post" action="">
                <label>Imię</label><br>
                <input type="text" name="imie" required><br>
                <label>Nazwisko</label><br>
                <input type="text" name="nazwisko" required><br>
                <label>Wiek</label><br>
                <input type="number" min="0" step="1" name="wiek" required><br>
                <label>Rodzaj kursu</label><br>
                <select name="kurs">
                    <?php
                    $que=mysqli_query($conn,"SELECT `nazwa` FROM `kursy`;");
                    while($row=mysqli_fetch_row($que)){
                        echo '<option value='.$row["0"].'>'.$row["0"].'</option>';
                    }
                    ?>
                </select><br>
                <input type="submit" value="Dodaj dane">
            </form>
            <?php
                if(isset($_POST["imie"])){
                    $que=mysqli_query($conn,"INSERT INTO `uczestnicy`(`imie`, `nazwisko`, `wiek`) VALUES (".$_POST["imie"].",".$_POST["nazwisko"].",".$_POST["wiek"].")");
                }
            ?>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000</p>
    </footer>
</body>
</html>