<?php


$host =$_POST["host"];
$user = $_POST["user"];
$porta = $_POST["porta"];
$senha = $_POST["senha"];
$db = $_POST["db"];

$conn_string = "host=".$host." port=".$porta." dbname=".$db." user=".$user." password=".$senha;

//var_dump($conn_string);

$conexao = pg_connect($conn_string); //or die ("Erro".var_dump($conexao) );

if ($conexao == false){
    echo "deu ruim";
}else{
$sql = "SELECT tablename FROM PG_TABLES WHERE schemaname = 'public'";

$resultado = pg_query($conexao, $sql);

   $table =pg_fetch_all($resultado);

   foreach ($table as $key){
       foreach ($key as $k){
           echo $k;
       }
   }
}
?>