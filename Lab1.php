<html>
<head>
    <script type="text/javascript">
        function validateForm(){
            var name= document.getElementById("username").value;
            var password=document.getElementById("password").value;
            var email=document.getElementById("email").value;
            if(name==null || name==""){
                alert("Enter your name! ");
                return false;
            }
            else if(password==null || password==""){
                alert("Enter your password! ");
                return false;
            }
            else if (email==null || email=="")
            {
                alert("Enter your email! ");
                return false;
            }
            else return true;
        }
    </script>
</head>
<body>
<div> Our first form : </div>
<form id="form" action="welcome.php" method="post" onsubmit="return validateForm()">
    <h3>*Name :</h3>
    <input type = "text" Name ="username" ID="username"  placeholder="Username" >
    <br />
    <h3>*Password :</h3>
    <input type = "password" Name ="password" ID="password" placeholder="Password" >
    <br />
    <h3>*Email :</h3>
    <input type = "text" Name ="email" ID="email" placeholder="Email" >
    <br />
    <br />
    <input type ="submit" value = "SIGN UP">
</form>
</body>
</html>