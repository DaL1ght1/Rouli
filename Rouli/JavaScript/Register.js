function checkPasswordMatch() {
  var password = document.getElementById('P').value;
  var confirmPassword = document.getElementById('confirmP').value;
  var passwordMatchMessage = document.getElementById('passwordMatchMessage');

  if (password !== confirmPassword) {
    passwordMatchMessage.textContent = 'Passwords do not match.';
  } else {
    passwordMatchMessage.textContent = '';
  }
}
