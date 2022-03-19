<?php

class TotalAmountClass extends AbstractClass{
public function Print ($sname,$uname,$password,$db_name,$idnumber,$paymentOption,$destination){
        
        
        
    $this->sname= $sname;
			$this->uname=$uname;
			$this->password =$password;
			$this->db_name =$db_name;
			$this->idnumber =$idnumber;
							
							//connect to database
							$conn = mysqli_connect($sname, $uname, $password, $db_name);
							
							    $sql_get1= "SELECT SUM(cost) AS total_amount FROM records WHERE id_number='$idnumber'";
								$result =mysqli_query($conn,$sql_get1);
                                $get=mysqli_fetch_row($result);
                                $sql_get= "SELECT * FROM records WHERE id_number='$idnumber'";
								$report=mysqli_query($conn,$sql_get);
        
								if($report == TRUE ){
                        
                                    echo "Total Amount: ";
                                    echo implode('', $get);

									echo "<table border='5'>";
									echo "<tr><th>ID</th><th>TRAVELLING OPTION</th><th>DATE</th><th>TIME</th><th>PAYEMENT OPTION</th><th>NUMBER OF SEATS</th><th>COST(FCFA)</th></tr>";
                                    
                                    

									while($row=mysqli_fetch_array($report))
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