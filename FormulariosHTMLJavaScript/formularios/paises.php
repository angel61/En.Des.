<?php

// conexión a una base de datos local oracle
$conn = oci_connect('PAISES', 'PAISES', 'localhost/XE');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
// ejecutamos la query
$stid = oci_parse($conn, 'SELECT * FROM pais');
oci_execute($stid);
//abrimos la tabla
echo "<table bgcolor='lightblue' caption='Paises' border='1'>\n <tr>
<th>Código de Pais</th><th>Pais</th></tr>";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    // Para cada fila de la tabla pais pintamos una
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";

?>