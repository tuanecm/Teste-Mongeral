<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Sistema de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

</head>
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require 'conexao.php';
 
		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();
 
		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		
		//$id    = (isset($_POST['id'])) ? $_POST['id'] : '';
		$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$data  = (isset($_POST['data'])) ? $_POST['data'] : '';
		//$email = (isset($_POST['email'])) ? $_POST['email'] : '';
		//$telefone  		  = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
		//$celular   		  = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';
		//$status    		  = (isset($_POST['status'])) ? $_POST['status'] : '';
		$tamanho  = (isset($_POST['tamanho'])) ? $_POST['tamanho'] : '';
		$largura  = (isset($_POST['largura'])) ? $_POST['largura'] : '';
		$peso  = (isset($_POST['peso'])) ? $_POST['peso'] : '';
		$categoria  = (isset($_POST['categoria'])) ? $_POST['categoria'] : '';
 
 

			
			$data_temp = explode('/', $data);
			$data_ansi = $data_temp[2] . '-' . $data_temp[1] . '-' . $data_temp[0];
		
	
 
		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):
 
			
			$sql = "INSERT INTO tabela_produtos (nome, data_produto, tamanho, largura, peso, categoria)
							   VALUES('$nome','$data_ansi', '$tamanho', '$largura', '$peso', '$categoria')";
//echo $sql;
//exit;
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nome', $nome);
			$stm->bindValue(':data', $data_ansi);
			$stm->bindValue(':tamanho', $tamanho);
			$stm->bindValue(':largura', $largura);
			$stm->bindValue(':peso', $peso);
			$stm->bindValue(':categoria', $categoria);
			$retorno = $stm->execute();
 
			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;
			
			echo "<meta http-equiv=refresh content='3;URL=cadastro.php'>";
	     
	     
	     elseif ($acao == 'buscar'):
 
// Verificamos se a ação é de busca

	// Pegamos a palavra
	 
	// Verificamos no banco de dados produtos equivalente a palavra digitada
	$sql = "SELECT * FROM tabela_produtos WHERE nome LIKE '%".$nome."%' OR data_produto LIKE '%".$data_ansi."%' 
			OR tamanho LIKE '%".$tamanho."%' OR largura LIKE '%".$largura."%' OR peso LIKE '%".$peso."%' 
			OR categoria LIKE '%".$categoria."%' 
		ORDER BY nome";

	$resultado = $conexao->query($sql);
   	while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
    // aqui eu mostro os valores de minha consulta
        $nome = $linha['nome'];
        $data = $linha['data_produto'];
        $tamanho = $linha['tamanho'];
        $largura = $linha['largura'];
        $peso = $linha['peso'];
        $categoria = $linha['categoria'];
         
}
   
   $data = date('d/m/Y', strtotime($data));
   echo " 
   <div class='container'>
		<fieldset>
			<legend><h1>Busca de Produto</h1></legend>
   Nome: $nome <br />
          Data: $data<br />
          Tamanho: $tamanho<br />
          Largura: $largura<br />
          Peso: $peso<br />
          Categoria: $categoria<br />
          
    </fieldset>
    </div>
          ";         
            
	exit(); 

	// Descobrimos o total de registros encontrados
	 
	// Se houver pelo menos um registro, exibe-o
	if ($registro != 0) {
		// Exibe os produtos e seus respectivos preços
		
			echo $nome;
		}
	// Se não houver registros
	 else {
		echo "Nenhum produto foi encontrado com a palavra ".$palavra."";
	}

	     endif;
			
		?>
 
	</div>
</body>
</html>