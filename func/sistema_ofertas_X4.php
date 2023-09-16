<?php include('backend/atualizacao.php'); ?>


<div class="container-fluid" style="margin-top:15px">

	<div class="row">
		<div class="col-xl-4 col-md-6 mb-5">
			<div class="card shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 font-weight-bold text-primary text-center pb-2">Painel de Controle</div>
							<hr class="dropdown-divider">

							<div class="h7 mb-0 font-weight-bold text-dark">


								<div>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text" for="inputGroupSelect01">Cabeçalho</label>
										</div>
										<?php include_once('func/ofertas/select_cab_ofertas.php');?>
									</div>


									<hr>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Produto 1</span>
										</div>
										<input type="number" id="busca_produto_x4_1" class="form-control" onkeydown="buscaprod_X4_1(),descricao_prod_X4_1()" placeholder="Código Interno" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Produto 2</span>
										</div>
										<input type="number" id="busca_produto_x4_2" class="form-control" onkeydown="buscaprod_X4_2(),descricao_prod_X4_2()" placeholder="Código Interno" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Produto 3</span>
										</div>
										<input type="number" id="busca_produto_x4_3" class="form-control" onkeydown="buscaprod_X4_3(),descricao_prod_X4_3()" placeholder="Código Interno" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Produto 4</span>
										</div>
										<input type="number" id="busca_produto_x4_4" class="form-control" onkeydown="buscaprod_X4_4(),descricao_prod_X4_4()" placeholder="Código Interno" aria-label="Username" aria-describedby="basic-addon1">
									</div>

									<hr>



									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text" for="inputGroupSelect01">Rodapé</label>
										</div>
										<select class="custom-select" name="rodape" id="rodape" onchange="rodape()">
											<option hidden>Selecione</option>
											<option value="rod_3x">Parcelamento 3X</option>
											<option value="pix_va">Aqui é PIX, Cartão e V.A</option>
											<option value="pix">PIX</option>>
										</select>
									</div>

																		
									<hr>
									<p>Substituição</p>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Validade da Oferta</span>
										</div>
										<input class="form-control" type="text" placeholder="Validade" id="vld_oferta" onkeyup="validade_oferta()" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Descrição Produto 1</span>
										</div>
										<input class="form-control" type="text" placeholder="Descrição" id="desc_produto_1" onkeyup="desc_produto_1()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Valor Varejo Produto 1</span>
										</div>
										<input class="form-control" type="text" placeholder="Varejo" id="preco_varejo_1" onkeyup="vlr_varejo_1()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Descrição Produto 2</span>
										</div>
										<input class="form-control" type="text" placeholder="Descrição" id="desc_produto_2" onkeyup="desc_produto_2()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Valor Varejo Produto 2</span>
										</div>
										<input class="form-control" type="text" placeholder="Varejo" id="preco_varejo_2" onkeyup="vlr_varejo_2()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Descrição Produto 3</span>
										</div>
										<input class="form-control" type="text" placeholder="Descrição" id="desc_produto_3" onkeyup="desc_produto_3()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Valor Varejo Produto 3</span>
										</div>
										<input class="form-control" type="text" placeholder="Varejo" id="preco_varejo_3" onkeyup="vlr_varejo_3()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Descrição Produto 4</span>
										</div>
										<input class="form-control" type="text" placeholder="Descrição" id="desc_produto_4" onkeyup="desc_produto_4()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Valor Varejo Produto 4</span>
										</div>
										<input class="form-control" type="text" placeholder="Varejo" id="preco_varejo_4" onkeyup="vlr_varejo_4()" aria-label="Username" aria-describedby="basic-addon1">

									</div>


									<hr>
									<button onclick="saveDivAsImage()" class="btn btn-primary">Salvar Imagem</button>

								</div>



							</div>
							<div class="col-auto">
								<i class="icon"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>




		<div class="col-xl-8 col-md-6 mb-5">
			<div class="card shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="h6 font-weight-bold text-primary text-center pb-2">Ofertas X4</div>
							<hr class="dropdown-divider">

							<div class="h7 mb-0 font-weight-bold text-dark">


								<div id="oferta">

									<div id="img_cabecalho"></div>

									<div id="img_produto_x4_1" > </div>

									<div id="descricao_x4_1" ></div>									

									<div id="preco_x4_1" ></div>

									<div id="divisoria"></div>

									<div id="img_produto_x4_2" class="img_produto_x4_2"></div>

									<div id="descricao_x4_2" class="descricao_x4_2"></div>									

									<div id="preco_x4_2" class="preco_x4_2"></div>

									<div id="divisoria_horizontal"></div>

									<div id="img_produto_x4_3" class="img_produto_x4_3"></div>

									<div id="descricao_x4_3" class="descricao_x4_3"></div>									

									<div id="preco_x4_3" class="preco_x4_3"></div>

									<!--  Divisoria  Vertical -->									

									<div id="img_produto_x4_4" class="img_produto_x4_4"></div>

									<div id="descricao_x4_4" class="descricao_x4_4"></div>									

									<div id="preco_x4_4" class="preco_x4_4"></div>

								

							



									<div id="of_validas">

										<p id="desc_validas" class="descricao_of_valida"></p>
										

									</div>



									<div id="img_rodape"></div>



									<img id="endereco" src="imagens/rodape/endereco.png">


								</div>



							</div>
							<div class="col-auto">
								<i class="icon"></i>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>