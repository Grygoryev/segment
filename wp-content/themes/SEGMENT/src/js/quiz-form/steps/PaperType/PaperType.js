import React, {useContext, useState} from 'react'
import {StateContext} from "../../contexts/stateContext"
import {PaperDensity} from "@/js/quiz-form/steps/PaperType/PaperDensity";
import {PaperTypeContext} from "@/js/quiz-form/contexts/paperTypeContext";
import PaperChooseColorful from "@/js/quiz-form/steps/PaperType/PaperChooseColorful";
import StepButtons from "@/js/quiz-form/components/StepButtons";
import Header from "@/js/quiz-form/components/Header";

const PaperType = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let {highlightDensity, setColorfulHighlighted} = useContext(PaperTypeContext)

    let handleSubmit = (e) => {
        e.preventDefault();

        if (!data.paper_type) {
            alert('Для продолжения нужно выбрать один из вариантов')
        } else if (data.paper_type !== 'unknown' && !data.paper_density) {
            alert('Выберите, пожалуйста, плотность бумаги')
            highlightDensity(true)
        } else if (!data.is_colorful_pages && data.how_many_colorful_pages === '') {
            alert('Введите, пожалуйста, число цветных страниц')
            setColorfulHighlighted(true)
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
            <Header step={4} title='Выберите' spanInTitle='бумагу' />
            <form className="quiz__form paper-type" onSubmit={handleSubmit}>
                <div className="quiz-cards paper-type__cards">
                    <label className="quiz-card paper-type__card">
                        <div className="paper-type__img-box">
                            <img src={segmentData.themeUrl + "/img/quiz/prepare_offset.png"} className="paper-type__img" alt="" title="" />
                        </div>
                        <footer className="quiz-card__footer paper-type__card-footer">
                            <input type="radio" name="paper_type" value="offset" checked={data.paper_type == "offset"} onChange={handleChooze} />
                            <span>Офсетная</span>
                        </footer>
                    </label>
                    <label className="quiz-card paper-type__card">
                        <div className="paper-type__img-box">
                            <img src={segmentData.themeUrl + "/img/quiz/prepare_melovan.png"} className="paper-type__img" alt="" title="" />
                        </div>
                        <footer className="quiz-card__footer paper-type__card-footer">
                            <input type="radio" name="paper_type" value="melovan" checked={data.paper_type == "melovan"} onChange={handleChooze} />
                            <span>Мелованная</span>
                        </footer>
                    </label>
                    <label className="quiz-card paper-type__card">
                        <div className="paper-type__img-box">
                            <img src={segmentData.themeUrl + "/img/quiz/dontknow.svg"} className="paper-type__img" alt="" title="" />
                        </div>
                        <footer className="quiz-card__footer paper-type__card-footer">
                            <input type="radio" name="paper_type" value="unknown" checked={data.paper_type == "unknown"} onChange={handleChooze} />
                            <span>Пока не знаю</span>
                        </footer>
                    </label>
                </div>
                <PaperDensity />
                <PaperChooseColorful />
                <StepButtons prevStep={3} />
            </form>
        </React.Fragment>
    )
}

export default PaperType