<?php
 include "adminheader.php";
 ?>
 <div class="col-md-12 p-2">
	<div class="row" id="feed">
		<div class="col-md-12">
			<h3>Registration</h3>	
		</div>
	</div>
 <div class="table ">
 <?php
 $query="select * from registration";
 $result=mysqli_query($con,$query);
 echo"<table class='table mb-5 table-bordered table-striped'>";
 echo"<th>"."id"."</th>";
 echo"<th>"."name"."</th>";
 echo"<th>"."mobile"."</th>";
 echo"<th>"."age"."</th>";
 echo"<th>"."membership"."</th>";
 echo"<th>"."time"."</th>";
 echo"<th>"."email"."</th>";
 while($row=mysqli_fetch_array($result))
 {
	 echo"<tr>";
	 echo"<td>".$row['id']."</td>";
	 echo"<td>".$row['name']."</td>";
	 echo"<td>".$row['mobile']."</td>";
	 echo"<td>".$row['age']."</td>";
	 echo"<td>".$row['membership']."</td>";
	 echo"<td>".$row['time']."</td>";
	 echo"<td>".$row['email']."</td>";
	 echo"</tr>";
	
 }
 echo"</table>";
 ?>
 </div>
 </div>
 </div>
 </body>
 </html>

	 
	 
	 
	 
 