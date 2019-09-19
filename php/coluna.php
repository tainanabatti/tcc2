<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
        <?php

        var_dump($_REQUEST);
        $CONEXAO = pg_connect($_REQUEST['conn']);

        $sql = "SELECT column_name FROM information_schema.columns WHERE table_name = '".$_REQUEST['table']."'";


        //     echo $sql;
        $resultado = pg_query($CONEXAO, $sql);

        $column =pg_fetch_all($resultado);
        echo '<h1>Colunas</h1>';
        foreach ($column as $key){
            foreach ($key as $k){

                echo '<form action="./php/filtro.php" method="get">';
                echo '<a href="filtro.php?table='.$k.'"  name="'.$k.'"  value="'.$k.'">'.$k.'</link><br>' ;
                echo '</form>';
            }
        }
        ?>
    </body>

</html>


