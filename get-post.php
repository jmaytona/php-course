<!DOCTYPE html>
<html>

<head>
    <title>GET & POST</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Registration Form</h1>
        <form method="get" action="get-post.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Test this Registration form.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        <h1>Entered Account:</h1>
        <?php 
            if(isset($_GET['email'])){
                $email = htmlentities($_GET['email']);  
            }
            if(isset($_GET['password'])){
                $password = htmlentities($_GET['password']);
            }
            echo "<strong>Email:</strong>  $email <strong>Password:</strong> $password";
        ?>
    </div>
</body>

</html>
