<?php

$host =$_POST["host"];
$user = $_POST["user"];
$porta = $_POST["porta"];
$senha = $_POST["senha"];
$banco= $_POST["banco"];

$conn_string = "host=".$host." port=".$porta." dbname=".$banco." user=".$user." password=".$senha;

$CONEXAO = pg_connect($conn_string);

if ($CONEXAO == false){
    echo "deu ruim";
}else{

    $sql = "SELECT tablename FROM PG_TABLES WHERE schemaname = 'public'";

    $resultado = pg_query($CONEXAO, $sql);

    $table =pg_fetch_all($resultado);

    echo '<head>';
    echo '  <meta charset="UTF-8">';
    echo '  <title>Tabelas</title>';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">';
    echo '<link rel="stylesheet" href="css/style.css">';
    echo'</head>';
    echo '<h1>Tabelas</h1>';

    foreach ($table as $key){
        foreach ($key as $k){

            echo '<body></body><form action="coluna.php" method="post">';
//            echo '<input type="checkbox" href="coluna.php?conn='.$conn_string.'&table='.$k.'"  value="'.$k.'">'.$k.'</link><br>' ;
            echo '<input type="checkbox" name="table" value="'.$k.'">'.$k.'</link><br>' ;

          //  <input type=checkbox name="numeros[]" value=1000> 1000<br>

        }
    }
    echo '<input type="checkbox"  name="conn"  value="'.$conn_string.'" checked></link><br>' ;
    echo '<button type="submit" class="btn btn-primary btn-block btn-large">Conectar</button>';
    echo '</form></body>';
    //}
}
?>