const burger = document.getElementById('burger-container');
const menu = document.getElementById('menu');
// const child = (burger.firstElementChild.src =
//   './assets/images/icons/menu-bars.svg');
// const replace = (burger.firstElementChild.src =
//   './assets/images/icons/xmark-solid.svg');

burger.addEventListener('click', () => {
  if (!burger.classList.contains('active')) {
    menu.classList.add('active');
    burger.firstElementChild.src = './assets/images/icons/xmark-solid.svg';
    burger.classList.add('active');
  } else {
    menu.classList.remove('active');
    burger.firstElementChild.src = './assets/images/icons/menu-bars.svg';
    burger.classList.remove('active');
  }
});
