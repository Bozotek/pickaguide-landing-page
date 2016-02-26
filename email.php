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

    $to = $collection->findOne(array("_id" => $toId));
    $from = $collection->findOne(array("_id" => $fromId));

    if (count($to) == 0 ||count($from) == 0) {
      $response["status"] = false;
      $response["message"] = "Une erreur est survenue";
      echo json_encode($response);
      exit();
    }

    $body = "Bonjour,\nNous avons le plaisir de vous informer qu'un visiteur s'intéresse à vous et souhaite passer du temps à découvrir la ville avec vous !";
    $body += "\nContactez le rapidement par mail sur " . $from["email"] . " ou sur son portable " . $from["tel"] . " !";
    $body += "En espérant que vous passerez du bon temps ensemble !\nPickaGuide";

    $sendgrid = new SendGrid('app47628710@heroku.com', '6igak6xs4752');

    $message = new SendGrid\Email();
    /*$message->addTo($to["email"])->
              setFrom('no-reply@pickaguide.com')->
              setSubject("Un visiteur vous sollicite !")->
              setText($body);*/
    $message->addTo("alexander.saenen@epitech.eu")->
              setFrom('no-reply@pickaguide.com')->
              setSubject("Un visiteur vous sollicite !")->
              setText($body);
    $res = $sendgrid->send($message);
    $response["message"] = $res;
  } catch (Exception $e) {
    $response["status"] = false;
    $response["message"] = $e->getMessage();
  }
  echo json_encode($response);
  exit();
?>
