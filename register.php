
<!doctype html>
<html>
<head>
    <title>Example Domain</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style type="text/css">
  
    </style>    
</head>

<body>
    <div style="text-align:center;">
    <h1>Patient Registration</h1>
    <form action="user_register.php" method="post">
        <label for="txtFname">First Name: </label>
        <input type="text" name="txtFname" id="txtFname" required />
        <br /><br />
        
        <label for="txtMname">Middle Name: </label>
        <input type="text" name="txtMname" id="txtMname" />
        <br /><br />
        
        <label for="txtLname">Last Name: </label>
        <input type="text" name="txtLname" id="txtLname" required />
        <br /><br />
        
        <label for="txtEmail">Email ID: </label>
        <input type="text" name="txtEmail" id="txtEmail" />
        <br /><br />
        
        <label for="txtAdd">Address: </label>
        <input type="text" name="txtAdd" id="txtAdd" required /> 
        
        <br /><br />
        <label for="txtMob">Mobile No: </label>
        <input type="tel" name="txtMob" id="txtMob" maxlength="10" required />
        
        <br /><br />
        <label for="txtAge">Age: </label>
        <input type="text" name="txtAge" id="txtAge" max="100" required />
        
        <br /><br />
        <label for="rbgender">Gender: </label>
        <input type="radio" name="rbgender" id="rbmale" value="Male"  />Male
        <input type="radio" name="rbgender" id="rbfemale" value="Female"  />Female
         <br /><br />
        
        <input type="submit"  name="btnSubmit" value="Submit"/>  
        
    </form>
</div>
</body>
</html>
