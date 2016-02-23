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

		$title = $_POST["title"];
    $tel = $_POST["tel"];
    $description = $_POST["description"];
    $collection = $db->guideinfos;

    $title = ltrim($title);
    $tel = ltrim($tel);
    $description = ltrim($description);

    if ($title == null) {
          throw new ErrorException("Your title seems empty, please enter valid caracters");
      }
    if ($description == null) {
          throw new ErrorException("Your description seems empty, please enter valid caracters");
      }

    if ($tel == null || preg_match('/^[0-9]{10}$/', $tel) != 1) {
          throw new ErrorException("This phone number seems incorrect, please enter ten caracter only between 0 and 9");
      }



    $document = array(
      "title" => $title,
      "tel" => $tel,
      "description" => $description,
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
