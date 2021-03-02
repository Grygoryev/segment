import React, {useContext, useState} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";
import {translateData} from "@/js/quiz-form/helpers/translateData";
import StepButtons from "@/js/quiz-form/components/StepButtons";
import Header from "@/js/quiz-form/components/Header";

const SendData = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let [isConfirm, setConfirm] = useState(null)

    let handleSubmit = (e) => {
        e.preventDefault();

        if (!data.user_name || !data.user_mail || !data.user_phone) {
            alert('Для отправки данных, заполните пожалуйста необходимые поля')
            setConfirm(false)
        } else {
            setConfirm(true)

            let translatedData = translateData(data)

            let array = [];

            Object.keys(translatedData).forEach(element => {

                    array.push(
                        encodeURIComponent(element) + "=" + encodeURIComponent(translatedData[element])
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
            setStep(7);
        }

    }

    function onInput(e) {

        if (e.target.name === 'user_name') {
            setData({
                ...data,
                user_name: e.target.value
            })
        }

        if (e.target.name === 'user_phone') {
            setData({
                ...data,
                user_phone: e.target.value
            })
        }

        if (e.target.name === 'user_mail') {
            setData({
                ...data,
                user_mail: e.target.value
            })
        }

        if (e.target.name === 'user_comment') {
            setData({
                ...data,
                user_comment: e.target.value
            })
        }
    }

    return (
        <React.Fragment>
            <Header step={6} title='Остался' spanInTitle='завершающий шаг' />
            <form className="quiz__form send-data" onSubmit={handleSubmit}>
                <h4 className="send-data__title">Куда отправить <span>расчёт?</span></h4>
                <fieldset className="send-data__inputs">
                    <div className="send-data__input-box quiz-input-box">
                        <p>Введите ваше имя:</p>
                        <input className={isConfirm === false ? '--required' : ''} name="user_name" type="text" onChange={onInput}/>
                    </div>
                    <div className="send-data__input-box quiz-input-box">
                        <p>Введите ваш телефон:</p>
                        <input className={isConfirm === false ? '--required' : ''} name="user_phone" type="text" onChange={onInput}/>
                    </div>
                    <div className="send-data__input-box quiz-input-box">
                        <p>Введите вашу почту:</p>
                        <input className={isConfirm === false ? '--required' : ''} name="user_mail" type="text" onChange={onInput}/>
                    </div>
                    <div className="send-data__input-box quiz-input-box">
                        <p>Комментарий (если есть):</p>
                        <textarea name="user_comment" type="text" rows="6" onChange={onInput}/>
                    </div>
                </fieldset>
                <fieldset>
                    <div className="send-data__gift-box">
                        <div className="send-data__gift-suptitle">Ваш подарок:</div>
                        <div className="send-data__gift">
                            <div className="send-data__gift-img">
                                <img src={segmentData.themeUrl + "/img/quiz/ibsn.png"} alt=""/>
                            </div>
                            <h4 className="send-data__gift-title">Присвоение <br/> ISBN номера <span>вашей книге</span></h4>
                        </div>
                    </div>
                    <div className="send-data__privacy-agreement">
                        <input type="checkbox" defaultChecked/>
                        <div className="send-data__privacy-text">
                            <p>
                                Нажимая на кнопку "Получить расчёт" вы принимаете
                            </p>
                            <a href={segmentData.themeUrl + '/resources/privacy_agreement.docx'}> условия обработки персональных данных</a>
                        </div>
                    </div>
                </fieldset>
                <StepButtons prevStep={5} />
            </form>
        </React.Fragment>
    )
}

export default SendData