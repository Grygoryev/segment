import React, { useState, createContext} from 'react'

export const HighlightDensityContext = createContext()

const HighlightDensityContextProvider = ({children}) => {
    let [isDensityHighlighted, highlightDensity] = useState(false)

    return (
        <HighlightDensityContext.Provider value={{isDensityHighlighted, highlightDensity}}>
            { children }
        </HighlightDensityContext.Provider>
    )
}

export default HighlightDensityContextProvider