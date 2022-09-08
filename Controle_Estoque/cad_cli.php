<?php include_once("header.php");?>
<?php include_once("menu.php");?>

	<div id="conteudo">
		<h1>Cadastro de Clientes</h1>
		<form action="" enctype="multipart/form-data" name="cadastro_clientes" method="post">
		<span>Nome</span>
		<input type="text" name="nome_cli">
		<span>Endereço</span>
		<input type="text" name="endereco">
		<br><span>Cidade</span>
		<input type="text" name="cidade">
		<span>UF</span>
		<input type="text" name="uf">
		<span>Email</span>
		<input type="Email" name="email">
		<input type="hidden" name="id_user">
		<input type="submit" name="enviar" value="Cadastrar" class="cadastro_btn">
		</form>
	</div><!--conteudo -->
<?php include_once("footer.php");?>
