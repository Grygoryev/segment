import React, {Fragment, useState, useContext, useEffect} from 'react'
import {StateContext} from "../contexts/stateContext"
import StepButtons from "@/js/quiz-form/components/StepButtons";
import Header from "@/js/quiz-form/components/Header";

const BookSize = () => {
    let {setStep} = useContext(StateContext);
    let {data, setData} = useContext(StateContext);
    let [customMode, setCustomMode] = useState(null);

    let fromPage = document.getElementById('quiz-form').dataset.pageUrl

    useEffect( () => {
        setData({
            ...data,
            from_page: fromPage
        })

    }, [fromPage])

    let handleSubmit = (e) => {
        e.preventDefault();

        if (!data.book_size) {
            alert('Для продолжения нужно выбрать один из вариантов')
        } else {
            setStep(2)
        }
    }

    useEffect(() => {
    }, [data])

    let setBookSize = (e) => {

        customMode ? setCustomMode(false) : ''

        setData({
            ...data,
            book_size: e.target.value
        })

    }

    let onInput = e => {
        if (e.target.name == "custom_width") {
            setData({
                ...data,
                'book_size': 'custom',
                'data_custom_width': e.target.value
            })
        }

        if (e.target.name == "custom_height") {
            setData({
                ...data,
                'book_size': 'custom',
                'data_custom_height': e.target.value
            })
        }
    }

    let customFields = (
        <div className="book-size__custom">
            <div className="book-size__custom-section">
                <p>Ширина книги:</p>
                <div className="quiz-input-box">
                    <input type="text" name="custom_width" onChange={e => onInput(e)} />
                    <span>мм</span>
                </div>
            </div>
            <div className="book-size__custom-section">
                <p>Высота:</p>
                <div className="quiz-input-box">
                    <input type="text" name="custom_height" onChange={e => onInput(e)} />
                    <span>мм</span>
                </div>
            </div>
        </div>
    )

    return (
        <Fragment>
            <Header step={1} title='Выберите формат' spanInTitle='книги:' />
            <form className="book-size" onSubmit={handleSubmit}>
               <div className="book-size__container">
                    <label className="book-size__item quiz-card --A6">
                        <div className="book-size__item-body">
                            <img src={segmentData.themeUrl + "/img/quiz/A6.png"} alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" name="book_size" value="A6" checked={data.book_size === 'A6'} name="book_size" onChange={setBookSize} />
                            <h5 className=""><span>A6</span> 102x142 </h5>
                        </div>
                    </label>
                    <label className="book-size__item quiz-card --A5">
                        <div className="book-size__item-body">
                            <p className="book-size__item-label">Стандартный</p>
                            <img src={segmentData.themeUrl + "/img/quiz/A5.png"} alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" name="book_size" value="A5" name="book_size" onClick={setBookSize}/>
                            <h5 className=""><span>A5</span> 145x205 </h5>
                        </div>
                    </label>
                    <label className="book-size__item quiz-card">
                        <div className="book-size__item-body">
                            <img src={segmentData.themeUrl + "/img/quiz/A4.png"} title="" alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" value="A4" name="book_size" onClick={setBookSize}/>
                            <h5 className=""><span>A4</span> 210x297 </h5>
                        </div>
                    </label>
                    <label className="book-size__item quiz-card">
                        <div className="book-size__item-body">
                            <img src={segmentData.themeUrl + "/img/quiz/A.png"} title="" alt="" />
                        </div>
                        <div className="book-size__footer">
                            <input type="radio" name="book_size" checked={data.book_size === 'custom' || customMode} onChange={() => setCustomMode(true)}/>
                            <h5 className="">Другой</h5>
                        </div>
                    </label>
                    { customMode ? customFields : ''}
               </div>
               <StepButtons />
            </form>
        </Fragment>
    )
}

export default BookSize