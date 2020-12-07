<a href="index.php">Show Data</a>
<br><br>

<?php
include 'config.php';
$a=mysqli_query($conn,"SELECT * FROM fazenda WHERE fazenda_id='$_GET[fazenda_id]'");
$b=mysqli_fetch_array($a,MYSQLI_ASSOC)
?>
<form method="post">
	Fazenda ID : <input type="text" name="fazenda_id" placeholder="Insert Fazenda ID" value="<?= $b['fazenda_id'] ?>"><br><br>
	Name : <input type="text" name="name" placeholder="Insert Name" value="<?= $b['name']; ?>"><br><br>
	Majors : <input type="text" name="majors" placeholder="Insert Majors" value="<?= $b['majors']; ?>"><br><br>
	Gender : 
  <select name="gender">
    <option value="Male" <?php if($b['gender'] == "Male") echo "selected"; ?>>Male</option>
    <option value="Female" <?php if($b['gender'] == "Female") echo "selected" ; ?>>Female</option>
  </select><br><br>
	endereco : <input type="text" name="endereco" placeholder="Insert endereco" value="<?= $b['endereco']; ?>"><br><br>
	<input type="submit" name="update" value="Update">
	<input type="reset" name="cancel" value="Cancel">
</form>
<?php
if(isset($_POST['update']))
{
  include 'config.php';
  $fazenda_id=$_POST['fazenda_id'];
  $name=$_POST['name'];
  $majors=$_POST['majors'];
  $gender=$_POST['gender'];
  $endereco=$_POST['endereco'];

  $sql="UPDATE fazenda SET fazenda_id='$fazenda_id',name='$name',majors='$majors',gender='$gender',endereco='$endereco' WHERE fazenda_id='$_GET[fazenda_id]'";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Update Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>   