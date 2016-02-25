<?php
  try {
		$response = array('status' => true, 'message' => "");
		$isInProd = getenv('PROD');

		if ($isInProd == true) {
    	$mongo = new MongoClient(getenv('MONGOLAB_URI'));
		  $db = $mongo->heroku_xcxrc7w2;
		} else {
			$mongo = new MongoClient();
			$db = $mongo->pickaguide;
		}

    $email = $_POST["email"];
		$password = $_POST["password"];
    $collection = $db->logininfos;

    $response["status"] = false;
    $response["message"] = "Mauvais mot de passe ou adresse email";

    $result = $collection->findOne(array("email" => $email, "password" => $password));

    if (count($result) != 0) {
      $response["status"] = true;
      session_start();
      $_SESSION['userId'] = $result["_id"];
      echo json_encode($response);
      exit();
    }

    if ($email == null) {
      throw new ErrorException("Ton adresse email semble vide");
    }
    if ($password == null) {
      throw new ErrorException("Ton mot de passe semble vide");
    }

	} catch (Exception $e) {
		$response["status"] = false;
		$response["message"] = $e->getMessage();
  }
 	echo json_encode($response);
	exit();
?>
