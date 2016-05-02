<?php
	if(isset($_POST['add']))
    {
			$nb1 = $_POST['nb1'];
            $r = $_POST['r'] + $_POST['nb1'] ;
	
	}

	elseif(isset($_POST['sub']))
	{
			$nb1 = $_POST['nb1'];
            $r = $_POST['r'] - $_POST['nb1'] ;	
	}
	elseif(isset($_POST['div']))
	{
		if($_POST['nb1']==0 )
		{
			
            $r="error";
		}
		else
		{
			$nb1 = $_POST['nb1'];
            $r = $_POST['r'] / $_POST['nb1'] ;
		}
	}

	elseif(isset($_POST['mul']))
	{
			$nb1 = $_POST['nb1'];
            $r = $_POST['r'] * $_POST['nb1'] ;
	}

	else
	{
		$nb1 = NULL;
        $r= 0;
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Exercice 2</title>
    </head>
    <body>
        <h1>Exercise Two – Calculator</h1>
        <form method="post">
             <p>
                <label> number :</label>
                <input type="number" name="nb1"required / >
                <input type="hidden" name="1" value="<?php echo $nb1; ?>"/>
                <input type="hidden" name="r" value="<?php echo $r; ?>"/>
            </p>
              <?php
                if(isset($_POST['add'])){
                    echo "<p>";
                    echo "result: ";
                    echo "<input type='text' name='r' value= $r>";
                    echo "</p>";
                }
                elseif(isset($_POST['sub'])){
                    echo "<p>";
                    echo "result: ";
                    echo "<input type='text' name='r' value= $r>";
                    echo "</p>";
                }
                elseif(isset($_POST['mul'])){
                    echo "<p>";
                    echo "result: ";
                    echo "<input type='text' name='r' value= $r>";
                    echo "</p>";
                }
                elseif(isset($_POST['div'])){
                    echo "<p>";
                    echo "result: ";
                    echo "<input type='text' name='r' value= $r>";
                    echo "</p>";
                }  
            ?>
         
            <p>
                <input type="submit" name="add" value="+" style="width:130px">
                <input type="submit" name="sub" value="-" style="width:130px">
            </p>
            <p>
                <input type="submit" name="mul" value="*" style="width:130px">
                <input type="submit" name="div" value="/" style="width:130px">
           </p>
          
        </form>
    </body>
<html>