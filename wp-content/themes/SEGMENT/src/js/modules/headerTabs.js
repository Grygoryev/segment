export const headerTabs = () => {
  let tabs = document.querySelectorAll('.header-tab'),
    items = document.querySelectorAll('.portfolio-item')

  tabs.forEach(tab => {

    tab.addEventListener('click', (e) => {
      tabs.forEach(i => i.classList.remove('--active'))

      if (e.target === tab || tab.contains(e.target)) {
        tab.classList.add('--active')
      }

      if (tab.classList.contains('--all')) {
        items.forEach(item => item.classList.remove('--hidden'))
        return
      }

      items.forEach(member => {

        if (member.dataset.tag !== tab.dataset.tag) {
          member.classList.add('--hidden')
        } else {
          member.classList.remove(
            '--hidden'
          )
        }

      })
    })
  })
}
