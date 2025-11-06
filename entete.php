<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Draven</title>
    </head>
        <header>
            <h1>
                <?php 
                if (!empty($_SESSION['login'])){
                    $user=$_SESSION['login'];
                echo $user; 
                }
                else{
                    echo "<a href='formulaire.php'>login<a>";
                }
                ?>
            </h1>
        </header>
<body>
    

