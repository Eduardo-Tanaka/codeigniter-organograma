<div id="chart-container" class="text-center">
	<div class="orgchart">
		<table>
			<tbody>
				<tr>
					<td colspan="8">
						<div class="node top-level">
							<div class="title">
								GERENTE
							</div>
							<div class="content">
								<img class='avatar' src="<?=base_url('includes/css/avatar.jpg')?>"></img>
								<div class="content-info">
									<p>Nome Gerente</p>
									<p>Matr: xxxxxx</p>
								</div>
							</div>
							<i class="fa fa-info-circle second-menu-icon"></i>
						</div>							
					</td>
				</tr>
				<tr class="lines">
					<td colspan="8">
						<div class="downLine"></div>
					</td>
				</tr>
				<tr class="lines">
					<td class="rightLine"></td>						
					<td class="leftLine topLine"></td>
					<td class="rightLine topLine"></td>
					<td class="leftLine topLine"></td>
					<td class="rightLine topLine"></td>
					<td class="leftLine topLine"></td>
					<td class="rightLine topLine"></td>
					<td class="leftLine"></td>
				</tr>
				
				<tr class="nodes">
					<td colspan="2">
						<table>
							<tbody>
								<tr>
									<td colspan="6">
										<div class="node middle-level">
											<div class="title superv-line">
												Depto 1
											</div>
											<div class="content superv-line">
												<img class='avatar' src="<?=base_url('includes/css/avatar.jpg')?>"></img>
												<div class="content-info">
													<p>Nome Superv 1</p>
													<p>Matr: xxxxxx</p>
												</div>
											</div>
											<i id="info1" value="infoo1" class="fa fa-info-circle second-menu-icon"></i>
										</div>							
									</td>
								</tr>	
								<tr class="verticalNodes">
									<td>
										<ul class="connectWith" id="sort1">
											<?= $tabela1 ?>											
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</td>

					<td colspan="2">
						<table>
							<tbody>
								<tr>
									<td colspan="8">
										<div class="node middle-level">
											<div class="title superv-line">
												Depto 2
											</div>
											<div class="content superv-line">
												<img class='avatar' src="<?=base_url('includes/css/avatar.jpg')?>"></img>
												<div class="content-info">
													<p>Nome Superv 2</p>
													<p>Matr: xxxxxx</p>
												</div>
											</div>
											<i id="info2" class="fa fa-info-circle second-menu-icon"></i>
										</div>							
									</td>
								</tr>	
								<tr class="verticalNodes">
									<td>
										<ul class="connectWith" id="sort2">
											<?= $tabela2 ?>											
										</ul>
									</td>
								</tr>									
							</tbody>
						</table>
					</td>

					<td colspan="2">
						<table>
							<tbody>
								<tr>
									<td colspan="8">
										<div class="node middle-level">
											<div class="title superv-line">
												Depto 3
											</div>
											<div class="content superv-line">
												<img class='avatar' src="<?=base_url('includes/css/avatar.jpg')?>"></img>
												<div class="content-info">
													<p>Nome Superv 1</p>
													<p>Matr: xxxxxx</p>
												</div>
											</div>
											<i id="info3" class="fa fa-info-circle second-menu-icon"></i>
										</div>							
									</td>
								</tr>	
								<tr class="verticalNodes">
									<td>
										<ul class="connectWith" id="sort3">
											<?= $tabela3 ?>											
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</td>

					<td colspan="2">
						<table>
							<tbody>
								<tr>
									<td colspan="8">
										<div class="node middle-level">
											<div class="title superv-line">
												Depto 4
											</div>
											<div class="content superv-line">
												<img class='avatar' src="<?=base_url('includes/css/avatar.jpg')?>"></img>
												<div class="content-info">
													<p>Nome Superv 1</p>
													<p>Matr: xxxxxx</p>
												</div>
											</div>
											<i id="info4" class="fa fa-info-circle second-menu-icon"></i>
										</div>							
									</td>
								</tr>	
								<tr class="verticalNodes">
									<td>
										<ul class="connectWith" id="sort4">
											<?= $tabela4 ?>											
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>					
			</tbody>
		</table>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<img class='avatar'></img>
				<h4 class='modal-title' id='myModalLabel'></h4>
				<h5 id="matr"></h5>
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var display = true;
	$(document).ready(function(){
		$("#sort1, #sort2, #sort3, #sort4").sortable({
			connectWith: '.connectWith',
			start: function() {
				i = 0;
			},
			update: function (event, ui) {
				if (i == 1) {
					//console.log(ui.item[0].id);
					//console.log(event.target.id);
					if (event.target.id == 'sort1') {
						$.ajax({
							//url: '../codeigniter-organograma/Pessoa/editarOrganograma',
							url: '../Pessoa/editarOrganograma',
							type: 'POST',
							data: { 'id': ui.item[0].id, 'depto': '1' },
							success: function (data) {
								toastr.success("Movido para o departamento 1!");
							},
							error: function(jqXHR, textStatus, errorThrown) {
								toastr.error("Erro ao atualizar organograma! Tente novamente!");
								console.log(errorThrown + "\n" + textStatus + "\n" + jqXHR);
							}
						});
					}
					else if (event.target.id == 'sort2') {
						$.ajax({
							//url: '../codeigniter-organograma/Pessoa/editarOrganograma',
							url: '../Pessoa/editarOrganograma',
							type: 'POST',
							data: { 'id': ui.item[0].id, 'depto': '2' },
							success: function (data) {
								toastr.success("Movido para o departamento 2!");
							},
							error: function(jqXHR, textStatus, errorThrown) {
								toastr.error("Erro ao atualizar organograma! Tente novamente!");
								console.log(errorThrown + "\n" + textStatus + "\n" + jqXHR);
							}
						})
					}
					else if (event.target.id == 'sort3') {
						$.ajax({
							//url: '../codeigniter-organograma/Pessoa/editarOrganograma',
							url: '../Pessoa/editarOrganograma',
							type: 'POST',
							data: { 'id': ui.item[0].id, 'depto': '3' },
							success: function (data) {
								toastr.success("Movido para o departamento 3!");
							},
							error: function(jqXHR, textStatus, errorThrown) {
								toastr.error("Erro ao atualizar organograma! Tente novamente!");
								console.log(errorThrown + "\n" + textStatus + "\n" + jqXHR);
							}
						});
					}
					else if (event.target.id == 'sort4') {
						$.ajax({
							//url: '../codeigniter-organograma/Pessoa/editarOrganograma',
							url: '../Pessoa/editarOrganograma',
							type: 'POST',
							data: { 'id': ui.item[0].id, 'depto': '4' },
							success: function (data) {
								toastr.success("Movido para o departamento 4!");
							},
							error: function(jqXHR, textStatus, errorThrown) {
								toastr.error("Erro ao atualizar organograma! Tente novamente!");
								console.log(errorThrown + "\n" + textStatus + "\n" + jqXHR);
							}
						});
					}
				}
				i += 1;
				//var todo = $("#todo").sortable("toArray");
				//var inprogress = $("#inprogress").sortable("toArray");
				//var completed = $("#completed").sortable("toArray");
			}
		});
		
		$(".fa-info-circle").on("click", function(){			
			if($(this)[0].id == 'info1') {
				$(".avatar").attr({ src: "<?=base_url('includes/css/avatar.jpg')?>", alt: "foto" });
				$("#myModalLabel").text("Nome Superv 1");
				$("#matr").text("Matr: xxxxxx");
												
				$(".modal-body").html("<p>Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do 'de Finibus Bonorum et Malorum' (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, 'Lorem Ipsum dolor sit amet...' vem de uma linha na seção 1.10.32.</p><p>O trecho padrão original de Lorem Ipsum, usado desde o século XVI, está reproduzido abaixo para os interessados. Seções 1.10.32 e 1.10.33 de 'de Finibus Bonorum et Malorum' de Cicero também foram reproduzidas abaixo em sua forma exata original, acompanhada das versões para o inglês da tradução feita por H. Rackham em 1914.</p>");
				$("#myModal").modal();
			} else if($(this)[0].id == 'info2') {
				$(".avatar").attr({ src: "<?=base_url('includes/css/avatar.jpg')?>", alt: "foto" });
				$("#myModalLabel").text("Nome Superv 2");
				$("#matr").text("Matr: xxxxxx");
				
				$(".modal-body").html("<p>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página quando estiver examinando sua diagramação.</p>");
				$("#myModal").modal();
			} else if($(this)[0].id == 'info3') {
				$(".avatar").attr({ src: "<?=base_url('includes/css/avatar.jpg')?>", alt: "foto" });
				$("#myModalLabel").text("Nome Superv 3");
				$("#matr").text("Matr: xxxxxx");
				
				$(".modal-body").html("<p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes. Se você pretende usar uma passagem de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso escrito escondido no meio do texto.</p><p>Todos os geradores de Lorem Ipsum na internet tendem a repetir pedaços predefinidos conforme necessário, fazendo deste o primeiro gerador de Lorem Ipsum autêntico da internet. Ele usa um dicionário com mais de 200 palavras em Latim combinado com um punhado de modelos de estrutura de frases para gerar um Lorem Ipsum com aparência razoável, livre de repetições, inserções de humor, palavras não características, etc.</p>");
				$("#myModal").modal();
			} else if($(this)[0].id == 'info4') {
				$(".avatar").attr({ src: "<?=base_url('includes/css/avatar.jpg')?>", alt: "foto" });
				$("#myModalLabel").text("Nome Superv 4");
				$("#matr").text("Matr: xxxxxx");
				
				$(".modal-body").html("<p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p><p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, mas a maioria sofreu algum tipo de alteração, seja por inserção de passagens com humor, ou palavras aleatórias que não parecem nem um pouco convincentes.</p>");
				$("#myModal").modal();
			}	
		});
		
		$(".superv-line").on("click", function(){			
			if($(this).closest("tr").siblings().css('opacity') == 1) {
				$(this).closest("tr").siblings().animate({
					opacity: 0,
					speed: "fast",
					easing: "swing"
				});
			} else {
				$(this).closest( "tr").siblings().animate({
					opacity: 1,
					speed: "fast",
					easing: "swing"
				});
			}
		});
	});
</script>