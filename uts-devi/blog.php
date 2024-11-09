<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog - Sri Devi</title>
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

    .blog-container {
      max-width: 1000px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .blog-post {
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      margin-bottom: 20px;
      transition: transform 0.3s;
    }

    .blog-post:hover {
      transform: scale(1.02);
    }

    .blog-post img {
      width: 100%;
      height: auto;
    }

    .blog-content {
      padding: 20px;
    }

    .blog-title {
      color: #e94560;
      font-size: 1.8em;
      margin: 10px 0;
    }

    .blog-date {
      font-size: 0.9em;
      color: #bbb;
      margin-bottom: 10px;
    }

    .blog-excerpt {
      font-size: 1em;
      line-height: 1.6;
      color: #ddd;
      margin-bottom: 20px;
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

  <div class="blog-container">
    <div class="blog-post">
      <img src="blog1.png" alt="Blog Image 1">
      <div class="blog-content">
        <h2 class="blog-title">Memulai Karir di Dunia Desain Grafis</h2>
        <p class="blog-date">Posted on October 10, 2023</p>
        <p class="blog-excerpt">Desain grafis adalah bidang yang menarik bagi banyak orang yang memiliki jiwa kreatif. Artikel ini membahas perjalanan saya memulai karir di bidang desain serta tips untuk pemula yang ingin terjun di dunia desain...</p>
      </div>
    </div>

    <div class="blog-post">
      <img src="blog2.jpg" alt="Blog Image 2">
      <div class="blog-content">
        <h2 class="blog-title">Inspirasi Desain Logo untuk Bisnis</h2>
        <p class="blog-date">Posted on September 25, 2023</p>
        <p class="blog-excerpt">Menciptakan logo yang efektif membutuhkan riset dan pemahaman mendalam tentang brand. Artikel ini memberikan beberapa inspirasi desain logo yang berhasil membangun identitas bisnis yang kuat dan unik.</p>
      </div>
    </div>

    <div class="blog-post">
      <img src="blog3.jpg" alt="Blog Image 3">
      <div class="blog-content">
        <h2 class="blog-title">Perjalanan Belajar UI/UX Design</h2>
        <p class="blog-date">Posted on August 14, 2023</p>
        <p class="blog-excerpt">UI/UX Design adalah salah satu bidang yang berkembang pesat. Dalam artikel ini, saya akan menceritakan pengalaman belajar UI/UX dan tantangan yang saya hadapi untuk memperbaiki pengalaman pengguna.</p>
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
