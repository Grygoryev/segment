import React, {useContext} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";

const SendData = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);

    let handleSubmit = (e) => {
        e.preventDefault();

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
              // alert('!')
            }
        };
        xhttp.open('POST', segmentData.ajaxUrl + '?action=send_mail', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(body);
        setStep(7);
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
            <header className="quiz__header">
                <h3 className="quiz__title">Остался <span>завершающий шаг</span></h3>
                <div className="quiz-progress-bar">
                    <div className="quiz-progress-bar__title">
                        Шаг 6 из 6
                    </div>
                    <div className="quiz-progress-bar__bar">
                        <span className="quiz-progress-bar__bar-fullfilment --step6"></span>
                    </div>
                </div>
            </header>
            <form className="quiz__form send-data" onSubmit={handleSubmit}>
                <h4 className="send-data__title">Куда отправить <span>расчёт?</span></h4>
                <fieldset className="send-data__inputs">
                    <div className="send-data__input-box quiz__input-box">
                        <p>Введите ваше имя:</p>
                        <input name="user_name" type="text" onChange={onInput}/>
                    </div>
                    <div className="send-data__input-box quiz__input-box">
                        <p>Введите ваш телефон:</p>
                        <input name="user_phone" type="text" onChange={onInput}/>
                    </div>
                    <div className="send-data__input-box quiz__input-box">
                        <p>Введите вашу почту:</p>
                        <input name="user_mail" type="text" onChange={onInput}/>
                    </div>
                    <div className="send-data__input-box quiz__input-box">
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
                            <a href={segmentData.themeUrl + '/resources/privacy_agreement.docx'}>&nbsp; условия обработки персональных данных</a>
                        </div>
                    </div>
                </fieldset>
                <div className="quiz__buttons">
                    <button className="quiz__btn --back btn" onClick={() => setStep(5)}>Назад</button>
                    <button className="quiz__btn btn" type="submit">Получить расчёт</button>
                </div>
            </form>
        </React.Fragment>
    )
}

export default SendData