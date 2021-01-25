export const deliveryController = () => {
    const payBelarusTab = document.getElementById('pay-tab-belarus'),
            payForeignTab = document.getElementById('pay-tab-foreign')
    let payDataBlocks = [...document.getElementsByClassName('pay-data')],
        payDataBelarusBlock = document.getElementById('pay-belarus'),
        payDataForeignBlock = document.getElementById('pay-foreign')


    payBelarusTab.addEventListener('click', () => {
        payDataBlocks.forEach(item => {
            item.classList.remove('--active')
        })

        payDataBelarusBlock.classList.add('--active')
    })

    payForeignTab.addEventListener('click', () => {
        payDataBlocks.forEach(item => {
            item.classList.remove('--active')
        })

        payDataForeignBlock.classList.add('--active')
    })
}
