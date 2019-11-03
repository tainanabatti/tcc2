<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Tabelas</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  rel="stylesheet">
<!--   <link rel="stylesheet" href="../css/singin.css">-->
<!--    //<link rel="stylesheet" href="../css/bootstrap.css">-->

</head>
<body>
<form action="coluna.php" method="post">

<?php

$host =$_POST["host"];
$user = $_POST["user"];
$porta = $_POST["porta"];
$senha = $_POST["senha"];
$banco= $_POST["banco"];

$conn_string = "host=".$host." port=".$porta." dbname=".$banco." user=".$user." password=".$senha;

$CONEXAO = pg_connect($conn_string);

if ($CONEXAO == false){


    echo '<a href="../index.php"></a>';
  //  echo "deu ruim";
}else{

    $sql = "SELECT tablename FROM PG_TABLES WHERE schemaname = 'public' order by tablename";

    $resultado = pg_query($CONEXAO, $sql);

    $table =pg_fetch_all($resultado);


	echo '<table class="table table-borderless">';
	echo '<thead>';
	echo '<tr>';
	echo '<th> chech   </th>';
	echo '</tr>';
	echo '</thead>';
	echo '<tbody>';

    foreach ($table as $key){
        foreach ($key as $k){
	        echo '<tr>
                    <td><input type="submit" class="form-control"  name="nome" value="'.$k.'" /></td>
	             </tr>';
        }
    }

	echo '<input type="checkbox" hidden name="conn"  value="'.$conn_string.'" checked></br>' ;
}
?>
        </tbody>
    </table>

</form>
</body>

</html>
