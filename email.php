<?php
  require "/lib/sendgrid-php/sendgrid-php.php";
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

    $toId = $_POST["to"];
    $fromId = $_POST["from"];
    $collection = $db->logininfos;

    $to = $collection->findOne(array("_id" => new MongoId($toId)));
    $from = $collection->findOne(array("_id" => new MongoId($fromId)));

    if ($to == null)
      throw new Exception("Une erreur est survenue");

    if ($from == null)
      throw new Exception("Une erreur est survenue");

    $body = "Bonjour,\nNous avons le plaisir de vous informer qu'un visiteur s'intéresse à vous et souhaite passer du temps à découvrir la ville avec vous !";
    $body += "\nContactez le rapidement par mail sur " . $from["email"] . " ou sur son portable " . $from["tel"] . " !";
    $body += "En espérant que vous passerez du bon temps ensemble !\nPickaGuide";

    $sendgrid = new SendGrid('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');

    /*$message = new SendGrid\Email();
    $message->addTo('alexander.saenen@epitech.eu')->
              setFrom('me@bar.com')->
              setSubject('Subject goes here')->
              setText('Hello World!')->
              setHtml('<strong>Hello World!</strong>');
    $res = $sendgrid->send($message);*/
  } catch (Exception $e) {
    $response["status"] = false;
    $response["message"] = $e->getMessage();
  }
  echo json_encode($response);
  exit();
?>
