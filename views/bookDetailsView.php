<?php
  include("template/header.php")
 ?>

<div class="container mt-5">

  <div class="row">

    <div class="imgBox col-12 col-lg-6 text-center">
    
      <img src="../assets/img/intuitions.jpg" alt="intuitions cover">
    
    </div>

    <div class="col-12 text-center col-lg-6 text-lg-left mt-3">
      <p>Titre : </p>
      <p>Auteur :</p>
      <p>Publication :</p>
      <p>Catégorie :</p>
      <p>Résumé :</p>
      <p>Disponibilité :</p>
    </div>

  </div>

  <div class="row mt-5">

    <form class="bookUpdate text-center col-12 col-md-6 col-lg-3" action="bookUpdate.php" method="post">
			<input type="hidden" name="id" value=""  required>
			<input type="submit" name="update" value="Modifier" class="btn btn-primary my-3">
		</form>

    <form class="bookDelete text-center col-12 col-md-6 col-lg-3" action="bookDetails.php" method="post">
			<input type="hidden" name="id" value=""  required>
			<input type="submit" name="delete" value="Supprimer" class="btn btn-danger my-3">
		</form>


    <form class="bookAttribute text-center col-12 col-md-6 col-lg-3" method="post" action="bookDetails.php" class="text-center col-12 col-md-6 col-lg-3">
      
          <label for="users">Attribuer à</label><br />
          <select name="users" id="users">
              <option value="">Didier</option>
          </select>
     
        <input type="submit" name="add" value="Envoyer" class="btn btn-secondary my-3">
    
    </form>

    <form class="bookRestitute text-center col-12 col-md-6 col-lg-3" action="bookDetails.php" method="post">
			<input type="hidden" name="id" value=""  required>
			<input type="submit" name="restitute" value="Restituer" class="btn btn-secondary my-3">
		</form>

</div>

































 <?php
   include("template/footer.php")
  ?>