import React, {useContext, useState, useEffect} from 'react'
import {StateContext} from "./contexts/stateContext"
import BookSize from './steps/BookSize';
import EditionParams from './steps/EditionParams';
import CoverType from './steps/CoverType';
import PaperType from './steps/PaperType';
import Preparing from "@/js/quiz-form/steps/Preparing";
import SendData from "@/js/quiz-form/steps/SendData";
import Final from "@/js/quiz-form/steps/Final";
import Aside from "@/js/quiz-form/Aside";

const Main = () => {
    let {step} = useContext(StateContext);

    return (
        <div className="quiz">
            <div className="quiz__main-container --quiz-bordered">
                <p className="quiz__top-signature"><span>Узнайте</span> стоимость вашего творения</p>
                {(()=> {
                    switch(step) {
                        case(1):
                            return <BookSize/>
                        case(2): 
                            return <EditionParams/>
                        case(3): 
                            return <CoverType/>
                        case(4): 
                            return <PaperType/>
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