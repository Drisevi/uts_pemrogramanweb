<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background-color: #1a1a2e;
      color: #fff;
      padding: 20px;
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

    .content {
      max-width: 800px;
      margin: 30px auto;
      background-color: #212121;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      line-height: 1.6;
    }

    .content h2 {
      font-size: 2.2em;
      color: #e94560;
      text-align: center;
      margin-bottom: 20px;
    }

    .content h3 {
      font-size: 1.5em;
      color: #fff;
      margin-top: 20px;
      text-decoration: underline;
    }

    .content p {
      font-size: 1.1em;
      margin-top: 10px;
      color: #ccc;
    }

    img {
      display: block;
      margin: 20px auto;
      border-radius: 50%;
      width: 200px;
      height: 200px;
      object-fit: cover;
      border: 5px solid #e94560;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
    }

    footer {
      width: 100%;
      background-color: #333;
      padding: 15px;
      text-align: center;
      color: #fff;
      font-size: 14px;
      margin-top: 30px;
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

  <div class="content">
    <img src="image.png">

    <h3>Pendidikan</h3>
    <p>Mahasiswi Universitas Pembangunan Jaya, Jurusan Informatika.</p>

    <h3>Keahlian</h3>
    <p>Saya memiliki keahlian dalam desain grafis, termasuk pembuatan logo, desain poster, dan pengembangan identitas merek. Saya juga berpengalaman dalam menggunakan berbagai perangkat lunak desain seperti Adobe Photoshop dan Illustrator.</p>

    <h3>Motivasi & Visi</h3>
    <p>Motivasi saya adalah untuk menciptakan desain yang tidak hanya menarik secara visual tetapi juga fungsional. Visi saya adalah menjadi desainer grafis yang diakui, yang dapat membantu klien mewujudkan ide-ide mereka melalui desain yang inovatif dan kreatif.</p>

    <h3>Hobi & Minat</h3>
    <p>Saya sangat menyukai seni dan desain. Selain itu, saya juga menikmati menggambar dan mengikuti tren desain terbaru. Hobi saya termasuk membuat ilustrasi digital dan berpartisipasi dalam komunitas desain online.</p>

    <h3>Tautan Media Sosial</h3>
    <div class="social-icons">
      <a href="https://www.instagram.com/devdesign.com" target="_blank">Instagram</a>
      <a href="https://www.linkedin.com/in/devdesign" target="_blank">LinkedIn</a>
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
