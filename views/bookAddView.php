<?php
  include("template/header.php")
 ?>


    <div class="formCenter mx-auto">

        <p class="text-center my-4 h3">Formulaire d'ajout de livre :</p>

        <form class="text-center" action="bookAdd.php" method="post">
          <p>
            <label for="title">Titre :</label><br>
            <input type="text" name="title" value="" required>
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
            <label for="name">Catégorie :</label><br>
            <input type="text" name="name" value="" required>
          </p>
          <p>
            <label for="description">Description :</label><br>
            <input type="text" name="description" value="" required>
          </p>
          <p>
            <label for="image">Image :</label><br>
            <input type="file" name="image" value="" required>
          </p>
      
          <input type="submit" name="bookAdd" value="Ajouter">
      </form>

    </div>

 <?php
  include("template/footer.php")
 ?>