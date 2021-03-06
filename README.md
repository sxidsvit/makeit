
1. Создал локальный сайт на Wordpres (WP) 

2. Выбрал встроенную тему Twenty Seventeen 

3. Установил плагин [FakerPress](https://ru.wordpress.org/plugins/fakerpress/) и с его помощью создал 50+ записей (постов)

4. Занялся редактированием темы, чтобы записи выводились на странице по 10 штук и была возможность подгружать их с помощью AJAX

- Механизм реализации AJAX детально описан в документации WP и [на сайте] (https://wp-kama.ru/) - [Ajax в WordPress](https://wp-kama.ru/id_2018/ajax-v-wordpress.html) 

- Мне понадобилось написать скрипт асинхронной загрузки постов loadmore.js
Фактически этот скрипт вызывается, когда мы кликаем по кнопке "Загрузить ещё".
В основу работы скрипта положена информация о том, что в настройках WP  (Настройки -> Чтение) задано количество постов, которое должно отображаться на странице. Исходя из этого, WP формирует соответствующий запрос ($query), в котором содержится данные необходимые для вывода постов. Например, зная  общее количество постов и количества постов которое нужно вывести на страницу, вычисляется количество страниц, а также номер текущей страницы и всё это хранится в запросе $query. Именно эти параметры я использовал для формирования асинхронных запросов (скрипт loadmore.js). 

- Скрипт loadmore.js поместил в файл functions-custom.php, который специально создал для того, чтобы помещать в нём код, относящийся к выполнению этого и других пунктов тестового задания. Сам файл, в свою очередь, подключается с файлу functions.php. Этим достигается декомпозиция кода сайта, что облегчает его понимание и модификацию. Аналогичным образом поступил и с новыми (не относящимися к исходно WP-теме) CSS-стилями: вынес их в отдельный файл styles-custom.css 

- Скрипт loadmore.js формирует AJAX запрос и передаёт его в обработчик AJAX запросов. Здесь важно отметить, что на основе файла admin-ajax.php WP создаёт два хука wp_ajax_loadmore и wp_ajax_nopriv_loadmore к которым цепляется функция true_load_posts(), обрабатывающая AJAX запрос и возвращающая результат в loadmore.js

- Код обработчика - функция true_load_posts() находится файле functions-custom.php 
Функция получает query-параметры текущей страницы и на их основе формирует запрос для получения записей (постов) следующей страницы. Этот запрос в виде параметров массива $args передаётся в функцию query_posts(). Она возвращает посты, которые помещаются в соответствующий шаблон. Шаблон возвращается назад в функцию, которая инициировала запрос. В моём случае эта функция является обработчиком клика по кнопке "Загрузить ещё". 

5. Создал страницу Контактов /contacts (использовал шаблон template-contact-page.php)

6. Добавил на неё контактную информацию и выполнил микроразметку согласно schema.org 

7. Проверил валидность разметки на сервисе https://search.google.com/test/rich-results . Валидация прошла успешно.

8. На [сайте](https://www.graphberry.com/category/themes) выбрал тему ["Luxestate - Real Estate Landing Page"](https://www.graphberry.com/item/luxestate--real-estate-landing-page)

9. Свёрстанные по PSD макету хедер и футер прикрепил к странице Контактов (/contacts), которую создал ранее. 

10. В верстку внес все необходимые изменения, чтобы она работала с WP (посадил вёрстку на WP). В результате получились два файла header-custom.php и footer-custom.php. С помощью функции get_header('custom') и get_footer('custom') подключил файлы в шаблон template-contact-page.php

11. Сайт использует для разных страниц разные шапки и футеры. Реализуется это благодаря условному тегу is_page('contacts') внутри файла functions-custom.php. Также на разных страницах подключаются разные стили и скрипты.

12. Относительно скриншотов временных затрат.
Технология временного трекинга https://clockify.me/ для меня новая и к ней нужно привыкнуть. С первого раза у меня это не очень получилось.
Поэтому привожу примерную оценку временных затрат:
-  Установка WP, поиск подходящего способа генерации контента сайта для тестирования AJAX (ранее известные мне способы меня не удовлетворили ) - *90 минут*
-  Настройка работы AJAX (уже был подобный опыт) - *60минут*
-  Создание страницы контактов - *30 минут*
-  Микроразметка. Здесь были достаточно большие сложности. Тема для меня новая, поскольку этим обычно занимаются CEO-специалисты. Но разобрался, сделал разметку и даже прошёл валидацию. Всё это заняло - *120 минут*
-  Выбор макета для верстки - *30 минут*
-  Посадка верстки на WP - *150 минут*
-  Написание этого README.md - *90 минут* 

13. Работающий сайт можно посмотреть [здесь](http://test-task.lekua.in.ua/)

=========================================================================

## Мои замечания и комментарии к этому заданию

1. Микроразметка. По прежнему считаю, что это работа CEO-специалиста ибо требует специальных знаний и умений.
2. Вместо микроразметки я бы лично использовал разметку в формате JSON-LD как более современную.
3. Верстка  сайта из PSD - это архаика (вчерашний день). Подобными вещами последний раз я занимался лет пять назад. Потом только AVOCODE и сейчас Figma. Есть и другие инструменты, которыми пользуюсь при создании сайтов: Webflow, Pinegrow, Oxygen.
4. Поскольку основные мои усилия в настоящий момент сосредоточены на javascript, React, Vue.js, то у меня достаточно много времени уходило на восстановления навыков работы с WP. 
5. В конечном итоге, опыт приобретенный при создании тем на WP и работе с каталогами и интернет-магазинами на WP, позволил достаточно быстро восстановить приобретенные ранее умения и навыки.
