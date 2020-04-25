<?php include("./dbconfig.php") ?>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="POST" enctype="multipart/form-data" name="Form1">
			<?php
                  if(isset($_POST['submit'])){
                    //$author = $_POST['author'];
                    $n = $_POST['n'];
                    $e = $_POST['e'];
                    $p = $_POST['p'];
                    $mob = $_POST['mob'];
                     $pro = $_POST['pro'];
                      $sem = $_POST['area'];
                       $gen = $_POST['gen'];
                         $dob = $_POST['dob'];
                            if(empty($n)){
                              $error_msg = "name Field is blank";
                            } else {
                              $query = "INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `programme`, `area`, `gender`, `dob`) VALUES (NULL,'$n', '$e', '$p', '$mob','$pro','$ar','$gen','$dob')";
                              //$query2 = "CREATE TRIGGER `books_insert` AFTER INSERT ON `books`FOR EACH ROW INSERT INTO `books_data` (`id`,`img`,`desc`, `category`) VALUES (new.id, $book_cover,'test','test')";
                              if(mysqli_query($conn,$query)){
                                $msg = "USER Added";
                                //$category = "";
                              } else {
                                $error_msg = "Failed to Add";
                                //print_r($errors);
                              }
                            }
                            }
                      ?>
		<table class="table table-bordered" style="margin-bottom:50px">
	<caption><h2 align="center">Registration Form</h2></caption>
	<Tr>
		<Td colspan="2"></Td>
	</Tr>
				
				<tr>
					<td>Enter Your name</td>
					<Td><input  type="text" name="n" class="form-control" required/></td>
				</tr>
				<tr>
					<td>Enter Your email </td>
					<Td><input type="email" name="e" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Password </td>
					<Td><input type="password" name="p" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Enter Your Mobile </td>
					<Td><input type="text" name="mob" class="form-control" required/></td>
				</tr>
				
				<tr>
					<td>Select Your Programme</td>
					<Td><select name="pro" class="form-control" required>
					
					<option value="Elected Representative">Elected Representative</option>
					<option value="PWD">PWD</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Select Your Locational Area</td>
					<Td><select name="sem" class="form-control" required>
				
					</td>
				</tr>
				
				<tr>
					<td>Select Your Gender</td>
					<Td>
				Male<input type="radio" name="gen" value="m"/>
				Female<input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				
				
				
				
				<tr>
					<td>Enter Your DOB</td>
					<Td>
					<input style="width:100px;float:left" name="dob" type="date" class="form-control" required>					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" value="Save" class="btn btn-info" name="submit"/>
<input type="reset" value="Reset" class="btn btn-info"/>
<?php if(isset($error_msg)){
                              echo "<span style='color:red;' class='pull-right'>$error_msg</span>";
                            }else if(isset($msg)) {
                               echo "<span style='color:green;' class='pull-right'>$msg</span>";
                            }
                 ?>
				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>