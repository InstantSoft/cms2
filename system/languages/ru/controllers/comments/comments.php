<?php

define('LANG_COMMENTS_CONTROLLER', 'Комментарии');
define('LANG_COMMENTS_TEXT', 'Текст комментария');
define('LANG_COMMENTS_TARGET', 'Запись');
define('LANG_COMMENTS_IP', 'IP адрес');
define('LANG_COMMENTS_IS_DELETED', 'Удалён?');
define('LANG_COMMENTS_IS_PRIVATE', 'Приватный?');
define('LANG_COMMENTS_VIEW', 'Смотреть комментарий');
define('LANG_COMMENTS_DELETE_CONFIRM', 'Вы действительно хотите удалить комментарий? Вложенные комментарии также удалятся.');
define('LANG_COMMENTS_EDIT_TEXT', 'Редактировать текст комментария');
define('LANG_COMMENTS_LIST', 'Все комментарии');
define('LANG_COMMENTS_DISABLE_ICMS_COMMENTS', 'Отключить систему комментирования InstantCMS');
define('LANG_COMMENTS_SHOW_LIST', 'Показывать в общем списке комментарии');
define('LANG_COMMENTS_DISABLE_ICMS_COMMENTS_HINT', 'Может пригодиться, если вы хотите оставить для комментирования стороннюю систему, например Вконтакте.');
define('LANG_COMMENTS_OPT_DIM_NEGATIVE', 'Затемнять комментарии с отрицательным рейтингом');
define('LANG_COMMENTS_OPT_IS_GUESTS', 'Разрешить комментирование гостям');
define('LANG_COMMENTS_OPT_IS_GUESTS_MODERATE', 'Модерация комментариев от гостей');
define('LANG_COMMENTS_OPT_SHOW_AUTHOR_EMAIL', 'Показывать поле "E-mail для ответов"');
define('LANG_COMMENTS_OPT_IS_GUESTS_HINT', 'Незарегистрированные пользователи смогут добавлять комментарии');
define('LANG_COMMENTS_OPT_GUESTS_DELAY', 'Пауза между комментариями гостей с одного IP');
define('LANG_COMMENTS_OPT_GUESTS_RESTRICTED_IPS', 'Запретить гостевые комментарии с IP');
define('LANG_COMMENTS_OPT_GUESTS_RESTRICTED_IPS_HINT', 'Один IP адрес в каждой строке');
define('LANG_COMMENTS_OPT_GUESTS_RESTRICTED_EMAILS', 'Запретить гостевые комментарии с email');
define('LANG_COMMENTS_OPT_GUESTS_RESTRICTED_NAMES', 'Запретить гостевые комментарии с именами');
define('LANG_COMMENTS_DS_ALL', 'Все');
define('LANG_COMMENTS_DS_FRIENDS', 'Моих друзей');
define('LANG_COMMENTS_DS_MY', 'Только мои');
define('LANG_COMMENTS_NONE', 'Нет комментариев. Ваш будет первым!');
define('LANG_COMMENTS_LOGIN', '<a href="%s">Войдите</a> или <a href="%s">зарегистрируйтесь</a> чтобы добавлять комментарии');
define('LANG_COMMENTS_REFRESH', 'Обновить комментарии');
define('LANG_COMMENT_ADD', 'Написать комментарий');
define('LANG_COMMENT_ERROR', 'Ошибка создания комментария');
define('LANG_COMMENT_SUCCESS', 'Комментарий добавлен');
define('LANG_COMMENT_DELETED', 'Комментарий удален');
define('LANG_COMMENTS_DELETED', ' удалены');
define('LANG_COMMENT_DELETE_CONFIRM', 'Удалить комментарий пользователя %s?');
define('LANG_COMMENT_ERROR_NAME', 'Вы не указали свое имя');
define('LANG_COMMENT_ERROR_EMAIL', 'Указан некорректный адрес e-mail');
define('LANG_COMMENT_ERROR_TIME', "Вы можете оставить комментарий один раз в %s.\nПожалуйста, попробуйте позже.");
define('LANG_COMMENT_ERROR_IP', 'Комментарии с вашего IP адреса запрещены');
define('LANG_COMMENT_SHOW_PARENT', 'Ответ на');
define('LANG_COMMENT_SHOW_CHILD', 'Вернуться к ответу');
define('LANG_COMMENT_ANCHOR', 'Ссылка на комментарий');
define('LANG_COMMENT_RATE_UP', 'Хороший комментарий');
define('LANG_COMMENT_RATE_DOWN', 'Плохой комментарий');
define('LANG_COMMENTS_TRACK', 'Отслеживать новые');
define('LANG_COMMENTS_TRACK_STOP', 'Больше не отслеживать');
define('LANG_COMMENTS_TRACKED_NEW', 'На странице <b>&laquo;%s&raquo;</b> есть %s');
define('LANG_COMMENT1', 'комментарий');
define('LANG_COMMENT2', 'комментария');
define('LANG_COMMENT10', 'комментариев');
define('LANG_NEW_COMMENT1', 'новый комментарий');
define('LANG_NEW_COMMENT2', 'новых комментария');
define('LANG_NEW_COMMENT10', 'новых комментариев');
define('LANG_COMMENTS_NOTIFY_NEW', 'Уведомлять о новых комментариях');
define('LANG_COMMENTS_NOTIFY_REPLY', 'Уведомлять об ответах на комментарии');
define('LANG_COMMENTS_LOW_KARMA', 'Недостаточно репутации для комментирования (требуется: %s)');
define('LANG_COMMENTS_AUTHOR_NAME', 'Ваше имя');
define('LANG_COMMENTS_AUTHOR_EMAIL', 'E-mail для ответов');
define('LANG_RULE_COMMENTS_ADD', 'Добавление комментариев');
define('LANG_RULE_COMMENTS_ADD_APPROVED', 'Добавление комментариев без модерации');
define('LANG_RULE_COMMENTS_EDIT', 'Редактирование комментариев');
define('LANG_RULE_COMMENTS_DELETE', 'Удаление комментариев');
define('LANG_RULE_COMMENTS_VIEW_ALL', 'Просмотр приватных комментариев');
define('LANG_RULE_COMMENTS_RATE', 'Оценка комментариев');
define('LANG_RULE_COMMENTS_KARMA', 'Репутация для добавления комментариев');
define('LANG_RULE_COMMENTS_TIMES', 'Время на изменение/удаление комментария');
define('LANG_RULE_COMMENTS_TIMES_HINT', 'В минутах');
define('LANG_RULE_CONTENT_COMMENT',      'Комментирование');
define('LANG_COMMENTS_UPDATE_USER_RATING', 'Рейтинг комментариев повлияет на рейтинг автора');
define('LANG_COMMENTS_UPDATE_USER_RATING_HINT', 'Увеличить/уменьшить рейтинг автора за +/- в комментариях');
define('LANG_COMMENTS_HIDE_DELETED_USER_COMMENTS', 'Скрывать комментарии удалённых пользователей');
define('LANG_PERM_OPTION_FULL_DELETE', 'Все удалять полностью');
define('LANG_COMMENTS_MODERATE_NOTIFY', "Добавлен новый комментарий, необходима модерация.\n<blockquote>%s</blockquote>");
define('LANG_COMMENTS_MODERATE_TITLE', 'Комментарии на модерации (%s)');
define('LANG_COMMENTS_ALL_LIST', 'Весь список');
define('LANG_COMMENTS_APPROVE', 'Одобрить');
define('LANG_COMMENTS_MODERATE_HINT', 'Комментарий будет опубликован после проверки модератором.');
define('LANG_COMMENTS_LIMIT_NESTING', 'Максимальный уровень вложенности');
define('LANG_COMMENTS_RSS_TITLE', 'Комментарий для %s');
define('LANG_COMMENTS_NEW_NOTIFY', '<a href="%s">%s</a> добавляет новый комментарий на странице "%s"');
