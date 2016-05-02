<?php
    session_start();
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>page2</title>
    </head>
    <body>
        salut tous le monde
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
