<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Example</title>
  <style>
    /* General styles */
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    footer {
      background-color: #333;
      color: white;
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      gap: 20px;
    }

    .footer-section {
      flex: 1 1 200px;
    }

    .footer-section h4 {
      margin-bottom: 10px;
      font-size: 1.2em;
      border-bottom: 2px solid #555;
      padding-bottom: 5px;
    }

    .footer-section a {
      color: white;
      text-decoration: none;
      display: block;
      margin: 5px 0;
    }

    .footer-section a:hover {
      text-decoration: underline;
    }

    .social-icons {
      display: flex;
      gap: 10px;
    }

    .social-icons a {
      width: 30px;
      height: 30px;
      background-color: #555;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      text-decoration: none;
      color: white;
      font-size: 1.2em;
    }

    .social-icons a:hover {
      background-color: #777;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
      font-size: 0.9em;
      border-top: 1px solid #555;
      padding-top: 10px;
    }
  </style>
</head>
<body>

<!-- Footer -->
<footer>
  <!-- About Section -->
  <div class="footer-section">
    <h4>About Us</h4>
    <p>We are a company dedicated to providing the best services to our customers. Your satisfaction is our priority.</p>
  </div>

  <!-- Quick Links -->
  <div class="footer-section">
    <h4>Quick Links</h4>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#services">Services</a>
    <a href="#contact">Contact</a>
  </div>

  <!-- Contact Section -->
  <div class="footer-section">
    <h4>Contact</h4>
    <p>Email: info@example.com</p>
    <p>Phone: +123 456 7890</p>
    <p>Address: 123 Main St, City, Country</p>
  </div>

  <!-- Social Media -->
  <div class="footer-section">
    <h4>Follow Us</h4>
    <div class="social-icons">
      <a href="https://facebook.com" target="_blank">F</a>
      <a href="https://twitter.com" target="_blank">T</a>
      <a href="https://instagram.com" target="_blank">I</a>
      <a href="https://linkedin.com" target="_blank">L</a>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <p>&copy; 2024 My Website. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>
