import React, {Fragment, useState, useContext, useEffect} from 'react'
import {StateContext} from "../contexts/stateContext"

const BookSize = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let [customMode, setCustomMode] = useState(false);
    let [customSize] = useState(data.book_params)
    
    let handleSubmit = (e) => {
        e.preventDefault();
        
        if (customMode) {
            setData({
                ...data,
                'book_size': 'custom',
                'book_params': customSize
            })
        }

        setStep(2)
    }

    useEffect(() => {
    }, [data])

    let setBookSize = (e) => {

        customMode ? setCustomMode(false) : ''

        setData({
            ...data,
            'book_size': e.target.value
        })

        data.book_params = {}
    }

    let onInput = e => {
        if (e.target.name == "custom_width") {
            data.book_params.custom_width = e.target.value
        }

        if (e.target.name == "custom_height") {
            data.book_params.custom_height = e.target.value
        }
    }

    let customFields = (
        <div className="book-size__custom">
            <div className="book-size__custom-section">
                <p>Ширина книги:</p>
                <div className="quiz__input-box">
                    <input type="text" name="custom_width" onChange={e => onInput(e)} />
                    <span>мм</span>
                </div>
            </div>
            <div className="book-size__custom-section">
                <p>Высота:</p>
                <div className="quiz__input-box">
                    <input type="text" name="custom_height" onChange={e => onInput(e)} />
                    <span>мм</span>
                </div>
            </div>
        </div>
    )

    return (
        <Fragment>
            <header className="quiz__header">
                <h3 className="quiz__title">Выберите формат <span>книги:</span></h3>
                <div className="quiz-progress-bar">
                    <div className="quiz-progress-bar__title">
                        Шаг 1 из 6
                    </div>
                    <div className="quiz-progress-bar__bar">
                        <span className="quiz-progress-bar__bar-fullfilment --step1"></span>
                    </div>
                </div>
            </header>
            <form className="book-size" onSubmit={handleSubmit}>
               <div className="book-size__container">
                    <label className="book-size__item quiz__card">
                        <div className="book-size__body">
                            <img src="img/quiz/A.png" title="" alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" name="book_size" value="A6" checked={data.book_size === 'A6'} name="book_size" onChange={setBookSize} />
                            <h5 className=""><span>A6</span> 102x142 </h5>
                        </div>
                    </label>
                    <label className="book-size__item quiz__card">
                        <div className="book-size__body">
                            <img src="img/quiz/A6.png" title="" alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" name="book_size" value="A5" name="book_size" onClick={setBookSize}/>
                            <h5 className=""><span>A5</span> 145x205 </h5>
                        </div>
                    </label>
                    <label className="book-size__item quiz__card">
                        <div className="book-size__body">
                            <img src="img/quiz/A4.png" title="" alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" value="A4" name="book_size" onClick={setBookSize}/>
                            <h5 className=""><span>A4</span> 210x297 </h5>
                        </div>
                    </label>
                    <label className="book-size__item quiz__card">
                        <div className="book-size__body">
                            <img src="img/quiz/A.png" title="" alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" name="book_size" checked={data.book_size === 'custom' || customMode} onChange={() => setCustomMode(true)}/>
                            <h5 className="">Другой</h5>
                        </div>
                    </label>
                    { customMode || data.book_size === 'custom' ? customFields : ''}
               </div>
               <button className="quiz__btn btn" type="submit">Далее</button>
            </form>
        </Fragment>
    )
}

export default BookSize