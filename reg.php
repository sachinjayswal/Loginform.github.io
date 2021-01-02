<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
   <link rel="stylesheet" href="reg.css"><!CSS>
     <link href="//db.onlinewebfonts.com/c/56e51b15f9bcb363331159989c474c45?family=TradeGothicforNike365-BdCn" rel="stylesheet" type="text/css"/>
<script>
        function check() {
    if(document.getElementById('password').value ===
            document.getElementById('confirm_password').value) {
        document.getElementById('message').innerHTML = "";
    } else {
        document.getElementById('message').innerHTML = "⚠️Password not matched";
    }
}

    </script>
</head>
<body>
    <main>
        <div class="background"><!BACKGROUND IMAGE>
            <div class="text">
                <h1>Signup</h1>
                <p>Have Account? <a href="login.php">Login</a></p><!LINK TO login.php>
            </div>
            <div class="box">
                <form class="form" action="reginsert.php" method="post" onsubmit="alert(' You have signed up successfully!🎉 ')"><!ALERT AFTER SIGNUP AND LINKED TO LOGIN>
                    <input type="text" class="firstname" name="fname"placeholder="First Name" required><!INPUT FOR FIRSTNAME>
                     <input type="text" class="lastname" name="lname" placeholder="Last Name" required><!INPUT FOR LASTNAME>
                    <input type="mail" class="mail" name="mail" placeholder="Email Address" required><!INPUT FOR MAIL>
                    <input type="password" class="password" id="password" name="pswd" placeholder="Password" required><!INPUT FOR PASSWORD>
                    <input type="password" class="password"name="cpswd" id="confirm_password" onchange="check()" placeholder="Confirm Password" required><!INPUT FOR CONFIRMING PASSWORD>
                    <span id='message'></span><!DISPLAYS ERROR MESSAGE>
                    <input type="submit" class="button" value="Sign up"> <!SUBMIT BUTTON>
                </form>
            </div>
        </div>
    </main>
</body>
</html>