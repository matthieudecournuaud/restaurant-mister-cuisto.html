<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $telephone=$_POST['telephone'];
    $email=$_POST['email'];
    $nomdutilisateur=$_POST['nomdutilisateur'];
    $motdepasse=$_POST['motdepasse'];

    $conn=new mysqli('localhost','debian-sys-maint','pmsbO8FfcKoWctQS','fichierclient');
    if($conn->connect_error){
        die('connection failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(nom, prenom, telephone, email, nomdutilisateur, motdepasse)
            VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("ssisss",$nom, $prenom, $telephone, $email, $nomdutilisateur, $motdepasse);
        $stmt->execute();
        echo "regitration successfully";
        $stmt->close();
        $conn->close();
    }
?>