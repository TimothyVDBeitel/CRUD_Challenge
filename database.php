<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud-challenge";

try {
 $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo "Connected successfully";
} catch(PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}

function getData($sql, $method){
    
    global $conn;

    //maak de connectie met de database
  
    if($method == 'fetchAll'){
        $statement = $conn->query($sql);
        $resultaat = $statement->fetchAll(PDO::FETCH_BOTH);
    }
    else if ($method = "fetch"){
        $statement = $conn->query($sql);
        $resultaat = $statement->fetch(PDO::FETCH_BOTH);
    }
    else {
        //$result wordt nu gevuld met een array die de waarde van de opgevraagde database tabel rijen en kolommen bevat, fetchAll geeft alle rijen terug
        $resultaat = $conn->query($sql);
    }

    //return geeft de waarde terug aan de variabele waar je de functie hebt aangeroepen
    //echo $result;
    return $resultaat;
}
?>