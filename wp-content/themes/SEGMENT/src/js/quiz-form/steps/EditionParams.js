import React, {useContext, useState} from 'react'
import {StateContext} from "../contexts/stateContext"
import StepButtons from "@/js/quiz-form/components/StepButtons";
import Header from "@/js/quiz-form/components/Header";

const EditionParams = () => {
    let {setStep} = useContext(StateContext);
    let {data} = useContext(StateContext);
    let [isConfirm, setConfirm] = useState(null)

    let handleSubmit = (e) => {
        e.preventDefault();

        if (!data.pages_in_book || !data.how_many_books) {
            setConfirm(false)
            alert('Заполните пожалуйста необходимые поля')
        } else {
            setConfirm(true)
            setStep(3)
        }
    }

    let onInput = (e) => {
        if (e.target.name == 'pages_in_book') {
            data.pages_in_book = e.target.value
        }

        if (e.target.name == 'how_many_books') {
            data.how_many_books = e.target.value
        }
    }

    return (
        <React.Fragment>
            <Header step={2} title='Тираж' spanInTitle='книги:' />
            <form className="quiz__form edition-params" onSubmit={handleSubmit}>
                <div className="edition-params__container">
                    <img className="edition-params__img" src={segmentData.themeUrl + "/img/quiz/your_book.png"}/>
                    <div className="edition-params__options">

                        <div className="edition-params__section">
                            <p>Сколько страниц будет в книге</p>
                            <div className="quiz-input-box edition-params__input-box">
                                <input className={isConfirm === false ? '--required' : ''} type="text" name="pages_in_book" onChange={onInput} />
                                <span>стр.</span>
                            </div>
                        </div>

                        <div className="edition-params__section">
                            <p>Сколько будет экземпляров</p>
                            <div className="quiz-input-box edition-params__input-box">
                                <input className={isConfirm === false ? '--required' : ''} type="text" name="how_many_books" onChange={onInput} />
                                <span>шт.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <StepButtons prevStep={1} />
            </form>
        </React.Fragment>
    )
}

export default EditionParams