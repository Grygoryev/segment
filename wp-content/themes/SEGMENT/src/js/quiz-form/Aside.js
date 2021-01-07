import React, {useContext, useState} from 'react'
import {StateContext} from "@/js/quiz-form/contexts/stateContext";

const Aside = () => {
    let {step} = useContext(StateContext);
    // let step = 7

    let giftTitle,
        giftImg

    if (step === 7) {
        giftTitle = <p><span>Ваш</span> <br/> подарок:</p>
        giftImg = <img src="img/quiz/ibsn.png" alt=""/>
    } else {
        giftTitle = <p>По завершению формы <br/> вы получите:</p>
        giftImg = <img src="img/quiz/gift-img.png" alt=""/>
    }

    return (
        <React.Fragment>
          <aside className="quiz-aside">
              <img src="img/quiz/director.png" alt=""/>
              <h4>Дмитрий Сакович</h4>
              <p>
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