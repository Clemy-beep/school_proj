<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./public/assets/style.css">
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <button id="login">Log in</button>
    </form>
    <div id="response"></div>
</body>
<script src="./dist/index.js" type="module"></script>

</html>