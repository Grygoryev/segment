export const licensesSliderController = () => {
    let licenses = [...document.getElementsByClassName('license-box')],
        closeBtn = document.querySelector('.licenses__close-btn'),
        nextBtn =  document.querySelector('.licenses__next-btn'),
        prevBtn =  document.querySelector('.licenses__prev-btn'),
        container = document.querySelector('.licenses'),
        showBigClass = '--show-big'

    if (container) { 
        init()
    }

    function init() {
        licenses.forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle(showBigClass)
                container.classList.toggle('--slider-active')
            })
        })
    
        nextBtn.addEventListener('click', () => {
    
            for (let i = 0; i < licenses.length; i++) {
                if (licenses[i].classList.contains(showBigClass)) {
                    licenses[i].classList.remove(showBigClass)
    
                    if (licenses[i + 1]) {
                        licenses[i + 1].classList.add(showBigClass)
                        return
                    } else {
                        licenses[0].classList.add(showBigClass)
                    }
                }
            }
        })
    
        prevBtn.addEventListener('click', () => {
    
            for (let i = licenses.length - 1; i > 0; i--) {
                if (licenses[i].classList.contains(showBigClass)) {
                    licenses[i].classList.remove(showBigClass)
    
                    if (licenses[i - 1]) {
    
                        licenses[i - 1].classList.add(showBigClass)
                        return
                    } else {
                        licenses[licenses.length - 1].classList.add(showBigClass)
                    }
                }
            }
        })    
    }

}