<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8" >
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Item-edit</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body class="page">
  <header class="header">
    <nav class="menu">
      <a href="/index.php">Home</a>
      <a href="/pages/menu.php">Menu</a>
      <a href="/pages/overons.php">Over ons</a>
      <a href="/pages/contact.php">Contact</a>
    </nav>
  </header>

  <main class="add-container">
    <div class="add-box">
      <h1 class="add-title">Item bewerken</h1>

      <form class="add-form" action="/pages/toevoegen.php" method="post" enctype="multipart/form-data">
        <label for="title">Naam</label>
        <input type="text" id="title" name="title" required>

        <label for="price">Prijs (€)</label>
        <input type="number" id="price" name="price" min="0" step="0.01" required>

        <label for="description">Beschrijving</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="image">Foto</label>
        <input type="file" id="image" name="image" accept="image/*">

        <div class="form-actions">
          <button type="submit" class="add-button">Updaten</button>
          <a href="/pages/admin-pannel.php" class="back-button">Terug</a>
        </div>
      </form>
    </div>
  </main>
</body>
</html>
