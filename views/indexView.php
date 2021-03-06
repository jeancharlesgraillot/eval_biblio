<?php
  include("template/header.php")
 ?>

   <form class="bookAdd mx-auto text-center col-12 col-md-6 col-lg-3 my-3" action="bookAdd.php" method="post">
		<input type="hidden" name="id" value=""  required>
		<input type="submit" name="add" value="Ajouter un livre" class="btn btn-primary my-3">
	</form>


  <div class="container">
   <div class="row">

   <?php
   foreach ($books[0] as $book)
   {
   ?>
   
      <div class="card-to-anime col-12 col-md-6 col-lg-3 ">
         <a href="bookDetails.php">
            <div class="card mb-3 text-white bg-dark">
               <div class="card-body">
                  <h5 class="card-title text-center mb-0"><?php echo $book->getTitle(); ?></h5>
               </div>
               <?php
               foreach ($books[1] as $image)
               {
                  if ($book->getImage_id() == $image->getId_image() ) {
               ?>
               
               <img class="card-img-top" src="../assets/img/<?php echo $image->getSource(); ?>" alt="<?php echo $image->getAlt(); ?>">
            
            <?php
                  }
            }
            ?>

            </div>
         </a>
      </div>

   <?php   
   }
   ?>
   
 <?php
   include("template/footer.php")
  ?>
