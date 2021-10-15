document.getElementById('form').addEventListener('submit', function(e){ 
    
    var erreur;

    var nom = document.getElementById('nom');

    var prenom = document.getElementById('prenom');

    var telephone = document.getElementById('telephone');
        
    var email = document.getElementById('email');

    var nomdutilisateur = document.getElementById('nomdutilisateur');

    var motdepasse = document.getElementById('motdepasse');
    

 
    if (!nom.value){
        erreur = "Veuillez renseigner un nom";}
    if (!prenom.value){ 
        erreur = "Veuillez renseigner un Prénom";}
    if (!telephone.value){
        erreur = "Veuillez renseigner un numéro de téléphone";}
    if (!email.value){
        erreur = "Veuillez renseigner vote email";}
    if (!nomdutilisateur.value){
        erreur = "Veuillez renseigner un nom d'utilisateur";}
    if (!motdepasse.value){
        erreur = "Veuillez renseigner un mot de passe";}
    if (erreur){
        e.preventDefault();
        document.getElementById("erreur").innerHTML = erreur;
        return false;}
        else{
        alert('formulaire envoyé !');
        }
    })