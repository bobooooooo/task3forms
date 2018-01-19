<?php
session_start();
if( ($_SESSION['loggeduser'] === $_SESSION['username']) && ($_SESSION['loggeduserpass'] === $_SESSION['pass'])){
			echo "<p>".'Welcome  '.$_SESSION['loggeduser']."</p>";
			echo "<p>".'You can chose from products below:'."</p>";
			echo "<style>table{border:2px solid #CCC} tr:nth-child(even) {background: #CCC}	tr:nth-child(odd) {background: #FFF} </style>";
			//Items array
			$items = array("Chocolate"=>"3", "Juice"=>"2", "Waffer"=>"1", "Pie"=>"5", "Cake"=>"7.2" );
			//Table;
			echo "<form method=\"get\" action=\"order.php\">";
				echo "<table>";
				echo "<thead>";
					echo "<tr>";
						echo "<th colspan=\"4\">".'Menu'."</th";
					echo "</tr>";
					echo "<tr>";
						echo "<td>".'ID'."</td>";
						echo "<td>".'Item'."</td>";
						echo "<td>".'Price'."</td>";
						echo "<td>".'Quantity'."</td>";
					echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
					echo "<tr>";
						echo "<td>".'1'."</td>";
						echo "<td>".'Chocolate'."</td>";
						echo "<td>".$items["Chocolate"].' lv'."</td>";
						echo "<td>"."<input type=\"text\" name=\"quantity_1\" size=\"2\">"."</td>";			
					echo "</tr>";
						echo "<tr>";
						echo "<td>".'2'."</td>";
						echo "<td>".'Juice'."</td>";
						echo "<td>".$items["Juice"].' lv'."</td>";
						echo "<td>"."<input type=\"text\" name=\"quantity_2\" size=\"2\">"."</td>";			
					echo "</tr>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>".'3'."</td>";
						echo "<td>".'Waffer'."</td>";
						echo "<td>".$items["Waffer"].' lv'."</td>";
						echo "<td>"."<input type=\"text\" name=\"quantity_3\" size=\"2\">"."</td>";			
					echo "</tr>";
						echo "</tr>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>".'4'."</td>";
						echo "<td>".'Pie'."</td>";
						echo "<td>".$items["Pie"].' lv'."</td>";
						echo "<td>"."<input type=\"text\" name=\"quantity_4\" size=\"2\">"."</td>";			
					echo "</tr>";
						echo "</tr>";
						echo "</tr>";
						echo "<tr>";
						echo "<td>".'5'."</td>";
						echo "<td>".'Cake'."</td>";
						echo "<td>".$items["Cake"].' lv'."</td>";
						echo "<td>"."<input type=\"text\" name=\"quantity_5\" size=\"2\">"."</td>";			
					echo "</tr>";
				echo "</tbody>";
			echo "</table>";
			echo "<input type=\"submit\" name=\"Submit\">";
			echo "</form>";
		
		}
		else{
			echo "<p>".'Wrong username or password'."</p>";
			echo "<a href=\"index.php\">Back to homepage</a>";
			session_unset();
			session_destroy();
		}