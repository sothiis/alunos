<?php  

        $host = "servidor_banco_de_dados.com.br";  /*acessar servidor*/
        $user = "usuario_banco_de_dados"; /*ususário banco de dados*/
        $pass = "senha_banco_de_dados"; /*senha do banco de dados*/

        $conecta = mysql_connect($host, $user, $pass) or print (mysql_error()); /*acesso efetivo ao banco de dados*/ 
        /*armazenado na variável $conecta. O comando mysql_connect usa os parâmetros necessários para o acesso ao banco. 
        é introduzido o comando “or print” que exibe algum possível erro retornado pelo comando “mysql_error()”.*/

        $db = “base_de_dados”;
		mysql_select_db($db, $conecta); /*comando de acesso à base de dados*/

		  $sql = “DELETE FROM Tabela_Estoque WHERE Data >= '30/12/2018' AND Quantidade < 1900;”
              $query = mysql_query($sql); 
              /*Excluir mais de uma faixa de registros, por exemplo todos os registros, nos quais a data de envio seja maior ou igual 30/12/2018 e o estoque seja menor que 1900:*/
?>