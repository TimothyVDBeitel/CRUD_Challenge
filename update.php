
<?php
include 'database.php';

$update_id=$_GET["id"];
$sql="SELECT * FROM `te_laat_meldingen` WHERE id=$update_id";
$student = getData($sql , 'fetch');


if(isset($_POST['submit'])){
    $klas = $_POST['klas'];
    $aantal_minuten_te_laat = $_POST['minuten_te_laat'];
    $Reden_te_laat = $_POST['Reden_te_laat'];
    $studentnaam = $_POST['studentnaam'];
    echo $studentnaam;
    $sql = " UPDATE `te_laat_meldingen` SET studentnaam ='$studentnaam', klas = '$klas', minuten_te_laat = '$aantal_minuten_te_laat', Reden_te_laat = '$Reden_te_laat' WHERE id = $update_id";
    $resultaat = getData($sql,'update');
    header('location:CRUD-Challenge-Timothy_van_den_Beitel.php');
    
   

}
?>
    
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Weer een student te laat</title>
</head>

<body>
    <button><a href="CRUD-Challenge-Timothy_van_den_Beitel.php">HOME</a></button>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Naam van de student:</label>
                <input type="text" name="studentnaam" class="form-control" value="<?= $student['studentnaam']?>" autocomplete="on" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Klas:</label>
                <input type="text" name="klas" class="form-control" value="<?= $student['klas']?>" autocomplete="on" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Aantal minuten te laat:</label>
                <input type="number" name="minuten_te_laat" min="0" class="form-control" value="<?= $student['minuten_te_laat']?>" autocomplete="on" required>
            </div>

            <div class="form-group">
                <label for="reden">Reden van de student:</label>
                <textarea class="form-control" name="Reden_te_laat" id="Reden_te_laat" cols="30" rows="10" autocomplete="on" required><?= $student['Reden_te_laat']?></textarea>
            </div>
            <br>
            <a href="CRUD-Challenge-Timothy_van_den_Beitel.php">
                <button type="submit" class="btn btn-primary" name="submit">Verstuur</button>
            </a>
        </form>
    </div>
</body>
</html>