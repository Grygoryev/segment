import React, {useContext} from 'react'
import {StateContext} from "../contexts/stateContext"

const CoverType = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);

    let handleSubmit = (e) => {
        e.preventDefault();
        setStep(4)
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
            <header className="quiz__header">
                <h3 className="quiz__title">Выберте переплёт <span>книги:</span></h3>
                <div className="quiz-progress-bar">
                    <div className="quiz-progress-bar__title">
                        Шаг 3 из 6
                    </div>
                    <div className="quiz-progress-bar__bar">
                        <span className="quiz-progress-bar__bar-fullfilment --step3"></span>
                    </div>
                </div>
            </header>
            <form className="quiz__form cover-type" onSubmit={handleSubmit}>
                <div className="quiz__container cover-type__options">
                    <fieldset className="cover-type__macro-option">
                        <h4 className="cover-type__option-title">Мягкий <span>переплёт</span></h4>
                        <div className="cover-type__micro-options quiz__cards">
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">
                                    <img src={segmentData.rootUrl + "/img/quiz/soft_kleevoy.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> КБС <br/>(клеевой)</p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'KBS_kleevoy'} value="KBS_kleevoy" onChange={ handleChooze} />

                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">
                                    <img src={segmentData.rootUrl + "/img/quiz/soft_proshitiy.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> КШС <br/>(прошитый)</p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'KSHS_proshitiy'} value="KSHS_proshitiy" onChange={ handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">   
                                    <img src={segmentData.rootUrl + "/img/quiz/soft_skoba.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> Скобка </p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'skoba'} value="skoba" onChange={ handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">
                                    <img src={segmentData.rootUrl + "/img/quiz/soft_pruzhina.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> Пружина </p>
                                    <input type="radio" name="soft" checked={data.cover_type_species == 'pruzhina'} value="pruzhina" onChange={ handleChooze} />
                                </footer>
                            </label>
                        </div>
                    </fieldset>
                    <fieldset className="cover-type__macro-option">
                        <h4 className="cover-type__option-title">Твёрдый <span>переплёт</span></h4>
                        <div className="cover-type__micro-options quiz__cards">
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">
                                    <img src={segmentData.rootUrl + "/img/quiz/hard_colorful.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> 7БЦ <br/>(цветной)</p>
                                    <input type="radio" name="hard" checked={data.cover_type_species == 'colorful'} value="colorful" onChange={ handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">
                                    <img src={segmentData.rootUrl + "/img/quiz/hard_leisure.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> 7Б <br/>(под кожу)</p>
                                    <input type="radio" name="hard" checked={data.cover_type_species == '7b_leisure'} value="7b_leisure" onChange={ handleChooze} />
                                </footer>
                            </label>
                            <label className="cover-type__micro-option quiz__card">
                                <div className="quiz__card-body">   
                                    <img src={segmentData.rootUrl + "/img/quiz/hard_integralny.png"} alt="" title=""/>
                                </div>
                                <footer className="quiz__card-footer">
                                    <p> Интегральный </p>
                                    <input type="radio" name="hard" checked={data.cover_type_species == 'integralny'} value="integralny" onChange={ handleChooze} />
                                </footer>
                            </label>
                        </div>
                    </fieldset>
                </div>
                <div className="quiz__buttons">
                    <button className="quiz__btn --back btn" onClick={() => setStep(2)}>Назад</button>
                    <button className="quiz__btn btn" type="submit">Далее</button>
                </div>
            </form>
        </React.Fragment>
    )
}

export default CoverType