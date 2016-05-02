<?php
    session_start();
    $_SESSION['prenom'] = NULL;
    $_SESSION['nom'] = NULL;
    $_SESSION['age'] = NULL;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <h2>LOGIN</h2>
        <form method="post">
            <p>
                <label>UserName:</label>
                <input type="text" name="user" required/>
            </p>
            <p>
                <label>Password:</label>
                <input type="password" name="mdp" required/>
            </p>
            <input type="submit" name="login" value="login" style="width:130px">
            <input type="hidden" name="us" value="Fred">
            <input type="hidden" name="pw" value="Bloggs">
        </form>
        <?php
    if(isset($_POST['login'])){
        if($_POST['user']==$_POST['us'] && $_POST['mdp']==$_POST['pw']){
            echo "vous pouvez acceder a:";
            echo "<li><a href='exercice3-page2.php'>page2.php</a></li>";
            echo "<li><a href='exercice3-page3.php'>page3.php</a></li>";
            $_SESSION['prenom'] = 'stephane';
            $_SESSION['nom'] = 'GATEAU';
            $_SESSION['age'] = 22;          
        } 
        else{
            echo "vous pouvez acceder a: ";
            echo "<li> <a href='exercice3-page2.php'>page2</a></li>";
        }
    }
?>
    </body>
</html>
