import React, {useContext, useState} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";

const Preparing = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let [localAnswers, setLocalAnswers] = useState([])

    let handleSubmit = (e) => {
        e.preventDefault();
        setStep(6)

        setData({
            ...data,
            book_preparing_before_painting: localAnswers
        })
    }

    function handleChooze(e) {
        if (e.target.checked) {
            setLocalAnswers([...localAnswers, e.target.value])
        } else {
            setLocalAnswers(localAnswers.filter(item => item !== e.target.value))
        }
    }

    return (
        <React.Fragment>
            <header className="quiz__header">
                <h3 className="quiz__title">Допечатная <span>подготовка:</span></h3>
                <div className="quiz-progress-bar">
                    <div className="quiz-progress-bar__title">
                        Шаг 5 из 6
                    </div>
                    <div className="quiz-progress-bar__bar">
                        <span className="quiz-progress-bar__bar-fullfilment --step5"></span>
                    </div>
                </div>
            </header>
            <form className="quiz__form preparing" onSubmit={handleSubmit}>
                <div className="preparing__container">
                    <div className="preparing__img-box">
                        <img src="img/quiz/prepare_common.png" alt=""/>
                    </div>
                    <fieldset className="preparing__inputs">
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="verstka_maketa"/>
                            <span>Нужна вёрстка макета</span>
                        </label>
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="korrektura"/>
                            <span>Нужна корректура</span>
                        </label>
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="redaktura"/>
                            <span>Нужна редактура</span>
                        </label>
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="painter_uslugi"/>
                            <span>Услуги художника</span>
                        </label>
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="none"/>
                            <span>Подготовка не нужна</span>
                        </label>
                    </fieldset>
                </div>
                <div className="quiz__buttons">
                    <button className="quiz__btn --back btn" onClick={() => setStep(4)}>Назад</button>
                    <button className="quiz__btn btn" type="submit">Далее</button>
                </div>
            </form>
        </React.Fragment>
    )
}

export default Preparing