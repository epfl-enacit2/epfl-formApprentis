<?php
$to = 'formation.apprentis@epfl.ch';
$subject = 'Nouvelle Candidature';

$message = "Candidat: ".$surname." ".$name."\n\n".
"Apprentissage: ".$job."\n\n".
"Consulter la candidature sur: "."\\\\scxdata\\apprentis$\\candidatures\\nouvelles";

<<<<<<< HEAD
$headers = 'From: noreply+formulaireApprentis@epfl.ch' . "\r\n" .
'Reply-To: formation.apprentis@epfl.ch' . "\r\n" .
=======
$headers = 'From: formulaireApprentis@epfl.ch' . "\r\n" .
'Reply-To: formulaireApprentis@epfl.ch' . "\r\n" .
>>>>>>> dad8303521b09849856578aba30d9f5c2bdd7380
'X-Mailer: PHP/' . phpversion();
?>