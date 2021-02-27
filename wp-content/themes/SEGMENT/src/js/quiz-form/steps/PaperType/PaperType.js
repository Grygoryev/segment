import React, {useContext, useState} from 'react'
import {StateContext} from "../../contexts/stateContext"
import {PaperDensity} from "@/js/quiz-form/steps/PaperType/PaperDensity";
import {HighlightDensityContext} from "@/js/quiz-form/contexts/highlightDensity";


const PaperType = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let {highlightDensity} = useContext(HighlightDensityContext)

    let handleSubmit = (e) => {
        e.preventDefault();

        if (!data.paper_type) {
            alert('Для продолжения нужно выбрать один из вариантов')
        } else if (data.paper_type !== 'unknown' && !data.paper_density) {
            alert('Выберите, пожалуйста, плотность бумаги')
            highlightDensity(true)
        } else {
            setStep(5)
        }
    }

    function handleChooze(e) {
        setData({
            ...data,
            paper_type: e.target.value,
            paper_density: ''
        })
    }


    return (
        <React.Fragment>
            <header className="quiz__header">
                <h3 className="quiz__title">Выберите <span>бумагу</span></h3>
                <div className="quiz-progress-bar">
                    <div className="quiz-progress-bar__title">
                        Шаг 4 из 6
                    </div>
                    <div className="quiz-progress-bar__bar">
                        <span className="quiz-progress-bar__bar-fullfilment --step4"/>
                    </div>
                </div>
            </header>
            <form className="quiz__form paper-type" onSubmit={handleSubmit}>
                <div className="quiz__cards paper-type__cards">
                    <label className="quiz__card paper-type__card">
                        <div className="paper-type__img-box">
                            <img src={segmentData.themeUrl + "/img/quiz/prepare_offset.png"} className="paper-type__img" alt="" title="" />
                        </div>
                        <footer className="quiz__card-footer paper-type__card-footer">
                            <input type="radio" name="paper_type" value="offset" checked={data.paper_type == "offset"} onChange={handleChooze} />
                            <span>Офсетная</span>
                        </footer>
                    </label>
                    <label className="quiz__card paper-type__card">
                        <div className="paper-type__img-box">
                            <img src={segmentData.themeUrl + "/img/quiz/prepare_melovan.png"} className="paper-type__img" alt="" title="" />
                        </div>
                        <footer className="quiz__card-footer paper-type__card-footer">
                            <input type="radio" name="paper_type" value="melovan" checked={data.paper_type == "melovan"} onChange={handleChooze} />
                            <span>Мелованная</span>
                        </footer>
                    </label>
                    <label className="quiz__card paper-type__card">
                        <div className="paper-type__img-box">
                            <img src={segmentData.themeUrl + "/img/quiz/dontknow.svg"} className="paper-type__img" alt="" title="" />
                        </div>
                        <footer className="quiz__card-footer paper-type__card-footer">
                            <input type="radio" name="paper_type" value="unknown" checked={data.paper_type == "unknown"} onChange={handleChooze} />
                            <span>Пока не знаю</span>
                        </footer>
                    </label>
                </div>
                <div className={`paper-density ${(data.paper_type === 'melovan' || data.paper_type === 'offset') ? '--open' : ''}`}>
                    <PaperDensity paperType={data.paper_type} />
                </div>
                <div className={`paper-type-colorful-pages ${(data.paper_type === 'melovan' || data.paper_type === 'offset') ? '--open' : ''}`}>
                    <label>
                        <input type="checkbox" />
                        <span>Есть ли цветные страницы внутри?</span>
                    </label>
                    <div className="paper-type-colorful-pages">
                        <label htmlFor="">
                            <span>Количество страниц:</span>
                            <div className="input-box">
                                <input type="text"/>
                                <span>стр.</span>
                            </div>
                        </label>
                    </div>
                </div>
                <div className="quiz__buttons">
                    <button className="quiz__btn --back btn" onClick={() => setStep(3)}>Назад</button>
                    <button className="quiz__btn --forward btn" type="submit">Далее</button>
                </div>
            </form>
        </React.Fragment>
    )
}

export default PaperType