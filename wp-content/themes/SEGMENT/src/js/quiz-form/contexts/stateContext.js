import React, { useState, createContext} from 'react'

export const StateContext = createContext()

const StateContextProvider = ({children}) => {
    let [step, setStep] = useState(1)
    let [data, setData] = useState({
        book_size: '',
        book_custom_width: '',
        book_custom_height: '',
        pages_in_book: '',
        how_many_books: '',
        cover_type: '',
        cover_type_species: '',
        paper_type: '',
        paper_density: '',
        is_colorful_pages: false,
        how_many_colorful_pages: '',
        colorful_pages_order: '',
        book_preparing_before_painting: '',
        how_many_painter_illustrations: '',
        size_of_painter_illustrations: '',
        user_name: '',
        user_phone: '',
        user_email: '',
        user_comment: '',
        from_page: ''
    })

    return (
        <StateContext.Provider value={{step, setStep, data, setData}}>
            { children }
        </StateContext.Provider>
    )
}

export default StateContextProvider