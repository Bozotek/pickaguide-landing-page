<?php
  require "vendor/autoload.php";
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

SparkPost::setConfig(["key" => '4feda1a12fb0d4ce0b2c4fd47ce5bef210bc0fcc']);
/*
    SparkPost::setConfig(["key"=>'4feda1a12fb0d4ce0b2c4fd47ce5bef210bc0fcc']);

    try {
        // Build your email and send it!
        Transmission::send(array('campaign'=>'first-mailing',
            'from'=>'test@sparkpostbox.com', // 'test@sparkpostbox.com'
            'subject'=>'Hello from php-sparkpost',
            'html'=>'<html><body><h1>Congratulations, {{name}}!</h1><p>You just sent your very first mailing!</p></body></html>',
            'text'=>'Congratulations, {{name}}!! You just sent your very first mailing!',
            'substitutionData'=>array('name'=>'YOUR FIRST NAME'),
            'recipients'=>array(array('address'=>array('name'=>'Alexander Saenen', 'email'=>'alexander.saenen@epitech.eu' )))
        ));

        echo 'Woohoo! You just sent your first mailing!';
    } catch (Exception $err) {
        echo 'Whoops! Something went wrong';
        var_dump($err);
        $response["status"] = false;
        $response["message"] = $err->getMessage();
    }*/
  } catch (Exception $e) {
    $response["status"] = false;
    $response["message"] = $e->getMessage();
  }
  echo json_encode($response);
  exit();
?>
