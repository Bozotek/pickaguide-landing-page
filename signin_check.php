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

    $firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
    $email = $_POST["email"];
		$tel = $_POST["tel"];
    $age = $_POST["age"];
    $password = $_POST["password"];
    $password_confirmation = $_POST["password_confirmation"];
    $collection = $db->logininfos;

    if ($firstname == null || $lastname == null || $tel == null || $age == null)
      throw new Exception("Veuillez rentrez les champs manquants");

    if (preg_match('/^[0-9]{10}$/', $tel) != 1)
      throw new Exception("Le numéro de téléphone n'est pas valide");

    if (preg_match('/^[0-9]+$/', $age) != 1)
      throw new Exception("Votre age n'est pas valide");

    if ($email == null || preg_match('/[^@]+@[^@]+\.[^@]+/', $email) != 1)
      throw new Exception("Votre adresse email semble invalide. Veuillez nous contacter sur alexander.saenen@epitech.eu");

    if ($password == null || $password_confirmation == null || $password != $password_confirmation)
      throw new Exception("Faites attention au mot de passe !");

    $result = $collection->findone(array('$or' => array(array("email" => $email), array("tel" => $tel))));

    if (count($result) != 0) {
      $response["status"] = false;
      $response["message"] = "Un compte utilise déjà ce numéro ou cette adresse email";
      echo json_encode($response);
      exit();
    }

    $document = array(
      "firstname" => $firstname,
      "lastname" => $lastname,
      "tel" => $tel,
      "age" => $age,
      "email" => $email,
      "password" => $password
    );

    $collection->insert($document);

    $result = $collection->findone(array("email" => $email));

    session_start();
    $_SESSION['userId'] = $result["_id"];
	} catch (Exception $e) {
		$response["status"] = false;
		$response["message"] = $e->getMessage();
  }
 	echo json_encode($response);
	exit();
?>
