# ККЛК (Калининградский клуб любителей кошек)

Сайт для любитей кошек и неравнодушных к ним. Сайт должен дать возможность ознакомится с видами кошек, узнать тонкости ухода за своими домашними питомцами. Кроме того благодаря календарю событий вы не пропустите мероприятия связанные с миром кошек. Если же вы ищите возможность присторить своих котят или найти себе пушистого друга, то сделать это можно будет в разделе объявлений. 

Проект базе yii2 advanced template:
RBAC(настроен и расписаны допустимые действия),
Разделены сессии для backend/frontend,
Созданы модели:

1. Advs - модель объявлений пользователей
2. Cats - модель для информационных данных по видам кошек
3. Articles - модель для статей 
4. Events - модель календарных событий.


## TBD

1. Исключить load() при работе с моделями.
2. Подключить поведения для работы с моделями(behavior).   
3. Создать логгирование действий пользователей над моделями.
4. Настроить миграции(пока работаем через импорт kklk.sql).
5. Натянуть верстку шаблона. +
6. Натянуть админку. +

В разработке раздел объявления, о нас, статьи.
