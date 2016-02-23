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

    $pseudo = $_POST["pseudo"];
		$password = $_POST["password"];
    $collection = $db->logininfos;

    $pseudo = ltrim($pseudo);
    $password = ltrim($password);

    if ($pseudo == null) {
          throw new ErrorException("Your pseudo seems empty, please enter valid caracters");
    }
    if ($password == null) {
          throw new ErrorException("Your password seems empty, please enter valid caracters");
    }


    $document = array(
      "pseudo" => $title,
      "password" => $tel,
      "source" => "guides"
    );

    $collection->insert($document);
	} catch (Exception $e) {
		$response["status"] = false;
		$response["message"] = $e->getMessage();
  }
 	echo json_encode($response);
	exit();
?>
