<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="../css/style.css">
<!--        <link rel="stylesheet" href="../css/bootstrap.css">-->

    </head>
    <body>
        <?php


       $CONEXAO = pg_connect($_POST['conn']);

        $sql = "SELECT column_name, data_type FROM information_schema.columns WHERE (data_type = 'integer' or data_type = 'date') and  table_name = '".$_REQUEST['table']."'";


        $resultado = pg_query($CONEXAO, $sql);

        $column =pg_fetch_all($resultado);

        echo '<table style="width:100%">';
        echo '<tr>';
        echo '<th>Firstname</th>';
        echo '<th>Lastname</th>';
        echo '<th>Age</th>';
        echo '</tr>';

    //    print_r($column);

        foreach ($column as $key){
     //      foreach ($key as $k){


//                print_r($key);
//                // print_r()  $column;
                $i = 0;
                echo '<tr>';
                echo '<th><input type="radio"/></th>';
                echo '<th>'.$key['column_name'].'</th>';
                echo '<th>'.$key['data_type'].'</th>';
                echo '</tr>';
                $i++;

//                echo '<div class="login"><form action="./php/filtro.php" method="get">';
//                echo '<a href="filtro.php?table='.$k.'"  name="'.$k.'"  value="'.$k.'">'.$k.'</link><br>' ;
//                echo '</form></div>';
    //      }
        }
       ?>
        </table>
    </body>

</html>


