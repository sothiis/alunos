<?PHP

$login = $_POST['login'];
$senha = $_POST['senha'];


$conexao = mysql_connect($hostname, $username, $password) or die ("Erro");
$selecionabd = mysql_select_db($database,$conexao) or die ("Banco de dados inexistente.");

$sql = "SELECT * FROM usuário WHERE usuario = '$login'  AND usuario = '$senha'";
$resultado = mysql_query($sql,$conexao) or die ("Erro na seleção da tabela.");

if (mysql_num_rows ($resultado) > 0) {
         // session_start inicia a sessão
         session_start();
         $_SESSION['login'] = $login;
         $_SESSION['senha'] = $senha;

}

else {

         session_destroy();
         unset ($_SESSION['login']);
         unset ($_SESSION['senha']);
         header('location:login.php');
}
//Esta página analisará os dados enviados pelo do formulário. Se estiver correto, irá criar uma sessão, senão será redirecionado para a página de autenticação login.php.

?>