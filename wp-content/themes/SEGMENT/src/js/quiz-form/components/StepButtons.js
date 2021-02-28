import React, {useContext} from 'react';
import {StateContext} from "@/js/quiz-form/contexts/stateContext";

export default function StepButtons({prevStep}) {
    let {setStep} = useContext(StateContext)

    return (
        <div className="quiz-buttons">
            {prevStep ? <div className="quiz-btn --back btn" onClick={() => setStep(prevStep)}>Назад</div> : ''}
            <button className="quiz-btn --forward btn" type="submit">Далее</button>
        </div>
    )
}