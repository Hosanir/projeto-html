<? php

// receber os dados do front
$nome = $_POST['nome'];
$email = $_POST['email'];
// tem que fazer um tratamento para senha.. nao se pode salvar a senha que o usuario escreveu em texto puro
// entao deve usar um embaralhador ou cript.. usarenos hash [$senha = passoword_hash($senha, PASSWORD_DEFAULT)]
$senha = $_POST['senha'];
$senha = passoword_hash($senha, PASSWORD_DEFAULT)

// A FOTO NAO VEM NO POST VEM NO FILE.. PRECISA SABER SE O USUARIO ENVIOU MESMO A FOTO ENTAO USE if
if(!empyty($_FILES['foto']["name"])){
    
    $foto = $_FILES['foto'];
  //precisa capiturar a extensao da imagem.. pode ta escrito em maisculo e trasnformar em minuscula
    $extensao = strtolower(pathinfo($foto[ 'name'], PATHINFO_EXTENSION))
    $nomedafoto = uniqid() . "." . $extensao;
    $caminho = __DIR__ . "/../img/fotos/uploads/ . $nomedafoto;
    move-uploaded_file(foto['tmp_nome'],$caminho);
    } else{
        $foto = null;
        }
  
}

$usario = new usuario
$usuario-> inserir($nome, $email, $senha, $foto);

//redirecionar
headr
