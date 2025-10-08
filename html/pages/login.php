<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="/style.css">
    <title>login</title>
</head>
<body class="page">
            <header class="header">
        <nav class="menu">
            <a href="/index.php">Home</a>
            <a href="/pages/menu.php">Menu</a>
            <a href="/pages/overons.php" >Over ons</a>
            <a href="/pages/contact.php" >Contact</a>
        </nav>
    </header> 

<form class="login-form" action="/pages/admin-pannel.php">
    <h2>Inloggen</h2>

    <label for="username">Gebruikersnaam</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Wachtwoord</label>
    <input type="password" id="password" name="password" required>

    <button type="submit" class="form-button">Inloggen</button>
</form>

</body>
</html>