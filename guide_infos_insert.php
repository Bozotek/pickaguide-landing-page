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
    $collection = $db->guideinfos;

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
