<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie - moje hobby</title>
</head>
<body>
    <?php
        $lowisko = $_POST['lowisko'];
        $data = $_POST['data'];
        $sedzoa = $_POST['sedzia'];

        $db = new mysqli('localhost', 'root', '', 'wedkarstwo');
        //$db = mysqli_connect('localhost', 'root', '', 'wedkarstwo');
        $sql = "INSERT INTO 'zawody_wedkarskie' ('id', 'karty_wedkarskie_id', 'lowisko_id', 'data_zawodow', 'sedzia')
                VALUES (NULL, '2', '$lowisko', '$data', '$sedzia')";
                $wynik = $db->query($sql);
                $db->close();
    ?>
</body>
</html>