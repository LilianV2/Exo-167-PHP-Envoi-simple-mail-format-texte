<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */


$from = 'pipixg@gmail.com';
$to = 'liliaom59@outlook.fr';
$subject = 'truc';
/**
$message = 'Hello World, sending a simple mail !';
// TODO Votre code ici.

mail($to, $subject, $message);
 **/




/**
 * 4. Commentez le code précédent, mais gardez les variables $from et $to
 * 5. Définissez un message long d'au moins 120 caractères au choix.
 * 6. Faites en sorte de couper la phrase puisqu'elle fera plus de 70 caractères
 * 7. Envoyez le mail.
 * 8. En cas d'erreur, affichez le message: Une erreur est survenue lors de l'envoi du mail
 * 9. En cas de succès, affichez le message: Le message a bien été envoyé. Merci !
 * 10. Faites en sorte que chaque message envoyé soit enregistré dans un fichier 'mails.txt'
 *     Les valeurs à enregistrer SUR UNE SEULE LIGNE sont: $message, $to
 *     N'écrasez pas les valeurs déjà existantes ( s'il y en a ).
 */
// TODO Votre code ici.

$message = 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem
 lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem';
$message = wordwrap($message, 70, "\r\n");
$headers = [
  'Reply-To' => 'pipixg@gmail.com',
  'Cc' =>  'lilianom59@outlook.fr',
    'X-Mailer' => 'PHP/' . phpversion()
];

$send = mail($to,$subject,$message,$headers);

if (!$send){
    echo "Une erreur est survenue lors de l'envoi ddu mail . . .";
}else{
    echo "Le message a bien été envoyé, Merci !";
}

file_put_contents("mail.txt",$message, FILE_APPEND);
file_put_contents("mail.txt",' / '.$to, FILE_APPEND);
file_put_contents("mail.txt", '\n\n' , FILE_APPEND);


