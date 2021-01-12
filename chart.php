<?php


require_once 'conexao.php';



$campo = $_POST['campo'];
$titulo = $_POST['titulo'];

$db_host = $_POST['db_host'];
$db_user = $_POST['db_user'];
$db_pass = $_POST['db_pass'];
$db_name = $_POST['db_name'];


try {

    $Conexao    = Conexao::getConnection($db_host,$db_user,$db_pass,$db_name);
    $query      = $Conexao->query("$campo");
    $results    = $query->fetchAll();
} catch (Exception $e) {

    echo $e->getMessage();
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="js/Chart.min.js"></script>
    <!--apontamento para plugin/ferramenta, que gera os graficos -->

    <title>Chartjs Query Tester</title>
</head>

<body>
    <div style="width: 1000px;">
        <canvas id="myChart"></canvas> <!-- item que irá apresentar o gráfico e a sua identificação em id "myChart" -->
    </div>
    <br>
    <hr>
    <br>
    <table border=1>
        <tr>
            <th>Labels</th>
            <th>Valores</th>
        </tr>
        <?php
        foreach ($results as list($label, $valor)) {
        ?>
            <tr>
                <td><?php echo $label; ?></td>
                <td><?php echo $valor; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>




</body>



<!-- inicio configuração do chart
 -->
<script>
    var config = {
        type: 'pie', //define meu tipo de gráfico [pie,line,bar,etc..]
        data: {
            labels: [
                <?php
                foreach ($results as list($label)) {
                    echo "'$label',";
                }
                ?>
            ], //array de labels 
            datasets: [{
                data: [
                    <?php
                    foreach ($results as list(, $value)) {

                        echo "$value,";
                    }
                    ?>
                ], //array de valores
                backgroundColor: [ //inicio array de bg-colors
                    'rgb(66, 135, 245)',
                    'rgb(135, 66, 245)',
                    'rgb(66, 245, 191)',
                    'rgb(245, 164, 66)',
                    'rgb(245, 66, 164)',
                    'rgb(242, 245, 66)',
                    'rgb(245, 66, 78)',
                    'rgb(245, 66, 239)',
                    'rgb(66, 69, 245)',
                    'rgb(188, 245, 66)',

                ], //fim array de bg-colors
                borderColor: [ //inicio array de border-colors
                    'rgb(66, 135, 245)',
                    'rgb(135, 66, 245)',
                    'rgb(66, 245, 191)',
                    'rgb(245, 164, 66)',
                    'rgb(245, 66, 164)',
                    'rgb(242, 245, 66)',
                    'rgb(245, 66, 78)',
                    'rgb(245, 66, 239)',
                    'rgb(66, 69, 245)',
                    'rgb(188, 245, 66)',
                ],

                fill: false,
            }]
        },
        options: { // outras configurações que eu estou explorando
            responsive: true,
            title: {
                display: true,
                text: '<?php

                        echo $titulo;

                        ?>'
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: false,
                    scaleLabel: {
                        display: true,
                    }
                }],
                yAxes: [{
                    display: false,
                    scaleLabel: {
                        display: true,
                    }
                }]
            }
        }
    };

    //carrega as configuração(var config) e direciona para onde devem ser aplicadas(var item)->id="myChart"
    window.onload = function() {
        var item = document.getElementById('myChart').getContext('2d');
        window.myLine = new Chart(item, config);
    };
</script>
<!-- fim configuração do chart -->




</html>