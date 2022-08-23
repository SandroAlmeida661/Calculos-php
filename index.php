<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="vierport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
    <title>Programação PHP</title>

    <style type="text/css">

        .formulario{
            background-color: #808080;
            color: #fff;
            text-shadow: 2px 2px #000;
            padding: 10px;
            font-size: 1.9rem;
            font-weight: bold;
        }

        input{
            font-size: 1.7rem;
            padding: 4px;
            border-radius: 10px;
            border: solid;
        }

    </style>
</head>  
<body>

        <header>
            <h3>Programação PHP Sandro</h3>
            <h4>Teste de conhecimento LTDA</h4>
        </header>
        <br>
        <section >
            
            <h1>Programação PHP</h1><br>
            <h2>Insira as Informações para Cálculo de FGTS</h2>
            <div class="formulario">

                <form action="analise.php" method="post" target="">


                    <label form="nome">Nome</label><br>
                    <input type="text" id="nome" name="nome" placeholder="Insira o seu nome"><br><br>
                    <label form="salario">Salário</label><br>
                    <input type="text" id="salario" name="salario" placeholder="Insira o seu atual salário"><br>
                    <br><br>
                    <input type="submit" name="ENVIAR">                    


                </form>

            </div>
            

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