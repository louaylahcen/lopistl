<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>لوحة الطالب | GHAZA SC</title>
  <link rel="icon" href="photo/dbdd0a31-24ae-433b-9622-e221f656ee2a-removebg-preview.png">
  <link rel="stylesheet" href="student.css">
</head>
<body>
  <nav>
    <a class="logo" href="#">GHAZA SC</a>
    <ul>
      <li><a href="student.php">Home</a></li>
      <li><a href="corseee.php">Corse</a></li>
      <li><a href="profile.php">My Accont</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>

  <button id="themeToggle" class="toggle-btn">🌙</button>
  <button id="toTop">↑</button>

  <div class="container">
    <div class="content">
      <div class="text">
        <h2>مرحباً بك، عزيزي الطالب!</h2>
        <p>تابع دروسك، اكتشف المحتوى الجديد، وتقدم في مسارك التعليمي.</p>
        <ul style="margin-top: 20px; line-height: 1.8;">
          <li>🎥 مشاهدة الدروس التي سجلت بها</li>
          <li>📥 تحميل الملفات التعليمية</li>
          <li>💬 التواصل مع الأستاذ</li>
          <li>📈 تتبع التقدم الدراسي</li>
        </ul>
      </div>
      <div class="image">
        <img src="photo/dbdd0a31-24ae-433b-9622-e221f656ee2a-removebg-preview.png" alt="Logo">
      </div>
    </div>
  </div>

  <div class="container">
    <h1>اختصارات سريعة</h1>
    <div class="team-members">
      <div class="member">
        <h3><a href="my_lessons.php">📚 دروسي</a></h3>
        <p>شاهد وراجع الدروس التي اشتركت بها</p>
      </div>
      <div class="member">
        <h3><a href="materials.php">📂 تحميل ملفات</a></h3>
        <p>ملفات PDF وملاحظات الأساتذة</p>
      </div>
      <div class="member">
        <h3><a href="ask_teacher.php">💬 اسأل أستاذك</a></h3>
        <p>تواصل مباشر مع الأساتذة</p>
      </div>
      <div class="member">
        <h3><a href="profile.php">⚙️ إعدادات الحساب</a></h3>
        <p>تعديل المعلومات الشخصية</p>
      </div>
    </div>
  </div>

  <div class="vision">
    <h2>📘 تعلم بشغف</h2>
    <p>
      هنا تبدأ رحلتك نحو المعرفة. استثمر وقتك، استمتع بالتعلم، وحقق أحلامك مع GHAZA SC.
    </p>
  </div>

  <div class="faq-item">
    <div class="faq-question">هل أستطيع إعادة مشاهدة الدروس؟</div>
    <div class="faq-answer">
      <p>نعم، يمكنك الرجوع للدروس في أي وقت من خلال صفحة "دروسي".</p>
    </div>
  </div>

  <script src="maine.js"></script>
</body>
</html>
