<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Sri Devi</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #1a1a2e;
      color: #fff;
    }

    header {
      background-color: #0f3460;
      padding: 20px 50px;
      text-align: center;
    }

    header h1 {
      color: #e94560;
      font-size: 2.5em;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      margin: 0 15px;
      font-size: 1em;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #e94560;
    }

    .contact-container {
      max-width: 600px;
      margin: 40px auto;
      padding: 20px;
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    }

    .contact-container h2 {
      text-align: center;
      color: #e94560;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      font-size: 1.1em;
      margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 10px;
      font-size: 1em;
      border: 1px solid #444;
      border-radius: 5px;
      background-color: #222;
      color: #fff;
    }

    .form-group textarea {
      resize: vertical;
      height: 100px;
    }

    .form-group button {
      width: 100%;
      padding: 10px;
      font-size: 1.1em;
      background-color: #e94560;
      border: none;
      border-radius: 5px;
      color: #fff;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .form-group button:hover {
      background-color: #d33450;
    }

    footer {
      width: 100%;
      background-color: #333;
      padding: 15px;
      text-align: center;
      color: #fff;
      font-size: 14px;
      margin-top: 20px;
    }

    footer a {
      color: #e94560;
      text-decoration: none;
      margin: 0 10px;
    }

    footer a:hover {
      color: #fff;
    }
  </style>
</head>
<body>

  <header>
    <h1>DEV DESIGN</h1>
    <nav>
      <a href="Home.php">Home</a>
      <a href="About.php">About</a>
      <a href="Portofolio.php">Portofolio</a>
      <a href="Blog.php">Blog</a>
      <a href="Contact.php">Contact</a>
    </nav>
  </header>

  <div class="contact-container">
    <h2>Kontak Kami</h2>
    <form action="submit_contact.php" method="POST">
      <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Keterangan</label>
        <textarea id="message" name="message" required></textarea>
      </div>
      <div class="form-group">
        <button type="submit">Kirim</button>
      </div>
    </form>
  </div>

  <footer>
    <p>Link Rekomendasi:
      <a href="https://google.com" target="_blank">Google</a> |
      <a href="https://upj.ac.id" target="_blank">UPJ</a>
    </p>
  </footer>

</body>
</html>
