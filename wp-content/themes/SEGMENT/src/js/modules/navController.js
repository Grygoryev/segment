export const navController = () => {
    let links = [...document.getElementsByClassName('link')],
        header = document.getElementById('header')

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();


            window.scrollTo({
                top: document.getElementById(link.dataset.goTo).offsetTop - header.offsetHeight,
                left: 0,
                behavior: 'smooth'
            })
        })
    })
}