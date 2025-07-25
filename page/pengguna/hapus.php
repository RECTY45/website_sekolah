<?php 
	use App\Helpers\Core;

	Core::init();
	Core::AUTH();

	if(!isset($_GET['id'])) {
		echo "<script>
			alert('Data berhasil dihapus.');
			window.location.href = '" . '?page=pengguna' . "';
		</script>";
		exit;
	}

	$id = $_GET['id'];

	if(isset($_GET['id'])) {
		global $conn;
		$sql = mysqli_query($conn, "delete from users where id='$id' ");
		echo "<script>
			alert('Data berhasil dihapus.');
			window.location.href = '" . '?page=pengguna' . "';
		</script>";
		exit;
	}

?>