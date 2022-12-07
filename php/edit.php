<?php
// including the database connection file
include 'connect.php';

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($conn, $_POST['id']);

	$cantidad = mysqli_real_escape_string($conn, $_POST['cantidad']);

	//updating the table
	$result = mysqli_query($conn, "UPDATE carrito SET cantidad='$cantidad' WHERE id=$id");

	//redirectig to the display page. In our case, it is index.php
	header("Location: ../carrito.php");

}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM carrito WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
	$cantidad = $res['cantidad'];
}
?>
<html>

<head>
	<title>Editar Cantidad</title>
</head>

<body>

	<form method="post" action="edit.php">
		<h3>Modificando cantidad.</h3>

		<input type="number" name="cantidad" value="<?php echo $cantidad; ?>" class="box">
		<input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
		<input type="submit" name="update" value="Actualizar">
	</form>

</body>

</html>