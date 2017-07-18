		<?php
    $key=$_GET['key'];
    $array = [];
    $con=mysql_connect("localhost","root","root");
    $db=mysql_select_db("srishops_db",$con);
    $query=mysql_query("select * from districts where first_name LIKE '%{$key}%'");

	while( $row=mysql_fetch_assoc($query))
    {
		$array[]=$row['first_name'];
    }
    echo json_encode($array);
?>