<?php
    $Nom = $_POST['Nom'];
    $Prénom = $_POST['Prénom'];
    $Téléphone = $_POST['Téléphone'];
    $Email = $_POST['Email'];
    $Identifiant= $_POST['Identifiant'];
    $password = $_POST['password'];

    //database connection
    $conn = new mysqli('localhost','debian-sys-maint','pmsbO8FfcKoWctQS','Fichier client');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into registration(Nom, prénom, téléphone, Email, Identifiant, password)
        value(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$Nom,$prénom,$téléphone,$Email,$Identifiant,$password);
        $stmt->execute();
        echo "Enregistrement réussi !";
        $stmt->close();
        $conn->close();
    }
?>