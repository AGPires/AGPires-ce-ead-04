<?php
$Inicial = $_POST['nInicial'];
$Final = $_POST['nFinal'];
$mInicial = $_POST['mInicial'];
$mFinal = $_POST['mFinal'];
$contador = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Tabuada
        </title>
        
        <!-- Última versão CSS compilada e minificada -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Última versão JavaScript compilada e minificada -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <style type="text/css">
            table {
                margin-left: 30px;
                text-align:center;
                float: left;
            }
        </style>
    </head>
    <body>
        <h1>
            Tabuada Gerada!
        </h1>
        <?php
for ($i=$Inicial; $i <= $Final; $i++) { 
    $contador++;
    echo "<table class='table table-bordered' border='0'  align='center' style='width:25%; height:15%;'>";
    echo "<thead>";
    echo "<th colspan=2>";
    echo "Tabela " . $contador;
    echo "</th>";
    echo "<tr>";
    echo "<th>";
    echo "Fórmula";
    echo "</th>";
    echo "<th>";
    echo "Valor";
    echo "</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($y=$mInicial; $y <= $mFinal; $y++){	
        echo "<tr>";
        echo "<td>";
        echo  $i . " x " . $y . " = "; 
        echo "</td>";
        echo "<td>";
        echo  ($i * $y) . "<br>"; 
        echo "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";	
}
        ?>
    </body>
</html>
