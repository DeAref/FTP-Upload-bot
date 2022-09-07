
   <?php
   #dbPass= FY{Ft;inJ;gN username= langbang_ftpbot
   include("Telegram.php");
   require_once ("config.php");
   require_once ("function.php");
  $father = "Developed By Aref \n to contact him use this id : \n @DeAref \n AppDUNY TM";
//request manage پروسه طولانی = جواب دیر به تلگرام = تکرار درخواست
   if(function_exists('litespeed_finish_request'))
      litespeed_finish_request();
   elseif(function_exists('fastcgi_finish_request'))
      fastcgi_finish_request();

   if( $chat_id == "1080648232" || $chat_id == "1418851580" || $chat_id == "1384920974" || $chat_id == "1118646790"){


         
      //start
      if($text == '/start'){
         $content = array('chat_id' => $chat_id, 'text' => $TEXT_start);
         $telegram->sendMessage($content);
      }

      if($text == '/help'){
         $content = array('chat_id' => $chat_id, 'video' => "BAACAgQAAxkBAAIHoWGxJeeYOsuEGEd4YuwHg51q-3qFAAJfDwACrYmJUYDa8hU5TTMIIwQ");
         $telegram->sendVideo($content);
      }
      if($text == '/father'){
         $content = array('chat_id' => $chat_id, 'text' => $father);
         $telegram->sendMessage($content);
      }
      if($text == '/git'){
         $content = array('chat_id' => $chat_id, 'text' => "https://github.com/DeAref");
         $telegram->sendMessage($content);
      }
      if($text == '/kill'){
         $content = array('chat_id' => $chat_id, 'text' => "Killing All tasks...");
         $telegram->sendMessage($content);
         //__halt_compiler();
         $content = array('chat_id' => $chat_id, 'text' => "🔪 Finish");
         $telegram->sendMessage($content);
      }
   //steps
   
      //display $file value
      $file = "aref.jpg";
      $random=rand(1,10000);
      //upload picture in host
      // if($msgType=='photo'){
      
      //    $file_id = $telegram->bigPhotoFileID();
      //    $file = $telegram->getFile($file_id);
      //    $file_path = $file['result']['file_path'];
      //    $full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
      //    $content = array('chat_id' => $chat_id, 'text' => "$full_path");
      //     $telegram->sendMessage($content);
      //    $content = array('chat_id' => $chat_id, 'text' => "i give your picture");
      //    $telegram->sendMessage($content);
      //    file_put_contents("$random.jpg",file_get_contents($full_path));
      //    $file = "$random.jpg";
      // }
      // upload video 
      // if($msgType=='video'){
         
      //     //Download the file just sended
      //   //$file_id = $message['photo'][0]['file_id'];
      //   $file_id = $telegram->videoFileID();
      //    // Load a local file to upload. If is already on Telegram's Servers just pass the resource id
        
      //   $content = ['chat_id' => $chat_id, 'video' => $file_id];
      //   $telegram->sendVideo($content);
       
      //   $content = array('chat_id' => $chat_id, 'text' => "$file_id");
      //   $telegram->sendMessage($content);
      //    // $file = $telegram->getFile($file_id);
      //    // $file_path = $file['result']['file_path'];
      //    // $full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
         
      //    // $content = array('chat_id' => $chat_id, 'text' => "i give your picture");
      //    // $telegram->sendMessage($content);
      //    // file_put_contents("$random.mp4",file_get_contents($full_path));
      //    // $file = "$random.mp4";
      // }
      // //upload music
      // if($msgType=='audio'){
      
      //    $file_id = $telegram->audioFileID();
      //    $file = $telegram->getFile($file_id);
      //    $file_path = $file['result']['file_path'];
      //    $full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
         
      //    $content = array('chat_id' => $chat_id, 'text' => "فایل ات رو گرفتم");
      //    $telegram->sendMessage($content);
         
         
      // }
      
      // if($msgType=='document'){
      
      //    $file_id = $telegram->documentFileID();
      //    $file = $telegram->getFile($file_id);
      //    $file_path = $file['result']['file_path'];
      //    $full_path ='https://api.telegram.org/file/bot'.$bot_id.'/'.$file_path;
      //    $content = array('chat_id' => $chat_id, 'text' => "$full_path");
      //     $telegram->sendMessage($content);
      //    $extention= substr($full_path, strrpos($full_path, '.')+1);
      //    file_put_contents("$random.$extention",file_get_contents($full_path));
      //    $file = "$random.$extention";
      // }
   //find links in message 
   $pattern = '~[a-z]+://\S+~';

   if($num_found = preg_match_all($pattern, $text, $out))
   {
      $content = array('chat_id' => $chat_id, 'text' => "تعداد کل لینک ها: ".$num_found);
      $telegram->sendMessage($content);
      //در این خط مشخص شده است که آیا پیام کاربر یک خطی بوده است یا دو خطی و بیشتر
      if( count(explode(" ",$text)) == 1)
      {
         //اگر فقط یک خط داشت ، همان خط را به فولدر بندی ارسال میکنیم
         $remote_file = folderbandi($text);
      }else 
      {
         //دو خط یا بیشتر بود خط دوم را به تابع ارسال میکنیم
         $split= explode(" ",$text);
         $remote_file = folderbandi($split[1]);
      }
         $content = array('chat_id' => $chat_id, 'text' => "20% ");
               $telegram->sendMessage($content);
            $connecttext= (connect($ftp_server,$ftp_user_name,$ftp_user_pass,$conn_id));
            $content = array('chat_id' => $chat_id, 'text' => $connecttext);
               $telegram->sendMessage($content);
               //upload 
               $content = array('chat_id' => $chat_id, 'text' => "90% ");
               $telegram->sendMessage($content);
            $uploadtext= (upload($conn_id,$remote_file,$out[0][0]));
            $content = array('chat_id' => $chat_id, 'text' => $uploadtext);
               $telegram->sendMessage($content);

               //send message to owner 
               $content = array('chat_id' => 1080648232, 'text' => "#upload_by_admins \t \n user : $chat_id upload this file ->>".$uploadtext);
               $telegram->sendMessage($content);
   }
   



   }else{
      die;
   }
   

    ?>