<?php
error_reporting(E_ALL);

$GLOBALS['conn'] = mysqli_connect('localhost',  'cas2',  'mudar123', 'db_cas');


function get_sql($query){

	$res = mysqli_query($GLOBALS['conn'], $query); 
	$resultado = array();
	while($row = mysqli_fetch_object($res)) {
		$resultado[] = $row;
	}
	mysqli_free_result($res);
	
	//return 1;
	return $resultado;
}

if(!$conn){
	echo 'Erro ao conectar com o banco de dados!';
}else{
	// print_r($conn);
}



if(isset($_GET['user_lastname']) && isset($_GET['gift'])){
	// echo $_GET['gift'];

	$q = 'SELECT order_id FROM oc_order WHERE lastname = "'.$_GET['user_lastname'].'" AND invoice_no < 1 ORDER BY order_id DESC LIMIT 1';
	$run = get_sql($q)[0];

	if($run){
		$update = 'UPDATE oc_order SET gift='.$_GET['gift'].' WHERE order_id='.$run->order_id;
		$u = mysqli_query($GLOBALS['conn'], $update);
		if($u){
			echo 'Embrulhado para presente';
		}
	}
}

