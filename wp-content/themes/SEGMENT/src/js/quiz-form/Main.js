import React, {useContext, useState, useEffect} from 'react'
import {StateContext} from "./contexts/stateContext"
import BookSize from './steps/BookSize';
import EditionParams from './steps/EditionParams';
import CoverType from './steps/CoverType';
import PaperType from './steps/PaperType/PaperType';
import Preparing from "@/js/quiz-form/steps/Preparing/Preparing";
import SendData from "@/js/quiz-form/steps/SendData";
import Final from "@/js/quiz-form/steps/Final";
import Aside from "@/js/quiz-form/Aside";
import {correctView} from "@/js/quiz-form/helpers/correctView";
import PaperTypeContextProvider from "@/js/quiz-form/contexts/paperTypeContext";
import BookPreparingContextProvider from "@/js/quiz-form/contexts/bookPreparingContext";

const Main = () => {
    let {step} = useContext(StateContext);

    useEffect(() => {
        if (step > 1) {
            correctView()
        }
    }, [step])

    return (
        <div className="quiz">
            <div className="quiz__main --quiz-bordered">
                <p className="quiz__top-signature"><span>Узнайте</span> стоимость вашей книги</p>
                {(()=> {
                    switch(step) {
                        case(1):
                            return <BookSize/>
                        case(2): 
                            return <EditionParams/>
                        case(3): 
                             return <CoverType/>
                        case(4):
                            return (
                                <PaperTypeContextProvider>
                                    <PaperType/>
                                </PaperTypeContextProvider>
                            )
                        case(5): 
                            return (
                                <BookPreparingContextProvider>
                                    <Preparing/>
                                </BookPreparingContextProvider>
                            )
                        case(6): 
                            return <SendData/>
                        case(7): 
                            return <Final/>
                    }
                })()}
            </div>
            <Aside />
      </div>
    )
}

export default Main