<?php
  include("template/header.php")
 ?>


    <div class="formCenter mx-auto">

        <p class="text-center my-4 h3">Formulaire de mise à jour d'utilisateur :</p>

        <form class="text-center" action="userUpdate.php" method="post">
          <p>
            <label for="firstname">Prénom :</label><br>
            <input type="text" name="firstname" value="" required>
          </p>
          <p>
            <label for="lastname">Nom :</label><br>
            <input type="text" name="lastname" value="" required>
          </p>      
          <input type="submit" name="userUpdate" value="Mettre à jour">
      </form>

    </div>

 <?php
  include("template/footer.php")
 ?>