<?php
$single=array("Ali","saima","faizan");
$multi=array(array("23407","Ali","ali@gmail.com","0335-1205"),array("237","saima","saima@gmail.com:","0335-1205"),array("27737","faizan","faizan@gmail.com","0335-1205"));
	echo "<h2>Id arry</h2>";
	foreach ($single as $key => $value)
	 {
	echo "<p>$value</P>";
	}
echo "<h2>changedmultidimentional ARRaY</h2>";
echo "<table border='1' width='600px'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>contect</th><tr>";
foreach ($multi as $key => $value)
{
	echo"</tr>";
	foreach ($value as $k => $v)
	{


	echo "<tb>$v</td>";
}
	echo"</tr>";

}
echo"<table>";
?>
