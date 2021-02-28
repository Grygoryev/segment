import React from "react";

export default function Header({step, title, spanInTitle}) {
    let progressBar

    if (step) {
        progressBar = (
            <div className="quiz-progress-bar">
                <div className="quiz-progress-bar__title">
                    { `Шаг ${step} из 6` }
                </div>
                <div className="quiz-progress-bar__bar">
                    <span className={`quiz-progress-bar__bar-fullfilment --step${step}`}></span>
                </div>
            </div>
        )
    }

    return (
        <header className="quiz__header">
            <h3 className="quiz__title">
                {title} <span>{spanInTitle}</span>
            </h3>
            { progressBar }
        </header>
    )
}