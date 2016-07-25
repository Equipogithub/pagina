<?php 
include_once "control/usuarios.php";
try{
	$clsUsuarios=new usuarios();
	$userActual = new UserVO();
	if(isset($_POST['txtnombre']) && isset($_POST['txtpwdusr'])){
		$userActual->setUsername($_POST['txtnombre']);
		$userActual->setPassword($_POST['txtpwdusr']);
		$userActual->setId(0);
		$regAfectados=$clsUsuarios->save($userActual);
		if($regAfectados > 0) {
			echo $regAfectados." Registros Insertados";
		}
		else{
			echo "0 Registros Insertados";
		}
	}
}
catch(Exception $exc){
	
}

