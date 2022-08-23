<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="vierport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <title>Programação PHP</title>


</head>  
<body>

        <header>
            <h3>Programação PHP Sandro</h3>
            <h4>Teste de conhecimento LTDA</h4>
        </header>
        <br>
        <section >
            
            <h1>Programação PHP</h1><br>
            <h2>Resultados de FGTS</h2>

            <?php


                $nomeCliente = $_POST["nome"];
                $salarioCliente = $_POST["salario"];

                $resultadoMensal = $salarioCliente/100*8;

                $resultadoAnual = $resultadoMensal*12;

                echo "<br>Olá Sr(a) $nomeCliente seu recolhimento mensal é de: R$ $resultadoMensal<br><br>";
                echo "Anualmente será depositado em sua conta um total de: R$ $resultadoAnual<br>";
            ?>


            
            <br>
            <a href="index.php"><b>VOLTAR AO INÍCIO</b> </a>
            

        </section>
        <br>
        
        
        <footer>

            <h3>Teste de aprendizado</h3>  
            <h4>Programação Web com HTML, CSS e PHP</h4>
            <br>
            <p class="rodape"><b>Contatos</b></p><br>
            <p class="rodape">E-mail: Sandro_s@outlook.com</p>
            <p class="rodape">WhatsApp: (51)993790429</p>
            <br>
            <p class="rodape">CNPJ: 00.000.000/0000-1</p>
            <p class="rodape">Desenvolvido por Edwy sandro almeida dos santos</p>
            <p class="rodape">CNPJ: 00.000.000/0001-00</p>
        </footer>


</body>
</html>