<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body{
            
                background-image: url("./images/login1.jpg");
                background-repeat: no-repeat;
                background-size:cover;
            }
    </style>
</head>
<body >
<div class="join-container">
               <h1>Login User</h1>
               <div class="join-username">
                     <input required id="myemail" placeholder='Email...'   type="email" name="userEmail" />
               </div> 
               <div class="join-username">
                     <input required placeholder='password..'  type="password" name="password" />
               </div>
               
                <div class="join-button">
                <button >Login</button>
                </div>   
                <div class="already">
                    <span>Don't have account? <a href="register.php">Register</a> </span>
                </div>
            </div>
</body>
</html>