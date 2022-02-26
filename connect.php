<?php



			// making connection

			$servername="localhost";
			$username="id18490409_root";
			$password="GaneshBhagat%2000%";
			$database="id18490409_ngo";

			$con=mysqli_connect($servername,$username,$password,$database);

			if(!$con) {
				die("connection error".mysqli_error($con));
			} else {


				if(isset($_POST['submit'])) {


					// actual values 

					$name=$_POST['name'];
					$email=$_POST['email'];
					$city=$_POST['city'];
					$number=$_POST['number'];

				    if(!empty($name) || !empty($email) || !empty($city) || !empty($number)) {
				        
					// firing query	

					$query="insert into user(name, email, city, number) values ('$name','$email','$city','$number')";

					// inserting data into table

					if(mysqli_query($con, $query)){
					
                        //header("location:https://rzp.io/l/cqViEbL");
				        echo "<script>alert('Click OK to continue')</script>";
				        echo "<script>window.open('https://rzp.io/l/cqViEbL','_self')</script>";

					} else {
						echo "error:".mysqli_error($con);
						
					}
				        
				    } else {
				        
				        echo "<script>alert('All field are required')</script>";
				        echo "<script>window.open('donate.php','_self')</script>";
				    }
				
					mysqli_close($con);

				}

			}
	

		

?>

