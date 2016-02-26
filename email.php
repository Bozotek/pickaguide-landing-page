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

    $body = "Bonjour,\nNous avons le plaisir de vous informer qu'un visiteur s'intéresse à vous et souhaite passer du temps à découvrir la ville avec vous !";
    $body += "\nContactez le rapidement par mail sur " . $from["email"] . " ou sur son portable " . $from["tel"] . " !";
    $body += "En espérant que vous passerez du bon temps ensemble !\nPickaGuide";
/*
    $text = "Hi!\nHow are you?\n";
   $html = "<html>
         <head></head>
         <body>
             <p>Hi!<br>
                 How are you?<br>
             </p>
         </body>
         </html>";
   // This is your From email address
   $from = array('someone@example.com' => 'Name To Appear');
   // Email recipients
   $to = array(
         'alexander.saenen@epitech.eu'=>'Raloufah'
   );
   // Email subject
   $subject = 'Example PHP Email';

   // Login credentials
   $username = 'app47628710@heroku.com';
   $password = 'vgfryzxx3287';

   // Setup Swift mailer parameters
   $transport = Swift_SmtpTransport::newInstance('smtp.sendgrid.net', 587);
   $transport->setUsername($username);
   $transport->setPassword($password);
   $swift = Swift_Mailer::newInstance($transport);

   // Create a message (subject)
   $message = new Swift_Message($subject);

   // attach the body of the email
   $message->setFrom($from);
   $message->setBody($html, 'text/html');
   $message->setTo($to);
   $message->addPart($text, 'text/plain');

   // send message
   if ($recipients = $swift->send($message, $failures))
   {
       // This will let us know how many users received this message
       echo 'Message sent out to '.$recipients.' users';
   }
   // something went wrong =(
   else
   {
       echo "Something went wrong - ";
       print_r($failures);
   }*/
  } catch (Exception $e) {
    $response["status"] = false;
    $response["message"] = $e->getMessage();
  }
  echo json_encode($response);
  exit();
?>
