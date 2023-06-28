<?php
include 'database.php'
?>


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
    <title>Weer een student te laat</title>
</head>

<body>
    <main style="width: 600px; margin: 20px auto;">
        <h4 style="text-align:center;">Nieuwe melding te late student</h4>

        <form class="cursusform" method="post" action="insert.php">
            <div class="form-group">
                <label for="studentnaam">Naam student</label>
                <input type="text" class="form-control" id="studentnaam" name="studentnaam" required>
            </div>
            <div class="form-group">
                <label for="klas">Klas</label>

                <input type="text" class="form-control" id="klas" name="klas">
            </div>
            <div class="form-group">
                <label for="minuten_te_laat">Aantal minuten te laat</label>


                <input type="number" class="form-control" id="minuten_te_laat" name="minuten_te_laat">


            </div>
            <div class="form-group">
                <label for="Reden_te_laat">Reden te laat komen:</label>
                <textarea class="form-control" rows="5" id="Reden_te_laat" name="Reden_te_laat"></textarea>
            </div>
            <button type="submit" class="btn btn-success">invoegen</button>
        </form>
    </main>

</body>

</html>