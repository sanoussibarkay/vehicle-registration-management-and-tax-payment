
<div class="w3-main" style="margin-left:250px;width:1000px;background-color:rgba(255, 255, 255,0.6)">

  <div class="w3-row w3-padding-64" style = "margin-left:100px"	>

    <table class="w3-table-all w3-margin-top" id="myTable">
    <tr>
      <th>FullName</th>
      <th>Vehicle model</th>
	    <th>Registration number</th>
      <th>License Number</th>
      <th>Phone Number</th>
      <th>License Status</th>

	    <th></th>
    </tr>
      <?php
       $conn=mysqli_connect("remotemysql.com","mxGxQeDMmY","29L092KTIJ","mxGxQeDMmY") or die("Error connecting to database: ".mysql_error());
          mysqli_select_db($conn,"mxGxQeDMmY") or die(mysql_error());

      		$query = $_POST['search'];
      		$name ="";
      		$vehicletype = "";
      		$regnumber= "";
          $licensenumber= "";
          $phone= "";
          $licensevalidity= "";

          echo "
              <script type=\"text/javascript\">
              function myFunction() {
                var input, filter, table, tr, td, i;
                input = document.getElementById('myInput');
                filter = input.value.toUpperCase();
                table = document.getElementById('myTable');
                tr = table.getElementsByTagName('tr');
                for (i = 0; i < tr.length; i++) {
                  td = tr[i].getElementsByTagName('td')[0];
                  if (td) {
                    if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                      tr[i].style.display = '';
                    } else {
                      tr[i].style.display = 'none';
                    }
                  }
                }
              }
              </script>
          ";

      		$staff_results = mysqli_query($conn,"SELECT * FROM booking
      				         WHERE (`regnumber` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysql_error());

      			$min_length = 3;
      			if(strlen($query) >= $min_length)
      			{
      				$query = htmlspecialchars($query);
      				$query = mysqli_real_escape_string($conn,$query);

      					if(mysqli_num_rows($staff_results)> 0)
      					{
      						while($results = mysqli_fetch_array($staff_results))
      						{
      							$name = $results['name'];
      							$vehicletype  = $results['type'];
      							$regnumber = $results['regnumber'];
                    $licensenumber = $results['licenseplates'];
                    $phone = $results['mobile'];
                    $licensevalidity = $results['licensevalidity'];




                    echo "<tr><td>".$name."</td><td>".$vehicletype."</td><td>".$regnumber."</td><td>".$licensenumber."</td><td>".$phone."</td><td>".$licensevalidity."</td><td>
                      <form action = 'revalidatedetails.php' method = 'post'>
                      <button class='w3-btn w3-blue-grey' type = 'submit' value =".$regnumber." name = 'search'>Details</button>
                      </form></td></tr>";
      						}
      					}
      					else
      					{

                    $name = "No Result Found";
      							$vehicletype  = "No Result Found";
      							$regnumber = "No Result Found";
                    $licensenumber ="No Result Found";
                    $phone ="No Result Found";
                    $licensevalidity = "No Result Found";



                    echo "<tr><td>".$name."</td><td>".$vehicletype."</td><td>".$regnumber."</td><td>".$licensenumber."</td><td>".$phone."</td><td>".$licensevalidity."</td><td>
                      <form action = 'revalidatedetails.php' method = 'post'>
                      <button class='w3-btn w3-blue-grey' type = 'submit' value =".$regnumber." name = 'search'>Details</button>
                      </form></td></tr>";
      					}
      				}
      ?>
  </table>
</div>
  </div>
