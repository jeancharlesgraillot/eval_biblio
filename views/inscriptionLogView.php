<?php
  include("template/headerNavLess.php")
 ?>   
 
 
<p><?php echo $message ?></p>

 <div class="container">

    <div class="row flex">
    
        <div class="mx-auto formCenter inscription col-12 col-lg-6">

            <p class="text-center my-4 h3">Inscription :</p>

            <form class="text-center" action="inscriptionLog.php" method="post">
            <p>
                <label for="name">Prénom :</label><br>
                <input type="text" name="name" value="" required>
            </p>
            <p>
                <label for="email">Email :</label><br>
                <input type="email" name="email" value="" required>
            </p>
            <p>
                <label for="password">Mot de passe :</label><br>
                <input type="password" name="password" value="" required>
            </p>
            <p>
                <label for="password">Confirmation du mot de passe :</label><br>
                <input type="password" name="passwordCheck" value="" required>
            </p>
            <br>

            <input type="submit" name="adminAdd" value="Ajouter">
            </form>

        </div>

        <div class="mx-auto formCenter connexion col-12 col-lg-6">

            <p class="text-center my-4 h3">Connexion :</p>

            <form class="text-center" action="inscriptionLog.php" method="post">
            <p>
                <label for="name">Prénom :</label><br>
                <input type="text" name="name" value="" required>
            </p>
            <p>
                <label for="password">Mot de passe :</label><br>
                <input type="password" name="password" value="" required>
            </p><br>

            <input type="submit" name="connexion" value="Connexion">
            </form>

        </div>
    </div>
</div>


<?php
  include("template/footer.php")
 ?>