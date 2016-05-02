<!DOCTYPE html>
<html>
<head>
    <title>Exercice 1</title>
    <style>
       table {
           border-collapse: collapse;}
    </style>
</head>
<body>
    <h1>Exercise One – Bingo Card</h1>
    <?php if(isset($_POST['nc']))  ?>
        <table border=1>
            <thead>
                <tr>
                    <th>B</th>
                    <th>I</th>
                    <th>N</th>
                    <th>G</th>
                    <th>O</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i=1; $i<=5;$i++){
                        if($i==3){
                        echo "<tr>";
                        echo "<th>". rand(1,15). " </th>";
                        echo "<th>". rand(16,30)." </th>";
                        echo "<th> free </th>";
                        echo "<th>". rand(46,60)." </th>";
                        echo "<th>". rand(61,75)." </th>";
                        echo"</tr>"    ;                   
                        }

                        else{
                            echo "<tr>";
                            echo "<th>". rand(1,15). " </th>";
                            echo "<th>". rand(16,30)." </th>";
                            echo "<th>". rand(31,45)." </th>";
                            echo "<th>". rand(46,60)." </th>";
                            echo "<th>". rand(61,75)." </th>";
                            echo"</tr>"    ;
                        }
                    }
                ?>
            </tbody>
        </table>
    <br></br>
    <form method="post">
        <input type="submit" name="nc" value="new card">
    </form>
</body>
</html>