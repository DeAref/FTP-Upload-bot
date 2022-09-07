<?php

$ftp_server="appdony.ir";
$ftp_user_name="repo@appdony.ir";
$ftp_user_pass="HSkhuusjgSH";
// set up basic connection
$conn_id = ftp_connect($ftp_server) or die("i cant Connect");

$bot_id="1654239648:HHjopsLsk-vbt7y8kPsoaMDXYW6F-8PonsQ";
$telegram = new Telegram($bot_id);
date_default_timezone_set("Asia/Tehran");

//GET
$text = $telegram->Text();
$username = $telegram->Username();
$name = $telegram->FirstName();
$family = $telegram->LastName();
$message_id = $telegram->MessageID();
$user_id = $telegram->UserID();
$chat_id = $telegram->ChatID();

$TEXT_start = "Hi Wellcome to Uploader Bot. i can Upload Files on AppDUNY: send me File 😊(you can Forward)";

//get message type 
$msgType = $telegram->getUpdateType();
/*
function connectdb($chat_id,$telegram)
{
     //connect data base 
     $servername = "localhost";
     $username = "langbang_ftpbot";
     $password = "FY{Ft;inJ;gN";
     $db = "langbang_ftpbot";
     
     // Create connection
     $conn = new mysqli($servername, $username, $password,$db);
     
     // Check connection
     if ($conn->connect_error) 
          {
               //die("Connection failed: " . $conn->connect_error);
               return "faild to connect data base";
          }else{
               $content = array('chat_id' => $chat_id, 'text' => "connaction SuccessFully");
          $telegram->sendMessage($content);
          return $conn;

          }
     
}
*/
     
 ?>