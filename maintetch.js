// Dark mode toggle
const toggleBtn = document.getElementById("themeToggle");
toggleBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark");
});

// Scroll to top
const toTopBtn = document.getElementById("toTop");
toTopBtn.addEventListener("click", () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// FAQ accordion
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach((item) => {
  const question = item.querySelector(".faq-question");
  const answer = item.querySelector(".faq-answer");

  question.addEventListener("click", () => {
    const isOpen = answer.style.display === "block";

    // Close all answers first
    document.querySelectorAll(".faq-answer").forEach((el) => {
      el.style.display = "none";
    });

    // Toggle current
    answer.style.display = isOpen ? "none" : "block";
  });
});
