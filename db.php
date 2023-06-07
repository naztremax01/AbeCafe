<?php
	$servername = 'localhost';
	$username = 'inputhere';
	$password = 'inputhere';
	$dbname = 'inputhere';

$connection = new mysqli ($servername, $username, $password, $dbname);
if($connection === false){
    die("ERROR 404: Server not found =(. " . mysqli_connect_error());
}

$custname = $_POST['custname'];
$custemail = $_POST['custemail'];
$custphone = $_POST['custphone'];
$custaddress = $_POST['custaddress'];
$cupsmallquantity= $_POST['cupsmallquantity'];
$cupmediumquantity= $_POST['cupmediumquantity'];
$cuplargequantity= $_POST['cuplargequantity'];
$cupsmallsubtotal= $_POST['cupsmallsubtotal'];
$cupmediumsubtotal= $_POST['cupmediumsubtotal'];
$cuplargesubtotal= $_POST['cuplargesubtotal'];
$cupsmallflavour= $_POST['cupsmallflavour'];
$cupmediumflavour= $_POST['cupmediumflavour'];
$cuplargeflavour= $_POST['cuplargeflavour'];
$deliverytime= $_POST['deliverytime'];
$quantitytotal= $_POST['quantitytotal'];
// $subtotal=floatval($_POST['grandtotal']);
$grandtotal= $_POST['grandtotal'];

echo "\n The Grand Total is " . $grandtotal . "<br>";
echo "\n Your purchase will be delivered soon to " . $custaddress . " at " . $deliverytime . ". ";
echo "\n If your order contains less than 4 drinks, we will not entertain your purchase! ";

 $sql="INSERT INTO AbeCafe VALUES ('$custname','$custemail','$custphone','$custaddress','$cupsmallquantity','$cupmediumquantity','$cuplargequantity','$cupsmallsubtotal','$cupmediumsubtotal','$cuplargesubtotal','$cupsmallflavour','$cupmediumflavour','$cuplargeflavour','$deliverytime','$quantitytotal','$grandtotal')";

if(mysqli_query($connection, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
mysqli_close($connection);

?>
<html>
<head>
<title> [AbeCafe purchase summary] </title>
<style>
  body {background-color:#c98b0e}
  h1 {color:#004b85}
  td   {color:#000000}
  td   {background-color:#C0C0C0}
  p    {border:2px solid black;
    padding:15px;background-color:white}
</style>
</head>

<?php
	$servername = 'localhost';
	$username = 'inputhere';
	$password = 'inputhere';
	$dbname = 'inputhere';

// Create connection
$connection = new mysqli ($servername, $username, $password, $dbname);

$query = "SELECT * FROM AbeCafe";
//$result = mysqli_query($connection, $query) or die("Could not execute query");
$result = $connection->query($query);
print("<table border = 1 >\n");
print("<tr> <h1><b> List Of Purchases: </b></h1>\n");
print("<td align=\right\> Customer Name");
print("<td align=\right\> Customer Email");
print("<td align=\right\> Customer Phone");
print("<td align=\right\> Customer Address");
print("<td align=\right\> Quantity of small cups");
print("<td align=\right\> Quantity of medium cups");
print("<td align=\right\> Quantity of large cups");
print("<td align=\right\> Subtotal of small cups purchased");
print("<td align=\right\> Subtotal of medium cups purchased");
print("<td align=\right\> Subtotal of large cups purchased");
print("<td align=\right\> Flavour of small cups purchased");
print("<td align=\right\> Flavour of medium cups purchased");
print("<td align=\right\> Flavour of large cups purchased");
print("<td align=\right\> Delivery Time");
print("<td align=\right\> Amount of cups purchased");
print("<td align=\right\> Grand Total");

while ($dbrow = $result->fetch_assoc())
	{
		print("<tr>\n");
		print("<td>{$dbrow['custname']}</td>\n");
		print("<td>{$dbrow['custemail']}</td>\n");
		print("<td>{$dbrow['custphone']}</td>\n");
		print("<td>{$dbrow['custaddress']}</td>\n");
		print("<td align=\right\">{$dbrow['cupsmallquantity']}</td>\n");
		print("<td align=\right\">{$dbrow['cupmediumquantity']}</td>\n");
		print("<td align=\right\">{$dbrow['cuplargequantity']}</td>\n");
		print("<td align=\right\">{$dbrow['cupsmallsubtotal']}</td>\n");
		print("<td align=\right\">{$dbrow['cupmediumsubtotal']}</td>\n");
		print("<td align=\right\">{$dbrow['cuplargesubtotal']}</td>\n");
		print("<td align=\right\">{$dbrow['cupsmallflavour']}</td>\n");
		print("<td align=\right\">{$dbrow['cupmediumflavour']}</td>\n");
		print("<td align=\right\">{$dbrow['cuplargeflavour']}</td>\n");
		print("<td align=\right\">{$dbrow['deliverytime']}</td>\n");
		print("<td align=\right\">{$dbrow['quantitytotal']}</td>\n");
		print("<td align=\right\">{$dbrow['grandtotal']}</td>\n");
	
	


		print("</tr>\n");
	}	

//end table
	print("</table>\n");

echo "<script>window.print();</script>";
?>

</html>