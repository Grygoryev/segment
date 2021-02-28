import React, {useContext, useState} from 'react';
import {StateContext} from "@/js/quiz-form/contexts/stateContext";
import {PaperTypeContext} from "@/js/quiz-form/contexts/paperTypeContext";

export default function PaperChooseColorful() {
    let {data, setData} = useContext(StateContext);
    let [isPCChooserVisible, setPCChooserVisible] = useState(false)
    let [isColorful, setColorful] = useState(false)
    let {isColorfulHighlighted, setColorfulHighlighted} = useContext(PaperTypeContext)

    function chooseColorfulPages(e) {
        setData({
            ...data,
            colorful_pages_order: e.target.dataset.value
        })
        setPCChooserVisible(false)
    }

    function setQuantityOfColorfulPages(e) {
        setData({
            ...data,
            how_many_colorful_pages: e.target.value,
            is_colorful_pages: !!e.target.value,
            colorful_pages_order: 'Вразброс'
        })
        setColorfulHighlighted(false)

    }

    function openColorfulSettings() {
        setPCChooserVisible(!isPCChooserVisible)
        setData({
            ...data,
            is_colorful_pages: !data.is_colorful_pages,
        })
    }

    return (
        <div className={`is-cp ${(data.paper_type === 'melovan' || data.paper_type === 'offset') ? '--open' : ''}`}>
            <label className="is-cp__title">
                <input type="checkbox" onClick={() => setColorful(!isColorful)}/>
                <span>Есть ли цветные страницы внутри?</span>
            </label>
            <div className={`is-cp__data ${isColorful ? '--open' : ''}`}>
                <label className="is-cp__quantity">
                    <p className="is-cp__quantity-title">Количество страниц:</p>
                    <div className="quiz-input-box">
                        <input type="text" onChange={setQuantityOfColorfulPages} className={`${isColorfulHighlighted ? '--required' : ''}`}/>
                        <span>стр.</span>
                    </div>
                </label>
                <label htmlFor="" className="quiz-select">
                    <div className="quiz-select__current" onClick={openColorfulSettings}>
                        { data.colorful_pages_order ? data.colorful_pages_order : 'Вразброс' }
                        <div className={`quiz-select__arrow-indicator ${isPCChooserVisible ? '--active' : ''}`}/>
                    </div>
                    <div className={`quiz-select__list ${isPCChooserVisible ? '--active' : ''}`}>
                        <div onClick={chooseColorfulPages} data-value="Вразброс">
                            Вразброс
                        </div>
                        <div onClick={chooseColorfulPages} data-value="Подряд">
                            Подряд
                        </div>
                    </div>
                </label>
            </div>
        </div>
    )
}