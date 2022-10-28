<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Online Voting System</h1>
    <div class="bg-info py-4">
        <h2 class="text-center">Login</h2>
        <div class="container text-center" >
            <form action="./actions/login.php" method="post">
                <div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="username" placeholder="Enter your username" required="required">
</div>
<div class="mb-3">
                    <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile" required="required" maxLength="10" minLength="10">
</div>
<div class="mb-3">
                    <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password" required="required">
</div>
<div class="mb-3">
            <select name="std" class="form-control w-50 m-auto">
                <option value="group">Group</option>
                <option value="voter">Voter</option>   
</select>     
</div>
<button type="submit" class="btn btn-dark my-4">Login</button>
<p>Don't have an account?</p>
<a href="./partials/registration.php" class="text-white">Register here</a>
</form>

    </div>
</body>
</html>