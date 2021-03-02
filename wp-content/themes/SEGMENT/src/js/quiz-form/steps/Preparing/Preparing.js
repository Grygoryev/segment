import React, {useContext, useState, useEffect} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";
import Header from "@/js/quiz-form/components/Header";
import StepButtons from "@/js/quiz-form/components/StepButtons";
import PainterService from "@/js/quiz-form/steps/Preparing/PainterService";
import {BookPreparingContext} from "@/js/quiz-form/contexts/bookPreparingContext";

const Preparing = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let {localAnswers, setLocalAnswers, highlightPagesQuantity} = useContext(BookPreparingContext)

    let handleSubmit = (e) => {
        e.preventDefault();

        setData({
            ...data,
            book_preparing_before_painting: localAnswers
        })

        if (!localAnswers.length) {
            alert('Для продолжения нужно выбрать один из вариантов')
        } else if (localAnswers.find(item => item === 'painter_uslugi') && !data.how_many_painter_illustrations) {
            alert('Пожалуйста, введите число страниц с иллюстрациями от художника')
            highlightPagesQuantity(true)
        } else {
            setStep(6)
        }
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
            <Header step={5} title='Допечатная' spanInTitle='подготовка:' />
            <form className="quiz__form preparing" onSubmit={handleSubmit}>
                <div className="preparing__container">
                    <div className="preparing__img-box">
                        <img src={segmentData.themeUrl + "/img/quiz/prepare_common.png"} alt=""/>
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
                            <span>Услуги художника-иллюстратора</span>
                        </label>
                        <PainterService />
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="cover_design"/>
                            <span>Дизайн обложки</span>
                        </label>
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="isbn_registration"/>
                            <span>Присвоение <a href="https://g.co/kgs/o3mrjD">ISBN</a> номера</span>
                        </label>
                        <label className="preparing__input-box">
                            <input onChange={handleChooze} type="checkbox" value="none"/>
                            <span>Подготовка не нужна</span>
                        </label>
                    </fieldset>
                </div>
                <StepButtons prevStep={4} />
            </form>
        </React.Fragment>
    )
}

export default Preparing