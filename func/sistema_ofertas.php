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
											<span class="input-group-text" id="basic-addon1">Produto</span>
										</div>
										<input type="number" id="produto" class="form-control" onkeydown="buscaprod(),descricao_prod()" placeholder="Código Interno" aria-label="Username" aria-describedby="basic-addon1">
									</div>

									<hr>



									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<label class="input-group-text" for="inputGroupSelect01">Rodapé</label>
										</div>
										<select class="custom-select" name="rodape" id="rodape" onchange="rodape()">
											<option>Selecione</option>
											<option value="rod_3x">Parcelamento 3X</option>
											<option value="pix_va">Aqui é PIX, Cartão e V.A</option>
											<option value="pix">PIX</option>
										</select>
									</div>

									<hr>

									<p>Layouts</p>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="lay" value="preco" onchange="layout_oferta()" checked>
										<label class="form-check-label" for="exampleRadios1">
											Varejo
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="lay" value="tipo_atacado" onchange="layout_oferta()">
										<label class="form-check-label" for="exampleRadios2">
											Atacado
										</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="lay" value="desc_c_atacadao" onchange="layout_oferta()">
										<label class="form-check-label" for="exampleRadios3">
											Cartão Atacadão
										</label>
									</div>
									
									<div class="form-check">
										<input class="form-check-input" type="radio" name="lay" value="lmpm" onchange="layout_oferta()">
										<label class="form-check-label" for="exampleRadios3">
											Leve Mais e Pague Menos
										</label>
									</div>
								

									<hr>
									<p>Substituição</p>

									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Validade da Oferta</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: Oferta válida até 18/11" id="vld_oferta" onkeyup="validade_oferta()" aria-label="Username" aria-describedby="basic-addon1">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Descrição do Produto</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: Farinha de trigo 5kg" id="desc_produto" onkeyup="desc_produto()" aria-label="Username" aria-describedby="basic-addon1">

									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Valor Varejo</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: 5,99" id="preco_varejo" onkeyup="vlr_varejo()" aria-label="Username" aria-describedby="basic-addon1">

									</div>

									<div class="input-group mb-3" hidden id="campo_vlr_atacado">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Valor Atacado</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: 5,99" id="vlr_atacado" onkeyup="vlr_atacado()" aria-label="Username" aria-describedby="basic-addon1">

									</div>

									<div class="input-group mb-3" hidden id="campo_msg_atacado">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Msg Atacado</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: Acima de 5 fardos" id="msg_atacado" onkeyup="vlr_atacado()" aria-label="Username" aria-describedby="basic-addon1">

									</div>

									<div class="input-group mb-3" hidden id="campo_c_atacadao">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">% Desconto Cartão</span>
										</div>
										<input class="form-control" type="text" placeholder="% Desconto" id="desconto_c" onkeyup="descricao_prod()" aria-label="Username" aria-describedby="basic-addon1">

									</div>

									<div class="input-group mb-3" hidden id="campo_lmpm">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">Texto Leve Mais E Pague Menos</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: Leve 2 e Pague 1" id="txt_leve_pm" onkeyup="txt_lmpm()" aria-label="Username" aria-describedby="basic-addon1">

									</div>

									<div class="input-group mb-3" hidden id="campo_vlr_lmpm">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon"> Valor Leve Mais e Pague Menos</span>
										</div>
										<input class="form-control" type="text" placeholder="Ex: 13,99" id="vlr_leve_pm" onkeyup="vlr_lmpm()" aria-label="Username" aria-describedby="basic-addon1">

									</div>

									<hr>
									<button onclick="saveDivAsImage()" id="botaoSalvar" class="btn btn-primary">Salvar Imagem</button>

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
							<div class="h6 font-weight-bold text-primary text-center pb-2">Imagem</div>
							<hr class="dropdown-divider">

							<div class="h7 mb-0 font-weight-bold text-dark">


								<div id="oferta">

									<div id="img_cabecalho"></div>

									<div class="img_prod">
									<div id="img_produto"></div>
									</div>

									<div id="descricao" class="descricao_produto"></div>

									<div id="gr_embalagem" class="gr_embalagem"></div>

									<div id="categoria" class="cat_produto"></div>

									<div id="preco" class="preco_produto"></div>


									<div id="tipo_atacado" hidden>

										<p id="txt_atacado"> Atacado</p>

										<div id="preco_atacado_varejo" class="preco_atacado_varejo">
											<p id="valor_atc"> </p>											
										</div>

										<div>
											<div class="txt_varejo"> Varejo</div>

										</div>

										<div>
										<p id="msg_desc_atacado" class="desc_atacado"></p>
										</div>

									</div>

									<div id="desc_c_atacadao" hidden>

										<div class="preco_varejo_c_atacadao"></div>

										<div class="tag_cart_atacadao">Cartão atacadão

											<div id="porc_desconto">% de desconto</div>

											<div class="tag_branca_cart">


												<div class="valor_desc_cartao" id='vlr_desconto'></div>

											</div>

										</div>



									</div>

								

									<div id="lmpm" hidden>

										<div id="txt_lmpm"> Leve Mais e Pague Menos!</div>

										<div id="txt_pers_lmpm">Leve 3 e Pague 2</div>

										

									

									</div>

							

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