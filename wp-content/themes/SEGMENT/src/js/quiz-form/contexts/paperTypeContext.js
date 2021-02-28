import React, { useState, createContext} from 'react'

export const PaperTypeContext = createContext()

const PaperTypeContextProvider = ({children}) => {
    let [isDensityHighlighted, highlightDensity] = useState(false)
    let [isColorfulHighlighted, setColorfulHighlighted] = useState(false)

    return (
        <PaperTypeContext.Provider
            value={{
                isDensityHighlighted, highlightDensity,
                isColorfulHighlighted, setColorfulHighlighted
            }}>
            { children }
        </PaperTypeContext.Provider>
    )
}

export default PaperTypeContextProvider