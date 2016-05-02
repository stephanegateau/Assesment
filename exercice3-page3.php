<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>page3</title>
    </head>
    <body>
        seul les utilisateur peuvent voir cette page
        <?php
            if($_SESSION['prenom'] == 'stephane' && $_SESSION['nom'] == 'GATEAU' && $_SESSION['age'] == 22){ 
                echo "<p>";
                echo "bonjour ".$_SESSION['prenom']." ".$_SESSION['nom']." comment va tu ?";
                echo "<br>";
                echo " je sais que tu as ". $_SESSION['age']."ans";
                echo "</p>";
            } 
        ?>      
    </body>
</html>
