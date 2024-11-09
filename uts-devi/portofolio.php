<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio - Sri Devi</title>
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

    .portfolio {
      display: grid;
      grid-template-columns: repeat(2, 1fr); /* 2 kolom */
      gap: 15px; /* Mengurangi jarak antar item */
      padding: 20px 50px;
    }

    .portfolio-item {
      position: relative;
      overflow: hidden;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s;
      background-color: #333;
      display: flex;
      flex-direction: column; /* Membuat gambar dan deskripsi tampil vertikal */
    }

    .portfolio-item img {
      width: 100%;
      height: 600%; /* Sesuaikan dengan ukuran gambar yang diinginkan */
      object-fit: cover;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .portfolio-item .desc {
      padding: 15px;
      background-color: #0f3460;
      color: #fff;
      border-bottom-left-radius: 10px;
      border-bottom-right-radius: 10px;
      flex-grow: 1; /* Membuat deskripsi mengambil ruang yang tersisa */
    }

    .portfolio-item:hover {
      transform: scale(1.05);
    }

    .portfolio-item .desc h3 {
      font-size: 1.3em;
      margin-bottom: 10px;
    }

    .portfolio-item .desc p {
      font-size: 1em;
    }

    footer {
      width: 100%;
      background-color: #333;
      padding: 15px;
      text-align: center;
      color: #fff;
      font-size: 14px;
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

  <div class="portfolio">
    <div class="portfolio-item">
      <img src="image1.jpg" alt="Portofolio 1">
      <div class="desc">
        <h3>Logo Design</h3>
        <p>Logo yang dirancang dengan konsep minimalis untuk brand XYZ.</p>
      </div>
    </div>
    <div class="portfolio-item">
      <img src="image2.jpg" alt="Portofolio 2">
      <div class="desc">
        <h3>Poster Design</h3>
        <p>Desain poster acara musik yang menarik perhatian dengan warna cerah.</p>
      </div>
    </div>
    <div class="portfolio-item">
      <img src="image3.jpg" alt="Portofolio 3">
      <div class="desc">
        <h3>UI Design</h3>
        <p>Desain antarmuka pengguna untuk aplikasi mobile dengan navigasi yang intuitif.</p>
      </div>
    </div>
    <div class="portfolio-item">
      <img src="image4.jpg" alt="Portofolio 4">
      <div class="desc">
        <h3>Web Design</h3>
        <p>Desain website dengan fokus pada kesederhanaan dan pengalaman pengguna.</p>
      </div>
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
