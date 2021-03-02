import React, {useContext, useEffect, useState} from 'react'
import {BookPreparingContext} from "@/js/quiz-form/contexts/bookPreparingContext";
import {StateContext} from "@/js/quiz-form/contexts/stateContext";

export default function PainterService() {
    let {data, setData} = useContext(StateContext)
    let {localAnswers, isPagesQuantityHighlighted, highlightPagesQuantity} = useContext(BookPreparingContext)
    let [isSettings, showSettings ] = useState(false)
    let [isIllustrationSizesShown, showIllustrationSizes] = useState(false)

    useEffect( () => {
        if (Array.isArray(localAnswers)) {
            if (!!localAnswers.find(item => item === 'painter_uslugi')) {
                showSettings(true)
            } else {
                showSettings(false)
            }
        }
    }, [localAnswers])

    function setQuantityOfIllustrations(e) {
        setData({
            ...data,
            how_many_painter_illustrations: e.target.value,
            size_of_painter_illustrations: 'На страницу'
        })
        highlightPagesQuantity(false)
    }

    function setIllustrationSize(e) {
        setData({
            ...data,
            size_of_painter_illustrations: e.target.dataset.value
        })
        showIllustrationSizes(false)
    }

    return (
        <>
            <div className={`quiz-pages-quantity ${isSettings ? '--open' : ''}`}>
                <label className="quiz-pages-quantity__section --quantity">
                    <p className="is-cp__quantity-title quiz-pages-quantity__section-title">Количество иллюстраций:</p>
                    <div className="quiz-input-box">
                        <input className={`${isPagesQuantityHighlighted ? '--required' : ''}`} type="text" onChange={setQuantityOfIllustrations}/>
                    </div>
                </label>
                <label htmlFor="" className="quiz-pages-quantity__section --size quiz-select">
                    <p className="quiz-pages-quantity__section-title">Размер</p>
                    <div className="quiz-select__current" onClick={() => showIllustrationSizes(!isIllustrationSizesShown)}>
                        { data.size_of_painter_illustrations ? data.size_of_painter_illustrations : 'На страницу' }
                        <div className={`quiz-select__arrow-indicator ${isIllustrationSizesShown ? '--active' : ''}`}/>
                    </div>
                    <div className={`quiz-select__list ${isIllustrationSizesShown ? '--active' : ''}`}>
                        <div data-value="На страницу" onClick={setIllustrationSize}>
                            На страницу
                        </div>
                        <div  data-value="На разворот" onClick={setIllustrationSize}>
                            На разворот
                        </div>
                    </div>
                </label>
            </div>
        </>
    )
}