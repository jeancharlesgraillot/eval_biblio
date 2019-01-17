<?php
  include("template/header.php")
 ?>


    <div class="formCenter mx-auto">

        <p class="text-center my-4 h3">Formulaire d'ajout d'utilisateur :</p>

        <form class="text-center" action="userAdd.php" method="post">
          <p>
            <label for="firstname">Prénom :</label><br>
            <input type="text" name="firstname" value="" required>
          </p>
          <p>
            <label for="lastname">Nom :</label><br>
            <input type="text" name="lastname" value="" required>
          </p> 
          <input type="hidden" name="tokenId" value="<?php echo $token; ?>">     
          <input type="submit" name="userAdd" value="Ajouter" class="btn btn-primary">
      </form>

    </div>

 <?php
  include("template/footer.php")
 ?>