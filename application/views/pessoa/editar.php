<div class="container">
	<h1 class="jumbotron">Edição de Pessoa</h1>

	<div class="row">
		<!-- Mostra a mensagem em caso de tentativa de atualização -->
		<?php if($msg["mensagem"]): ?>
			<div class="alert alert-dismissible alert-<?= $msg['class'] ?>" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?= $msg['mensagem'] ?>
			</div>
		<?php endif; ?>
		
		<form method="post" action="">
			<input type='hidden' value="<?= $pessoa['id_pessoa'] ?>" name="id" />
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" id="nome" name="nome" class="form-control" value="<?= $pessoa['nm_pessoa'] ?>" />
			</div>
			<div class="form-group">
				<label for="cpf">CPF:</label>
				<input type="text" id="cpf" name="cpf" class="form-control" value="<?= $pessoa['nr_cpf'] ?>" />
			</div>
			<div class="form-group">
				<input type="submit" value="Cadastrar" class="btn btn-lg btn-primary" />
			</div>
		</form>
	</div>
</div>