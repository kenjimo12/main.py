<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Header with Menu</title>
  <style>
    /* KENJI_MO */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      background-color: #333;
      color: white;
    }

    .logo {
      font-size: 1.5em;
      font-weight: bold;
    }

    .menu {
      display: none; /* Hidden by default */
      flex-direction: column;
      gap: 10px;
      position: absolute;
      top: 60px;
      right: 20px;
      background-color: #444;
      border: 1px solid #555;
      padding: 10px;
      border-radius: 5px;
    }

    .menu a {
      text-decoration: none;
      color: white;
      padding: 8px 10px;
      border-radius: 5px;
    }

    .menu a:hover {
      background-color: #555;
    }

    .menu-button {
      background-color: #444;
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      font-size: 16px;
      border-radius: 5px;
    }

    .menu-button:hover {
      background-color: #555;
    }

    /* Media query for larger screens */
    @media (min-width: 768px) {
      .menu {
        display: flex; /* Show the menu on larger screens */
        position: static;
        flex-direction: row;
        gap: 20px;
        background-color: transparent;
        border: none;
        padding: 0;
      }

      .menu-button {
        display: none; /* Hide the menu button on larger screens */
      }
    }
  </style>
</head>
<body>

<header>
  <div class="logo">My Website</div>
  <button class="menu-button" onclick="toggleMenu()">Menu</button>
  <nav class="menu" id="menu">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
  </nav>
</header>

<script>
  // Function to toggle the menu
  function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
  }
</script>

</body>
</html>
