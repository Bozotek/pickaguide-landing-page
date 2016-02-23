<?php
  try {
		$response = array('status' => true, 'message' => "");
		$isInProd = getenv('PROD');

		if ($isInProd == true) {
    	$mongo = new MongoClient("mongodb://pickdeveloper:lucasanstoast6@ds039404.mongolab.com:39404/heroku_xcxrc7w2");
      $collection = $db->tmpuser;
		  $db = $mongo->heroku_xcxrc7w2;
		} else {
			$mongo = new MongoClient();
			$db = $mongo->pickaguide;
		}

		$email = $_POST["email"];

    if ($email == null || preg_match('/[^@]+@[^@]+\.[^@]+/', $email) != 1) {
      throw new ErrorException("This email address seems incorrect, please contact us at alexander.saenen@epitech.eu");
    }

    $results = $collection->findone(array('email' => $email));

    if ($results != null) {
      throw new ErrorException("This email address already exists");
    }

    $document = array(
      "email" => $email,
      "source" => "partners"
    );

    $collection->insert($document);
	} catch (Exception $e) {
		$response["status"] = false;
		$response["message"] = $e->getMessage();
  }
 	echo json_encode($response);
	exit();
?>
