<?php

include "/../../entities/promo.php" ;
include "/../../core/promoc.php";
require "../send/PHPMailerAutoload.php";
require "../send/credential.php";

if (isset($_POST['ref']) and isset($_POST['pourcentage']) and isset($_POST['datedebut']) and isset($_POST['datefin']) ) {
    # code...
    $promotion1c=new promoc();
    $pourcent=$_POST['pourcentage'];
    echo "le pourcentage est ".$pourcent."</br>";
    $ancien=$promotion1c->prixancien($_POST['ref']);
    $prix=($ancien*$pourcent)/100;
    echo($prix);
    $promo=new promotion($_POST['ref']."pr",$_POST['ref'],$promotion1c->nom($_POST['ref']),$prix,$promotion1c->quantite($_POST['ref']),$promotion1c->couleur($_POST['ref']),$promotion1c->categorie($_POST['ref']),$_POST['datedebut'],$_POST['datefin']);
    
    $promotion1c->ajouterpromo($promo);
    ////envoyer un mail a les utulisateur///
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = EMAIL;                 // SMTP username
    $mail->Password = PASS;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom(EMAIL, 'Mercerie douiri');
    $mail->addAddress('feres.benhamed@esprit.tn');     // Add a recipient

    $mail->addReplyTo(EMAIL);
            // print_r($_FILES['file']); exit;
            /*for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
            }*/
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Un nouveau promo!';
    $mail->Body    = 'thaks for visiting our website';
    $mail->send();

    header('location: ajoutpromo.php');
    
    

}
else{
    echo "verifier les champs";
}
 ?>