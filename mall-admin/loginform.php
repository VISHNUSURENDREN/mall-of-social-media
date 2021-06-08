<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
if (isset($_SESSION["mall_email"])) 
{ 
header('Location: index.php');
} 
elseif (isset($_COOKIE['mall_email']) && isset($_COOKIE['mall_password'])) {
    header('Location: index.php');
} 
 
else
{   
    include 'header.php';
?>

<script>
document.getElementById("nav").classList.add("nav-admin");
</script>
<section class="inner-page services section-bg" id="hero">
    <div class="container-fluid  position-relative"  data-aos="fade-up" data-aos-delay="100">
        <div class="form">
            <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>LOGIN</h1>
                
            </div>
            </div>
            <div class='flex'>
            <img src="../assets/img/left.png" >
            <form  method="POST"  action="login.php" class="contactForm inputform">  
                
                <div class="label">
                    <label for="email">Email <span class="important">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>
                <div class="label">
                    <label for="password">Last name <span class="important">*</span></label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                
                <div>
                    <label for=""><a href="" data-toggle="modal" data-target="#exampleModal">Forgot password?</a></label><br>
                    <input type="checkbox" name="rememberme" id="rememberme" value="rememberme">
                    <label for="rememberme">Remember me</label>
                </div>
                <input type="submit" class="btn btn-primary"  name="submit" value="LOGIN">
                
            </form>
            <img src="../assets/img/right.png" >
            <div>
        </div>
    </div>
</section>


<!-- modal  -->
                
<div class="modal fade" id="exampleModal" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Enter your email address:</label>
                        <input type="text" class="form-control" id="recipient-name">
                        <label>An email will be sent to you shortly.</label>
                    </div>
                </form>
            </div>
            <script>
                function forget() {
                    var mail = document.getElementById("recipient-name").value;
                    $.ajax(
                    {   
                        url:'../send-email/email.php?mail='+mail,
                        success: function(data){
                            var data = JSON.parse(data);
                            alert(data.status);
                        }
                    });
                }
            </script>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="forget()" data-dismiss="modal">Send message</button>
            </div>
            </div>
        </div>
    </div> 
    <!-- end    -->

<?php
    include "footer.php";
    }
}

?>

<style>
    .inputform{
        text-align: center;
        margin: auto;
        display: block;
        width: 80%;
    }
    .btn{
        margin: 10px;
    }
    .label{
        margin: 20px 0px;
    }
    .flex{
        display: flex;
    }
    img{
        margin-left: -32px;
        margin-right: -30px;
    }
</style>
