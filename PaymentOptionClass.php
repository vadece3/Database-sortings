<?php
class PaymentOptionClass extends AbstractClass{
public function Print($sname,$uname,$password,$db_name,$idnumber,$paymentOption,$destination){
$this->sname= $sname;
			$this->uname=$uname;
			$this->password =$password;
			$this->db_name =$db_name;
			$this->idnumber =$idnumber;
			$this->paymentOption =$paymentOption;
							
							//connect to database
							$conn = mysqli_connect($sname, $uname, $password, $db_name);
			
							//get and print all records											
									
							$sql_expensive="SELECT * FROM records WHERE id_number='$idnumber' AND payment='$paymentOption'";
									$report_expensive=mysqli_query($conn,$sql_expensive);
									if($report_expensive== TRUE){ 
									echo "<table border='5'>";
									echo "<tr><th>ID</th><th>TRAVELLING OPTION</th><th>DATE</th><th>TIME</th><th>PAYEMENT OPTION</th><th>NUMBER OF SEATS</th><th>COST(fCFA)</th></tr>";

									while($row=mysqli_fetch_array($report_expensive))
									{
										echo "<tr><td>";
										echo$row['id_number'];
										echo "</td><td>";					
										echo$row['travelling_option'];
										echo "</td><td>";
										echo$row['date'];
										echo "</td><td>";
										echo$row['time'];
										echo "</td><td>";
										echo$row['payment'];
										echo "</td><td>";
										echo$row['seatNumber'];
										echo "</td><td>";
										echo$row['cost'];
										echo "</td></tr>";
										echo"<tr></tr>";
										echo"<tr></tr>";
										echo"<tr></tr>";
									}
									echo"</table>";
								

								}else{

									echo "NO RECORD FOR THIS ID-CARD NUMBER";

								}
					
}



}

?>