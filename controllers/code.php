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
    {echo ('test1');
            $cat_id = $_POST['category_id'];
            $category_id = $categoryManager->getCategoryById($cat_id);
    }

    if (!empty($_POST['title']) and !empty($_POST['author']) && !empty($_POST['release_date']) && !empty($_POST['description'])) 
    {
        echo ('test2');
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
   }
}