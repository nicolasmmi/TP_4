<?php include('entete.php'); ?>


   
        <h1>bonjour</h1>
        <div>
            <form action="connexion.php" method="get">
                <input type="text" id="identifiant" name="Utilisateur" size="20" />
                <input type="password" id="password" name="MotDePasse" size="20"/>
                <input type="submit" value="Envoi"/>
            </form>
        </div>
             <?php 
             
             if (!empty($_REQUEST['Envoi'])
                && !empty($_REQUEST['Utilisateur'])
                && !empty($_REQUEST['MotDePasse'])){
                echo "bonjour $Utilisateur"    ;
                }
             else{
                echo "bonjour inconnue" ;
             }
           

            ?>
<?php include('pieddepage.php'); ?>