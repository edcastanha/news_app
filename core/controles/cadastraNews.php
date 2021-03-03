<?php 

substr($data,0,4);
$novahora = substr($hora,0,2) . "h" .substr($hora,3,2) . "min";

echo " Sistema de Cadastro de Notícia";
echo "";
echo "";
echo "";
echo "Campos marcados com * são obrigatórios no cadastro.";
echo "Observação: Será inserido no seu cadastro adata atual, bem como a hora atual do cadastro";
echo "Data: $novadata - Hora: $novahora";

