<!DOCTYPE html>
<html>
    <head>
        <title>Exercise Two </title>
    </head>
    <body>
       <h1> Exercise Two – Basic Output Grade Point Scale Converter </h1>
        <form method="post">
            <label> Grade :</label>
            <input type="text" name="g" id="g" required/>
            <label for="level">Level
                <select name="level" id="level">
                    <option value="1"> Undergraduate Modular Framework Awards</option>
                    <option value="2"> HND - Current Scheme</option>
                    <option value="3">Masters</option>
                </select>
            </label>
            <input type="submit" name="submit">
        </form>
        
        <?php 
            if(isset($_POST['submit']))
            {
                $g = $_POST['g'];
                switch($_POST['level'])
                {                
                    case '1':
                        if($g >= 70)
                            echo "Grade Points 13 - 15 First Class Honours";
                         elseif($g >= 60 && $g <=69)
                            echo "Grade Points 10 - 12 Upper Second Class Honours";
                         elseif($g >= 50 && $g <=59)
                             echo "Grade Points 7 - 9 Lower Second Class Honours ";
                         elseif($g >= 40 && $g <=49)
                             echo "Grade Points 4 - 6 Third Class Honours ";
                         elseif($g >= 0 && $g <=39)
                             echo "Grade Points 0 - 3 Fail";
                        else
                            echo "error < 0";
                        break;
                    
                    case '2':
                        if( $g >= 70)
                            echo "Distinction - grade points 13 - 15";
                         elseif($g >= 53 && $g <=69)
                            echo "Merit - grade points 8 - 12 ";
                         elseif($g >= 40 && $g <=52)
                             echo "Pass - grade points 4 - 7 ";
                         elseif($g >= 0 && $g <=39)
                             echo "Fail - grade points 1 - 3 ";
                        else
                            echo "error < 0";
                        break;
                    
                    case '3':
                        if( $g >= 70)
                            echo "Distinction - grade points 13 - 15";
                         elseif($g >= 60 && $g <=69)
                            echo "Pass with Merit - grade points 10 - 12";
                         elseif($g >= 50 && $g <=59)
                             echo "Pass - grade points 7 - 9 ";
                         elseif($g >= 40 && $g <=49)
                             echo "Failure - grade points 1 – 6";
                        else
                            echo "error < 0";
                    }   
                }
            ;?>
    </body>
</html>