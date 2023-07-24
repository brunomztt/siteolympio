<?PHP
	$nome      = $_POST['nome'];
	$numero = $_POST['numero'];
	$email     = $_POST['email'];
	$msg       = $_POST['msg'];
	
	//tratando os codigos html
	htmlspecialchars($nome);
	htmlspecialchars($numero);
	htmlspecialchars($msg);
    htmlspecialchars($email);

	
	$para = "bruno.maz3tto@gmail.com";//email de quem vai receber
	//Criando um corpo com todas as informações
	$corpo ="Mensagem de Contato<br>";
	$corpo .="<br>Nome: $nome";
	$corpo .="<br>E-mail: $email";
	$corpo .="<br>Número: $numero";
	$corpo .="<br>Mensagem: $msg";
	$header = "Content-Type: text/html; charset=utf-8";//para o servidor de email receber os caracteres especiais
	$header .= "From: $email Reply-to $email";

    $headers =  'MIME-Version: 1.0' . "\r\n"; 
    $headers .= "From: Your name <$email>" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
	
	mail($para,"Olympio Reformas e Construções",$corpo,$headers);	
?>