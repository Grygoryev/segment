import React, {useContext} from 'react'
import {StateContext} from "../contexts/stateContext"
import Header from "@/js/quiz-form/components/Header";

const Final = () => {

    return (
        <React.Fragment>
            <Header step={false} title='Отлично,' spanInTitle='ваши данные приняты!' />
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
            </div>
        </React.Fragment>
    )
}

export default Final