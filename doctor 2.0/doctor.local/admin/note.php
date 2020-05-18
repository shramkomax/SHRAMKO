<?php
include $_SERVER['DOCUMENT_ROOT'] . '/configs/db.php';
include $_SERVER['DOCUMENT_ROOT'] . '/admin/configs/nastroyki.php';

if($polzovatel_id == null) {

  header("Location: http://doctor.local/admin/login.php");
  
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Запись на приём</title>
	<link rel="stylesheet" type="text/css" href="/admin/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<?php
	include $_SERVER['DOCUMENT_ROOT'] . '/admin/chasty_site/shapka.php';
	?>

	 <div class="card-body table-full-width table-responsive">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Text</th>
                            <th>Time</th>
                            <th>Option</th>
                        </thead>
                        <tbody>
                            <?php
                            	$sql = "SELECT * FROM note";
                              $result = $connect->query($sql); 

                              while ($row = mysqli_fetch_assoc($result)) {
                              	$sql = "SELECT * FROM polzovateli WHERE id=" . $row["id_user"];
									$polzovatel = mysqli_query($connect, $sql);
									$polzovatel = mysqli_fetch_assoc($polzovatel);
                             ?>
                                 <tr>
                                    <td><?php echo $row['id'] ?></td>
                                    <td><?php echo $polzovatel['name'] ?></td>
                                    <td><?php echo $polzovatel['phone'] ?></td>
                                    <td><?php echo $row['text'] ?></td>
                                    <td><?php echo $row['time'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                         
                                          <a href="/admin/dell_note.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-secondary">Delete</a>
                                        </div>
                                    </td>
                                </tr>


                             <?php
                              } 

                            ?>
                            
                           
                        </tbody>
                    </table>
                </div>	

</body>
</html>