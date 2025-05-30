 
window.onload = () => {
    // نجيبو الزرّ اللي يبدل الثيم (mode)
  const toggleBtn = document.getElementById('themeToggle');
  const body = document.body;
  
  // نشوفو واش كاين في localStorage من قبل (theme)
  const savedTheme = localStorage.getItem('theme');
// إذا كانت 'light' نبدلو الوضع للضوء
  if (savedTheme === 'light') {
    body.classList.add('light-mode');
    toggleBtn.textContent = "🌙";
  } else {
     // إذا ماكانتش 'light' نخلوها ليلية
    body.classList.add('dark-mode');
    toggleBtn.textContent = "☀️";
  }
 // كي نكليكي على الزرّ نبدل بين الوضعين
  toggleBtn.addEventListener('click', () => {
    body.classList.toggle('light-mode');
    body.classList.toggle('dark-mode');
     // نبدلو الرمز حسب الوضع
    toggleBtn.textContent = body.classList.contains('light-mode') ? "🌙" : "☀️";
     // نخزنو الثيم الجديد في localStorage
    localStorage.setItem('theme', body.classList.contains('light-mode') ? 'light' : 'dark');
  });

  // نجيب الزر تاع "ارجع لفوق"
  const toTop = document.getElementById("toTop");
  window.onscroll = function() {
    if (window.scrollY > 200) {
      toTop.style.display = "block";
    } else {
      toTop.style.display = "none";
    }
  };
 // كي نكليكي على الزر نرجع للفوق بشوية
  toTop.onclick = () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  };
  // نجيبو جميع الأسئلة في FAQ
  const questions = document.querySelectorAll('.faq-question');
   // نديرو لكل سؤال: كي نكليكي عليه يفتح/يسكر الجواب
  questions.forEach(q => {
    q.addEventListener('click', () => {
      q.classList.toggle('active');
      const answer = q.nextElementSibling;
      answer.classList.toggle('open');
    });
  });
};
