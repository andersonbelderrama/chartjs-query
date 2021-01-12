<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Query p/ Chart</title>
</head>

<body>
    <form name="form" action="chart.php" method="post">
        <h1>Gerador de Chart</h1>
        <hr>
        <label for="campo"><strong>Digite sua Query ou Copie e Cole</strong></label>
        </br>
        <textarea type="text" id="campo" name="campo" placeholder="Digite aqui sua query.." rows="10" cols="80"></textarea>
        </br>
        <label for="titulo"><strong>Titulo Chart</strong></label>
        </br>
        <input type="text" id="titulo" name="titulo" placeholder="Digite aqui titulo do chart..">
        </br>
        </br>
        <label for="db_host"><strong>Host:</strong></label>
        <input type="text" id="db_host" name="db_host" placeholder="">
        </br>
        <label for="db_user"><strong>User:</strong></label>
        <input type="text" id="db_user" name="db_user" placeholder="">
        </br>
        <label for="db_pass"><strong>Password:</strong></label>
        <input type="text" id="db_pass" name="db_pass" placeholder="">
        </br>
        <label for="db_name"><strong>Data Base:</strong></label>
        <input type="text" id="db_name" name="db_name" placeholder="">
        <hr>
        <button type="submit">Gerar</button>
        </br>
        </br>
        <h1>Exemplo</h1>
        <hr>
        <p><strong>SELECT TOP</strong> 5 pc.PAIS, <strong>COUNT</strong>(*) as QTD</p>
        <p><strong>FROM</strong> PROC_CONTRATO pc</p> 
        <p><strong>GROUP BY</strong> pc.PAIS</p>
        <p><strong>ORDER BY</strong> QTD <strong>DESC</strong></p>
        </br>
        </br>
        <h1>Regras de Query</h1>
        <hr>
        <p>1. Query deve conter apenas duas colunas, que seria o label e valor</p>
        <p>2. Deve conter <strong>"group by"</strong> e <strong>"order by"</strong></p>
        <p>2. Deve limitar a query até 10 linhas, para que não poluir o grafico. Use <strong>"select top 5 coluna1,coluna2 from tabela"</strong> !</p>
        <p>3. Resto das condições é de acordo com sua criatividade :-) ou Solicitação do Cliente </p>
    </form>
</body>

</html>