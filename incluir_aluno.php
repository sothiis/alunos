<?php  

              $host = "servidor_banco_de_dados.com.br";

              $user = "usuario_banco_de_dados";

              $pass = "senha_banco_de_dados";

              $db   = "banco_de_dados";

              $conecta = mysql_connect($host, $user, $pass) or print (mysql_error());

              mysql_select_db($db, $conecta);

              $nome_aluno  = $_REQUEST['nome_aluno'];

              $endereco_aluno = $_REQUEST['endereco_aluno'];

              $idade_aluno = $_REQUEST['idade_aluno'];

              $curso_aluno = $_REQUEST['curso_aluno'];

              $sql = "INSERT INTO Aluno 

                             (NomeAluno, 

                            EnderecoAluno,

                            IdadeAluno,

                            CursoAluno) 

                            VALUES 

                             ('$nome_aluno', 

                            '$endereco_aluno',

                            '$idade_aluno',

                            '$curso_aluno');";

              $query = mysql_query($sql);

?>