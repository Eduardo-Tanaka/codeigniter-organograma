<div id="chart-container" class="text-center">
	<div class="orgchart">
		<table>
			<tbody>
				<tr>
					<td colspan="8">
						<div class="node top-level">
							<div class="title">
								GG TESTE
							</div>
							<div class="content">
								GERENTE
							</div>
							<i class="edge verticalEdge bottomEdge fa"></i>
							<i class="fa fa-info-circle second-menu-icon"></i>
							<div class="second-menu">
								<img class="avatar" src="img/module_table_bottom.png"></img>
							</div>
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
												Superv 1
											</div>
											<div class="content superv-line">
												Depto 1
											</div>
											<i class="edge verticalEdge bottomEdge fa"></i>
											<i class="fa fa-info-circle second-menu-icon"></i>
											<div class="second-menu">
												<img class="avatar" src="img/module_table_bottom.png"></img>
											</div>
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
												Superv 2
											</div>
											<div class="content superv-line">
												Depto 2
											</div>
											<i class="edge verticalEdge bottomEdge fa"></i>
											<i class="fa fa-info-circle second-menu-icon"></i>
											<div class="second-menu">
												<img class="avatar" src="img/module_table_bottom.png"></img>
											</div>
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
												Superv 3
											</div>
											<div class="content superv-line">
												Depto 3
											</div>
											<i class="edge verticalEdge bottomEdge fa"></i>
											<i class="fa fa-info-circle second-menu-icon"></i>
											<div class="second-menu">
												<img class="avatar" src="img/module_table_bottom.png"></img>
											</div>
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
												Superv 4
											</div>
											<div class="content superv-line">
												Depto 4
											</div>
											<i class="edge verticalEdge bottomEdge fa"></i>
											<i class="fa fa-info-circle second-menu-icon"></i>
											<div class="second-menu">
												<img class="avatar" src="img/module_table_bottom.png"></img>
											</div>
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
							url: '../codeigniter-organograma/Pessoa/editarOrganograma',
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
							url: '../codeigniter-organograma/Pessoa/editarOrganograma',
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
							url: '../codeigniter-organograma/Pessoa/editarOrganograma',
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
							url: '../codeigniter-organograma/Pessoa/editarOrganograma',
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