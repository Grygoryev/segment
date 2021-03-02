export function translateData(data) {

    let newData = {}

    for (let key in data) {
        let replacedKey = replaceKey(key)
        let replacedKeyValue = replaceKeyValue(data[key])
        console.log(replacedKeyValue)

        newData[replacedKey] = replacedKeyValue
    }

    console.log(newData)

    return newData
}

function replaceKeyValue(value) {
    switch (value) {
        case 'KBS_kleevoy':
            return value = 'КБС (клеевой)'
        case 'KSHS_proshitiy':
            return value = 'КШС (прошитый)'
        case 'skoba':
            return value = 'Скоба'
        case 'pruzhina':
            return value = 'Пружина'
        case 'colorful':
            return value = '7БЦ (цветной)'
        case '7b_leisure':
            return value = '7Б (под кожу)'
        case 'integralny':
            return value = 'Интегральный'
        case 'unknown':
            return value = 'Пока не знаю'
        case 'soft':
            return value = 'Мягкий'
        case 'hard':
            return value = 'Твёрдый'
        case 'offset':
            return value = 'Офсeтная'
        case 'melovan':
            return value = 'Мелованная'
        case false:
            return value = 'Нет'
        case true:
            return value = 'Да'
        default:
            return value
    }
}

function replaceKey(key) {
    switch (key) {
        case 'book_size':
            return key = 'Размер книги'
        case 'book_custom_width':
            return key = 'Произвольная ширина книги'
        case 'book_custom_height':
            return key = 'Произвольная высота книги'
        case 'pages_in_book':
            return key = 'Кол-во страниц в книге'
        case 'how_many_books':
            return key = 'Количество экземпляров'
        case 'cover_type':
            return key = 'Тип обложки'
        case 'cover_type_species':
            return key = 'Тип обложки (конкретней)'
        case 'paper_type':
            return key = 'Тип бумаги'
        case 'paper_density':
            return key = 'Плотность бумаги'
        case 'is_colorful_pages':
            return key = 'Цветные страницы?'
        case 'how_many_colorful_pages':
            return key = 'Количество цветных страниц'
        case 'colorful_pages_order':
            return key = 'Порядок цветных страниц'
        case 'book_preparing_before_painting':
            return key = 'Допечатная подготовка книги'
        case 'how_many_painter_illustrations':
            return key = 'Количество иллюстраций художника'
        case 'size_of_painter_illustrations':
            return key = 'Размер иллюстраций художника'
        case 'user_name':
            return key = 'Имя пользователя'
        case 'user_phone':
            return key = 'Телефон пользователя'
        case 'user_mail':
            return key = 'Email пользователя'
        case 'user_comment':
            return key = 'Комментарий'
        case 'from_page':
            return key = 'Заявка со страницы'
        default:
           return key
    }
}