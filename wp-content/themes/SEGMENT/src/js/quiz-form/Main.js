import React from 'react'

import Aside from "@/js/quiz-form/Aside";
import StepSwitcher from "@/js/StepSwitcher";

const Main = () => {

    return (
        <div className="quiz">
            <div className="quiz__section --main">
                <div className="quiz-main --quiz-bordered">
                    <p className="quiz__top-signature"><span>Узнайте</span> стоимость вашей книги</p>
                    <StepSwitcher />
                </div>
            </div>
            <div className="quiz__section --aside">
                <Aside />
            </div>
      </div>
    )
}

export default Main