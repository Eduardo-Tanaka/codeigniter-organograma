<div class="container">	
	<!-- multistep form -->
	<form id="msform" method="post" action="">
		<!-- progressbar -->
		<ul id="progressbar" class="text-center">
			<li class="active">Dados Pessoais</li>
			<li>Endereço</li>
			<li>Dados Profissionais</li>
		</ul>
		<!-- fieldsets -->
		<fieldset>	
			<div class="text-center">
				<!-- Mostra a mensagem em caso de tentativa de cadatro -->
				<?php if($msg["mensagem"]): ?>
					<div class="alert alert-dismissible alert-<?= $msg['class'] ?>" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?= $msg['mensagem'] ?>
					</div>
				<?php endif; ?>
				
				<h2 class="fs-title">Dados Pessoais</h2>
				<h3 class="fs-subtitle">Etapa 1</h3>
			</div>

			<label for="nome" class="pull-left">Nome:</label>
			<p><input type="text" id="nome" name="nome" value="<?= set_value('nome') ?>" placeholder="Nome" required="required" autofocus class="form-control"
				data-validation="required"			
				data-validation-error-msg="Nome inválido." /></p>
				
			<label for="cpf" class="pull-left">Cpf:</label>
			<p><input type="text" id="cpf" name="cpf" value="<?= set_value('cpf') ?>" placeholder="Cpf" required="required" class="form-control"
				data-validation="required length"	
				data-validation-length="14" 				
				data-validation-error-msg="Cpf inválido" /></p>
				
			<label for="email" class="pull-left">Email:</label>
			<p><input id="email" name="email" value="<?= set_value('email') ?>" placeholder="Email" required="required" class="form-control"
				data-validation="required email"
				data-validation-error-msg="Email inválido" /></p>
			
			<label for="data" class="pull-left">Data de Nascimento:</label>
			<p><input type="text" id="data" name="data" value="<?= set_value('data') ?>" placeholder="dd/mm/aaaa" required="required" class="form-control"
				data-validation="required length"
				data-validation-length="10" 			
				data-validation-error-msg="Data de Nascimento inválido" /></p>
				
			<input type="button" name="next" class="next action-button pull-right" value="Próximo" />
		</fieldset>
		
		
		<fieldset>
		<div class="text-center">
			<h2 class="fs-title">Endereço</h2>
			<h3 class="fs-subtitle">Etapa 2</h3>
		</div>
			<div class="col-md-3">
				<label for="cep" class="pull-left">CEP:</label>
				<p><input type="text" id="cep" name="cep" value="<?= set_value('cep') ?>" placeholder="CEP" required="required" class="form-control"
					data-validation="required length"
					data-validation-length="9" 			
					data-validation-error-msg="CEP inválido" /></p>
			</div>
			
			<div class="col-md-9">
				<label for="logradouro" class="pull-left">Logradouro:</label>
				<p><input type="text" id="logradouro" name="logradouro" value="<?= set_value('logradouro') ?>" placeholder="Logradouro" required="required" class="form-control"
					data-validation="required"
					data-validation-error-msg="Logradouro inválido" /></p>
			</div>
			
			<div class="col-md-6">
				<label for="complemento" class="pull-left">Complemento:</label>
				<p><input type="text" id="complemento" name="complemento" value="<?= set_value('complemento') ?>" placeholder="Complemento" class="form-control" /></p>
			</div>
				
			<div class="col-md-6">
				<label for="numero" class="pull-left">Número:</label>
				<p><input type="text" id="numero" name="numero" value="<?= set_value('numero') ?>" placeholder="Número" class="form-control" /></p>
			</div>
			
			<div class="col-md-4">
				<label for="bairro" class="pull-left">Bairro:</label>
				<p><input type="text" id="bairro" name="bairro" value="<?= set_value('bairro') ?>" placeholder="Bairro" required="required" class="form-control"
					data-validation="required"
					data-validation-error-msg="Bairro inválido" /></p>
			</div>
			
			<div class="col-md-4">
				<label for="cidade" class="pull-left">Cidade:</label>
				<p><input type="text" id="cidade" name="cidade" value="<?= set_value('cidade') ?>" placeholder="Cidade" required="required" class="form-control"
					data-validation="required"
					data-validation-error-msg="Cidade inválida" /></p>
			</div>
			
			<div class="col-md-4">
				<label for="estado" class="pull-left">Estado:</label>
				<p><input type="text" id="estado" name="estado" value="<?= set_value('estado') ?>" placeholder="Estado" required="required" class="form-control"
					data-validation="required"
				data-validation-error-msg="Estado inválido" /></p>
			</div>
			
			<input type="button" name="next" class="next action-button pull-right" value="Próximo" />
			<input type="button" name="previous" class="previous action-button pull-right" value="Anterior" />
		</fieldset>
		
		
		<fieldset>
			<div class="text-center">
				<h2 class="fs-title">Dados Profissionais</h2>
				<h3 class="fs-subtitle">Etapa 3</h3>
			</div>
			
			<label>Habilidades:</label>
			<p><input type="text" id="habilidades" name="habilidades" value="<?= set_value('habilidades') ?>" placeholder="Habilidades" class="form-control" /></p>
			
			<label for="departamento" class='pull-left'>Departamento</label>
			<select id="departamento" name="departamento" class="form-control">
				<option value="1">Depto 1</option>
				<option value="1">Depto 2</option>
				<option value="1">Depto 3</option>
				<option value="1">Depto 4</option>
			</select>
			
			<input type="submit" name="submit" class="submit action-button pull-right" value="Salvar" />
			<input type="button" name="previous" class="previous action-button pull-right" value="Anterior" />
		</fieldset>
	</form>
</div>

<script>
$(document).ready(function(){
	$("#cpf").mask('000.000.000-00');
	$('#data').mask('00/00/0000');	
	$('#cep').mask('00000-000');	

	$.validate();
	
	$("#habilidades").tagit({
		autocomplete: {delay: 0, minLength: 1},
		showAutocompleteOnFocus: true,
		availableTags: ["c++", "java", "php", "javascript", "ruby", "python", "c"],
		placeholderText: "Habilidades"
	});
		
	$('#cep').on("blur", function(){
		if($("#cep").val().length == 9){		
			$.ajax({
				url: '//viacep.com.br/ws/' + $("#cep").val().replace(/[^0-9]/g,'') + '/json/',
				method: 'GET',
				dataType: 'json',
				success: function(data){
					$("#logradouro").val(data.logradouro);
					$("#complemento").val(data.complemento);
					$("#bairro").val(data.bairro);
					$("#cidade").val(data.localidade);
					$("#estado").val(data.uf);
				}
			});
		}
	});
	

	$( "#data").datepicker({
		changeMonth: true,
		changeYear: true,
		yearRange: "1930:" + new Date().getFullYear(),
		dateFormat: 'dd/mm/yy',
		dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
		dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
		dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
		monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
		monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
		nextText: 'Próximo',
		prevText: 'Anterior'
	});
	
	$(function() {
		//jQuery time
		var current_fs, next_fs, previous_fs; //fieldsets
		var left, opacity, scale; //fieldset properties which we will animate
		var animating; //flag to prevent quick multi-click glitches

		$(".next").click(function(){
			if(!$('#msform').isValid()){
				alertify.error('Dados inválidos!');
				return;
			}
			if(animating) return false;
			animating = true;
			
			current_fs = $(this).parent();
			next_fs = $(this).parent().next();
			
			//activate next step on progressbar using the index of next_fs
			$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
			
			//show the next fieldset
			next_fs.show(); 
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale current_fs down to 80%
					scale = 1 - (1 - now) * 0.2;
					//2. bring next_fs from the right(50%)
					left = (now * 50)+"%";
					//3. increase opacity of next_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({'transform': 'scale('+scale+')'});
					next_fs.css({'left': left, 'opacity': opacity});
				}, 
				duration: 800, 
				complete: function(){
					current_fs.hide();
					animating = false;
				}, 
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});

		$(".previous").click(function(){
			if(animating) return false;
			animating = true;
			
			current_fs = $(this).parent();
			previous_fs = $(this).parent().prev();
			
			//de-activate current step on progressbar
			$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
			
			//show the previous fieldset
			previous_fs.show(); 
			//hide the current fieldset with style
			current_fs.animate({opacity: 0}, {
				step: function(now, mx) {
					//as the opacity of current_fs reduces to 0 - stored in "now"
					//1. scale previous_fs from 80% to 100%
					scale = 0.8 + (1 - now) * 0.2;
					//2. take current_fs to the right(50%) - from 0%
					left = ((1-now) * 50)+"%";
					//3. increase opacity of previous_fs to 1 as it moves in
					opacity = 1 - now;
					current_fs.css({'left': left});
					previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
				}, 
				duration: 800, 
				complete: function(){
					current_fs.hide();
					animating = false;
				}, 
				//this comes from the custom easing plugin
				easing: 'easeInOutBack'
			});
		});
		
	});
});
</script>