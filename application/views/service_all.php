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
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>Name</strong></td>
        <td><strong>Phone</strong></td>
        <td><strong>Address</strong></td>
        <td><strong>Email</strong></td>
    </tr>
    <?php foreach ($item as $contact): ?>
        <tr>
            <td><?php echo $contact['name']; ?></td>
            <td><?php echo $contact['phone']; ?></td>
            <td><?php echo $contact['address']; ?></td>
            <td><?php echo $contact['email']; ?></td>
            <td>
                <a href="<?php echo site_url('service/edit/'.$contact['id']); ?>">Edit</a> |
                <a href="<?php echo site_url('service/delete/'.$contact['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</body>
