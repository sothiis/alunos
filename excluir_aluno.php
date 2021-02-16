<?php  

              $host = "servidor_banco_de_dados.com.br";

              $user = "usuario_banco_de_dados";

              $pass = "senha_banco_de_dados";

              $db   = "banco_de_dados";

              $conecta = mysql_connect($host, $user, $pass) or print (mysql_error());

              mysql_select_db($db, $conecta);

              $nome_aluno  = $_REQUEST['nome_aluno'];

              $sql = "DELETE Aluno WHERE NomeAluno = '$nome_aluno';";

              $query = mysql_query($sql);

?>




