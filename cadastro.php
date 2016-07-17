<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Cadastro de Cliente</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script type="text/javascript" src="custm.js"></script>
</head>
<body>
	<div class='container'>
		<fieldset>
			<legend><h1>Cadastro de Produto</h1></legend>
			
			<form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
				
 
			    <div class="form-group">
			      <label for="nome">Nome</label>
			      <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome">
			      <span class='msg-erro msg-nome'></span>
			    </div>
 
			    <div class="form-group">
			      <label for="email">Data</label>
			      <input type="data" class="form-control" id="data" name="data" maxlength="10" placeholder="Informe a Data">
			      <span class='msg-erro msg-email'></span>
			    </div>
 
			    <div class="form-group">
			      <label for="tamanho">Tamanho</label>
			      <input type="tamanho" class="form-control" id="tamanho" maxlength="14" name="tamanho" placeholder="Informe o tamanho">
			      <span class='msg-erro msg-cpf'></span>
			    </div>
			    <div class="form-group">
			      <label for="largura">Largura</label>
			      <input type="largura" class="form-control" id="largura" maxlength="10" name="largura" placeholder="Informe a largura">
			      <span class='msg-erro msg-data'></span>
			    </div>
			    <div class="form-group">
			      <label for="peso">Peso</label>
			      <input type="peso" class="form-control" id="peso" maxlength="12" name="peso" placeholder="Informe o peso">
			      <span class='msg-erro msg-telefone'></span>
			    </div>
			    <div class="form-group">
			      <label for="categoria">Categoria</label>
			      <input type="categoria" class="form-control" id="categoria" maxlength="13" name="categoria" placeholder="Informe a Categoria">
			      <span class='msg-erro msg-celular'></span>
			    </div>
			   
 
			    <input type="hidden" name="acao" value="incluir">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Salvar
			    </button>
			</form>
		</fieldset>
	</div>
	<div class='container'>
		<fieldset>
			<legend><h1>Busca de Produto</h1></legend>
			
			<form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
				
 
			    <div class="form-group">
			      <label for="nome">Nome</label>
			      <input type="text" class="form-control" id="nome" name="nome" placeholder="Infome o Nome">
			    
			    </div>
 
			    <div class="form-group">
			      <label for="email">Data</label>
			      <input type="data" class="form-control" id="data_busca" name="data_busca" maxlength="10" placeholder="Informe a Data">
			     
			    </div>
 
			    <div class="form-group">
			      <label for="tamanho">Tamanho</label>
			      <input type="tamanho" class="form-control" id="tamanho" maxlength="14" name="tamanho" placeholder="Informe o tamanho">
			      
			    </div>
			    <div class="form-group">
			      <label for="largura">Largura</label>
			      <input type="largura" class="form-control" id="largura" maxlength="10" name="largura" placeholder="Informe a largura">
			      
			    </div>
			    <div class="form-group">
			      <label for="peso">Peso</label>
			      <input type="peso" class="form-control" id="peso" maxlength="12" name="peso" placeholder="Informe o peso">
			      <span class='msg-erro msg-telefone'></span>
			    </div>
			    <div class="form-group">
			      <label for="categoria">Categoria</label>
			      <input type="categoria" class="form-control" id="categoria" maxlength="13" name="categoria" placeholder="Informe a Categoria">
			      
			    </div>
			   
 
			    <input type="hidden" name="acao" value="buscar" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar">
			    <button type="submit" class="btn btn-primary" id='botao'> 
			      Buscar
			    </button>
			</form>
		</fieldset>
	</div>
	<script type="text/javascript" src="custm.js"></script>
</body>
</html>