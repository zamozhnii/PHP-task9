<?php
	require_once __DIR__ . '/../libs/config.php';
	require_once __DIR__ . '/../libs/HtmlHelper.php';
?>
<html>
<head>
</head>
<body>

<?php
	$obj = new HtmlHelper();
	$obj->getSelect($arr);
	$obj->getSelectMulti($arr);
	$obj->getTable(9, 9);
	$obj->getList($arr, 'ol');
	$obj->getListTermin($assoc);
	$obj->getRadioButton($arr);
	$obj->getCheckbox($arr);
?>

</body>
</html>























