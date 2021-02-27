import React, {useContext, useState, useEffect} from 'react'
import {StateContext} from "./contexts/stateContext"
import BookSize from './steps/BookSize';
import EditionParams from './steps/EditionParams';
import CoverType from './steps/CoverType';
import PaperType from './steps/PaperType/PaperType';
import Preparing from "@/js/quiz-form/steps/Preparing";
import SendData from "@/js/quiz-form/steps/SendData";
import Final from "@/js/quiz-form/steps/Final";
import Aside from "@/js/quiz-form/Aside";
import {correctView} from "@/js/quiz-form/helpers/correctView";
import HighlightDensityContextProvider from "@/js/quiz-form/contexts/highlightDensity";

const Main = () => {
    let {step} = useContext(StateContext);

    useEffect(() => {
        if (step > 1) {
            correctView()
        }
    }, [step])

    return (
        <div className="quiz">
            <div className="quiz__main-container --quiz-bordered">
                <p className="quiz__top-signature"><span>Узнайте</span> стоимость вашего творения</p>
                {(()=> {
                    switch(3) {
                        case(1):
                            return <BookSize/>
                        case(2): 
                            return <EditionParams/>
                        case(3): 
                             return <CoverType/>
                        case(4):
                            return (
                                <HighlightDensityContextProvider>
                                    <PaperType/>
                                </HighlightDensityContextProvider>
                            )
                        case(5): 
                            return <Preparing/>
                        case(6): 
                            return <SendData/>
                        case(7): 
                            return <Final/>
                    }
                })()}
            </div>
            <div className="quiz__aside-container --quiz-bordered">
                <Aside />
            </div>
      </div>
    )
}

export default Main