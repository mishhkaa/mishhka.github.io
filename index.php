<?php
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
  
if(filter_var($client, FILTER_VALIDATE_IP)) $ip_address = $client;
elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip_address = $forward;
else $ip_address = $remote;
 


$client_ip = ( !empty($HTTP_SERVER_VARS['REMOTE_ADDR']) ) ? $HTTP_SERVER_VARS['REMOTE_ADDR'] : ( ( !empty($HTTP_ENV_VARS['REMOTE_ADDR']) ) ? $HTTP_ENV_VARS['REMOTE_ADDR'] : getenv('REMOTE_ADDR') );
 
  if ($fp = @fopen("./connects.txt", 'ab'))  {
    fwrite($fp, Date("Y-m-d H:i:s").' '. $_SERVER['REQUEST_URI'].' '.$client_ip."\n");
    fclose($fp);
  }

require('UserInfo.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>UserInfo Demo</title>
	<style>
table {
	margin-top: 20px;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
h2{font-family: sans-serif,'Helvetica';}
</style>

</head>
<body>
<center><h2>UserInfo demo</h2></center>


	<h1>Hello</h1>
        <p>Bayerische Motoren Werke AG або скор. BMW — німецький автобудівний та авіамоторний концерн і однойменна торгова марка автомобілів преміум- та люкс-класу і мотоциклів</p>

</body>
</html>