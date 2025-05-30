function validateForm() {
  const password = document.getElementById("password").value;
  const confirm = document.getElementById("confirm").value;

  if (password !== confirm) {
    alert("Passwords do not matchiiii!");
    return false;
  }
  return true;
}
