import React, { useContext, useState} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";
import {HighlightDensityContext} from "@/js/quiz-form/contexts/highlightDensity";

export const PaperDensity = ({paperType}) => {
    const {data, setData} = useContext(StateContext)
    let [isChooserVisible, setChooserVisible] = useState(false)
    let {isDensityHighlighted, highlightDensity} = useContext(HighlightDensityContext)

    function chooseDensity(e) {
        setData({
            ...data,
            paper_density: e.target.dataset.value
        })
        setChooserVisible(false)
        highlightDensity(false)
    }


    let options

    switch (paperType) {
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
        <div className="paper-density__chooser">
            <div className="paper-density__title"> Плотность бумаги: </div>
            <div className={`paper-density__current ${isDensityHighlighted ? '--highlighted' : ''} `} onClick={() => setChooserVisible(true)}>
                {data.paper_density ? data.paper_density + " гр/м кв." : "--"}
                <div className={`paper-density__arrow-indicator ${isChooserVisible ? '--active' : ''}`}/>
            </div>
            <div className={`paper-density__list ${isChooserVisible ? '--active' : ''}`}>
                {options}
            </div>
        </div>
    )
}