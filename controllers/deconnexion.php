<?php
session_start();

// Suppression des variables de session et de la session
session_destroy();

// Suppression des cookies de connexion automatique
header('Location: inscriptionLog.php');
?>