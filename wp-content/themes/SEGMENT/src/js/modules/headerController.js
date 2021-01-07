import { introSwiper } from "./swiper"

export const headerController = () => {
  const menuBtn = document.getElementById('mobile-menu-btn'),
        header = document.getElementById('header'),
        nav = document.getElementById('nav'),
        intro = document.getElementById('intro'),
        mobMenuOpen = '--mob-menu-open'

  menuBtn.addEventListener('click', () => {
    header.classList.toggle(mobMenuOpen)
  })

  if (window.innerWidth >= 992 && intro) intro.style.paddingTop = header.offsetHeight * 1.3 + 'px'
}