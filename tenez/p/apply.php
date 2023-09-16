<?php
include "header.php"
?>
<?php
if(isset($_POST['btnsubmit']))
{
$name=$_POST['name'];	
$mobile=$_POST['mobile'];	
$age=$_POST['age'];
$membership=$_POST['membership'];
$time=$_POST['time'];
$email=$_POST['email'];
$query="insert into registration(name,mobile,age,membership,time,email)
values('$name','$mobile','$age','$membership','$time','$email')";
if(mysqli_query($con,$query))
{
	echo "<script>alert('Data Inserted')</script>";
}	
else
{
	echo mysqli_error($con);
}	
}
?>

<!-- Contact -->
<div id="apply">
    <div class="container">
        <div class="row text-dark pt-5">
            <div class="col-md-6 offset-3 p-5">
                <form action="" method="post">
                <div class="form-group form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="sarbjeet" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Mobile</label>
                        <input type="tel" name="mobile" class="form-control" placeholder="+91 ........" required>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <label for="age">Age</label><br>
                        <select name="age" class="p-2 form-control">
                            <option value="10-19">10-19</option>
                            <option value="20-29">20-29</option>
                            <option value="30-40">30-40</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="membership">Membership</label><br>
                        <select name="membership" class="p-2 form-control">
                            <option value="Junior">Junior</option>
                            <option value="Family">Family</option>
                            <option value="Individual">Individual</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="time">Time</label><br>
                        <select name="time" class="p-2 form-control">
                            <option value="Morning">Morning</option>
                            <option value="Afternoon">Afternoon</option>
                            <option value="Evening">Evening</option>
                        </select>
                    </div>
                    <div class="p-2 mt-2">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="abc@yourmail.com" required>
                    </div>
                    <p class="pt-4"><input type="submit" name="btnsubmit" value="Submit" class="btn btn-info text-light"></p>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->

<?php
include "footer.php"
?>