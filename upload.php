<?php

if(!empty($_FILES['foto']['tmp_name'])){
//verifica se é imagem
if($_FILES['foto']['type'] == 'image/jpeg'){
    echo "Imagem!";




//gera um hash com a hora exata
$nome = md5(rand(0, 999).time());
//verifica se algo foi enviado

    move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$_FILES['foto']['name']);
    
    echo "Foto carregada com sucesso!";
}else{
    echo "Arquivo!";
}

}
