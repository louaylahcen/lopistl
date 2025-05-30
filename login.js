window.onload = () => {
  const toggleBtn = document.getElementById('themeToggle');
  const body = document.body;
  const savedTheme = localStorage.getItem('theme');

  // تحميل الوضع المحفوظ
  if (savedTheme === 'light') {
    body.classList.add('light-mode');
    toggleBtn.textContent = "🌞";
  } else {
    body.classList.add('dark-mode');
    toggleBtn.textContent = "🌙";
  }

  // تبديل الوضع
  toggleBtn.addEventListener('click', () => {
    body.classList.toggle('light-mode');
    body.classList.toggle('dark-mode');
    const isLight = body.classList.contains('light-mode');
    toggleBtn.textContent = isLight ? "🌞" : "🌙";
    localStorage.setItem('theme', isLight ? 'light' : 'dark');
  });

  // إظهار/إخفاء كلمة السر
  const togglePassword = document.getElementById('togglePassword');
  const passwordField = document.getElementById('pas');

  if (togglePassword && passwordField) {
    togglePassword.addEventListener('click', () => {
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      togglePassword.textContent = type === 'password' ? '👁️' : '🙈';
    });
  }

  // التحقق من الحقول قبل الإرسال
  const form = document.querySelector('form');
  const usernameField = document.getElementById('txt');

  if (form) {
    form.addEventListener('submit', (e) => {
      if (usernameField.value.trim() === '' || passwordField.value.trim() === '') {
        alert('Please fill in all fields.');
        e.preventDefault();
      }
    });
  }
};
