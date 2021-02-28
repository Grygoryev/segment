import React, {useContext, useState} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";

const Aside = () => {
    let {step} = useContext(StateContext);
    // let step = 7

    let giftTitle,
        giftImg

    if (step === 7) {
        giftTitle = <p><span>Ваш</span> <br/> подарок:</p>
        giftImg = <img src={segmentData.themeUrl + "/img/quiz/ibsn.png"} alt=""/>
    } else {
        giftTitle = <>По завершении формы <br/> вы получите:</>
        giftImg = <img src={segmentData.themeUrl + "/img/quiz/gift-img.png"} alt=""/>
    }

    return (
        <React.Fragment>
          <aside className="quiz-aside --quiz-bordered">
              <img src={segmentData.themeUrl + "/img/quiz/director.png"} alt=""/>
              <h4>Дмитрий Сакович</h4>
              <p className="quiz-aside__signature">
                  Директор издательского дома
                  <br/>
                  "Сегмент"
              </p>
              <p className="quiz-aside__quote">
                  “Ваше детальное представление о книге:
                  её формате, качестве бумаги, оформлении, переплете, тираже — <span>повысит точность расчёта</span>”
              </p>
              <div className={`quiz-aside__gift-title ${step === 7 ? '--opened' : ''}`}>
                  { giftTitle }
              </div>

              <div className={`quiz-aside__gift-img ${step === 7 ? '--opened' : ''}`}>
                  { giftImg }
              </div>
          </aside>
        </React.Fragment>
    )
}

export default Aside