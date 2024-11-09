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
      justify-content: space-around;
      height: calc(100vh - 80px);
      padding: 0 50px;
    }

    .hero-text {
      max-width: 500px;
    }

    .hero-text h2 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    .hero-text p {
      font-size: 1.2em;
      line-height: 1.5;
    }

    .social-icons a {
      color: #fff;
      margin: 0 10px;
      font-size: 1.5em;
      transition: color 0.3s;
    }

    .social-icons a:hover {
      color: #e94560;
    }

    .hero-image img {
      border-radius: 50%;
      width: 300px;
      height: 300px;
      object-fit: cover;
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

  <div class="hero">
    <div class="hero-text">
      <h2>HELLO !</h2>
      <p>I am a graphic designer with expertise in creating innovative and captivating designs,
        ranging from logos and banners to user interface (UI) and user experience (UX) for web and mobile applications.
        If you’re looking for a designer to help turn your vision into reality, let’s collaborate!
      </p>
      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-behance"></i></a>
      </div>
    </div>
    <div class="hero-image">
      <img src="image.png" alt="Profile Picture">
    </div>
  </div>
</body>
</html>