<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";
include "mailreclamation.php";
include "Nexmo/src/NexmoMessage.php" ;
session_start();

if (isset($_POST['phone'])  and isset($_POST['email']) and isset($_POST['message']))
{
	$date_reclamation=date("Y-m-d");
	
$reclamation1=new reclamation($_POST['phone'],$_POST['email'],$_POST['message'],'',$date_reclamation,$_SESSION['l']);
//Partie2

var_dump($reclamation1);


	 /* To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('7c463da9','rmvC2bvoNgEfZYFY');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '21653962553', 'Cazasport', 'RECLAMATION ARRIVEE' );

	// Step 3: Display an overview of the message
	

	// Done!

//Partie3
$reclamation1C=new reclamationC($reclamation1);
$reclamation1C->ajouterReclamation($reclamation1);
 $nexmo_sms->displayOverview($info);
ini_set('smtp_port', 587);
     $header="MIME-Version: 1.0\r\n";
 $header.='From:"Casasport.tn"<Casasport.tn>'."\n";
 $header.='Content-Type:text/html; charset="uft-8"'."\n";
 $header.='Content-Transfer-Encoding: 8bit';
 $message="Cher Client, \n Vous avez recu une reclamation  ".$_POST['email']."\n";
 mail("mohamedbechir.hassine@esprit.tn", "reclamation !", $message, $header); 


header('Location: afficherreclamation.php');
}
else{
	echo "vérifier les champs";
	
}
//*/

?>