export const replaceBRinBreadcrumbs = () => {
    let breadcrumbs = document.querySelector('.breadcrumbs')
    let names

    if (breadcrumbs) {
        names = breadcrumbs.querySelectorAll('span[property="name"]')
        names.forEach(name => name.innerHTML = name.innerHTML.replace('<br>', ' '))
    }
}