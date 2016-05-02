<?php
    if(isset($_POST['valider']))
    {
        $secret = $_POST['secret'];
        $num = $_POST['nb'];
    }
    else
    {
        $secret = null;
        $num = null;
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Exercise Three </title>
</head>
<body>
    <h1>Exercise Three – Number Guessing Game</h1>
     <?php
        if(!$secret)
            {
                echo "Choisir un nombre";
                $secret = rand(1,100);
            }
        else
        {
            if($secret > $num)
            {
                echo "trop petit";
            }
            elseif($secret == $num)
            {
                echo "super !";
                echo "entrer un nombre pour rejouer";
                $secret = rand(1,100);
            }
            else
            {
                echo "Trop grand";
            }
        }

    ?>
    <form method="post">
        <label>saisir un nombre :</label>
        <input type="text" name="nb" id="nb">
        <input type = "hidden" name="secret" value = "<?php echo $secret; ?>"/>
        <input type="submit" name="valider">
    </form>
   
    <?php echo $secret; ?>
    </body>
</html>