export function orderCall() {
    let openBtn = document.getElementById('order-call'),
        closeBtn = document.getElementById('popup-container-close-btn'),
        popup = document.getElementById('popup-container'),
        popupBase = document.getElementById('popup-base'),
        popupApproved = document.getElementById('popup-approved'),
        popupForm = document.getElementById('popup-form')

    openBtn.addEventListener('click', () => {
        popup.classList.add('--active')
    })

    closeBtn.addEventListener('click', () => {
        popup.classList.remove('--active')
    })

    popupForm.addEventListener('submit', e => {
        e.preventDefault()

        for (let el of popupForm.elements) {
            if (!el.value && el.classList.contains('input')) {
                el.classList.add('--required')
                alert('Заполните, пожалуйста, выделенное поле')
                return
            }
        }

        let formData = new FormData()

        for (let el of popupForm.elements) {
            formData.append(el.name, el.value)
        }

        let xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function () {
            if(this.readyState == 4 && this.status == 200){
                console.log('request has been sent')
                popupBase.classList.add('--hidden')
                popupApproved.classList.remove('--hidden')
            }
        };
        // console.log(segmentData.ajaxUrl)
        xhttp.open('POST', segmentData.ajaxUrl + '?action=order_call', true);
        xhttp.send(formData);
    })
}