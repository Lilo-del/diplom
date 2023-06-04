## Установка Moodle на локальный компьютер
Для установки Moodle на локальный компьютер нам потребуется скачать дистрибутив Moodle c официального сайта Moodle.org. 

Мной был выбран установочный пакет последней стабильной версии Moodle 4.1 для Mac OS X.

## Интеграция модуля Coderunner

Для корректной работы данного модуля нам потребуется установить в Moodle два дополнительных модуля:

−	Первый для типа вопроса (Наш coderunner). Данный модуль можно установить с помощью самой платформы Moodle. Для этого нам потребуется зайти в Site administration/Plugins/Install plugins и загрузить туда папку coderunner. Либо самостоятельно положить папку coderunner в проект Moodle в каталог moodle401/question/type.

−	Второй для специализированного адаптивного поведения (qbehaviour_adaptive_adapted_for_coderunner). Найти информацию по установке данного модуля можно здесь:https://github.com/trampgeek/moodle-qbehaviour_adaptive_adapted_for_coderunner

После установки этих двух модулей нам потребуется войти на сервер Moodle через веб-интерфейс в качестве администратора и, следуя подсказкам по обновлению базы данных, обновить ее по мере необходимости.

В качестве сервера для компиляции, запуска и тестирования программного кода был выбран сервер Jobe (Информация о сервере Jobe: https://github.com/trampgeek/jobe). Самый простой способ для использования своего Jobe сервера – это использовать образ JobeInABox. Для запуска образа JobeInABox был выбран Docker (Информация по установке Docker на компьютер mac: https://docs.docker.com/desktop/install/mac-install/) (Информация по установке образа JobeInABox с помощью Docker: https://hub.docker.com/r/trampgeek/jobeinabox/).

Для работы функции Генерации заданий нам потребуется добавить свой API-key для ChatGPT по адресу coderunner/chatGPT.php в переменную open_ai_key.

Оригинальный модуль coderunner:https://github.com/trampgeek/moodle-qtype_coderunner/blob/master/Readme.md#code-runner
