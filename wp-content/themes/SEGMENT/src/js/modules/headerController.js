import { introSwiper } from "./swiper"

export const headerController = () => {
  const menuBtn = document.getElementById('mobile-menu-btn'),
        header = document.getElementById('header'),
        nav = document.getElementById('nav'),
        intro = document.getElementById('intro'),
        mobMenuOpen = '--mob-menu-open'

  let noPaddingTop

        if (intro) {
          noPaddingTop = intro.classList.contains('--no-padding-top')
        }

  menuBtn.addEventListener('click', () => {
    header.classList.toggle(mobMenuOpen)
  })

  if (window.innerWidth >= 992 && intro && !noPaddingTop) intro.style.paddingTop = header.offsetHeight * 1.3 + 'px'
}