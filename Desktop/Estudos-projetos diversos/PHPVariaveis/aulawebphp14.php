
<?php
session_name ("alomundo");
session_start();
?>

<?php
/*$arquivo=“contador.txt”;
$abrir = fopen($arquivo,"r");
$total = fread($abrir, filesize($arquivo)); 
fclose($abrir);
$total = $total + 1; 
$abrir = fopen($arquivo, "w");
$salva=fwrite($abrir, $total );
fclose($abrir);
echo $total
*/
$cont = $_SESSION["cont"]; 
$_SESSION["cont"]++ ;
echo $cont;

?>


</body>
</html>
