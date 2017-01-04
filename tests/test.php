<?php
$destinataire = 'michael.reilhac@live.fr';
$expediteur   = 'noreply@nostream.com';
echo "Ce script envoie un mail à $destinataire ".
     "en précisant que l'expediteur est $expediteur ";
mail($destinataire,
     'test email 1bis',
     'merci pour ton tutorial',
     "From: $expediteur");
?>