// header - mobile menu bars open/close

function mobileMenuToggle() {
  const mobileMenuBars = document.querySelector('#mobile-menu-bars');
  const navUl = document.querySelector('#nav-ul');
  const xBtn = document.querySelector('#mobile-menu-x');
  const dropDownMenu = navUl.querySelector('#nav-drop-down');
  const subMenu = navUl.querySelector('#nav-sub-menu');
  const expandIcon = navUl.querySelector('#expand-more');
  const body = document.querySelector('body');

  mobileMenuBars.addEventListener('click', () => {
    navUl.classList.remove('close');
    navUl.classList.add('open');
    xBtn.style.display = 'block';
    body.style.overflow = 'hidden';
  });

  xBtn.addEventListener('click', () => {
    xBtn.style.display = 'none';
    navUl.classList.remove('open');
    navUl.classList.add('close');
    body.style.overflow = 'auto';
  });

  dropDownMenu.addEventListener('click', () => {
    subMenu.classList.toggle('show');
    if (subMenu.classList.contains('show')) {
      expandIcon.style.transform = 'rotate(180deg)';
    } else {
      expandIcon.style.transform = 'rotate(0)';
    }
  });
}

window.onload = mobileMenuToggle;
