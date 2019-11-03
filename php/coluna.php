<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <?php


       $CONEXAO = pg_connect($_POST['conn']);

        $sql = "SELECT column_name, data_type FROM information_schema.columns WHERE (data_type = 'integer' or data_type = 'date' or data_type like '%time%') and  table_name = '".$_REQUEST['nome']."'";


        $resultado = pg_query($CONEXAO, $sql);

        $column =pg_fetch_all($resultado);

        echo '<form action="processa.php" method="post">';

        echo '<input type="checkbox" hidden name="conn" value="'.$_POST["conn"].'" checked></link><br>' ;

        echo '<div id="DivEsq" >';
        echo '<table class="table table-striped">';
            echo '<thead>';
                echo '<tr>';
                    echo '<th>  </th>';
                    echo '<th>Nome Coluna</th>';
                    echo '<th>Tipo Dado</th>';
                echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            foreach ($column as $key){
                    $i = 0;
                    echo '<tr>';
                        echo '<td><input  type="radio" name="nome" value="'.$key['column_name'].'"/></td>';
                        echo '<td  nome="nome">'.$key['column_name'].'</td>';
                        echo '<td>'.$key['data_type'].'</td>';
                    echo '</tr>';
                    $i++;
            }
           ?>
                </tbody>
            </table>
        </div>














        <div id="DivDir">
<ul>
            <li> <input type="radio" name="gender" value="male"> Male </li>
            <li>   <input type="radio" name="gender" value="female"> Female </li>
            <li>   <input type="radio" name="gender" value="other"> Other  </li>
</ul>
            <button type="submit" class="btn btn-medium btn-primary btn-block-medium">Conectar</button>
        </div>

        </form>
    </body>

</html>





