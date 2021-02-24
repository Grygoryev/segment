export function correctView() {
    let header = document.getElementById('header'),
        form = document.getElementById('quiz')

    window.scrollTo({
        top: form.offsetTop - header.offsetHeight,
        behavior: 'smooth'
    })
}