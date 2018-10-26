$domain = www.rhinocourts.com
$file_path = "/opt/bitnami/apps/wordpress/htdocs/wp-config.php";
$main = file_get_contents($file_path);
$data_to_write = $main;
$data_to_write = str_replace(". \$_SERVER['HTTP_HOST'] .", ".'$domain'.", $data_to_write);
file_put_contents($file_path, $data_to_write);
