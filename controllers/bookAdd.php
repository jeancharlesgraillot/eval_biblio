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

// On instancie nos managers
$categoryManager = new CategoryManager($db);
$bookManager = new BookManager($db);
$imageManager = new ImageManager($db);


if (isset($_POST['bookAdd']))
{

    if (!empty($_FILES['source']) && !empty($_POST['alt'])) 
    {

        $source = $_FILES['source']['name'];
        $alt = htmlspecialchars($_POST['alt']);
        
                $image = new Image([
                'source' => $source,
                'alt' => $alt
                ]);

                $image_id = $imageManager->addImage($image);
                
    }

    if (!empty($_POST['category_id'])) 
    {
            $category_id = (int) $_POST['category_id'];
     
    }

    if (!empty($_POST['title']) and !empty($_POST['author']) && !empty($_POST['release_date']) && !empty($_POST['description'])) 
    {
        
            $title = htmlspecialchars($_POST['title']);
            $author = htmlspecialchars($_POST['author']);
            $release_date = htmlspecialchars($_POST['release_date']);
            $description = htmlspecialchars($_POST['description']);
    
                $book = new Book([
                'title' => $title,
                'author' => $author,
                'release_date' => $release_date,
                'description' => $description,
                'disponibility' => 1,
                'category_id' => $category_id,
                'image_id' => $image_id
                ]);

                $bookManager->addBook($book);
                header('location: index.php');
   }
}


$categories = $categoryManager->getCategories();
            

include "../views/bookAddView.php";
 ?>