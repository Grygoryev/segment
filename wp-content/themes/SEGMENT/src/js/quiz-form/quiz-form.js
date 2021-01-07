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

render(<App/>, document.getElementById('quiz'))