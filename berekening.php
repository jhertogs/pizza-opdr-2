
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Document</title>
</head>
<body>
    <h1>EPIK TABLE!!!!!! ()__()</h1>
    <table class="table">
        <tr>
            <th>Jaar</th>
            <th>Bedrag</th>
        </tr>

    
<?php
    if (isset($_POST["submit"])){
        $bedrag = $_POST["ingelegd"];
        $rente = $_POST["rente"];
        $nw_bedrag = 0;

        if(is_numeric($bedrag) && is_numeric($rente)){
            if ($_POST["radiobtn"] == "10_jaar"){
                echo "<h3> Het ingelegde bedrag is: $$bedrag</h3>". "<br>";
                echo "<h3>Het rente percentage: $rente%</h3>". "<br>";
            for($i = 0; $i < 10; $i++){
                
                $bedrag = $bedrag + ($bedrag/100)* $rente;
                echo "<tr>";
                echo"<td>". $i + 1 ."</td>";
                echo "<td>".round($bedrag, 2). "</td>";
                echo"</tr>";
            }}else{
                echo "<h3> Het ingelegde bedrag is: $$bedrag</h3>". "<br>";
                echo "<h3>Het rente percentage: $rente%</h3>". "<br>";
                $bedragx2 = $bedrag * 2;
                $i = 1;

                while($bedrag < $bedragx2){
                    $i ++;
                    $bedrag = $bedrag + ($bedrag/100)* $rente;
                    echo "<tr>";
                    echo"<td>". $i ."</td>";
                    echo "<td>".round($bedrag, 2). "</td>";
                    echo"</tr>";
                }
                echo "het bedrag is verdubbeld na: $i jaar";

                
            }
        } else{ exit;}
    }
?>
</table>

</body>
</html>