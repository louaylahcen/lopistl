<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Our Teachers - GHAZA SC</title>
  <link rel="icon" href="photo/dbdd0a31-24ae-433b-9622-e221f656ee2a-removebg-preview.png" />
  <style>
    * {
      margin: 0; padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: linear-gradient(#373636, #2f2b2b);
      color: #eee;
      padding: 20px;
      min-height: 100vh;
    }

    h1 {
      text-align: center;
      color: crimson;
      margin-bottom: 40px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .teacher-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      max-width: 1200px;
      margin: auto;
    }

    .teacher-card {
      background: rgba(60, 60, 60, 0.9);
      border-radius: 15px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 10px rgba(200, 50, 50, 0.5);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .teacher-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 0 20px crimson;
    }

    .teacher-photo {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
      border: 3px solid crimson;
    }

    .teacher-name {
      font-size: 20px;
      font-weight: bold;
      color: #fff;
      margin-bottom: 5px;
    }

    .teacher-subject {
      font-size: 16px;
      color: #bbb;
      margin-bottom: 15px;
    }

    .contact-btn {
      background-color: crimson;
      color: white;
      border: none;
      padding: 10px 15px;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .contact-btn:hover {
      background-color: darkred;
    }
      nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 80%;
      margin: 20px auto;
    }

    nav .logo {
      color: antiquewhite;
      text-decoration: none;
      font-size: 35px;
      text-transform: uppercase;
      letter-spacing: 3px;
      font-weight: 700;
    }

    nav ul {
      list-style: none;
    }

    nav ul li {
      display: inline;
      margin: 0 6px;
    }

    nav ul li a {
      color: antiquewhite;
      text-decoration: none;
      font-size: 15px;
      font-weight: 500;
    }

    nav ul li a:hover {
      color: crimson;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
 <nav>
    <a class="logo" href="home.html">GHAZA SC</a>
    <ul>
      <li><a href="student.php">HOME</a></li>
      <li><a href="corseee.php">CORSE</a></li>
      <li><a href="tetcher.php">TECHERS</a></li>
    </ul>
  </nav>

  <h1>Our Teachers</h1>

  <div class="teacher-grid">
    <div class="teacher-card">
      <img src="photo/Premium Vector _ A picture of a teacher with the….jpeg" alt="Teacher 1" class="teacher-photo">
      <div class="teacher-name">Ms.Bouchmal Narjes</div>
      <div class="teacher-subject">Mathematics</div>
      <button class="contact-btn">Request Lesson</button>
    </div>

    <div class="teacher-card">
      <img src="photo/428415674_1987206948327266_7072998288647921650_n.jpg" alt="Teacher 2" class="teacher-photo">
      <div class="teacher-name">Mr.Yahia Bouzeraa</div>
      <div class="teacher-subject">Science</div>
      <button class="contact-btn">Request Lesson</button>
    </div>

    <div class="teacher-card">
      <img src="photo/photo_2025-05-17_00-48-32.jpg" alt="Teacher 3" class="teacher-photo">
      <div class="teacher-name">Mr.Louay Lahcene Abdenour</div>
      <div class="teacher-subject">English</div>
      <button class="contact-btn">Request Lesson</button>
    </div>

    <div class="teacher-card">
      <img src="photo/Screenshot 2025-05-17 005131.png" alt="Teacher 4" class="teacher-photo">
      <div class="teacher-name">Mr.Djebbar Chihab Edden</div>
      <div class="teacher-subject">History</div>
      <button class="contact-btn">Request Lesson</button>
    </div>


    <div class="teacher-card">
      <img src="photo/hossem.png" alt="Teacher 5" class="teacher-photo">
      <div class="teacher-name">Mr.Ayachi houssem Edden</div>
      <div class="teacher-subject">Islamic</div>
      <button class="contact-btn">Request Lesson</button>
    </div>


    <div class="teacher-card">
      <img src="photo/imad.png" alt="Teacher 6" class="teacher-photo">
      <div class="teacher-name">Mr. Djibli imad eddine</div>
      <div class="teacher-subject">Philosophy</div>
      <button class="contact-btn">Request Lesson</button>
    </div>
     <div class="teacher-card">
      <img src="photo/Screenshot 2025-05-28 173158.png" alt="Teacher 5" class="teacher-photo">
      <div class="teacher-name">Mr.charaf eddine belhadje</div>
      <div class="teacher-subject">Philosophy</div>
      <button class="contact-btn">Request Lesson</button>
    </div>
  </div>

</body>
</html