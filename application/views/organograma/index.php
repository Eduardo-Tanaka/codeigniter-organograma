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
									<tr class="superv-line">
										<td colspan="6">
											<div class="node middle-level">
												<div class="title">
													Superv 1
												</div>
												<div class="content">
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
											<ul>
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
									<tr class="superv-line">
										<td colspan="8">
											<div class="node middle-level"">
												<div class="title">
													Superv 2
												</div>
												<div class="content">
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
											<ul>
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
									<tr class="superv-line">
										<td colspan="8">
											<div class="node middle-level"">
												<div class="title">
													Superv 3
												</div>
												<div class="content">
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
											<ul>
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
									<tr class="superv-line middle-level"">
										<td colspan="8">
											<div class="node">
												<div class="title">
													Superv 4
												</div>
												<div class="content">
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
											<ul>
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
			$(".superv-line").on("click", function(){				
				if($(this).next(".verticalNodes").css('opacity') == 1) {
					$(this).next(".verticalNodes").animate({
						opacity: 0,
						speed: "fast",
						easing: "swing"
					});
				} else {
					$(this).next(".verticalNodes").animate({
						opacity: 1,
						speed: "fast",
						easing: "swing"
					});
				}
			});
		</script>