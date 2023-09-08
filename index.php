<!DOCTYPE html>
<html>
    <head><title>Membuat Form login dengan Javascript</title>
        <link rel ="stylesheet" type = "text/css" href="style.css">
     </head>
 <body>
    <br/>
    <br/>
    <center><h2>FORM LOGIN</h2></center>       
    <br/>
    <div class ="login">
    <br/>
    <form action = "login.php" method= "post" onSubmit = "reurn validasi()">
        <div>
        <label>Username: </label>
        <input type="text" name = "username" id = "username" />
        </div>
        <div>
            <label> Password: </label>
            <input type="password: " name = "password" id = "password" />
         </div>
         <div>
            <input type="submit" value = "login" class = "tombol" />
 </form>
 </div>
 </body>
 <script type="text/javascript">
 function validasi(){
        var username = document.getElementById("username").value;
        var username = document.getElementById("password").value;
        if(username!=""&&password!=""){
        } else{
            alert('Username dan oassword harus diisi!');
            return false}}   
</script>
</html>     
