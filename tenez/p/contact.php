<?php
include "header.php"
?>
<?php
if(isset($_POST['btnsubmit']))
{
$first=$_POST['first'];	
$last=$_POST['last'];	
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];
$query="insert into contact(first,last,email,mobile,message)
values('$first','$last','$email','$mobile','$message')";
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
<div id="bgimgg">
    <div class="container">
        <div class="row shadow-lg text-light pt-5">
            <div class="col-md-7 p-5">
                <form action="" method="post">
                <div class="form-group form" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">First</label>
                        <input type="text" name="first" class="form-control" placeholder="gunnu" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name">last</label>
                        <input type="tel" name="last" class="form-control" placeholder="khoewal" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="name">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="abc@domain.com" required>
                    </div>
                    <div class="col-md-6">
                        <label for="name">Phone No.</label>
                        <input type="text" name="mobile" class="form-control" placeholder="98xxxxxx82" required>
                    </div>
                    <div class="p-2">
                        <label for="name">Message</label>
                        <textarea type="message" name="message" class="form-control" placeholder="Hi THere......" required></textarea>
                    </div>
                    <p class="pt-4"><input type="submit" name="btnsubmit" value="Submit" class="btn btn-info text-light"></p>
                </div>
                </div>
                </form>
            </div>
            <div class="col-md-5 p-5">
                <h3>Get in Touch</h3>
                <p class="mt-4">support@tenez.com</p>
                <ul class="mt-4 mb-4">
                    <li>(021)-241454-545</li>
                    <li>Punjab Tennis Club. Old Jail Road, Faridkot</li>
                    <li>Faridkot 151203</li>
                </ul>
                <a href="#" class="btn btn-dark mt-3 text-light">Get directions</a> 
            </div>
        </div>
    </div>
</div>
<!-- Contact -->

<?php
include "footer.php"
?>