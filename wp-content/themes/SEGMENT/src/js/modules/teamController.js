export const teamController = () => {
    let tabs = [...document.getElementsByClassName('team-board__tab')],
        members = [...document.getElementsByClassName('team-member')]

    tabs.forEach(tab => {

        tab.addEventListener('click', (e) => {
            tabs.forEach(i => i.classList.remove('--active'))

            if (e.target === tab || tab.contains(e.target)) {
                tab.classList.add('--active')
            }

            if (tab.classList.contains('--all')) {
                members.forEach(item => item.classList.remove('--hidden'))
                return
            }

            members.forEach(member => {

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
