
function insere_log_ger_web($log) {

    var xhr = new XMLHttpRequest();
    var url = "backend/buscar_dados.php?log=" + encodeURIComponent($log);

    xhr.open("GET", url, true);

    xhr.send();
}


function saveDivAsImage() {


    const divToSave = document.getElementById('oferta');

    // Configurações para a renderização
    const options = {
      scale: 2, // Aumenta a escala para melhor resolução (opcional)
      logging: true // Ativa logs para depuração (opcional)
    };
    
    // Renderiza a div como uma imagem
    html2canvas(divToSave, options).then(canvas => {
      // Converte o canvas em uma URL de dados
      const imageDataURL = canvas.toDataURL('image/png');
    
      // Cria um link para fazer o download da imagem
      const downloadLink = document.createElement('a');
      downloadLink.href = imageDataURL;
      downloadLink.download = 'ofertas.png'; // Nome do arquivo
      downloadLink.click();
    });


      insere_log_ger_web('img_gerada');

    
   


  
}



function validade_oferta() {
    inputVldOf = document.getElementById('vld_oferta').value;
    pVldOf = document.getElementById('desc_validas');

    pVldOf.innerHTML = '';
    pVldOf.innerHTML = inputVldOf;


}

function vlr_varejo() {
    inputVlrVrj = document.getElementById('preco_varejo').value;
    vlrdivdescricao = document.getElementById('descricao').textContent;
    divVlrVrj = document.getElementById('preco');

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }
}
function desc_produto() {

    inputDescProd = document.getElementById('desc_produto').value;
    divDescProd = document.getElementById('descricao');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}

function vlr_atacado() {

    inputVlrAt = document.getElementById('vlr_atacado').value;
    inputDescAt = document.getElementById('msg_atacado').value;

    divDescAt = document.getElementById('msg_desc_atacado');
    pVlrAt = document.getElementById('valor_atc');

    pVlrAt.innerHTML = '';
    pVlrAt.innerHTML = 'R$ ' + inputVlrAt;

    divDescAt.innerHTML = '';
    divDescAt.innerHTML = inputDescAt;

}

function vlr_lmpm() {

    inputVlrlmpm = document.getElementById('vlr_leve_pm').value;
    pVlrlmpm = document.getElementById('preco');

    pVlrlmpm.innerHTML = '';
   pVlrlmpm.innerHTML = 'R$ ' + inputVlrlmpm;




}

function txt_lmpm() {


    inputDesclmpm = document.getElementById('txt_leve_pm').value;
    divDesclmpm = document.getElementById('txt_pers_lmpm');

    divDesclmpm.innerHTML = '';
    divDesclmpm.innerHTML = inputDesclmpm;



}

function layout_oferta() {
    inputLayout = document.querySelector('input[name="lay"]:checked').value;
    preco_varejo = document.getElementById('preco');
    txt_atacado = document.getElementById('txt_atacado');

    if (inputLayout == 'tipo_atacado') {


        reveladiv = document.getElementById('campo_vlr_atacado');
        reveladiv.hidden = false;

        reveladiv = document.getElementById('campo_msg_atacado');
        reveladiv.hidden = false;
        reveladiv = document.getElementById('campo_lmpm');
        reveladiv.hidden = true;
        reveladiv = document.getElementById('campo_vlr_lmpm');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_c_atacadao');
        reveladiv.hidden = true;

        oculta_div = document.getElementById('desc_c_atacadao');
        oculta_div.hidden = true;
        oculta_div = document.getElementById('lmpm');
        oculta_div.hidden = true;

        preco_varejo.classList.remove("preco_produto");
        preco_varejo.classList.remove("preco_varejo_c_atacadao");
        preco_varejo.classList.remove("vlr_lmpm");
        preco_varejo.classList.add("preco_varejo_2");

        
        reveladiv = document.getElementById(inputLayout);
        reveladiv.hidden = false;

        reveladiv = document.getElementById('campo_vlr_atacado');
        reveladiv.hidden = false;

        reveladiv = document.getElementById('campo_msg_atacado');
        reveladiv.hidden = false;

    } else if (inputLayout == 'preco') {

        reveladiv = document.getElementById('campo_lmpm');
        reveladiv.hidden = true;
        reveladiv = document.getElementById('campo_vlr_lmpm');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_c_atacadao');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_vlr_atacado');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_msg_atacado');
        reveladiv.hidden = true;

        oculta_div = document.getElementById('tipo_atacado');
        oculta_div.hidden = true;
        oculta_div = document.getElementById('desc_c_atacadao');
        oculta_div.hidden = true;
        oculta_div = document.getElementById('lmpm');
        oculta_div.hidden = true;

        preco_varejo.classList.remove("preco_varejo_2");
        preco_varejo.classList.remove("preco_varejo_c_atacadao");
        preco_varejo.classList.remove("vlr_lmpm");
        preco_varejo.classList.add("preco_produto");

        reveladiv = document.getElementById(inputLayout);
        reveladiv.hidden = false;

    } else if (inputLayout == 'desc_c_atacadao') {
        
        reveladiv = document.getElementById('campo_c_atacadao');
        reveladiv.hidden = false;

        reveladiv = document.getElementById('campo_lmpm');
        reveladiv.hidden = true;
        reveladiv = document.getElementById('campo_vlr_lmpm');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_vlr_atacado');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_msg_atacado');
        reveladiv.hidden = true;
        oculta_div = document.getElementById('tipo_atacado');
        oculta_div.hidden = true;
        oculta_div = document.getElementById('lmpm');
        oculta_div.hidden = true;

        preco_varejo.classList.remove("preco_varejo_2");
        preco_varejo.classList.remove("vlr_lmpm");
        preco_varejo.classList.add("preco_varejo_c_atacadao");

        reveladiv = document.getElementById(inputLayout);
        reveladiv.hidden = false;
    } else if (inputLayout == 'lmpm') {
        reveladiv = document.getElementById('campo_lmpm');
        reveladiv.hidden = false;
        reveladiv = document.getElementById('campo_vlr_lmpm');
        reveladiv.hidden = false;
        reveladiv = document.getElementById('campo_c_atacadao');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_vlr_atacado');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_msg_atacado');
        reveladiv.hidden = true;

        oculta_div = document.getElementById('tipo_atacado');
        oculta_div.hidden = true;
        oculta_div = document.getElementById('desc_c_atacadao');
        oculta_div.hidden = true;


        preco_varejo.classList.remove("preco_varejo_2");
        preco_varejo.classList.remove("preco_varejo_c_atacadao");
        preco_varejo.classList.remove("preco_produto");
        preco_varejo.classList.add("vlr_lmpm");

        reveladiv = document.getElementById(inputLayout);
        reveladiv.hidden = false;
    }
    else {

        reveladiv = document.getElementById('campo_lmpm');
        reveladiv.hidden = true;
        reveladiv = document.getElementById('campo_vlr_lmpm');
        reveladiv.hidden = true;

        reveladiv.hidden = true;
        reveladiv = document.getElementById('campo_vlr_atacado');
        reveladiv.hidden = true;

        reveladiv = document.getElementById('campo_msg_atacado');
        reveladiv.hidden = true;
        reveladiv = document.getElementById('campo_c_atacadao');
        reveladiv.hidden = true;
    }





}

function cabecalho() {

    inputCabecalho = document.getElementById('cabecalho').value;
    imgCabecalho = document.getElementById('img_cabecalho');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/cabecalho/${inputCabecalho}.png`;
    linkElement.alt = `imagens/alternativa/n_encontrado.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/cabecalho/${inputCabecalho}.png`;
    imgElement.id = 'imagem_cabecalho';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgCabecalho.innerHTML = ''; // Limpa o conteúdo existente
    imgCabecalho.appendChild(linkElement);




}

function rodape() {

    inputrodape = document.getElementById('rodape').value;
    imgrodape = document.getElementById('img_rodape');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/rodape/${inputrodape}.png`;



    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/rodape/${inputrodape}.png`;
    imgElement.id = 'imagem_rodape';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgrodape.innerHTML = ''; // Limpa o conteúdo existente
    imgrodape.appendChild(linkElement);




}

function descricao_prod() {
    produto = document.getElementById("produto").value;
    desconto = document.getElementById("desconto_c").value;

    document.getElementById("porc_desconto").innerHTML = "";
    document.getElementById("porc_desconto").innerHTML = desconto + "% de Desconto";

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco").innerHTML = dados.preco;
            document.getElementById("vlr_desconto").innerHTML = dados.desconto;


        }



    };

    var url = "backend/buscar_dados.php?produto=" + encodeURIComponent(produto) + "&desconto=" + encodeURIComponent(desconto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod() {

    inputproduto = document.getElementById('produto').value;
    imgproduto = document.getElementById('img_produto');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;



    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'imagem_produto';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}

/* Ofertas X2 */

function descricao_prod_X2_1() {
    produto = document.getElementById("produto_1").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao_x2_1").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco_x2_1").innerHTML = dados.preco;

        }

    };
    var url = "backend/buscar_dados.php?produto_x2_1=" + encodeURIComponent(produto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod_X2_1() {

    inputproduto = document.getElementById('produto_1').value;
    imgproduto = document.getElementById('img_produto_1');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'img_produto_1';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}

function descricao_prod_X2_2() {
    produto = document.getElementById("produto_2").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao_x2_2").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco_x2_2").innerHTML = dados.preco;

        }

    };
    var url = "backend/buscar_dados.php?produto_x2_2=" + encodeURIComponent(produto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod_X2_2() {

    inputproduto = document.getElementById('produto_2').value;
    imgproduto = document.getElementById('img_produto_2');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'img_produto_2';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}

function vlr_varejo_x2_1() {

    inputVlrVrj = document.getElementById('preco_varejo_1').value;
    vlrdivdescricao = document.getElementById('descricao_x2_1').textContent;
    divVlrVrj = document.getElementById('preco_x2_1');

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }



}
function desc_produto_x2_1() {

    inputDescProd = document.getElementById('desc_produto_1').value;
    divDescProd = document.getElementById('descricao_x2_1');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}
function vlr_varejo_x2_2() {

    inputVlrVrj = document.getElementById('preco_varejo_2').value;
    vlrdivdescricao = document.getElementById('descricao_x2_2').textContent;
    divVlrVrj = document.getElementById('preco_x2_2');

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }



}
function desc_produto_x2_2() {

    inputDescProd = document.getElementById('desc_produto_2').value;
    divDescProd = document.getElementById('descricao_x2_2');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}


// Ofertas x4


function descricao_prod_X4_1() {
    produto = document.getElementById("busca_produto_x4_1").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao_x4_1").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco_x4_1").innerHTML = dados.preco;

        }

    };
    var url = "backend/buscar_dados.php?produto_x2_1=" + encodeURIComponent(produto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod_X4_1() {

    inputproduto = document.getElementById('busca_produto_x4_1').value;
    imgproduto = document.getElementById('img_produto_x4_1');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'img_produto_x4_1';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}

function descricao_prod_X4_2() {
    produto = document.getElementById("busca_produto_x4_2").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao_x4_2").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco_x4_2").innerHTML = dados.preco;

        }

    };
    var url = "backend/buscar_dados.php?produto_x2_2=" + encodeURIComponent(produto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod_X4_2() {

    inputproduto = document.getElementById('busca_produto_x4_2').value;
    imgproduto = document.getElementById('img_produto_x4_2');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'img_produto_x4_2';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}


function descricao_prod_X4_3() {
    produto = document.getElementById("busca_produto_x4_3").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao_x4_3").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco_x4_3").innerHTML = dados.preco;

        }

    };
    var url = "backend/buscar_dados.php?produto_x4_3=" + encodeURIComponent(produto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod_X4_3() {

    inputproduto = document.getElementById('busca_produto_x4_3').value;
    imgproduto = document.getElementById('img_produto_x4_3');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'img_produto_x4_3';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}



function descricao_prod_X4_4() {
    produto = document.getElementById("busca_produto_x4_4").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {

        if (xhr.readyState === 4 && xhr.status === 200) {
            var dados = JSON.parse(xhr.responseText);
            document.getElementById("descricao_x4_4").innerHTML = dados.descricao + " " + dados.embalagem + "</br>" + dados.categoria;
            document.getElementById("preco_x4_4").innerHTML = dados.preco;

        }

    };
    var url = "backend/buscar_dados.php?produto_x4_4=" + encodeURIComponent(produto); // Adiciona o parâmetro "produto" à URL

    xhr.open("GET", url, true);

    xhr.send();
}




function buscaprod_X4_4() {

    inputproduto = document.getElementById('busca_produto_x4_4').value;
    imgproduto = document.getElementById('img_produto_x4_4');

    // Crie um elemento de link
    const linkElement = document.createElement('a');
    linkElement.href = `imagens/img_produto/${inputproduto}.png`;

    // Crie um elemento de imagem
    const imgElement = document.createElement('img');
    imgElement.src = `imagens/img_produto/${inputproduto}.png`;
    imgElement.id = 'img_produto_x4_4';

    // Adicione a imagem ao link
    linkElement.appendChild(imgElement);

    // Limpe o conteúdo existente e insira o link com a imagem
    imgproduto.innerHTML = ''; // Limpa o conteúdo existente
    imgproduto.appendChild(linkElement);




}


// Alteração nos produtos X4

function vlr_varejo_1() {
    inputVlrVrj = document.getElementById('preco_varejo_1').value;
    vlrdivdescricao = document.getElementById('descricao_x4_1').textContent;
    divVlrVrj = document.getElementById('preco_x4_1');

    console.log(vlrdivdescricao);

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }

}
function desc_produto_1() {

    inputDescProd = document.getElementById('desc_produto_1').value;
    divDescProd = document.getElementById('descricao_x4_1');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}
function vlr_varejo_2() {


    inputVlrVrj = document.getElementById('preco_varejo_2').value;
    vlrdivdescricao = document.getElementById('descricao_x4_2').textContent;
    divVlrVrj = document.getElementById('preco_x4_2');

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }



}
function desc_produto_2() {

    inputDescProd = document.getElementById('desc_produto_2').value;
    divDescProd = document.getElementById('descricao_x4_2');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}

function vlr_varejo_3() {

    inputVlrVrj = document.getElementById('preco_varejo_3').value;
    vlrdivdescricao = document.getElementById('descricao_x4_3').textContent;
    divVlrVrj = document.getElementById('preco_x4_3');

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }



}
function desc_produto_3() {

    inputDescProd = document.getElementById('desc_produto_3').value;
    divDescProd = document.getElementById('descricao_x4_3');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}
function vlr_varejo_4() {

    inputVlrVrj = document.getElementById('preco_varejo_4').value;
    vlrdivdescricao = document.getElementById('descricao_x4_4').textContent;
    divVlrVrj = document.getElementById('preco_x4_4');

    // Verifica se a string contém "Emb. Unidade"
    if (vlrdivdescricao.includes('Emb. Unidade')) {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj;
    } else {
        divVlrVrj.innerHTML = 'R$ ' + inputVlrVrj + '<h7 style="font-size:13px;color:black"> Kg</h7>';
    }



}
function desc_produto_4() {

    inputDescProd = document.getElementById('desc_produto_4').value;
    divDescProd = document.getElementById('descricao_x4_4');


    divDescProd.innerHTML = '';
    divDescProd.innerHTML = inputDescProd;


}

