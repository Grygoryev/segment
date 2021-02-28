import React, { useContext, useState} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";
import {PaperTypeContext} from "@/js/quiz-form/contexts/paperTypeContext";

export const PaperDensity = () => {
    const {data, setData} = useContext(StateContext)
    let [isChooserVisible, setChooserVisible] = useState(false)
    let {isDensityHighlighted, highlightDensity} = useContext(PaperTypeContext)

    function chooseDensity(e) {
        setData({
            ...data,
            paper_density: e.target.dataset.value
        })
        setChooserVisible(false)
        highlightDensity(false)
    }


    let options

    switch (data.paper_type) {
        case 'melovan':
            options = (
                <>
                    <div onClick={chooseDensity} data-value="130">
                        130 гр/м кв. (стандартная)
                    </div>
                    <div onClick={chooseDensity} data-value="150">
                        150 гр/м кв.
                    </div>
                </>
            )
            break
        case 'offset':
            options = (
                <>
                    <div onClick={chooseDensity} data-value="80">
                        80 гр/м кв.
                    </div>
                    <div onClick={chooseDensity} data-value="100">
                        100 гр/м кв.
                    </div>
                </>
            )
            break
        default:
            return (
                <></>
            )
    }

    return (
        <div className={`paper-density ${(data.paper_type === 'melovan' || data.paper_type === 'offset') ? '--open' : ''}`}>
            <div className="paper-density__chooser quiz-select">
                <div className="paper-density__title"> Плотность бумаги: </div>
                <div className={`quiz-select__current ${isDensityHighlighted ? '--highlighted' : ''} `} onClick={() => setChooserVisible(!isChooserVisible)}>
                    {data.paper_density ? data.paper_density + " гр/м кв." : "--"}
                    <div className={`quiz-select__arrow-indicator ${isChooserVisible ? '--active' : ''}`}/>
                </div>
                <div className={`quiz-select__list ${isChooserVisible ? '--active' : ''}`}>
                    {options}
                </div>
            </div>
        </div>
    )
}