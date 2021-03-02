import React, { useState, createContext} from 'react'

export const BookPreparingContext = createContext()

const BookPreparingContextProvider = ({children}) => {
    let [localAnswers, setLocalAnswers] = useState([])
    let [isPagesQuantityHighlighted, highlightPagesQuantity] = useState()

    return (
        <BookPreparingContext.Provider
            value={{
                localAnswers, setLocalAnswers,
                isPagesQuantityHighlighted, highlightPagesQuantity
            }}>
            { children }
        </BookPreparingContext.Provider>
    )
}

export default BookPreparingContextProvider