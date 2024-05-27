// Formulário HTML para upload de arquivo
<form enctype="multipart/form-data" action="" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />
    <input type="file" name="input_file" accept="image/jpg, image/jpeg, image/png, image/webp">
    <input type="submit" name="upload" value="upload">
</form>

// Código PHP para upload no servidor
<?php
        $caminho = ""; // Caminho completo onde o arquivo será salvo dentro do servidor
        $extensao = explode('/', $_FILES['input_file']['type']); // Separação do tipo e da extensão do arquivo
        $extensao = '.' . $extensao[1]; // Armazenando a extensão em uma variável
        $arquivo = $caminho . 'novo_nome' . $extensao; // Concatenando o caminho com o novo nome do arquivo e sua extensão

        move_uploaded_file($_FILES['input_file']['tmp_name'], $arquivo); // Fazendo o upload do arquivo para o servidor
?>
