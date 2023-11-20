const password = document.getElementById('password');
const eyeIcon = document.getElementById('eye');
const lockIcon = document.getElementById('lock');

function togglePassword() {
  eyeIcon.classList.toggle('active');
  lockIcon.classList.toggle('unlock');
  if (password.type === 'text') {
    password.setAttribute('type', 'password');
  } else {
    password.setAttribute('type', 'text');
  }
}

eyeIcon.addEventListener('click', togglePassword);

// Menu toggle

const bmiMenu = document.getElementById('bmi-menu');
const bmi2 = document.getElementById('bmi');

bmi2.addEventListener('click', function () {
  bmiMenu.classList.remove('bmi');
});
