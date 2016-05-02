<?php
    if(isset($_POST['submit4'])){
        
        if($_POST['nb']==0)
        {
            $nb = 3;
        }
        else
        {
           $nb = $_POST['nb'];  
        }
    }

    if(isset($_POST['send']))
    {
        if($_POST['nb']==0)
        {
            $nb = 3;
        }
        else
        {
           $nb = $_POST['nb'];  
        }
     }   
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> exercice 4</title>
</head>
<body>
    <h1>Exercise 4 – Variable Input</h1>
    <form method="post">
        <p>
            <label>combien de input voulez vous?</label>
            <input type="text" name="nb" id="nb">  
            <input type="submit" name="submit4" value="valider">     
        </p>
    </form>
    <?php
        
            echo "<form method='post'>";
            for($i=1;$i<=$nb; $i++){
                echo "<p>";
                echo "<label>input num $i :  </label>";
                echo "<input type='text' name='names[]' id='text $i'>";
                echo "</p>";
            }
            echo "<input type = 'hidden' name ='nb' value ='$nb'/>";
            echo "<input type='submit' name= 'send' value='send'/>";
   
            
            /*<!--<input type = 'text' name ='names[]' value ="<?php echo $_POST['names']; ?>">-->*/
            
           
            echo "</form>";
        if(isset($_POST['send']))
        {
                    $names = $_POST['names'];
                    /*sort($names);*/
                    echo "data entered: ";
                    foreach($names as $key)
                    {
                            echo $key ." "; 
                    }
        }
    ?> 
</body>
</html>