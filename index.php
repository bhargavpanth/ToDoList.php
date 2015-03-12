<?php
require_once 'app/init.php';

$itemQuery = $db->prepare("

SELECT id, name, done
FROM items
WHERE user = :user

");
$itemQuery->execute([
	'user' => $_SESSION['user_id']
	]);

$items = $itemQuery->rowCount() ? $itemQuery : [];

// echo '<pre>',print_r($items,true), '</pre>';

foreach ($$items as $item) {
	# code...
	echo $item[name],'<br>'; 
}

?>
<!DOCTYPE html>
<html lang="en">
	
</html>