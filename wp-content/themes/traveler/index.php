<?php
/**
 * Template Name: Главная
 *
 */

//get_header();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Site</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/dist-cust/css/style.css">
</head>
<body>
    <header class="header header-fixed">
        <div class="conteiner header-content">
            <div class="header__wrap-logo">
                <img src="<?php echo get_template_directory_uri()?>/images/logo-color.svg">
            </div>
            <div class="header__wrap-buttons">
                <div class="button">
                    <a href="#" class="button__content button__content__active">О компании</a>
                </div>
                <div class="button">
                    <a href="#" class="button__content">Сотрудничество</a>
                </div>
                <div class="button">
                    <a href="#" class="button__content">Помощь</a>
                </div>
                <div class="button">
                    <a href="#" class="button__content">Контакты</a>
                </div>
                <div class="button button-icon">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 0.000976562C6.7166 0.000976562 0 6.71625 0 15.0003C0 23.2844 6.71594 29.9997 15 29.9997C23.2847 29.9997 30 23.2844 30 15.0003C30 6.71625 23.2847 0.000976562 15 0.000976562ZM15 4.48595C17.7409 4.48595 19.962 6.70769 19.962 9.4473C19.962 12.1876 17.7409 14.4086 15 14.4086C12.2604 14.4086 10.0393 12.1876 10.0393 9.4473C10.0393 6.70769 12.2604 4.48595 15 4.48595ZM14.9967 26.078C12.263 26.078 9.75929 25.0825 7.82812 23.4346C7.35768 23.0333 7.08623 22.445 7.08623 21.8276C7.08623 19.0491 9.33497 16.8254 12.1141 16.8254H17.8872C20.667 16.8254 22.9072 19.0491 22.9072 21.8276C22.9072 22.4456 22.637 23.0327 22.1659 23.4339C20.2354 25.0825 17.731 26.078 14.9967 26.078Z" fill="#092C6D"/>
                    </svg>                        
                </div>
                <div class="button">
                    <span class="button__number">+7 000 000 00 00</span>
                </div>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="conteiner column">
            <div class="wrap-h1">
                <h1>
                    Билеты на самолёт.<br>
                    Экономьте на полёте
                </h1>
            </div>
            <div class="column">
                <div class="main__wrap-buttons">
                    <div class="main__button">
                        <div class="main__button__content main__button__active">
                            <span>Авиа билеты</span>
                        </div>
                    </div>
                    <div class="main__button">
                        <div class="main__button__content">
                            <span>Чартерные рейсы</span>
                        </div>
                    </div>
                    <div class="main__button">
                        <div class="main__button__content">
                            <span>ЖД билеты</span>
                        </div>
                    </div>
                    <div class="main__button">
                        <div class="main__button__content">
                            <span>Автобусы</span>
                        </div>
                    </div>
                    <div class="main__button">
                        <div class="main__button__content">
                            <span>Туры</span>
                        </div>
                    </div>
                </div>
                <div class="main__wrap-form">
                    <div class="form">
                        <div class="form__input form__input__city">
                            <input class="input input-city" placeholder="Откуда (Город)">
                            <div class="wrap-svg">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                    <path d="M15.9198 17.9315L19.1971 15.1974C19.4025 15.0256 19.5605 14.8227 19.6677 14.6106C19.8259 14.4173 19.9247 14.1703 19.9245 13.8979C19.9253 13.5389 19.7572 13.2246 19.5016 13.0207C19.4156 12.9061 19.3151 12.798 19.1969 12.6993L15.9176 9.96686C15.2914 9.44362 14.4706 9.42068 14.0859 9.91459C13.701 10.4089 13.8966 11.2322 14.524 11.7539L15.7687 12.7926L8.74428 12.7953C8.15341 12.7936 7.67425 13.2908 7.67424 13.9016C7.67548 14.5131 8.15475 15.0073 8.74502 15.0071L15.8895 15.007L14.5248 16.1457C13.8987 16.6689 13.7031 17.492 14.088 17.9863C14.4735 18.4794 15.2937 18.4548 15.9198 17.9315Z" fill="#092C6D"/>
                                    <path d="M6.12138 4.03861C5.7359 3.54448 4.91593 3.56871 4.2894 4.09174L1.01201 6.82587C0.806659 6.99767 0.648686 7.20048 0.541077 7.4134C0.383033 7.60624 0.284475 7.85286 0.28468 8.12533C0.284257 8.48456 0.451982 8.79858 0.707573 9.00254C0.793553 9.11708 0.894353 9.22542 1.01263 9.32414L4.29147 12.0574C4.91772 12.5796 5.73849 12.6026 6.12322 12.1086C6.50774 11.615 6.31257 10.791 5.6851 10.2692L4.44018 9.23098L11.4644 9.22872C12.0557 9.22954 12.5353 8.73268 12.5348 8.12159C12.5336 7.51006 12.0547 7.01603 11.4641 7.01608L4.31922 7.01705L5.68418 5.87797C6.31068 5.35597 6.50707 4.53232 6.12138 4.03861Z" fill="#092C6D"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="20" height="20" fill="white"/>
                                    </clipPath>
                                    </defs>
                                </svg>                                
                            </div>
                            <input class="input input-city" placeholder="Куда (Город)">
                        </div>
                    </div>
                    <div class="form">
                        <div class="form__input form__input__roundtrip">
                            <input class="input input__roundtrip" placeholder="Туда">
                            <div class="wrap-svg">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5859 2.16643H15.9834V1.50904C15.9834 0.676599 15.3266 0 14.5183 0C13.7094 0 13.0531 0.676599 13.0531 1.50904V2.16588H11.5496V1.50904C11.5496 0.676599 10.8927 0 10.0845 0C9.27616 0 8.61931 0.676599 8.61931 1.50904V2.16588H7.11576V1.50904C7.11576 0.676599 6.45891 0 5.65062 0C4.84232 0 4.18547 0.676599 4.18547 1.50904V2.16588H3.41614C2.13044 2.16588 1.08398 3.21234 1.08398 4.49804V17.6678C1.08398 18.9536 2.13044 20 3.41614 20H16.5859C17.8722 20 18.9181 18.9536 18.9181 17.6678V4.49804C18.9181 3.21288 17.8717 2.16643 16.5859 2.16643ZM13.8763 1.50904C13.8763 1.13096 14.1643 0.823113 14.5183 0.823113C14.8728 0.823113 15.1603 1.13096 15.1603 1.50904V4.19568C15.1603 4.57376 14.8728 4.88161 14.5183 4.88161C14.1643 4.88161 13.8763 4.57376 13.8763 4.19568V1.50904ZM9.44242 1.50904C9.44242 1.13096 9.73051 0.823113 10.0845 0.823113C10.4384 0.823113 10.7265 1.13096 10.7265 1.50904V4.19568C10.7265 4.57376 10.4384 4.88161 10.0845 4.88161C9.73051 4.88161 9.44242 4.57376 9.44242 4.19568V1.50904ZM5.00804 1.50904C5.00804 1.13096 5.29613 0.823113 5.65007 0.823113C6.00401 0.823113 6.2921 1.13096 6.2921 1.50904V4.19568C6.2921 4.57376 6.00401 4.88161 5.65007 4.88161C5.29613 4.88161 5.00804 4.57376 5.00804 4.19568V1.50904ZM17.5462 17.6684C17.5462 18.1979 17.1155 18.6287 16.5859 18.6287H3.41614C2.8866 18.6287 2.45584 18.1979 2.45584 17.6684V5.59607H17.5462V17.6684Z" fill="#092C6D"/>
                                    <path d="M6.2119 8.02588H3.69043V10.2697H6.2119V8.02588Z" fill="#092C6D"/>
                                    <path d="M9.57793 8.02588H7.05591V10.2697H9.57793V8.02588Z" fill="#092C6D"/>
                                    <path d="M12.9463 8.02588H10.4248V10.2697H12.9463V8.02588Z" fill="#092C6D"/>
                                    <path d="M16.3123 8.02588H13.7903V10.2697H16.3123V8.02588Z" fill="#092C6D"/>
                                    <path d="M6.2119 11.0209H3.69043V13.263H6.2119V11.0209Z" fill="#092C6D"/>
                                    <path d="M9.57793 11.0209H7.05591V13.263H9.57793V11.0209Z" fill="#092C6D"/>
                                    <path d="M12.9463 11.0209H10.4248V13.263H12.9463V11.0209Z" fill="#092C6D"/>
                                    <path d="M16.3123 11.0209H13.7903V13.263H16.3123V11.0209Z" fill="#092C6D"/>
                                    <path d="M6.2119 14.0149H3.69043V16.2571H6.2119V14.0149Z" fill="#092C6D"/>
                                    <path d="M9.57793 14.0149H7.05591V16.2571H9.57793V14.0149Z" fill="#092C6D"/>
                                    <path d="M12.9463 14.0149H10.4248V16.2571H12.9463V14.0149Z" fill="#092C6D"/>
                                    <path d="M16.3123 14.0149H13.7903V16.2571H16.3123V14.0149Z" fill="#092C6D"/>
                                </svg>                                                                  
                            </div>
                            <input class="input input__roundtrip" placeholder="Обратно">
                        </div>
                    </div>
                    <div class="form">
                        <div class="form__input form__input__passenger-class">
                            <input class="input input__passenger-class" placeholder="1 человек">
                            <div class="input">
                                <span>/</span>                                                   
                            </div>
                            <input class="input input__passenger-class" placeholder="Эконом">
                        </div>
                    </div>
                    <div class="wrap__button-form">
                        <div class="small__button">
                            <span class="big-small__but_content">Поиск</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="schedule">
        <div class="conteiner column">
            <div class="schedule__wrap-h2">
                <h2>Расписание чартерных рейсов</h2>
            </div>
            <div class="schedule__wrap-cards">
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Москва</h3>
                        <div class="ticket-price__city">
                            <span>В г. Ташкент</span>
                            <span>от 75 250 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Санкт-Петербург</span>
                            <span>от 8 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Адлер</span>
                            <span>от 3 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Симферополь</span>
                            <span>от 11 840 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Махачкала</span>
                            <span>от 2 950 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/moskow.png');"></div>
                </div>
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Санкт-Петербург</h3>
                        <div class="ticket-price__city">
                            <span>В г. Екатеринбург</span>
                            <span>от 3 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Симферополь</span>
                            <span>от 4 500 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Казань</span>
                            <span>от 2 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Адлер</span>
                            <span>от 4 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Ростов-на-Дону</span>
                            <span>от 3 650 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/petersburg.png');"></div>
                </div>
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Симферополь</h3>
                        <div class="ticket-price__city">
                            <span>В г. Москва</span>
                            <span>от 3 500 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Нижний Новгород</span>
                            <span>от 4 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г.Санкт-Петербург</span>
                            <span>от 5 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Екатеринбург</span>
                            <span>от 3 840 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Тюмень</span>
                            <span>от 3 950 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/simferopol.png');"></div>
                </div>
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Екатеринбург</h3>
                        <div class="ticket-price__city">
                            <span>В г. Москва</span>
                            <span>от 75 250 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Уфа</span>
                            <span>от 8 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Ростов-на-Дону</span>
                            <span>от 3 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Санкт Петербург</span>
                            <span>от 11 840 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Краснодар</span>
                            <span>от 2 950 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/yekaterinburg.png');"></div>
                </div>
            </div>
            <div class="schedule__wrap__big-but">
                <a href="#">
                    <div class="big__button">
                        <span class="big-small__but_content">Смотреть все рейсы</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="mailing">
        <div class="conteiner flex">
            <div class="wrap__svg-letter">
                <img src="<?php echo get_template_directory_uri()?>/images/letter.svg">
            </div>
            <div class="wrap__tx-form column">
                <div class="mailing__text">
                    <h3>Подписка на рассылку</h3>
                    <p>Подпишитесь, чтобы быть в курсе всех важных новостей,<br>
                        полезных статей из нашего блога и выгодных предложений!</p>
                </div>
                <div class="mailing__form">
                    <input class="input mailing__form__input" placeholder="    Ваш E-male">
                    <div class="small__button">
                        <span class="big-small__but_content">Подписаться</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="schedule">
        <div class="conteiner column">
            <div class="schedule__wrap-h2">
                <h2>Расписание авиарейсов</h2>
            </div>
            <div class="schedule__wrap-cards">
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Москва</h3>
                        <div class="ticket-price__city">
                            <span>В г. Ташкент</span>
                            <span>от 75 250 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Санкт-Петербург</span>
                            <span>от 8 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Адлер</span>
                            <span>от 3 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Симферополь</span>
                            <span>от 11 840 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Махачкала</span>
                            <span>от 2 950 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/moskow.png');"></div>
                </div>
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Санкт-Петербург</h3>
                        <div class="ticket-price__city">
                            <span>В г. Екатеринбург</span>
                            <span>от 3 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Симферополь</span>
                            <span>от 4 500 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Казань</span>
                            <span>от 2 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Адлер</span>
                            <span>от 4 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Ростов-на-Дону</span>
                            <span>от 3 650 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/petersburg.png');"></div>
                </div>
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Симферополь</h3>
                        <div class="ticket-price__city">
                            <span>В г. Москва</span>
                            <span>от 3 500 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Нижний Новгород</span>
                            <span>от 4 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г.Санкт-Петербург</span>
                            <span>от 5 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Екатеринбург</span>
                            <span>от 3 840 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Тюмень</span>
                            <span>от 3 950 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/simferopol.png');"></div>
                </div>
                <div class="card schedule__card">
                    <div class="ticket-price column">
                        <h3>Из г. Екатеринбург</h3>
                        <div class="ticket-price__city">
                            <span>В г. Москва</span>
                            <span>от 75 250 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Уфа</span>
                            <span>от 8 000 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Ростов-на-Дону</span>
                            <span>от 3 750 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Санкт Петербург</span>
                            <span>от 11 840 RUB</span>
                        </div>
                        <div class="ticket-price__city">
                            <span>В г. Краснодар</span>
                            <span>от 2 950 RUB</span>
                        </div>
                    </div>
                    <div class="card-city" style="background-image: url('<?php echo get_template_directory_uri()?>/images/yekaterinburg.png');"></div>
                </div>
            </div>
            <div class="schedule__wrap__big-but">
                <a href="#">
                    <div class="big__button">
                        <span class="big-small__but_content">Поиск</span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="inform">
        <div class="conteiner column">
            <div class="inform__wrap-h2">
                <h2>Рукомендуем изучить эту информацию!</h2>
            </div>
            <div class="flex">
                <div class="column">
                    <h3>Последние отзывы</h3>
                    <div class="card inform__card">
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/images/like.svg">
                        </div>
                        <div class="inform__card__text">
                            <span>Lorem ipsum</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                Vitae neque adipiscing ornare vel mauris enim quam <br>
                                accumsan. Massa et lacus duis cum cursus nulla.
                            </p>
                        </div>
                    </div>
                    <div class="card inform__card">
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/images/like.svg">
                        </div>
                        <div class="inform__card__text">
                            <span>Lorem ipsum</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                Vitae neque adipiscing ornare vel mauris enim quam <br>
                                accumsan. Massa et lacus duis cum cursus nulla.
                            </p>
                        </div>
                    </div>
                    <div class="schedule__wrap__big-but">
                        <a href="#">
                            <div class="big__button inform__big__button">
                                <span class="big-small__but_content">Перейти в раздел отзывов</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="column">
                    <h3>Советы</h3>
                    <div class="card inform__card">
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/images/plane.svg">
                        </div>
                        <div class="inform__card__text">
                            <span>Lorem ipsum</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                Vitae neque adipiscing ornare vel mauris enim quam <br>
                                accumsan. Massa et lacus duis cum cursus nulla.
                            </p>
                        </div>
                    </div>
                    <div class="card inform__card">
                        <div>
                            <img src="<?php echo get_template_directory_uri()?>/images/plane.svg">
                        </div>
                        <div class="inform__card__text">
                            <span>Lorem ipsum</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                                Vitae neque adipiscing ornare vel mauris enim quam <br>
                                accumsan. Massa et lacus duis cum cursus nulla.
                            </p>
                        </div>
                    </div>
                    <div class="schedule__wrap__big-but">
                        <a href="#">
                            <div class="big__button inform__big__button">
                                <span class="big-small__but_content">Перейти в раздел помощи</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="conteiner">
            <div class="footer__wrap__columns">
                <div class="column">
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/images/logo-white.svg">
                    </div>
                    <div class="footer__icons">
                        <div>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 25C19.4052 25 25 19.4052 25 12.5C25 5.59479 19.4052 0 12.5 0C5.59479 0 0 5.59479 0 12.5C0 19.4052 5.59479 25 12.5 25ZM5.71979 12.2292L17.7719 7.58229C18.3312 7.38021 18.8198 7.71875 18.6385 8.56458L18.6396 8.56354L16.5875 18.2313C16.4354 18.9167 16.0281 19.0833 15.4583 18.7604L12.3333 16.4573L10.826 17.9094C10.6594 18.076 10.5187 18.2167 10.1958 18.2167L10.4177 15.0365L16.2094 9.80417C16.4615 9.58229 16.1531 9.45729 15.8208 9.67813L8.66354 14.1844L5.57812 13.2219C4.90833 13.0094 4.89375 12.5521 5.71979 12.2292Z" fill="white" fill-opacity="0.8"/>
                            </svg>                           
                        </div>
                        <div>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.8926 12.5C14.8926 13.8214 13.8214 14.8926 12.5 14.8926C11.1786 14.8926 10.1074 13.8214 10.1074 12.5C10.1074 11.1786 11.1786 10.1074 12.5 10.1074C13.8214 10.1074 14.8926 11.1786 14.8926 12.5Z" fill="white" fill-opacity="0.8"/>
                                <path d="M18.0954 8.26679C17.9804 7.95513 17.7969 7.67303 17.5585 7.44148C17.327 7.20306 17.0451 7.01958 16.7332 6.90456C16.4803 6.80634 16.1003 6.68941 15.4005 6.65756C14.6435 6.62304 14.4165 6.6156 12.5 6.6156C10.5833 6.6156 10.3564 6.62285 9.59953 6.65737C8.89972 6.68941 8.51958 6.80634 8.26686 6.90456C7.95501 7.01958 7.67291 7.20306 7.44155 7.44148C7.20313 7.67303 7.01965 7.95494 6.90444 8.26679C6.80621 8.51971 6.68929 8.89984 6.65744 9.59965C6.62292 10.3565 6.61548 10.5835 6.61548 12.5002C6.61548 14.4167 6.62292 14.6436 6.65744 15.4007C6.68929 16.1005 6.80621 16.4804 6.90444 16.7333C7.01965 17.0452 7.20294 17.3271 7.44136 17.5586C7.67291 17.7971 7.95482 17.9805 8.26667 18.0956C8.51958 18.194 8.89972 18.3109 9.59953 18.3427C10.3564 18.3773 10.5831 18.3845 12.4998 18.3845C14.4167 18.3845 14.6437 18.3773 15.4003 18.3427C16.1002 18.3109 16.4803 18.194 16.7332 18.0956C17.3592 17.8541 17.854 17.3593 18.0954 16.7333C18.1937 16.4804 18.3106 16.1005 18.3426 15.4007C18.3771 14.6436 18.3844 14.4167 18.3844 12.5002C18.3844 10.5835 18.3771 10.3565 18.3426 9.59965C18.3108 8.89984 18.1938 8.51971 18.0954 8.26679ZM12.5 16.1857C10.4643 16.1857 8.81408 14.5357 8.81408 12.5C8.81408 10.4642 10.4643 8.8142 12.5 8.8142C14.5356 8.8142 16.1858 10.4642 16.1858 12.5C16.1858 14.5357 14.5356 16.1857 12.5 16.1857ZM16.3315 9.52984C15.8558 9.52984 15.4702 9.14417 15.4702 8.66848C15.4702 8.19279 15.8558 7.80712 16.3315 7.80712C16.8072 7.80712 17.1929 8.19279 17.1929 8.66848C17.1927 9.14417 16.8072 9.52984 16.3315 9.52984Z" fill="white" fill-opacity="0.8"/>
                                <path d="M12.5 0C5.5975 0 0 5.5975 0 12.5C0 19.4025 5.5975 25 12.5 25C19.4025 25 25 19.4025 25 12.5C25 5.5975 19.4025 0 12.5 0ZM19.6344 15.4593C19.5997 16.2233 19.4782 16.745 19.3008 17.2016C18.928 18.1658 18.1658 18.928 17.2016 19.3008C16.7452 19.4782 16.2233 19.5995 15.4594 19.6344C14.694 19.6693 14.4495 19.6777 12.5002 19.6777C10.5507 19.6777 10.3064 19.6693 9.54075 19.6344C8.77686 19.5995 8.255 19.4782 7.79858 19.3008C7.31945 19.1206 6.88572 18.8381 6.52714 18.4729C6.16207 18.1145 5.87959 17.6805 5.69935 17.2016C5.52197 16.7452 5.40047 16.2233 5.36575 15.4594C5.33047 14.6938 5.32227 14.4493 5.32227 12.5C5.32227 10.5507 5.33047 10.3062 5.36556 9.54075C5.40028 8.77666 5.52158 8.255 5.69897 7.79839C5.87921 7.31945 6.16188 6.88553 6.52714 6.52714C6.88553 6.16188 7.31945 5.8794 7.79839 5.69916C8.255 5.52177 8.77666 5.40047 9.54075 5.36556C10.3062 5.33066 10.5507 5.32227 12.5 5.32227C14.4493 5.32227 14.6938 5.33066 15.4593 5.36575C16.2233 5.40047 16.745 5.52177 17.2016 5.69897C17.6805 5.87921 18.1145 6.16188 18.4731 6.52714C18.8381 6.88572 19.1208 7.31945 19.3008 7.79839C19.4784 8.255 19.5997 8.77666 19.6346 9.54075C19.6695 10.3062 19.6777 10.5507 19.6777 12.5C19.6777 14.4493 19.6695 14.6938 19.6344 15.4593Z" fill="white" fill-opacity="0.8"/>
                            </svg>                            
                        </div>
                        <div>
                            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 0C5.59667 0 0 5.59642 0 12.5C0 19.4036 5.59667 25 12.5 25C19.4033 25 25 19.4036 25 12.5C25 5.59642 19.4033 0 12.5 0ZM18.8407 13.8519C19.4233 14.421 20.0396 14.9565 20.5627 15.5844C20.7944 15.8621 21.0128 16.1494 21.179 16.4724C21.4164 16.933 21.202 17.4381 20.7898 17.4655L18.2289 17.465C17.5675 17.5197 17.0412 17.2529 16.5974 16.8008C16.2432 16.4404 15.9146 16.0555 15.5734 15.6829C15.434 15.5299 15.2872 15.3859 15.1123 15.2726C14.7632 15.0455 14.4598 15.1151 14.2598 15.4798C14.056 15.8509 14.0095 16.2621 13.99 16.6752C13.9621 17.279 13.7801 17.4368 13.1742 17.4652C11.8795 17.5258 10.6512 17.3294 9.50946 16.6767C8.5023 16.101 7.72276 15.2885 7.04348 14.3685C5.72072 12.5752 4.70767 10.6069 3.79744 8.5821C3.59258 8.12609 3.74246 7.8821 4.24552 7.87263C5.08133 7.85652 5.91714 7.85857 6.75294 7.87187C7.09309 7.87724 7.31816 8.07187 7.44885 8.39284C7.90051 9.50409 8.45422 10.5614 9.14808 11.5419C9.33299 11.8031 9.52174 12.0634 9.79054 12.2478C10.0872 12.4514 10.3133 12.3841 10.4532 12.0529C10.5427 11.8425 10.5813 11.6174 10.6008 11.3918C10.6673 10.6192 10.6752 9.8468 10.5601 9.07724C10.4885 8.59565 10.2176 8.28465 9.7376 8.19361C9.49309 8.14731 9.5289 8.05678 9.64783 7.91714C9.85422 7.6757 10.0476 7.52634 10.434 7.52634L13.3274 7.52583C13.7834 7.61535 13.8857 7.81995 13.9476 8.27928L13.9501 11.4946C13.9448 11.6724 14.0394 12.1992 14.3586 12.3156C14.6143 12.4 14.7831 12.1949 14.9361 12.033C15.6299 11.2967 16.1243 10.4276 16.567 9.52813C16.7624 9.13146 16.9309 8.72097 17.0946 8.30972C17.2164 8.00563 17.4056 7.85601 17.7488 7.86112L20.535 7.86445C20.6171 7.86445 20.7005 7.86522 20.7818 7.87928C21.2514 7.95959 21.3801 8.16164 21.2348 8.61969C21.0061 9.33939 20.5619 9.93887 20.1276 10.5399C19.6621 11.1834 19.1657 11.8043 18.7049 12.4506C18.2813 13.0414 18.3148 13.3389 18.8407 13.8519Z" fill="white" fill-opacity="0.8"/>
                            </svg>                            
                        </div>
                    </div>
                    <div class="footer__column">
                        <a>Контакты</a>
                        <a>+7 000 000 00 00</a>
                        <a>+7 000 000 00 00</a>
                        <a>interavia@service.ru</a>
                    </div>
                </div>
                <div class="column">
                    <div class="footer__column">
                        <a>Навигация</a>
                        <a>О компании</a>
                        <a>Помощь</a>
                        <a>Контакты</a>
                        <a>Сотрудничество</a>
                    </div>
                    <div class="footer__column">
                        <a>Навигация</span>
                        <a>Календарь низких цен</a>
                    </div>
                </div>
                <div class="column">
                    <div class="footer__column">
                        <a>Страны</a>
                        <a>Узбекистан</a>
                        <a>Россия</a>
                        <a>Казахстан</a>
                        <a>Грузия</a>
                        <a>Болгария</a>
                        <a>Южная Корея</a>
                        <a>Китай</a>
                        <a>Все страны</a>
                    </div>
                </div>
                <div class="column">
                    <div class="footer__column">
                        <a>Авиакомпании</a>
                        <a>Uzbekistan Airways</a>
                        <a>Аэрофлот</a>
                        <a>Turkish Airlines</a>
                        <a>Utair</a>
                        <a>Fly Dubai</a>
                        <a>Air Astana</a>
                        <a>Nordwind</a>
                        <a>Все авиакомпании</a>
                    </div>
                </div>
                <div class="column">
                    <div class="footer__column">
                        <a>Аэропорты</a>
                        <a>Ташкент</a>
                        <a>Самарканд</a>
                        <a>Фергана</a>
                        <a>Шереметьево</a>
                        <a>Домодедово</a>
                        <a>Шимкетт</a>
                        <a>Толмачёво</a>
                        <a>Все аэропорты</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri()?>/dist-cust/scripts.js"></script>
</body>
</html>