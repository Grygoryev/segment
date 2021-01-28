export const commonSliderController = () => {
    const slides = [...document.getElementsByClassName('common-slide')],
            container = document.getElementById('common-swiper-container'),
            closeBtn = document.getElementById('common-slider-close-big')

    slides.forEach(slide => {
        slide.addEventListener('click', () => container.classList.add('--big'))
    })

    closeBtn.addEventListener('click', () => container.classList.remove('--big'))
}