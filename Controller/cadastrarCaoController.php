<?php
// verifica se foi enviado um arquivo
if (isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0) {
    
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
    $nome = $_FILES['arquivo']['name'];
    // Pega a extensao
    $extensao = strrchr($nome, '.');
    // Converte a extensao para mimusculo
    $extensao = strtolower($extensao);
    // Somente imagens, .jpg;.jpeg;.gif;.png
    if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
        // Cria um nome único para esta imagem
        // Evita que duplique as imagens no servidor.
        $novoNome = md5(microtime()) . $extensao;
        // Concatena a pasta com o nome
        $destino = '../Img/' . $novoNome;
        // tenta mover o arquivo para o destino
        if (@move_uploaded_file($arquivo_tmp, $destino)) {
            //echo "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
            //echo "<img src=\"" . $destino . "\" />";
        } else
            echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
    } else
        echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}



?>
<?php 
require_once 'DAO/cachorroDAO.php';
require_once 'DTO/cachorroDTO.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$celular = $_POST["celular"];
$nomeDoCao = $_POST["nomeDoCao"];
$idade = $_POST["idade"];
$sexo = $_POST["sexo"];
$imagem = $destino;
$informacao = $_POST["informacao"];
$perfil = $_POST["perfil"];
$estatus = $_POST["estatus"];
$idUsuario = $_POST["idUsuario"];

$cachorroDTO = new CachorroDTO();
$cachorroDTO->setNome($nome);
$cachorroDTO->setEmail($email);
$cachorroDTO->setEndereco($endereco);
$cachorroDTO->setCidade($cidade);
$cachorroDTO->setCelular($celular);
$cachorroDTO->setNomeDoCao($nomeDoCao);
$cachorroDTO->setIdade($idade);
$cachorroDTO->setSexo($sexo);
$cachorroDTO->setImagem($imagem);
$cachorroDTO->setInformacao($informacao);
$cachorroDTO->setPerfil($perfil);
$cachorroDTO->setEstatus($estatus);
$cachorroDTO->setIdUsuario($idUsuario);

$cachorroDAO = new CachorroDAO();
$status = $cachorroDAO->salvar($cachorroDTO);
if(!empty($status)){
    echo "<script>";
    echo "alert('Cao Cadastrado! ')";
    echo "</script>";
    
    echo "<script>";
    echo "window.location='../View/index.php'";
    echo "</script>";
}
?>