
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Overzicht studenten te laat in de les</title>
    <style>
        .telaat{
            text-align:center; 
            color:black!important; 
            font-weight:bold;
            background-color: yellow!important;

        }
        .ergtelaat{
            text-align:center; 
            color:white!important; 
            background-color: red!important;
            font-weight:bold;
        }


    </style>
</head>
<body>
    <?php
include 'database.php';
$sql = "SELECT * FROM `te_laat_meldingen`";
$student = getData($sql , 'fetchAll');
$hoogsteMinuten= 0;
$gemiddeldeMinuten= 0;
$totaalMinuten= 0;
?>
    <main style="width: 900px; margin: 20px auto;">
                <h4>Overzicht studenten die te laat waren</h4>
        <table class="table table-striped">
            <tr>
                <th nowrap>Naam student</th>
                <th>Klas</th>
                <th nowrap>Minuten te laat</th>
                <th>Reden te laat</th>
                <th><!--<a href="reset.php" class="btn btn-info">Reset</a>--></th>
                <th></th>
    </tr>
    <?php 
    foreach($student as $row){
        if ($hoogsteMinuten<$row["minuten_te_laat"] ){
            $hoogsteMinuten=$row["minuten_te_laat"];
        }
        $totaalMinuten=$totaalMinuten+$row["minuten_te_laat"] ;
?>
    <tr> 
        <td> <?php echo $row["studentnaam"] ?> </td>
        <td> <?php echo $row["klas"] ?></td>
        <td class="<?=$row["minuten_te_laat"]>=30?'ergtelaat':'telaat'?>"> <?php echo $row["minuten_te_laat"]?> </td>
        <td> <?php echo $row["Reden_te_laat"] ?> </td>
        <td> <a href="DELETE.php?id=<?php echo $row["id"]; ?>" onclick= "return confirm('Are you sure you want to delete this item?');" class="btn btn-success">DELETE</a> 
        <td> <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success">UPDATE</a>
</td>
    </tr>
    <?php
    }
    ?>

            
            
            </table>
        <br>
        <a href="crud-overzicht-pagina.php" class="btn btn-success">W&eacute;&eacute;r eentje te laat!</a> 


        <!-- Hieronder komt de statistieken tabel van stats.php -->
        <br><br><br>


<table class="table table-striped">
    <thead>
        <tr>
            <th rowspan="2">Statistieken</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Hoogste aantal minuten te laat</td>
            <td><?=$hoogsteMinuten?></td>
        </tr>
        <tr>
            <td>Gemiddeld aantal minuten</td>
            <td><?=$totaalMinuten/count($student)?></td>
        </tr>
        <tr>
            <td>Totaal aantal minuten</td>
            <td><?=$totaalMinuten?></td>
        </tr>
    </tbody>
</table>
<br><br><br>

    </main>

</body>

</html>