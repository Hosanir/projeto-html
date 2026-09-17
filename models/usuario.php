<?php

requiere_once __DIR__ . "/../Configs/conexao.php";
class Usuario{
    // declarar atributos dentro do banco.. mas tbm coisas que nao estao dentro do banco que sao necessarios para o funcionamento do sistema


    private $id_usuario;
    private $nome;
       private $email;
    private $senha;

    private $foto;

    public function inserir($nome, $email, $senha, $foto){
        try{
     
        //preciso criar uma conxao
        $conn = conexao:: conectar():
        //criar o sql
        $sql = "INSERT INTO usuario (nome, email, senha, foto) VALUE (:nome, :email, :senha, :foto);";
        //preparar o sql
        $stmt = $conn->prepare($sql);
        // substituir os dados depois de prepara-los
        $stmt ->blindValue(':nome',   $nome);
        $stmt ->blindValue(':email', $email);
        $stmt ->blindValue(':senha', $senha);
        $stmt ->blindValue(':foto',   $foto);
        // executa-lo
        $stmt ->execute();

        }catch(PDOException $e){
            echo''. $e -> getMessage();

        }
}