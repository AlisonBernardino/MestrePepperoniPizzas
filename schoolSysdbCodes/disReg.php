<html>
    <head>
        <title>
            Recepção de dados - Função para inserir a tabela Disciplina do Banco de Dados         </title>
        </title>
    </head>
    <body>
        <?php
            include 'config.php';
            $coddiscipline = $_POST['txtCodDisciplina'];
            $codname = $_POST['txtNome'];

            $stmt = $con->prepare("INSERT INTO coddisciplina(codigodisciplina,nomedisciplina) values(?,?)");
            $stms-> bind_param("ss",$coddiscipline,$codname); 
            $stmt->execute();

            echo "Data insertion completed succesfully!";

            // Continue writing from tutorial clock: 21:32
        ?>
        </body>
</html>