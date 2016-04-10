<?php
  session_start();
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
    $city = $_POST["city"];
    $description = $_POST["description"];
    $collection = $db->guideinfos;

    $title = ltrim($title);
    $city = ltrim($city);
    $description = ltrim($description);

    $result = $collection->findOne(array("infos" => $_SESSION["userId"]));

    if (count($result) != 0)
      throw new Exception("Désolé, vous êtes déjà un guide, bientôt vous aurez la possibilité d'éditer votre profil");

    if ($title == null)
      throw new Exception("Le titre semble vide");

    if ($city == null)
      throw new Exception("Vous n'avez pas indiqué de ville");

    if ($description == null)
      throw new Exception("La description semble vide");

    $document = array(
      "title" => $title,
      "city" => $city,
      "infos" => $_SESSION["userId"],
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
