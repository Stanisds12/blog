<?php
try{
   $conect="host='localhost' port='5432' dbname='registo' user='postgres' password='qwerty12'";
$objconexao = pg_connect($conect) or die ("problemas de conexão ".pg_last_error());
/*$sql = "SELECT hermano('Apolo');";
$nombre='Apolo';
$sql = "SELECT nombre  FROM persona 
WHERE  (padre=padre('Apolo') OR madre=madre('Apolo'));";
$sql = "SELECT nombre  FROM persona 
WHERE  (padre=padre(padre('Apolo')) OR madre=madre(madre('Apolo')) );";
        $devolver = null;

        // Ejecutar la consulta:
        $rs = pg_query($objconexao, $sql );
        if( $rs )
        {
            // Obtener el número de filas:
            if( pg_num_rows($rs) > 0 )
            {
                echo "<p/>LISTADO DE PERSONAS<br/>";
                echo "===================<p />";

                // Recorrer el resource y mostrar los datos:
                while ($obj = pg_fetch_array($rs)) {
                    if($obj["nombre"]!=$nombre){
                echo $obj["nombre"]."<br />";
                    }
            }
        }
        }*/
}catch(Exception $x){
 echo $x->getMessage();
}

?>