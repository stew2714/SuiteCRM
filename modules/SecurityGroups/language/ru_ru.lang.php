﻿<?php

$mod_strings = array(
    'LBL_ALL_MODULES' => 'Все', //rost fix

    'LBL_ASSIGNED_TO_ID' => 'Назначено Id Пользователя',
    'LBL_ASSIGNED_TO_NAME' => 'Назначено',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_ID' => 'Изменено по Id',
    'LBL_MODIFIED_NAME' => 'Изменено пользователем',
    'LBL_CREATED' => 'Создано',
    'LBL_CREATED_ID' => 'Создано по Id',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалено',
    'LBL_NONINHERITABLE' => 'Не наследумый',
    'LBL_LIST_NONINHERITABLE' => 'Не наследуемый',
    'LBL_NAME' => 'Имя',
    'LBL_CREATED_USER' => 'Создано пользователем',
    'LBL_MODIFIED_USER' => 'Изменено пользователем',
    'LBL_LIST_FORM_TITLE' => 'Группы пользователей',
    'LBL_MODULE_NAME' => 'Управление Группами пользователей',
    'LBL_MODULE_TITLE' => 'Управление Группами пользователей',
    'LNK_NEW_RECORD' => 'Создать Группу пользователей',
    'LNK_LIST' => 'Просмотр списка',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск Групп пользователей',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Управление Группами пользователей',
    'LBL_USERS' => 'Пользователи',
    'LBL_USERS_SUBPANEL_TITLE' => 'Пользователи',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Роли',

    'LBL_CONFIGURE_SETTINGS' => 'Настройка',
    'LBL_ADDITIVE' => 'Аддитивные Права',
    'LBL_ADDITIVE_DESC' => "Пользователь имеет наивысшие права из всех ролей, назначенных пользователю или пользовательским группам",
    'LBL_STRICT_RIGHTS' => 'Строгие права',
    'LBL_STRICT_RIGHTS_DESC' => "Если пользователь является членом нескольких групп, то будут использованы только соответствующие права группы, назначенной текущей записи.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Приоритет ролей пользователя',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Если пользователю непосредственно назначена какая-либо из ролей, то таковая роль имеет приоритет перед любыми групповыми ролями.',
    'LBL_INHERIT_TITLE' => 'Наследование групповых правил',
    'LBL_INHERIT_CREATOR' => 'Наследовать группы от создавшего пользователя',
    'LBL_INHERIT_CREATOR_DESC' => 'Запись будет наследовать все группы, назначенные пользователю, который ее создал.',
    'LBL_INHERIT_PARENT' => 'Наследовать родительскую запись',
    'LBL_INHERIT_PARENT_DESC' => 'Например, если встреча создана для контакта, то эта запись наследует группы, ассоциированные с контактом.',
    'LBL_USER_POPUP' => 'Выскакивающее окно для нового пользователя',
    'LBL_USER_POPUP_DESC' => 'При создании нового пользователя будет выскакивать окно для того, чтобы назначить пользователя той или иной группе.',
    'LBL_INHERIT_ASSIGNED' => 'Наследовать от назначенного пользователя',
    'LBL_INHERIT_ASSIGNED_DESC' => 'Запись будет наследовать все группы, которым принадлежит назначенный пользователь. Другие группы, назначенные записи, НЕ будут удалены.',
    'LBL_POPUP_SELECT' => 'Используйте Creator Выбор группы',
    'LBL_POPUP_SELECT_DESC' => 'Когда запись создается пользователем в более чем одну группу показать панель выбора группы на экране создают. В противном случае наследует одну группу.',
    'LBL_FILTER_USER_LIST' => 'Фильтровать список пользователей',
    'LBL_FILTER_USER_LIST_DESC' => "Пользователи, не являющиеся администраторами, могут назначать только пользователям в тех же группах",

    'LBL_DEFAULT_GROUP_TITLE' => 'Группа для новых записей по умолчанию',
    'LBL_ADD_BUTTON_LABEL' => 'Добавить',
    'LBL_REMOVE_BUTTON_LABEL' => 'Удалить',
    'LBL_GROUP' => 'Группа:',
    'LBL_MODULE' => 'Модуль:',

    'LBL_MASS_ASSIGN' => 'Группы пользователей: Массовое назначение',
    'LBL_ASSIGN' => 'Назначить',
    'LBL_REMOVE' => 'Удалить',
    'LBL_ASSIGN_CONFIRM' => 'Вы уверены, что хотите добавить эту группу к ',
    'LBL_REMOVE_CONFIRM' => 'Вы уверены, что хотите удалить эту группу из ',
    'LBL_CONFIRM_END' => ' выбранные записи?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Группы пользователей/Пользователь',
    'LBL_USER_NAME' => 'Имя пользователя',
    'LBL_SECURITYGROUP_NAME' => 'Имя Группы пользователя',
    'LBL_LIST_USER_NONINHERITABLE' => 'Не наследуемый',

    'LBL_HOMEPAGE_TITLE' => 'Групповые сообщения',
    'LBL_MAKE_POST' => 'Отправить сообщение',
    'LBL_POST' => 'Отправить',
    'LBL_SELECT_GROUP' => 'Выберите группу',

    'LBL_HOOKUP_SELECT' => "Выберите модуль",
    'LBL_HOOKUP_CONFIRM_PART1' => "Будет добавлена связь между Security Group и ",
    'LBL_HOOKUP_CONFIRM_PART2' => ". Продолжить?",
'LBL_GROUP_SELECT' => 'Выберите, какие группы должны иметь доступ к этой записи',
'LBL_ERROR_DUPLICATE' => 'Из-за возможного дубликата обнаружен сахарный вам придется вручную добавить группы безопасности вашей вновь созданной записи.','LBL_INBOUND_EMAIL' => 'Входящие учетной записи электронной почты','LBL_INBOUND_EMAIL_DESC' => 'Только разрешить доступ к учетной записи электронной почты, если пользователь принадлежит к группе, назначенный учетной записи электронной почты.','LBL_PRIMARY_GROUP' => 'Основной группой','LBL_SHARED_CALENDAR_HIDE_RESTRICTED' => 'Общий Календарь - Скрыть Restricted','LBL_SHARED_CALENDAR_HIDE_RESTRICTED_DESC' => 'Только предметы на общий календарь, что пользователь имеет права доступа. Оставьте снят, если ваши пользователи должны видеть, когда другие пользователи заняты.',);
