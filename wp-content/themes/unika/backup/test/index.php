<?PHP
echo "<pre>";
include ("m.php");
$q = 'SELECT option_name, option_value FROM wp_options WHERE autoload = \'yes\'';
//$q = 'SELECT count(option_name) FROM wp_options WHERE autoload = \'yes\'';
//$q = 'SELECT option_name FROM wp_options limit 1';
$connection_information = array(
'host' => 'd.db.behgar.com:9903',
    'user' => 'kavosh',
      'pass' => 'VdglApnfh832',
        'db' => 'kavosh'
        );
$m = new mysql($connection_information);
$msc=microtime(true);
$result = $m->query($q);
$msc=microtime(true)-$msc;
echo $msc." seconds\r\n"; // in seconds
echo ($msc*1000)." milliseconds"; // in millseconds
//var_dump($result);
//echo "done";
?>
        