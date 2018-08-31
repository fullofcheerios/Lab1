<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Feedback</title>
</head>
<body>
<?php # Script 2.5 - handle_form.php #4
// create the array of US states
$states = array(1=> 'GA','AZ','AL','NY','IL');
echo '<select name="states">';
foreach($states as $key => $value)
{
	echo "<option value=\"$key\">
	$value</option>\n";
}
echo'</select>';
// Print the submitted information:
if ( !empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['comments']) ) {
	echo "<p>Thank you, <strong>{$_POST['first_name']} {$_POST['last_name']}</strong>, for the following comments:</p>
<pre>{$_POST['comments']}</pre>
<p>We will reply to you at <em>{$_POST['email']}</em>.</p>\n";
} else { // Missing form value.
	echo '<p>Please go back and fill out the form again.</p>';
}
?>
</body>
</html>