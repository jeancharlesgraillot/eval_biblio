<?php


function loadClass($classname)
{
    if(file_exists('../models/'. $classname.'.php'))
    {
        require '../models/'. $classname.'.php';
    }
    else 
    {
        require '../entities/' . $classname . '.php';
    }
}

spl_autoload_register('loadClass');

session_start();

if (isset($_SESSION['name'])) {
    
}else
{
    header('location: inscriptionLog.php');
}

// Connexion à la base de données
$db = Database::DB();

$userManager = new UserManager($db);

$users = $userManager->getUsers();






































include "../views/usersListView.php";
 ?>