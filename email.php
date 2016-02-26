<?php
  include_once "vendor/autoload.php";
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

    $html = "Bonjour!<br/><br/>Nous avons le plaisir de vous informer qu'un visiteur s'intéresse à vous et souhaite passer du temps à découvrir la ville avec vous !
      <br/>Contactez le rapidement par mail sur " . $from["email"] . " ou sur son portable " . $from["tel"] . " !
      <br/><br/>En espérant que vous passerez du bon temps ensemble !<br/><br/>PickaGuide";

    $from = array('no-reply@pickaguide.fr' => 'Service PickaGuide');
    $to = array($to["email"] => $to["firstname"]);
    $subject = 'Un visiteur vous sollicite !';

    $username = 'app47628710@heroku.com';
    $password = 'vgfryzxx3287';

    $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
    $transport->setUsername($username);
    $transport->setPassword($password);
    $swift = Swift_Mailer::newInstance($transport);

    $message = new Swift_Message($subject);

    $message->setFrom($from);
    $message->setBody($html, 'text/html');
    $message->setTo($to);

    if (!$recipients = $swift->send($message, $failures)) {
      $response["status"] = false;
      $response["message"] = $failures;
    }
  } catch (Exception $e) {
    $response["status"] = false;
    $response["message"] = $e->getMessage();
  }
  echo json_encode($response);
  exit();
?>
