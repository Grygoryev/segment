import React, {Fragment, useContext} from 'react'
import {StateContext} from "../contexts/stateContext"
import StepButtons from "@/js/quiz-form/components/StepButtons";
import Header from "@/js/quiz-form/components/Header";

const CoverType = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);

    let handleSubmit = (e) => {
        e.preventDefault();

        if (!data.cover_type) {
            alert('Для продолжения нужно выбрать один из вариантов')
        } else {
            setStep(4)
        }
    }

    function handleChooze(e) {

        if (e.target.name == "soft") {
            setData({
                ...data,
                cover_type: 'soft',
                cover_type_species: e.target.value,
            })
        }

        if (e.target.name == "hard") {
            setData({
                ...data,
                cover_type: 'hard',
                cover_type_species: e.target.value,
            })
        }
    }

    return (
        <React.Fragment>
            <Header step={3} title='Выберите переплёт' spanInTitle='книги:'/>
            <form className="quiz__form cover-type" onSubmit={handleSubmit}>
                <div className="quiz__container cover-type__options">
                    <fieldset className="cover-type__macro-option">
                        <h4 className="cover-type__option-title">Мягкий <span>переплёт</span></h4>
                        <div className="cover-type__micro-options quiz-cards">
                            <label className="cover-type__micro-option quiz-card --kleevoy">
                                <div className="quiz-card__body">
                                    <img src={segmentData.themeUrl + "/img/quiz/soft_kleevoy.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p>Клеевой </p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'KBS_kleevoy'} value="KBS_kleevoy" onChange={ handleChooze} />

                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz-card --proshitiy">
                                <div className="quiz-card__body">
                                    <img src={segmentData.themeUrl + "/img/quiz/soft_proshitiy.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p> Прошитый </p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'KSHS_proshitiy'} value="KSHS_proshitiy" onChange={ handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz-card --skoba">
                                <div className="quiz-card__body">   
                                    <img src={segmentData.themeUrl + "/img/quiz/soft_skoba.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p> Скоба </p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'skoba'} value="skoba" onChange={ handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz-card --pruzhina">
                                <div className="quiz-card__body">
                                    <img src={segmentData.themeUrl + "/img/quiz/soft_pruzhina.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p> Пружина </p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'pruzhina'} value="pruzhina" onChange={ handleChooze} />
                                </footer>
                            </label>
                        </div>
                    </fieldset>
                    <fieldset className="cover-type__macro-option">
                        <h4 className="cover-type__option-title">Твёрдый <span>переплёт</span></h4>
                        <div className="cover-type__micro-options quiz-cards">
                            <label className="cover-type__micro-option quiz-card --tsvetnoy">
                                <div className="quiz-card__body">
                                    <img src={segmentData.themeUrl + "/img/quiz/hard_colorful.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p> 7БЦ (цветной)</p>
                                    <input type="radio" name="hard" checked={data.cover_type_species == 'colorful'} value="colorful" onChange={handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz-card --leisure">
                                <div className="quiz-card__body">
                                    <img src={segmentData.themeUrl + "/img/quiz/hard_leisure.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p> 7Б (под кожу)</p>
                                    <input type="radio" name="hard" checked={data.cover_type_species == '7b_leisure'} value="7b_leisure" onChange={handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz-card --integralny">
                                <div className="quiz-card__body">   
                                    <img src={segmentData.themeUrl + "/img/quiz/hard_integralny.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz-card__footer">
                                    <p> Интегральный </p>
                                    <input type="radio" name="hard" checked={data.cover_type_species == 'integralny'} value="integralny" onChange={ handleChooze} />
                                </footer>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <StepButtons prevStep={2} />
            </form>
        </React.Fragment>
    )
}

export default CoverType