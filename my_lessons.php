<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>دروسي | GHAZA SC</title>
  <link rel="stylesheet" href="page.css" />
  <style>
  
   .parallax {
      background-image: url('photo/We\ can\ do\ any\ size\ backdrops\ and\ accept\ custom….jpg');
      background-attachment: fixed;
      background-size: cover;
      background-position: center;
      padding: 70px 20px;
      color: white;
      text-align: center;
    }

    .parallax h1 {
      font-size: 40px;
      margin-bottom: 10px;
    }

    .lessons-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 25px;
      padding: 40px 20px;
      max-width: 1200px;
      margin: auto;
    }

    .lesson-card {
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(195, 195, 195, 0.1);
      transition: 0.3s ease;
    }

    .lesson-card:hover {
      transform: scale(1.02);
    }

    .lesson-card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .lesson-info {
      padding: 20px;
    }

    .lesson-info h3 {
      color: #444;
      margin-bottom: 10px;
    }

    .lesson-info p {
      font-size: 14px;
      color: #666;
      margin-bottom: 15px;
    }

    .lesson-links a {
      display: inline-block;
      margin: 5px 10px 0 0;
      background: #ffc107;
      color: #000;
      padding: 8px 14px;
      border-radius: 5px;
      font-weight: bold;
      text-decoration: none;
    }

    .lesson-links a:hover {
      background: #e0a800;
    }

    nav {
      background-color: #222;
    }

    .active {
      color: #ffc107 !important;
    }
  </style>
</head>
<body>

  <nav>
    <a class="logo" href="home.html">GHAZA SC</a>
    <ul>
      <li><a href="homtetcher.php">HOME</a></li>
      <li><a href="form.php">ADDE LESONE</a></li>
      <li><a href="my_lessons.php" class="active">MY LESSONS</a></li>
    </ul>
  </nav>

  <button id="themeToggle" class="toggle-btn">🌙</button>
  <button id="toTop">↑</button>

  <div class="parallax">
    <h1>📚 دروسي الخاصة</h1>
    <p>هنا يمكنك عرض، تعديل أو إدارة الدروس التي قمت بإضافتها حسب المادة</p>
  </div>

  <div class="lessons-grid">
    <!-- بطاقة درس -->
    <div class="lesson-card">
      <img src="photo/Premium Photo _ 3d render wallpaper dark math symbol focused on red pi.jpeg" alt="رياضيات">
      <div class="lesson-info">
        <h3>المعادلات الجبرية</h3>
        <p>شرح مبسط لمعادلات الدرجة الأولى وأمثلة توضيحية للمبتدئين.</p>
        <div class="lesson-links">
          <a href="videos/lesson1.mp4" target="_blank">🎥 فيديو</a>
          <a href="pdfs/lesson1.pdf" target="_blank">📄 PDF</a>
        </div>
      </div>
    </div>

    <!-- تكرار البطاقات حسب قاعدة البيانات لاحقًا -->

  </div>

  <script src="main.js"></script>
</body>
</html>
