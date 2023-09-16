<?php for($i=0;$i <= 14;$i++){ ?>
            <tr style="font-size:13px;">
                <td style="width:1px"><input type="number" id="cod_int_<?php echo $i; ?>" onkeyup="busca_prod_<?php echo $i; ?>()" style="border:none;outline:none;"></td>
                <td style="width:8px"> <div id="digito_<?php echo $i; ?>" style="border:none;outline:none;" readonly></div>
                <td style="width:40%"><div id="descricao_<?php echo $i; ?>" style="border:none;outline:none;" readonly></div>
                <td><div id="embalagem_<?php echo $i; ?>" style="border:none;outline:none;" readonly></td>
                <td><div id="emb1_<?php echo $i; ?>" style="border:none;outline:none;" readonly></td>          
                <td><div id="emb9_<?php echo $i; ?>" style="border:none;outline:none;" readonly></td>  

                <td><input type="number" onkeyup="calcula_preco_<?php echo $i; ?>()" id="quantidade_<?php echo $i; ?>" style="border:none;outline:none;"></td>                
                <td><input type="number" onkeyup="calcula_preco_<?php echo $i; ?>()" id="valor_<?php echo $i; ?>" style="border:none;outline:none;"></td>    
                
                <td><div id="vlr_total_<?php echo $i; ?>" style="border:none;outline:none;" readonly></td>
                <td><svg height="1" id="cod_barras_<?php echo $i; ?>"></svg></td>
            </tr>
            <?php } ?>