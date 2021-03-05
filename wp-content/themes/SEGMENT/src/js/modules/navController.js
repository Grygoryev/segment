export const navController = () => {
    let links = [...document.getElementsByClassName('link')],
        header = document.getElementById('header')

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            // e.preventDefault();

            let placeToScroll

            if (link.dataset.goTo === 'quiz-form') {
                placeToScroll = document.getElementById(link.dataset.goTo).offsetTop
            } else {
                placeToScroll = document.getElementById(link.dataset.goTo).offsetTop - header.offsetHeight
            }

            window.scrollTo({
                top: placeToScroll,
                left: 0,
                behavior: 'smooth'
            })
        })
    })
}