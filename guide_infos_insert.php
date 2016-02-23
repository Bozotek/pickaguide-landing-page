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
    $price = $_POST["price"];
    $hours = $_POST["hours"];
    $description = $_POST["description"];
    $collection = $db->guideinfos;

    $title = ltrim($title);
    $price = ltrim($price);
    $hours = ltrim($hours);
    $description = ltrim($description);

    if ($title == null) {
          throw new ErrorException("Your title seems empty, please enter valid caracters");
      }
    if ($description == null) {
          throw new ErrorException("Your description seems empty, please enter valid caracters");
      }

    if ($price == null || preg_match('/^[0-9]+$/', $price) != 1) {
          throw new ErrorException("This price seems incorrect, please enter caracter only between 0 and 9");
      }

    if ($hours == null || preg_match('/^[0-4]+$/', $hours) != 1) {
          throw new ErrorException("This hours seems incorrect, please enter hours only between 0 and 4");
      }


    $document = array(
      "title" => $title,
      "price" => $price,
      "hours" => $hours,
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
