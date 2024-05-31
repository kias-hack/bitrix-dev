# bitrix-dev
Этот репозиторий создан для хранений правил и скриптов для разворачивания копий bitrix, чтобы уменьшить риск возникновения ошибок в процессе разработки

# Правила разворачивания копий битрикс

## Создать/отредактировать файл robots.txt
Это предотвратит попадание копии сайта в поисковую выдачу. Если копия попадет в поисковую выдачу она может опередить оригинальный сайт.
В правилах robots.txt необходимо запретить индексацию всего сайта

## Установить заглушку для отправки писем
Необходимо на копии сайта перенаправлять письма на свою почту. сделать это можно через функцию custom_mail, ознакомиться можно по [ссылке](https://dev.1c-bitrix.ru/community/webdev/user/16002/blog/1073/). Соответственно на копии вы не должны отправлять письма напрямую через функцию mail, отправляться письма должны через стандартный функционал, т.к. только в таком случае будет корректно работать заглушка почты. Если вы все же сами отправляете письма напрямую через mail тогда не забывайте про перенаправление писем

## Сайт копии должен быть закрыт для неавторизованных пользователей
Это необходимо чтобы отсечь ботов и пользователей которые случайно зашли на копию сайта. Но так же не забывай что при стандартном создании инфоблока доступ к нему оагрничен неавторизованный и необходимо перед переносом открывать сайт и проверять работу сайта для неавторизованных пользователей
