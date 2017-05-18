

<?php



include("../config.php");

error_reporting(0);

$con=mysql_connect(DB_HOSTNAME,DB_USERNAME,DB_PASSWORD);



if(!$con){ die("Not Connection".mysql_error());}



$chk=mysql_select_db(DB_DATABASE,$con);



 if($_GET['state_id'] !="" &&$_GET['city_name'] !=""){


    $sql11="SELECT query";

	$result111 = mysql_query($sql11) or die(mysql_error());

	if(mysql_num_rows($result111)){

				$message[] = array(


				'city_id'     => '0',

				'city_name'     => 'PLEASE SELECT YOUR CITY',

				);


while($category=mysql_fetch_assoc($result111)){

	 

				$message[] = array(
				
		'city_id'     => $category['city_id'],

      'city_name'     => $category['city_name'],

				);

			}

			

		header('content-type:application/json');

$str=str_replace('\/','/',json_encode(array('response'=>$message)));

echo $str;

  }else{

	  

	  		$message[] = array(

				'status'     => 0,


				);


		header('content-type:application/json');

$str=str_replace('\/','/',json_encode(array('response'=>$message)));

echo $str;

  }

		

 } 

?>

























