<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Pribadi</title>
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #1a1a2e;
      color: #fff;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background-color: #0f3460;
    }

    header h1 {
      color: #e94560;
      font-size: 1.5em;
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

    .hero {
      display: flex;
      align-items: center;
      justify-content: center;
      height: calc(100vh - 80px);
      padding: 0 50px;
      text-align: center;
    }

    .hero-text h2 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    footer {
      width: 100%;
      background-color: #333;
      color: #f8f9fa;
      text-align: center;
      padding: 20px 0;
      font-size: 14px;
      position: fixed;
      bottom: 0;
      left: 0;
    }

    footer a {
      color: #f8f9fa;
      text-decoration: none;
      margin: 0 10px;
      transition: color 0.3s;
    }

    footer a:hover {
      color: #e94560;
    }
  </style>
</head>
<body>
  <header>
    <h1>DEV DESIGN</h1>
    <nav>
      <a href="Home.php">Home</a>
    </nav>
  </header>

  <div class="hero">
    <div class="hero-text">
      <h2>WELCOME !</h2>
      <p>to my personal portfolio. Here you can find information about my work and skills as a graphic designer.</p>
    </div>
  </div>

  <footer>
    <p>Link Rekomendasi:
        <a href="https://google.com" target="_blank">Google</a> |
        <a href="https://upj.ac.id" target="_blank">UPJ</a>
    </p>
  </footer>

</body>
</html>
