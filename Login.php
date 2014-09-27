<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>   
        </head>    
        <body>
            <form action="Welcome.php" method="post">
                <!-- After submission, the content of the form fields will be passed to the script in index.php -->
                Name: <input type="text" name="name"/><br />              
                Password: <input type="password" name="pass"/><br />               
                <input type="submit" value="Login" />  
                <!-- Submitting all input values and sending them to the php file -->
            </form>
        </body>
</html>