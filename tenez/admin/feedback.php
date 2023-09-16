<?php
 include "adminheader.php";
 ?>
 <div class="col-md-12 p-2">
	<div class="row" id="feed">
		<div class="col-md-6">
			<h3>Feedback</h3>	
		</div>
	</div>
 <div class="table ">
 <?php
 $query="select * from contact";
 $result=mysqli_query($con,$query);
 echo"<table class='table mb-5 table-bordered table-striped'>";
 echo"<th>"."id"."</th>";
 echo"<th>"."first"."</th>";
 echo"<th>"."last"."</th>";
 echo"<th>"."email"."</th>";
 echo"<th>"."mobile"."</th>";
 echo"<th>"."message"."</th>";
 while($row=mysqli_fetch_array($result))
 {
	 echo"<tr>";
	 echo"<td>".$row['id']."</td>";
	 echo"<td>".$row['first']."</td>";
	 echo"<td>".$row['last']."</td>";
	 echo"<td>".$row['email']."</td>";
	 echo"<td>".$row['mobile']."</td>";
	 echo"<td>".$row['message']."</td>";
	 echo"</tr>";
	
 }
 echo"</table>";
 ?>
 </div>
 </div>
 </div>
 </body>
 </html>

	 
	 
	 
	 
 