<?php
/*
	[UCenter Home] (C) 2007-2008 Comsenz Inc.
	$Id: lang_showmessage.php 13183 2009-08-17 04:35:11Z xupeng $

	Common FrontEnd Messages Language Sentences

	Translated by Valery Votintsev, aka "vot" [at] sources.ru
*/

if(!defined('IN_UCHOME')) {
	exit('Access Denied');
}

$_SGLOBAL['msglang'] = array(

	'box_title'	=> 'Сообщение',//

//common
	'do_success'			=> 'Операция успешно завершена',//
	'no_privilege'			=> 'У Вас недостаточно прав для выполнения данной операции',//
	'no_privilege_realname'		=> 'Вы должны предварительно заполнить &quot;Настоящее имя&quot; в своём профиле. <a href="cp.php?ac=profile">Заполнить Настоящее имя</a>',//
	'no_privilege_videophoto'	=> 'Вы должны предварительно пройти видео-аутентификацию. <a href="cp.php?ac=videophoto">Начать видео-аутентификацию</a>',//
	'no_open_videophoto'		=> 'Видео-аутентификация в настоящее время закрыта',//
	'is_blacklist'			=> 'Вы не можете выполнить данную операцию, поскольку находитесь в черном списке',//
	'no_privilege_newusertime'	=> 'Вы находитесь на испытательном сроке. Для выполнения данной операции Вам необходимо подождать ещё \\1 час.',//
	'no_privilege_avatar'		=> 'Прежде чем выполнить данную операцию, Вы должны загрузить свой аватар. <a href="cp.php?ac=avatar">Загрузить аватар</a>',//
	'no_privilege_friendnum'	=> 'Прежде чем выполнить данную операцию, Вы должны добавить \\1 друзей. <a href="cp.php?ac=friend&op=find">Добавить друзей</a>',//
	'no_privilege_email'		=> 'Прежде чем выполнить данную операцию, Вы должны пройти верификацию своего E-mail адреса. <a href="cp.php?ac=profile&op=contact">Активировать E-Mail</a>',//
	'uniqueemail_check'		=> 'Этот e-mail адрес уже используется. Попробуйте ввести другой адрес.',//
	'uniqueemail_recheck'		=> 'Ваш e-mail будет активирован после верификации. Пожалуйста перейдите в свой профиль для заполнения реального E-mail адреса',//
	'you_do_not_have_permission_to_visit'	=> 'У Вас нет прав для доступа к этой информации.',//

//mt.php
	'designated_election_it_does_not_exist'	=> 'Такой группы не существует. Вы можете создать свою собственную группу',//
	'mtag_tagname_error'			=> 'Имя группы не соответствует требованиям',//
	'mtag_join_error'			=> 'Вы не можете войти в данную группу. Попробуйте поискать другие группы, соответствующие Вашим интересам.',//
	'mtag_join_field_error'			=> 'В группе категории \\1 допускается не более \\2 участников, Вы достигли лимита!',//'群组分类 \\1 下面最多只允许加入 \\2 个群组，您已经到达上限',
	'mtag_creat_error'			=> 'Такой группы не существует.',//

//index.php
	'enter_the_space'			=> 'Перейти в профиль',//

//network.php
	'points_deducted_yes_or_no'		=> 'Данная операция уменьшит баланс Вашего счета (\\1 points) на \\2 points. Вы уверены, что хотите продолжить?<br><br><a href="\\3" class="submit">Продолжить</a> &nbsp; <a href="javascript:history.go(-1);" class="button">Назад</a>',//
	'points_search_error'			=> "У Вас недостаточно опыта для выполнения данного поиска.",//

//source/cp_album.php
	'photos_do_not_support_the_default_settings'	=> 'Альбом по умолчанию не поддерживает такие настройки.',//
	'album_name_errors'				=> 'У Вас недостаточно прав для переименования альбома',//

//source/space_app.php
	'correct_choice_for_application_show'	=> 'Выберите приложение для просмотра',//

//source/do_login.php
	'users_were_not_empty_please_re_login'	=> 'Имя пользователя не может быть пустым, попробуйте ещё разок',//
	'login_failure_please_re_login'		=> 'Ошибка авторизации. Попробуйте ещё разок.',//

//source/cp_blog.php
	'no_authority_expiration_date'		=> 'Права администратора временно ограничены, время восстановления: \\1',//
	'no_authority_expiration'		=> 'Права администратора временно ограничены, свяжитесь с администрацией сайта',//
	'no_authority_to_add_log'		=> 'У Вас недостаточно прав для публикации блога',//
	'no_authority_operation_of_the_log'	=> 'У Вас недостаточно прав для оперирования блогом',//
	'that_should_at_least_write_things'	=> 'Необходимо написать хотя бы пару слов!',//
	'failed_to_delete_operation'		=> 'Ошибка удаления, проверьте правильность заданных параметров',//

	'click_error'		=> 'Недопустимая операция рейтинга',//
	'click_item_error'	=> 'Объект рейтинга не существует',//
	'click_no_self'		=> 'Рейтинг самому себе запрещён',//
	'click_have'		=> 'Вы уже ставили рейтинг этому объекту',//
	'click_success'		=> 'Ваш рейтинг успешно зачтён',//

//source/cp_class.php
	'did_not_specify_the_type_of_operation'	=> 'Неверно указан тип операции',//
	'enter_the_correct_class_name'		=> 'Введите корректное название категории',//

	'note_wall_reply_success'	=> 'Ответ сохранён. Возврат на стену \\1',//

//source/cp_comment.php

	'operating_too_fast'		=> "Вы действуете слишком быстро. Подождите \\1 сек.",//
	'content_is_too_short'		=> 'Длина контента должна быть не короче 2х символов',//
	'comments_do_not_exist'		=> 'Указанный комментарий не существует',//
	'do_not_accept_comments'	=> 'Комментарии для этого блога запрещены',//
	'sharing_does_not_exist'	=> 'Указанного комментария не существует',//
	'non_normal_operation'		=> 'Недопустимая операция',//
	'the_vote_only_allows_friends_to_comment'	=> 'Голосовать в данном опросе могут только друзья автора опроса',//

//source/cp_common.php
	'security_exit'		=> 'Защищённый выход из \\1 уже выполнен',//

//source/cp_doing.php
	'should_write_that'	=> 'Требуется ввести хоть какой-нибудь текст',//
	'docomment_error'	=> 'Выберите конкретный твит для ответа',//

//source/cp_invite.php
	'mail_can_not_be_empty'	=> 'Список получателей не должен быть пустым',//
	'send_result_1'		=> 'Сообщение успешно отправлено. Ваши друзья должны получить его в течение нескольких минут',//
	'send_result_2'					=> '<strong>Ошибка при отправке сообщения:</strong><br/>\\1',//
	'send_result_3'					=> 'Не найдено исходного инвайта, повторная отправка невозможна.',//
	'there_is_no_record_of_invitation_specified'	=> 'Указанного инвайта не существует',//

//source/cp_import.php
	'blog_import_no_result'		=> 'Не удалось найти данные для импорта. Проверьте правильность введенного URL и аккаунта. Ответ сервера:<br /><textarea name="tmp[]" style="width:98%;" rows="4">\\1</textarea>',//
	'blog_import_no_data'		=> 'Ошибка импорта данных. Обратите внимание ответ сервера:<br />\\1',//
	'support_function_has_not_yet_opened fsockopen'	=> 'Сервер не поддерживает функцию fsockopen, миссия невыполнима',//
	'integral_inadequate'		=> 'У Вас всего \\1 points. Для выполнения данной операции необходимо иметь как минимум: \\2 points',//
	'experience_inadequate'		=> 'Вашего опыта (\\1) недостаточно для выполнения данной операции. Минимально требуемый опыт: \\2',//
	'url_is_not_correct'		=> 'Введен некорректный URL сайта',//
	'choose_at_least_one_log'	=> 'Вы должны указать хотя бы один блог для импорта',//

//source/cp_friend.php
	'friends_added'				=> 'Вы и \\1 стали друзьями!',//
	'you_have_friends'			=> 'У вас друзей',//
	'enough_of_the_number_of_friends'	=> 'Вы достигли лимита по количеству друзей. Попробуйте удалить кого-нибудь из списка',//
	'enough_of_the_number_of_friends_with_magic'	=> 'Вы достигли лимита по количеству друзей. <a id="a_magic_friendnum2" href="magic.php?mid=friendnum" onclick="ajaxmenu(event, this.id, 1)">Увеличить лимит!</a>',//
	'request_has_been_sent'			=> 'Запрос на дружбу отправлен. Необходимо дождаться подтверждения от получателя.',//
	'waiting_for_the_other_test'		=> 'Ожидает верификации других параметров',//
	'please_correct_choice_groups_friend'	=> 'Выберите корректную категорию друзей',//
	'specified_user_is_not_your_friend'	=> 'Указанный пользователь не является Вашим другом',//

//source/cp_mtag.php
	'mtag_managemember_no_privilege'	=> 'У Вас недостаточно прав для управления участниками данной группы',//
	'mtag_max_inputnum'			=> 'Не удалось присоединиться к группе "\\1". Достигнут лимит на количество участников (\\2).',//
	'you_are_already_a_member'			=> 'Да Вы и так уже в этой группе!',//
	'join_success'					=> 'Вы успешно присоединились к данной группе',//
	'the_discussion_topic_does_not_exist'		=> 'Топик, в котором Вы хотите участвовать, не существует',//
	'content_is_not_less_than_four_characters'	=> 'Длина контента должна быть не менее 2х символов',//
	'you_are_not_a_member_of'			=> 'Вы не являетесь участником данной группы',//
	'unable_to_manage_self'				=> 'Вы не можете управлять своим собственным статусом',//
	'mtag_joinperm_1'				=> 'Запрос на подключение к группе отправлен. Теперь необходимо дождаться подтверждения от владельца группы',//
	'mtag_joinperm_2'				=> 'Для присоединения к данной группе необходимо получить специальное приглашение',//
	'invite_mtag_ok'				=> 'Теперь Вы полноправный участник группы! <a href="space.php?do=mtag&tagid=\\1">Перейти в группу</a>',//
	'invite_mtag_cancel'				=> 'Приглашение в группу успешно проигнорировано',//
	'failure_to_withdraw_from_group'		=> 'Ошибка выхода из группы. Прежде, чем выходить, назначьте нового модератора группы!',//
	'fill_out_the_grounds_for_the_application'	=> 'Укажите причину выхода из группы',//

//source/cp_pm.php
	'this_message_could_not_be_deleted'	=> 'Указанное сообщение не может быть удалено',//
	'unable_to_send_air_news'		=> 'Отправка пустого сообщения запрещена',//
	'message_can_not_send'			=> 'Ошибка при отправке сообщения',//
	'message_can_not_send1'			=> 'Вы превысили лимит максимального количества сообщений за сутки',//
	'message_can_not_send2'			=> 'Вы слишком быстро отправляете сообщения. Сделайте паузу!',//
	'message_can_not_send3'			=> 'Запрещена массовая отправка сообщения пользователям, не входящим в список друзей',//
	'message_can_not_send4'			=> 'У Вас нет прав для отправки приватных сообщений',//
	'not_to_their_own_greeted'		=> 'Отправка приветствия самому себе запрещена',//
	'has_been_hailed_overlooked'		=> 'Успешно проигнорировано',//

//source/cp_profile.php
	'realname_too_short'			=> 'Реальное имя не должно быть короче 4х символов',//
	'update_on_successful_individuals'	=> 'Персональные данные успешно обновлены',//

//source/cp_poll.php
	'no_authority_to_add_poll'		=> 'У Вас недостаточно прав для создания опроса',//
	'no_authority_operation_of_the_poll'	=> 'У Вас недостаточно прав для управления опросом',//
	'add_at_least_two_further_options'	=> 'Необходимо создать хотя бы ДВА пункта в опросе',//
	'the_total_reward_should_not_overrun'	=> 'Призовой фонд опроса не должен превышать \\1 points',//
	'wrong_total_reward'			=> 'Бонус за голос не должен превышать сумму призового фонда',//
	'voting_does_not_exist'			=> 'Указанного опроса не существует',//
	'already_voted'				=> 'Вы уже проголосовали',//
	'option_exceeds_the_maximum_number_of'	=> 'Достигнут лимит на количество пунков (20)',//
	'the_total_reward_should_not_be_empty'	=> 'Призовой фонд не должен быть пустым!',//
	'average_reward_should_not_be_empty'	=> 'average reward amount can not be empty',//
	'average_reward_can_not_exceed'		=> 'average reward can not exceed \\1 points',//
	'added_option_should_not_be_empty'	=> 'Добавляемый пункт не должен быть пустым',//
	'time_expired_error'			=> 'Время завершения не может быть раньше, чем текущее время',//
	'please_select_items_to_vote'		=> 'Необходимо выбрать хотя бы один пункт опроса!',//
	'fill_in_at_least_an_additional_value'	=> 'Укажите хотя бы один дополнительный тип',//

//source/cp_share.php
	'blog_does_not_exist'		=> 'Указанный блог не существует',//
	'logs_can_not_share'		=> 'Указанный блог не может быть добавлен в закладки (запрет автора)',//
	'album_does_not_exist'		=> 'Указанный альбом не существует',//
	'album_can_not_share'		=> 'Указанный альбом не может быть добавлен в закладки (запрет автора)',//
	'image_does_not_exist'		=> 'Указанное сообщение не существует',//
	'image_can_not_share'		=> 'Указанное изображение не может быть добавлено в закладки (запрет автора)',//
	'topics_does_not_exist'		=> 'Указанный топик не существует',//
	'mtag_fieldid_does_not_exist'	=> 'Указанная категория групп не существует',//
	'tag_does_not_exist'		=> 'Указанный тэг не существует',//
	'url_incorrect_format'		=> 'Некорректный URL закладки',//
	'description_share_input'	=> 'Введите краткое описание закладки',//
	'poll_does_not_exist'		=> 'Указанный опрос не существует',//
	'share_not_self'		=> 'Запрещено добавление в закладки своих собственных публикаций и изображений',//
	'share_space_not_self'		=> 'Запрещено добавление в закладки своего собственного профиля',//

//source/cp_space.php
	'domain_length_error'			=> 'Длина имени субдомена не может быть короче \\1 символов',//
	'credits_exchange_invalid'		=> 'Неверные параметры обмена, вернитесь и проверьте параметры.',//
	'credits_transaction_amount_invalid'	=> 'Недопустимая сумма обмена, вернитесь и проверьте параметры.',//
	'credits_password_invalid'	=> 'Неверный пароль. Продолжение операции невозможно.',//
	'credits_balance_insufficient'	=> 'На Вашем счету недостаточно points для совершения обмена.',//
	'extcredits_dataerror'		=> 'Ошибка данных при обмене, обратитесь к администратору.',//
	'domain_be_retained'		=> 'Данное имя домена зарезервировано системой. Попробуйте выбрать другое!',//
	'not_enabled_this_feature'	=> 'Выполнение данной опреации запрещено администратором',//
	'space_size_inappropriate'	=> 'Укажите корректное значение пространства загрузки',//
	'space_does_not_exist'		=> 'Указанного пользователя не существует.',//
	'integral_convertible_unopened'	=> 'Вывод средств из системы в данное время запрещён.',//
	'two_domain_have_been_occupied'	=> 'Такое имя домена уже занято. Попробуйте выбрать другое!',//
	'only_two_names_from_english_composition_and_figures'	=> 'Имя домена должно состоять только из латинских символов и цифр и начинаться с буквы.',//
	'two_domain_length_not_more_than_30_characters'		=> 'Длина имени домена не должна превышать 30 символов.',//
	'old_password_invalid'		=> 'Неверно введен старый пароль. Попробуйте ещё разок.',//
	'no_change'			=> 'Вы не сделали никаких изменений.',//
	'protection_of_users'		=> 'У Вас нет прав для редактирования защищённых пользователей.',//

//source/cp_sendmail.php
	'email_input'		=> 'Вы не указали свой E-mail. Пожалуйста, перейдите в раздел <a href="cp.php?ac=profile&op=contact">Контакты</a>, и заполните свой емэйл.',//
	'email_check_sucess'	=> 'Ваш Email (\\1) успешно проверен и активирован.',//
	'email_check_error'	=> 'Введенная Вами ссылка для активации E-mail некорректна. Пройдите в Ваш профиль и пройдите верификацию заново.',//
	'email_check_send'	=> 'На указанный Вами адрес отправлено письмо для верификации. После получения письма следуйте приведённой в нём инструкции по активации.',//
	'email_error'		=> 'Недопустимый формат email, проверьте правильность заполнения',//

//source/cp_theme.php
	'theme_does_not_exist'			=> 'Указанный стиль не существует',//
	'css_contains_elements_of_insecurity'	=> 'Введенный Вами контент содержит небезопасные элементы, запрещенные к вводу.',//

//source/cp_upload.php
	'upload_images_completed'	=> 'Загрузка изображения завершена',//

//source/cp_thread.php
	'to_login'			=> 'Для выполнения данной операции необходимо сначала авторизоваться.',//
	'title_not_too_little'		=> 'Заголовок должен быть не короче 2х символов.',//
	'posting_does_not_exist'	=> 'Указанный топик не существует',//

	'settings_of_your_mtag'		=> 'Для публикации топиков в группе необходимо быть участником группы.<br>Группы позволяют обсуждать интересующие вас проблемы в узком кругу.<br><br><a href="cp.php?ac=mtag" class="submit">Настроить мои группы</a>',//'有了群组才能发话题，你需要先设置一下你的群组。<br>通过群组，您可以结识与你有相同选择的朋友，更可以一起交流话题。<br><br><a href="cp.php?ac=mtag" class="submit">设置我的群组</a>',
	'first_select_a_mtag'		=> 'Выберите интересующую Вас группу.<br><br><a href="cp.php?ac=mtag" class="submit">Мои группы</a>',//
	'no_mtag_allow_thread'		=> 'Невозможно присоединиться к данной группе. Достигнут лимит участников группы.<br><br><a href="cp.php?ac=mtag" class="submit">I set my group</a>',//'当前你参与的群组加入人数不足，还不能进行发话题操作。<br><br><a href="cp.php?ac=mtag" class="submit">设置我的群组</a>',
	'mtag_close'			=> 'Выбранная группа заблокирована или не допускает данное действие.',//

//source/space_album.php
	'to_view_the_photo_does_not_exist'	=> 'Указанного альбома не существует',//

//source/space_blog.php
	'view_to_info_did_not_exist'	=> 'Указанного блога не существует или он удален',//

//source/space_pic.php
	'view_images_do_not_exist'	=> 'Указанного изображения не существует',//

//source/mt_thread.php
	'topic_does_not_exist'		=> 'Указанного топика не существует',//

//source/do_inputpwd.php
	'news_does_not_exist'		=> 'Запрошенной Вами информации не существует',//'指定的信息不存在',
	'proved_to_be_successful'	=> 'Авторизация прошла успешно, переходим к просмотру.',//
	'password_is_not_passed'	=> 'Введен неверный пароль, попробуйте ещё раз',//



//source/do_login.php
	'login_success'			=> 'Авторизация прошла успешно, переходим к странице \\1',//'登录成功了，现在引导您进入登录前页面 \\1',
	'not_open_registration'		=> 'Извините, регистрация временно запрещена',//'非常抱歉，本站目前暂时不开放注册',
	'not_open_registration_invite'	=> 'Прямоя регистрация на сайте запрещена. Для регистрации Вам необходимо иметь код приглашения.',//'非常抱歉，本站目前暂时不允许用户直接注册，需要有好友邀请链接才能注册',

//source/do_lostpasswd.php
	'getpasswd_account_notmatch'	=> 'В Вашем профиле не заполнен Email адрес. В связи с этим Вы не можете воспользоваться функцией восстановления пароля.<br>Если это ошибка, обратитесь к администратору сайта.',//
	'getpasswd_email_notmatch'	=> 'Данный Email не принадлежит указанному пользователю. Проверьте введенные данные.',//
	'getpasswd_send_succeed'	=> 'На указанный Email отправлено письмо с инструкцией по восстановлению пароля.<br />У Вас есть 3 дня для смены пароля, иначе ссылка устареет.',//
	'user_does_not_exist'		=> 'Такого пользователя не существует',//
	'getpasswd_illegal'		=> 'Указанный ID не существует или устарел. Восстановление пароля невозможно.',//
	'profile_passwd_illegal'	=> 'Пароль не заполнен или содержит запрещённые символы, попробуёте ещё раз.',//
	'getpasswd_succeed'		=> 'Ваш пароль переустановлен. Теперь следует вводить новый пароль.',//
	'getpasswd_account_invalid'	=> 'Указанный пользователь является защищенным, либо ему запрещено изменение пароля.',//
	'reset_passwd_account_invalid'	=> 'Указанный пользователь является защищенным, либо ему запрещено восстановление пароля.',//

//source/do_register.php
	'registered'			=> 'Регистрация завершена. Теперь Вы можете перейти на свою домашнюю страницу',//
	'system_error'			=> 'Системная ошибка. Не найдены файлы UCenter Client.',//
	'password_inconsistency'	=> 'Два пароля не идентичны',//
	'profile_passwd_illegal'	=> 'Пароль пустой или содержит недопустимые символы',//
	'user_name_is_not_legitimate'	=> 'Недопустимое имя пользователя',//
	'include_not_registered_words'	=> 'Такое имя запрещено к регистрации',//
	'user_name_already_exists'	=> 'Пользователь с таким именем уже существует',//
	'email_format_is_wrong'		=> 'Недопустимый формат Email',//
	'email_not_registered'		=> 'Данный Email запрещён к регистрации',//
	'email_has_been_registered'	=> 'Данный Email уже зарегистрирован',//
	'regip_has_been_registered'	=> 'С одного IP адреса в течение \\1 часов можно зарегистрировать только ОДИН аккаунт.',//
	'register_error'		=> 'Регистрация отменена',//

//tag.php
	'tag_does_not_exist'		=> 'Указанный тэг не существует',//

//cp_poke.php
	'poke_success'			=> 'Приветствие отправлено, \\1 будет уведомлён при следующем визите',//
	'mtag_minnum_erro'		=> 'Пользователям с уровнем ниже \\1 запрещено данное действие',//

//source/function_common.php
	'information_contains_the_shielding_text'	=> 'Публикуемый Вами контент содержит запрещенные к публикации слова.',//'对不起，发布的信息中包含站点屏蔽的文字',
	'site_temporarily_closed'		=> 'Извините, сайт временно закрыт',//
	'ip_is_not_allowed_to_visit'		=> 'Доступ запрещен. Ваш IP адрес не найден в списке разрешенных.',//
	'no_data_pages'				=> 'page has no data specified',//
	'length_is_not_within_the_scope_of'	=> 'sub-pages is not to the extent permitted',//

//source/function_block.php
	'page_number_is_beyond'		=> 'Недопустимый номер страницы',//

//source/function_cp.php
	'incorrect_code'		=> 'Неверный код верификации. Попробуёте ввести ещё раз.',//

//source/function_space.php
	'the_space_has_been_closed'	=> 'Указанный Вами пользователь удалён. Если это ошибка, обратитесь к администратору сайта.',//

//source/network_album.php
	'search_short_interval'			=> 'Вы пытаетесь искать слишком быстро! Подождите \\1 сек. перед следующей попыткой. (<a href="\\2">Повторить поиск</a>)',//
	'set_the_correct_search_content'	=> 'Недопустимые ключевые слова для поиска',//

//source/space_share.php
	'share_does_not_exist'		=> 'Указанной закладки не существует',//

//source/space_tag.php
	'tag_locked'			=> 'Данный тэг заблокирован',//

	'invite_error'			=> 'Не удаётся получить код инвайта. Проверьте, достаточно ли у Вас средств на счету!',//
	'invite_code_error'		=> 'Извините, введенная ссылка приглашения некорректна.',//
	'invite_code_fuid'		=> 'Извините, введенная ссылка приглашения уже использована кем-то другим.',//

//source/do_invite.php
	'should_not_invite_your_own'	=> 'Извините, но приглашать самого себя у нас не принято.',//
	'close_invite'			=> 'Извините, функция приглашений временно запрещена.',//

	'field_required'		=> 'Поле &quot;\\1&quot; является обязательным для заполнения',//
	'friend_self_error'		=> 'Самого себя в друзья? Оригинально...',//
	'change_friend_groupname_error'	=> 'Указанная категория друзей не работает.',//'指定的好友用户组不能被操作',

	'mtag_not_allow_to_do'		=> 'Недостаточно прав для просмотра. Вы не являетесь членом группы, которой принадлежит данный топик.',//

//cp_task
	'task_unavailable'		=> 'Задача, котрую Вы хотите выполнить, не существует или запрещена к выполнению.',//
	'task_maxnum'			=> 'Выполнение задачи невозможно. Достигнут лимит исполнителей, задача закрыта.',//
	'update_your_mood'		=> 'Вы можете обновить своё настроение прямо сейчас',//

	'showcredit_error'		=> 'Вводимая сумма должна быть больше нуля и не должна превышать сумму на Вашем счету.',//
	'showcredit_fuid_error'		=> 'Указанный Вами пользователь не является Вашим другом!',//
	'showcredit_do_success'		=> 'Вы успешно повысили себя в Топ-листе. Вы можете посмотреть свою текущую позицию.',//
	'showcredit_friend_do_success'	=> 'Вы успешно повысили друга в Топ-листе. Вашему другу отправлено уведомление о Вашем благородном поступке.',//

	'submit_invalid'		=> 'Строка аутентификации некорректна или не соответствует форме. Попробуйте использовать стандартный web браузер.',//'您的请求来路不正确或表单验证串不符，无法提交。请尝试使用标准的web浏览器进行操作。',
	'no_privilege_my_status'	=> 'Извините, сервис многопользовательских приложений выключен.',//'对不起，当前站点已经关闭了用户多应用服务。',
	'no_privilege_myapp'		=> 'Данное приложение не существует или запрещено. Попробуйте <a href="cp.php?ac=userapp&my_suffix=%2Fapp%2Flist">выбрать другое приложение</a>',//'对不起，该应用不存在或已关闭，您可以<a href="cp.php?ac=userapp&my_suffix=%2Fapp%2Flist">选择其他应用</a>',

	'report_error'			=> 'Указан неверный объект для жалобы.',//
	'report_success'		=> 'Спасибо за Ваше сообщение. Мы примем все необходимые меры.',//
	'manage_no_perm'		=> 'Вы можете управлять только своими собственными публикациями. <a href="javascript:;" onclick="hideMenu();">[Закрыть]</a>',//
	'repeat_report'			=> 'Вы пытаетесь отправить жалобу повторно.',//
	'the_normal_information'	=> 'Спасибо, что сообщаете об этом! Но по указанному Вами объекту меры уже приняты.',//
	'friend_ignore_next'		=> 'Запрос от \\1 успешно отклонён. Переходим к следующему запросу. (<a href="cp.php?ac=friend&op=request">Стоп</a>)',//
	'friend_addconfirm_next'	=> 'Вы и \\1 стали друзьями. Переходим к следующему запросу. (<a href="cp.php?ac=friend&op=request">Стоп</a>)',//

//source/cp_event.php
	'event_title_empty'		=> 'Название события не должно быть пустым',//
	'event_classid_empty'		=> 'Требуется указать тип события',//
	'event_city_empty'		=> 'Требуется указать место проведения события',//
	'event_detail_empty'		=> 'Требуется указать детали события',//
	'event_bad_time_range'		=> 'Длительность события не должна превышать 60 дней',//
	'event_bad_endtime'		=> 'Время завершения не должно быть раньше времени начала',//
	'event_bad_deadline'		=> 'Завершение регистрации участников не должно быть позже даты завершения события',//'活动报名截止时间不能晚于活动结束时间',
	'event_bad_starttime'		=> 'Дата завершения не должна быть раньше, чем текущее время.',//'活动开始时间不能早于现在',
	'event_already_full'		=> 'Количество участников события уже достигло лимита.',//'此活动参与人数已满',
	'event_will_full'		=> 'Количество участников события превысит допустимый лимит.',//'人数将超过活动参与人数限制',
	'no_privilege_add_event'	=> 'У Вас недостаточно прав для создания нового события',//
	'no_privilege_edit_event'	=> 'Ваших прав недостаточно для редактирования события',//
	'no_privilege_manage_event_members'	=> 'У Вас недостаточно прав для управления участниками события',//
	'no_privilege_manage_event_comment'	=> 'У Вас недостаточно прав для управления комментариями события',//
	'no_privilege_manage_event_pic'		=> 'У Вас недостаточно прав для управления альбомом события',//
	'no_privilege_do_eventinvite'	=> 'У Вас недостаточно прав для отправки приглашений на данное событие',//
	'event_does_not_exist'		=> 'Данное событие не существует или удалено',//
	'event_create_failed'		=> 'Ошибка создания события. Проверьте правильность введенных параметров.',//
	'event_need_verify'		=> 'Событие успешно создано, но Вам придется подождать одобрения администратора.',//
	'upload_photo_failed'		=> 'Ошибка при загрузке изображения',//
	'choose_right_eventmember'	=> 'Укажите участников события для выполнения операции',//
	'choose_event_pic'		=> 'Выберите изображение для события',//
	'only_creator_can_set_admin'	=> 'Только создатель события может назначать организаторов',//
	'event_not_set_verify'		=> 'Данное событие не требует проверки администратором',//
	'event_join_limit'		=> 'Стать участником данного события можно только при наличии у Вас кода приглашения',//
	'cannot_quit_event'		=> 'Вы не можете отказаться от участия, покольку Вы либо не являетесь участником, либо являетесь его создателем.',//
	'event_not_public'		=> 'Данное событие не является публичным. Для просмотра требуется код приглашения.',//
	'no_privilege_do_event_invite'	=> 'В данное событие запрещено приглашать друзей.',//
	'event_under_verify'		=> 'Данное событие ещё находится в стадии премодерации.',//
	'cityevent_under_condition'	=> 'Чтобы посмотреть события в Вашем городе, необходимо указать этот самый город в своём профиле.',//
	'event_is_over'			=> 'Данное событие уже завершено.',//
	'event_meet_deadline'		=> 'Приём участников завершен.',//
	'bad_userevent_status'		=> 'Выберите корректный статус участников',//
	'event_has_followed'		=> 'Вы ещё раздумываете об участии',//
	'event_has_joint'		=> 'Вы являетесь участником!',//
	'event_is_closed'		=> 'Данное событие закрыто!',//
	'event_only_allows_members_to_comment'	=> 'Только участники события могут оставлять сообщения.',//
	'event_only_allows_admins_to_upload'	=> 'Загружать изображения могут только организаторы события.',//
	'event_only_allows_members_to_upload'	=> 'Только участники события могут загружать изображения.',//
	'eventinvite_does_not_exist'		=> 'У Вас нет кода для приглашений на этого событие',//
	'event_can_not_be_opened'		=> 'В настоящее время это событие НЕ МОЖЕТ быть открыто.',//
	'event_can_not_be_closed'		=> 'В настоящее время это событие НЕ МОЖЕТ быть закрыто.',//
	'event_only_allows_member_thread'	=> 'Только участники события могут отвечать в топике.',//
	'event_mtag_not_match'			=> 'Указанная группа не связана с данным событием',//
	'event_memberstatus_limit'		=> 'Данное событие не является публичным. Доступ к нему имеют только участники события.',//
	'choose_event_thread'			=> 'Выберите хотя бы 1 топик для выполнения операции',//

//source/cp_magic.php
	'magicuse_success'			=> 'Артефакт успешно задействован!',//
	'unknown_magic'				=> 'Указанный артефакт не существует или заблокирован.',//
	'choose_a_magic'			=> 'Пожалуйста, выберите артефакт',//
	'magic_is_closed'			=> 'Данный артефакт запрещён к использованию',//
	'magic_groupid_not_allowed'		=> 'Для Вашей категории пользователей использование магии запрещено.',//
	'input_right_buynum'			=> 'Введите корректное количество для покупки',//
	'credit_is_not_enough'			=> 'У Вас недостаточно денег для покупки данного артефакта',//
	'not_enough_storage'			=> 'В наличии недостаточное количество. Следующее пополнение склада ожидается  \\1',//
	'magicbuy_success'			=> 'Артефакт успешно куплен. Потрачено: \\1 points.',//
	'magicbuy_success_with_experence'	=> 'Артефакт успешно куплен. Потрачено: \\1 points. Приобретён опыт:  \\2.',//
	'bad_friend_username_given'		=> 'Введено недопустимое имя пользователя',//
	'has_no_more_present_magic'		=> 'У Вас нет прав для дарения магии, <a id="a_buy_license" href="cp.php?ac=magic&op=buy&mid=license" onclick="ajaxmenu(event, this.id, 1)">Купить лицензию</a>',//
	'has_no_more_magic'			=> 'У Вас нет артефакта \\1, <a id="\\2" href="\\3" onclick="ajaxmenu(event, this.id, 1)">Купить</a>',//
	'magic_can_not_be_presented'		=> 'Данный артефакт нельзя подарить',//
	'magicpresent_success'			=> 'Артефакт \\1 успешно подарен.',//
	'magic_store_is_closed'			=> 'Мазагин Магии временно закрыт',//
	'magic_not_used_under_right_stage'	=> 'На данной стадии данный артефакт не может быть использован.',//
	'magic_groupid_limit'			=> 'Вашей категории пользователей запрещено покупать магию.',//
	'magic_usecount_limit'			=> 'Вы не можете использовать артефакт прямо сейчас, поскольку ещё не истек очередной период цикла.<br>Пожалуйста \\1 после использования.',//
	'magicuse_note_have_no_friend'	=> 'У Вас нет друзей',//
	'magicuse_author_limit'		=> 'Данный артефакт может быть использован только для ВАШЕГО контента.',//'此道具只能对自己发布的信息使用',
	'magicuse_object_count_limit'	=> 'Достигнут лимит использования артефакта для одного и того же объекта (\\1)',//
	'magicuse_object_once_limit'	=> 'Артефакт может быть использован только один раз!',//
	'magicuse_bad_credit_given'	=> 'Введено недопустимое количество points',//
	'magicuse_not_enough_credit'	=> 'Введенная сумма превышает сумму на Вашем счёте',//
	'magicuse_bad_chunk_given'	=> 'Введено недопустимое количество points',//
	'magic_gift_already_given_out'	=> 'Подарок уже был сделан!',//
	'magic_got_gift'		=> 'Вы получили подарок, плюс \\1 points',//
	'magic_had_got_gift'		=> 'Вы получили подарок.',//
	'magic_has_no_gift'		=> 'У данного пользователя нет подарков',//
	'magicuse_object_not_exist'	=> 'Выбран несуществующий объект для данного артефакта',//
	'magicuse_bad_object'		=> 'Неверный выбор объекта для данного артефакта',//
	'magicuse_condition_limit'	=> 'Лимит ипользования артефакта исчерпан',//
	'magicuse_bad_dateline'		=> 'Недопустимое время',//
	'magicuse_not_click_yet'	=> 'Вы еще не рейтинговали',//
	'not_enough_coupon'		=> 'Недостаточное количество купонов',//
	'magicuse_has_no_valid_friend'	=> 'Ошибка использования артефакта, нет доступных друзей.',//
	'magic_not_hidden_yet'		=> 'Вы ещё НЕ в невидимом режиме',//
	'magic_not_for_sale'		=> 'Данный артефакт не предназначен для покупки',//
	'not_set_gift'			=> 'Вы ещё не настроили подарок',//
	'not_superstar_yet'		=> 'Вы ещё не стали супер-звездой',//
	'no_flicker_yet'		=> 'Вы ещё не использовали Фликер для данного объекта',//
	'no_color_yet'			=> 'Вы ещё не использовали Подсветку для данного объекта',//
	'no_frame_yet'			=> 'Вы ещё не использовали Рамку для данного объекта',//
	'no_bgimage_yet'		=> 'Вы ещё не использовали Фон для данного объекта',//
	'bad_buynum'			=> 'Недопустимое количество для покупки',//

	'feed_no_found'		=> 'Указанная запись активности не существует',//
	'not_open_updatestat'	=> 'Извините, статистика в данное время запрещена',//
	
	'topic_subject_error'	=> 'Длина заголовка должна быть не менее 4 символов',//
	'topic_no_found'	=> 'Указанный топик не найден',//
	'topic_list_none'	=> 'Топиков не найдено',//

	'space_has_been_locked'	=> 'Данный пользователь заблокирован. Если это ошибка, обратитесь к администратору сайта.',//


);

