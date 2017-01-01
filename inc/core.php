<?php 
$contents = file_get_contents(__DIR__.DIRECTORY_SEPARATOR.'config.json'); 
//$contents = utf8_encode($contents); 
$config = json_decode($contents); 
function testport($ip, $port)
{
	if (!$socket = @fsockopen($ip, $port, $errno, $errstr, 10)) {
		return 0;
	} else {
		return 1;
		fclose($socket);
	}
}
function server_status()
{
	global $config;
	
	$mysql = testport($config->{'svip'}, $config->{'mysql'});
	$login = testport($config->{'svip'}, $config->{'login'});
	$gs1   = testport($config->{'svip'}, $config->{'server1'});
	$gs2   = testport($config->{'svip'}, $config->{'server2'});

	$ret = [$mysql, $login, $gs1, $gs2];

	return $ret;
}
$status = server_status();
