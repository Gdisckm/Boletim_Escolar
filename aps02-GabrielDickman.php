<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boletim de Notas</title>
</head>

<body>

    <!--script PHP-->


    <?php
        $aluno = isset($_GET['aluno'])?$_GET['aluno']:"[não informado]";
        $curso = isset($_GET['curso'])?$_GET['curso']:"[não informado]";
        $professor = isset($_GET['professor'])?$_GET['professor']:"[não informado]";
        $disciplina = isset($_GET['disciplina'])?$_GET['disciplina']:"[não informado]";
        $Nota1 = isset($_GET['Nota1'])?$_GET['Nota1']:0;
        $Nota2 = isset($_GET['Nota2'])?$_GET['Nota2']:0;
        $Nota3 = isset($_GET['Nota3'])?$_GET['Nota3']:0;
        $Nota4 = isset($_GET['Nota4'])?$_GET['Nota4']:0;
        $Media = 0;

        if (!($Nota1 == "" || $Nota2 == "" || $Nota3 == "" || $Nota4 == "")) {
            $Media = ($Nota1 + $Nota2 + $Nota3 + $Nota4) / 4;

            if ($Media >= 7) {
                $situacao = "APROVADO";
            } elseif ($Media >= 4 && $Media < 7) {
                $situacao = "RECUPERAÇÃO";
            } else {
                $situacao = "REPROVADO";
            }
        }

    ?>


    <!--class app página completa com todos os itens-->

    <div class="app">

        <!--1 container com itens do lado esquerdo-->

        <div class="container">

            <!--form com cada item separado-->
            <form action="#app" method="get">
                <div class="form-header">
                    <div id="form-item-header">
                        Aluno: <input type="text" name="aluno" placeholder="Nome do Aluno">
                    </div>

                    <div id="form-item-header">
                        Curso: <input type="text" name="curso" placeholder="Nome do Curso">
                    </div>

                    <div id="form-item-header">
                        Professor: <input type="text" name="professor" placeholder="Nome do Professor">
                    </div>
                </div>

                <!--fim do primeiro form-->


                <!--segundo form-->

                <div class="main">
                    <div id="form-item-main">
                        Selecione uma disciplina
                        <select name="disciplina">
                            <option value="Selecione" selected>Escolha um blox...</option>
                            <option value="BD">Banco de Dados</option>
                            <option value="POO">Programação Orientada a Objetos</option>
                            <option value="Programação WEB">Programando WEB com PHP</option>
                            <option value="Lógica de Programação">Logica de Programação</option>
                        </select>
                    </div>

                    <div id="form-item-main-body">

                        <div class="item-main">
                            Nota 1 <input type="text" name="Nota1">
                        </div class="item-main">

                        <div class="item-main">
                            Nota 2 <input type="text" name="Nota2">
                        </div class="item-main">

                        <div class="item-main">
                            Nota 3 <input type="text" name="Nota3">
                        </div class="item-main">

                        <div class="item-main">
                            Nota 4 <input type="text" name="Nota4">
                        </div class="item-main">

                        <div id="form-item-footer">
                            <button type="submit" name="Media" value="Calcular Média"> Calcular Média</button>
                        </div>

                    </div>

                </div>

            </form>
        </div>

        <!--fim do segundo form-->
        <!--final do 1 container-->

        <!--2 container com itens do lado direito-->

        <?php
    
        if ($Media == 0) {

    ?>

    <?php

        } else {     

    ?>

        <div class="container">

            <form action="#app" method="get">

                <div class="form-sidebar">

                    <div id="item-sidebar">

                        <h2>DADOS DO CADASTRO</h2>

                        Aluno:
                        <?php
                        echo "$aluno";
                    ?>
                    </div id="item-sidebar">

                    <div id="item-sidebar">
                        Curso:
                        <?php
                        echo "$curso";
                    ?>
                    </div id="item-sidebar">

                    <div id="item-sidebar">
                        Materia:
                        <?php
                        echo "$disciplina";
                    ?>
                    </div id="item-sidebar">

                    <div id="item-sidebar">
                        Professor:
                        <?php
                        echo "$professor";
                    ?>
                    </div id="item-sidebar">

                </div>

                <div class="form-footer">

                    <h2>SITUAÇÃO DO ALUNO</h2>

                    <div id="item-footer">
                        A média do aluno é:
                        <?php

                        echo "$Media";

                    ?>
                    </div>
                    <div id="item-footer">
                        A situação do aluno é:
                        <?php

                        echo "$situacao";

                    ?>
                    </div>

                </div>

            </form>
        </div>

        <?php

        }    

    ?>

        <!--fim do 2 container-->

    </div>

</html>