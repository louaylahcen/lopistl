<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>إضافة درس | GHAZA SC</title>
  <link rel="icon" href="photo/dbdd0a31-24ae-433b-9622-e221f656ee2a-removebg-preview.png">
  <link rel="stylesheet" href="page.css"> <!-- نفس CSS واجهة الأستاذ -->
</head>
<body>
  <nav>
    <a class="logo" href="home.html">GHAZA SC</a>
    <ul>
         <li><a href="homtetcher.php">Dashboard</a></li>
      <li><a href="form.php">Add Lesson</a></li>
      <li><a href="students.php">Students</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <button id="themeToggle" class="toggle-btn">🌙</button>
  <button id="toTop">↑</button>

  <!-- خلفية بارالاكس مع صندوق الإضافة -->
  <div class="container parallax" style="background-image: url('photo/school-bg.jpg'); background-attachment: fixed;">
    <div class="content" style="flex-direction: column; align-items: center; text-align: center;">
      <h2 style="color: #fff;">📚 أضف درس جديد</h2>
      <p style="color: #ccc;">من هنا يمكنك تحميل دروسك بسهولة ليستفيد منها طلابك</p>

      <form action="upload.php" method="post" enctype="multipart/form-data"
        style="max-width: 600px; width: 100%; background: rgba(0, 0, 0, 0.6); padding: 30px; border-radius: 15px; margin-top: 30px; box-shadow: 0 0 10px rgba(0,0,0,0.5); color: #fff; text-align: right;">

        <label for="subject">المادة:</label>
        <select id="subject" name="subject" required style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
          <option value="">--اختر المادة--</option>
          <option value="mathe">رياضيات</option>
          <option value="science">علوم</option>
          <option value="history">تاريخ</option>
          <option value="languages">لغات</option>
          <option value="islamic">إسلامية</option>
          <option value="philosophy">فلسفة</option>
        </select>

        <label for="title">عنوان الدرس:</label>
        <input id="title" type="text" name="title" required
          style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;">

        <label for="description">وصف مختصر:</label>
        <textarea id="description" name="description" rows="4" required
          style="width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 5px;"></textarea>

        <label for="video">تحميل فيديو:</label>
        <input id="video" type="file" name="video" accept="video/*" required
          style="margin-bottom: 15px; width: 100%;">

        <label for="pdf">تحميل ملف PDF:</label>
        <input id="pdf" type="file" name="pdf" accept=".pdf" required
          style="margin-bottom: 25px; width: 100%;">

        <button type="submit" class="btn" style="padding: 12px 25px; font-size: 16px; background-color: #ffcc00; color: #000; border: none; border-radius: 5px; cursor: pointer;">
          ✔ أضف الدرس
        </button>
      </form>
    </div>
  </div>

  <script src="main.js"></script>
</body>
</html>
