<?php

/**
 * 1. Complétez $from et $to ( évitez d'utiliser la même adresse mail )
 * 2. Envoyez un mail avec ces informations, si certaines choses manquent, complétez
 * 3. Déployez sur votre serveur et testez !
 */

$from = 'adresse mail';
$to = 'adresse mail';
// $subjet = "Hello";
// $message = 'Hello World, sending a simple mail !';
// $headers = [
//     'From' => "adresse mail<adresse mail>"
// ];
// // TODO Votre code ici.
// mail($to, $subjet, $message, $headers);

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
$subjet = "Hello 2";
$message = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, molestiae dolore aut libero ducimus sit aliquid cum nobis repellendus veniam debitis necessitatibus eveniet? Laudantium atque quam placeat tempora, iure laborum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, molestiae dolore aut libero ducimus sit aliquid cum nobis repellendus veniam debitis necessitatibus eveniet? Laudantium atque quam placeat tempora, iure laborum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, molestiae dolore aut libero ducimus sit aliquid cum nobis repellendus veniam debitis necessitatibus eveniet? Laudantium atque quam placeat tempora, iure laborum?";
$headers = [
    'From' => "adresse mail<adresse mail>"
];
if(mail($to, $subjet, wordwrap($message), $headers)){
    if(file_exists("mails.txt")){
        $texte = file_get_contents("mails.txt");
        file_put_contents("mails.txt", $texte."\n".$message." ".$to."\n");
    }else{
        file_put_contents("mails.txt", $message." ".$to."\n");
    }

    echo 'Le message à bien été envoyé. Merci !';
}else{
    echo "Une erreur est survenue lors de l'envoi du mail";
}