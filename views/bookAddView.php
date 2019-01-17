<?php
  include("template/header.php")
 ?>


    <div class="formCenter mx-auto">

        <p class="text-center my-4 h3">Formulaire d'ajout de livre :</p>

        <form class="text-center" action="bookAdd.php" method="post" enctype="multipart/form-data">
          <p>
            <label for="title">Titre :</label><br>
            <input type="text" name="title" value="" required >
          </p>
          <p>
            <label for="author">Auteur :</label><br>
            <input type="text" name="author" value="" required>
          </p>
          <p>
            <label for="release_date">Publication :</label><br>
            <input type="date" name="release_date" value="" required>
          </p><br>
          <p>
            <label for="category_id">Catégorie</label><br />
            <select name="category_id" id="category_id" required>
              <option value="" disabled selected>Choisissez une catégorie</option>
            <?php 
            
            foreach ($categories as $category) 
            { 
            ?>

              <option value="<?php echo $category->getId_category() ;?>"><?php echo $category->getName() ;?></option>
            <?php 
            } 
            ?>
            </select>
          </p>
          <p>
            <label for="description">Description :</label><br>
            <textarea name="description" required></textarea>
          </p>
          <p>
            <label for="source">Image :</label><br>
            <input type="file" name="source" value="" required>
          </p>
          <p>
            <label for="alt">Alt :</label><br>
            <input type="text" name="alt" value="" required>
          </p>
      
          <input type="submit" name="bookAdd" value="Ajouter" required>
      </form>

    </div>

 <?php
  include("template/footer.php")
 ?>