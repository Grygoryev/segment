import React from 'react'
import StateContextProvider from "./contexts/stateContext"
import {render} from 'react-dom'
import Main from './Main'

function App() {
    return (
        <StateContextProvider>
            <Main />
        </StateContextProvider>
    )
}

if (document.getElementById('quiz')) {
    render(<App/>, document.getElementById('quiz'))
}