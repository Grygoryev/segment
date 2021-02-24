export function sendData(data) {
    let array = [];

    Object.keys(data).forEach(element => {
            array.push(
                encodeURIComponent(element) + "=" + encodeURIComponent(data[element])
            )
        }
    );

    let body = array.join("&");
    let xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if(this.readyState == 4 && this.status == 200){
            console.log('request has been sent')
        }
    };
    xhttp.open('POST', segmentData.ajaxUrl + '?action=send_mail', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send(body);
}