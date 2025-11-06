<?php include('entete.php'); ?>
   <?php $user=$_REQUEST['Utilisateur'];
   $_SESSION['login']=$user;
   echo "bonjour $user";
   ?>
<?php include('pieddepage.php'); ?>
