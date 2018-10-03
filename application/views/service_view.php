<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
		<title>CRUD</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}

</style>
</head>
<body>


	<?php

		$name = array(
		  'name'        => 'name',
		  'id'          => 'name',
		  'value'       => 	''
		);

		$phone = array(
		  'name'        => 'phone',
		  'id'          => 'phone',
		  'value'       => ''
		);
    $email = array(
		  'name'        => 'email',
		  'id'          => 'email',
		  'value'       => ''
		);
    $address = array(
		  'name'        => 'address',
		  'id'          => 'address',
		  'value'       => ''
		);
		echo form_open('service/insert');
		echo form_input($name).br(2);
		echo form_input($phone).br(2);
    echo form_input($email).br(2);
		echo form_input($address).br(2);

		echo form_submit('botonSubmit', 'guardar');
		echo form_close().br(2);

	?>
    </div>
</body>

</html>
