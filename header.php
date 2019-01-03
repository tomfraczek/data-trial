<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Some example of meta description">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Some example title</title>
        <!-- <link rel="stylesheet" href=""> -->
    </head>

    <body>

        <header>
            <nav>
                <!-- nav links -->
            </nav>

            <form action="includes/login.inc.php" method="post">
                <input type="text" name="mailuid" placeholder="Username/E-mail...">
                <input type="password" name="pwd" placeholder="Password">
                <button type="submit" name="login-submit">Login</button>
            </form>

            <a href="signup.php">Signup</a>

            <form action="includes/logout.inc.php" method="post">
                <button type="submit" name="logout-submit">Logout</button>
            </form>

        </header>