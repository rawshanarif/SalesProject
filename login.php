<?php
session_destroy(void);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Login or Register</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div id="container">
        <main id="main">
            <div id="loginuicontainer">
               <a id="tab">Register</a><a id="tab" href="http://35.243.130.79/databasepj/SalesProject1/register.php"> Here</a>
               <form action="validation.php" method="post">
                <div id="logincontainer">
                   <div class="form-group">
                       <input type="text" class="form-control inputbox" name="email" placeholder="Email ID/Username">
                   </div>
                   <div class="form-group">
                       <input type="password " class="form-control inputbox" name="password" placeholder="Password">
                   </div>
                   <div class="form-group">
                       <input type="submit">
                   </div>  
                </div>
                </form>
            </div>
                
        </main>
    </div>
</body>
</html>
