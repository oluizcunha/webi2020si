<a href="index.php">Show Data</a>
<br><br>
<form method="post">
	Fazenda ID : <input type="text" name="fazenda_id" placeholder="Insert Fazenda ID"><br><br>
	Name : <input type="text" name="name" placeholder="Insert Name"><br><br>
	Majors : <input type="text" name="majors" placeholder="Insert Majors"><br><br>
	Gender : 
  <select name="gender" >
  	<option value="Male">Male</option>
  	<option value="Female">Female</option>
  </select><br><br>
  <!-- <input type="text" name="gender" placeholder="Insert Gender"><br><br> -->
	endereco : <input type="text" name="endereco" placeholder="Insert endereco"><br><br>
	<input type="submit" name="add" value="Add">
	<input type="reset" name="reset" value="Cancel">
</form>
<?php
if(isset($_POST['add']))
{
include 'config.php';
  $fazenda_id=$_POST['fazenda_id'];
  $name=$_POST['name'];
  $majors=$_POST['majors'];
  $gender=$_POST['gender'];
  $endereco=$_POST['endereco'];
 
  $sql="INSERT INTO fazenda (fazenda_id,name,majors,gender,endereco) VALUES ('$fazenda_id','$name','$majors','$gender','$endereco')";
  if($conn->query($sql) === false)
  { // Jika gagal meng-insert data tampilkan pesan dibawah 'Perintah SQL Salah'
    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
  }  
  else 
  { // Jika berhasil alihkan ke halaman tampil.php
    echo "<script>alert('Add Success!')</script>";
  	echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
  }
}

?>   