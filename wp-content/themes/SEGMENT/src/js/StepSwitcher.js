import React, {useContext, useEffect} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";
import {correctView} from "@/js/quiz-form/helpers/correctView";
import BookSize from "@/js/quiz-form/steps/BookSize";
import EditionParams from "@/js/quiz-form/steps/EditionParams";
import CoverType from "@/js/quiz-form/steps/CoverType";
import PaperTypeContextProvider from "@/js/quiz-form/contexts/paperTypeContext";
import PaperType from "@/js/quiz-form/steps/PaperType/PaperType";
import BookPreparingContextProvider from "@/js/quiz-form/contexts/bookPreparingContext";
import Preparing from "@/js/quiz-form/steps/Preparing/Preparing";
import SendData from "@/js/quiz-form/steps/SendData";
import Final from "@/js/quiz-form/steps/Final";

export default () => {
    let {step} = useContext(StateContext);

    useEffect(() => {
        if (step > 1) {
            correctView()
        }
    }, [step])

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
        default:
            return <BookSize/>
    }
}