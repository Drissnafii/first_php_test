<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include './connection/conn.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nameX = $_POST["name"];
        $emailX = $_POST["email"];
        $roleX = $_POST["role"];
    }         
    
     else 
    echo ('error ...')
?>
    
    <div class="formContainer">
        
        <form method="$_POST">
            <label for="name">Name</label>
            <input type="text"> <br>
            <label for="email">Email</label>
            <input type="email"> <br>
            <label for="role">Role</label>
            <select name="role" id="roleX">
                <option value="">first role</option>
                <option value="">Second role</option>
            </select> <br> <br> &nbsp; &nbsp; &nbsp;

            <button type="submit" >Send Data</button>
        </form> 
        
    </div>
</body>
</html>