<?php
  $conn=mysqli_connect("remotemysql.com","mxGxQeDMmY","29L092KTIJ","mxGxQeDMmY") or die("Error connecting to database: ".mysql_error());
    mysqli_select_db($conn,"mxGxQeDMmY") or die(mysql_error());

		$query = $_POST['search'];
		$status = "";
    $name= "";
    $licenseplates= "";
    $type= "";
    $enginenumber= "";
    $vehiclechassis= "";
    $regnumber= "";
    $licensevalidity = "";
    $driverid = "";
    $reason= "";
    $email= "";
    $mobile= "";
    $username=  "";
		$vehicle_results = mysqli_query($conn,"SELECT * FROM booking
					       WHERE (`regnumber` LIKE '%".$query."%') OR (`name` LIKE '%".$query."%')") or die(mysqli_error($conn));

			$min_length = 3;
			if(strlen($query) >= $min_length)
			{
				$query = htmlspecialchars($query);
				$query = mysqli_real_escape_string($conn,$query);

					if(mysqli_num_rows($vehicle_results)> 0)
					{
						while($results = mysqli_fetch_array($vehicle_results))
						{
							$status = "Result Found";
              $name=$results['name'];
              $licenseplates=$results['licenseplates'];
              $type=$results['type'];
              $enginenumber=$results['enginenumber'];
              $vehiclechassis=$results['vehiclechassis'];
              $regnumber=$results['regnumber'];
              $licensevalidity =$results['licensevalidity'];
              $driverid =$results['driverid'];
              $reason=$results['reasons'];
              $email=$results['email'];
              $mobile=$results['mobile'];
              $username= $results['username'];




						}
					}
					else
					{
							$status = "No Result Found";
              $name=$_POST['name'];
              $licenseplates=$_POST['licenseplates'];
              $type=$_POST['type'];
              $enginenumber=$_POST['enginenumber'];
              $vehiclechassis=$_POST['vehiclechassis'];
              $regnumber=$_POST['regnumber'];
              $licensevalidity =$_POST['licensevalidity'];
              $driverid =$_POST['driverid'];
              $reason=$_POST['reasons'];
              $email=$_POST['email'];
              $mobile=$_POST['mobile'];
              $username= $_POST['username'];

					}

				}

?>




<div class="w3-main" style="margin-left:250px;width:1000px;background-color:rgba(255, 255, 255,0.6)")">

  <div class="w3-row w3-padding-64" style = "margin-left:100px">
    <div class="w3-two w3-container">
      <p>
		<div action="" class="w3-white w3-card-4">
		<div class="w3-container w3-theme-l1">
			<h2>Staff Information</h2>
			</div>

        <p>
         <div class="w3-twothird">
    			<label class="w3-label w3-text-grey"><b>Name</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="name" type="text" value = "<?php echo $name ?>"disabled></div></p>
        <p>
          <div class="w3-third">
    			<label class="w3-label w3-text-grey"><b>license plate</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="staff_no" type="text" value = "<?php echo $licenseplates ?>"disabled></div></p>
        <p>
          <div class="w3-third w3-section">
    			<label class="w3-label w3-text-grey"><b>car type</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="phone_no" type="text" value = "<?php echo $type ?>"disabled></div></p>
    		<p>
         <div class="w3-twothird w3-section">
    			<label class="w3-label w3-text-grey"><b>engine number</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="address" type="text" value = "<?php echo $enginenumber ?>"disabled></div></p>
    		<p>
        <div class="w3-third w3-section">
      			<label class="w3-label w3-text-grey"><b>vehicle chassis </b></label>
            <input class="w3-input w3-border w3-light-grey" name="address" type="text" value = "<?php echo $vehiclechassis ?>"disabled></div></p>
    		<p>
        <div class="w3-third w3-section">
    			<label class="w3-label w3-text-grey"><b>regnumber</b></label>
          <input class="w3-input w3-border w3-light-grey" name="address" type="text" value = "<?php echo $regnumber ?>"disabled></div></p>
      	<p>
         <div class="w3-third w3-section">
    			<label class="w3-label w3-text-grey"><b>license validity</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="license_no" type="text" value = "<?php echo $licensevalidity ?>"disabled></div></p>
    		<p>
        <div class="w3-third w3-section">
    			<label class="w3-label w3-text-grey"><b>driver id</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="license_valid" type="text" value = "<?php echo $driverid ?>"disabled></div></p>
    		<p>
        <div class="w3-third w3-section">
    			<label class="w3-label w3-text-grey"><b>reason for plying</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="vehicle_no" type="text" value = "<?php echo $reason ?>"disabled></div></p>
    		<p>
         <div class="w3-third w3-section">
    			<label class="w3-label w3-text-grey"><b>email</b></label>
    			<input class="w3-input w3-border w3-light-grey" name="road_tax" type="text" value = "<?php echo $email ?>"disabled></div></p>
    		<p>
         <div class="w3-half w3-section">
    			<label class="w3-label w3-text-grey"><b>mobile</b>
    			<input class="w3-input w3-border w3-light-grey" name="road_tax" type="text" value = "<?php echo$mobile ?>"disabled></div></p>
    		<p>
         <div class="w3-half w3-section">
    			<label class="w3-label w3-text-grey"><b>username</b>
	        <input class="w3-input w3-border w3-light-grey" name="road_tax" type="text" value = "<?php echo $username ?>"disabled  ></div></p>
    		<p>


    </div>

      </p>
    </div>
