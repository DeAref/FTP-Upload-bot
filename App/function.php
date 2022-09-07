<?php


function connect($ftp_server,$ftp_user_name,$ftp_user_pass,$conn_id){
    // login with username and password
   ftp_login($conn_id,$ftp_user_name,$ftp_user_pass) or die("i cant Login");
   ftp_pasv($conn_id,true);
   return "Connect SuccessFully";
}

function upload($conn_id,$remote_file,$file){
    // upload a file
    if (ftp_put($conn_id, $remote_file, $file,FTP_BINARY)) {
        return "successfully uploaded https://appdony.ir/$remote_file";
        exit;
    } else {
        return "There was a problem while uploading \n";
        exit;
        }
    // close the connection
    ftp_close($conn_id);

}
 
function folderbandi($file)
{
    $random=rand(1,10000);
    $remote_file = "";
    $extention= substr($file, strrpos($file, '.')+1);
    echo $extention;
    
    //folder bandi
    if("jpg" == $extention||"png" == $extention||"jpeg" == $extention)
    {
       return "picture/(AppDuny.ir)".$random."_".$file;
    }elseif("apk" == $extention)
    {
       return"apk/(AppDuny.ir)".$random."_".$file;
    }elseif("zip" == $extention||"rar" == $extention)
    {
       return "zip/(AppDuny.ir)".$random."_".$file;
    }elseif("mp4" == $extention||"mkv" == $extention||"gif" == $extention)
    {
       return "video/(AppDuny.ir)".$random."_".$file;
    }elseif("mp3" == $extention||"ogg" == $extention)
    {
       return "music/(AppDuny.ir)".$random."_".$file;
    }else
    {
       return "other/(AppDuny.ir)".$random."_".$file;
    }

}
/*
function queryinsert($conn,$sql)
{
   $result_query = $conn -> query($sql); 
   return $result_query;
}
*/
 ?>