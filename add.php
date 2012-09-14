<?php

$project_name = 'starting';
$edit_dns = 'sudo /usr/local/psa/bin/subdomain --create ' . $project_name . ' -domain secure.northstreetcreative.com -www-root ' . $project_name;

echo $edit_dns;

// if the form has been submitted
if( isset($_POST['submit']) ) {
$project_name = $_POST['project_name'];


$edit_dns = 'sudo /usr/local/psa/bin/subdomain --create ' . $project_name . ' -domain secure.northstreetcreative.com -www-root ' . $project_name;

exec($edit_dns, $output, $return);

if( $return == 0 ) {
  echo "New subdomain added<br>";
}

// create a directory

}

?>

<html>
<head>
<title>Add a new project</title>
</head>

<body>
<h1>Add a new project</h1>

<form method="POST">
<label>Project name:</label>  <input type="text" name="project_name" value="<?php echo $project_name; ?>">
<br><input type="submit" name="submit" value="submit">
</form>

</body>
</html>
