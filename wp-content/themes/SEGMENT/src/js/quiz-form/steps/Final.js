import React, {useContext} from 'react'
import {StateContext} from "../contexts/stateContext"

const Final = () => {
    let {setStep} = useContext(StateContext)

    return (
        <React.Fragment>
            <header className="quiz__header">
                <h3 className="quiz__title">Отлично, <span>ваши данные приняты! </span></h3>
            </header>
            <div className="final">
                <div className="final__pic">
                    <img src={segmentData.themeUrl + "/img/quiz/ok.svg"} alt=""/>
                </div>
                <p className="final__title">Специалисты скоро приступят <span>к расчёту!</span></p>
                <div className="final__description">
                    <p>В ближайшее время, мы отправим его на ваш е-мейл (проверяйте папку спам, иногда письма попадают туда).</p>
                    <p>
                        Если у вас есть вопросы, мы с радостью на них ответим по телефону
                        <br/>
                        <a href="tel:+375447786002"> +375 44 778-60-02 </a>
                    </p>
                </div>
                <div className="quiz__buttons">
                    <button className="quiz__btn --back btn" onClick={() => setStep(6)}>Назад</button>
                </div>
            </div>

        </React.Fragment>
    )
}

export default Final