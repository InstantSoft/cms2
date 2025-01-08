<?php

    define('LANG_CONTENT_CONTROLLER',       'Content');
    define('LANG_CONTENT_IS_IN_GROUPS_ONLY', 'You must be a member of any group');
    define('LANG_CONTENT_COUNT_LIMIT',       'You have already added the maximum number of %s allowed');
    define('LANG_CONTENT_COUNT_LIMIT24',     'You have already added the maximum number of %s allowed per day. You can add %s tomorrow.');
    define('LANG_CONTENT_KARMA_LIMIT',       'Not enough reputation points. Required: %s');
    define('LANG_CONTENT_PUB',                 'Publication settings');
    define('LANG_CONTENT_DATE_PUB',             'Publication start date');
    define('LANG_CONTENT_DATE_PUB_END',         'Publication end date');
    define('LANG_CONTENT_DATE_PUB_END_HINT', 'Inclusively, i.e. the entry will be automatically unpublished after this date');
    define('LANG_CONTENT_PUB_LONG',             'Publication period, days');
    define('LANG_CONTENT_PUB_LONG_EXT',         'Extend publication period, days');
    define('LANG_CONTENT_PUB_LONG_NOW',         'Currently published till %s');
    define('LANG_CONTENT_IS_PUB',             'Publish %s on site');
    define('LANG_CONTENT_IS_PUB_HINT',       'If the "No, hide" option is selected, the %s will not be published even when the publication date arrives.');
    define('LANG_CONTENT_IS_PUB_OFF',         'Publication by date was disabled');
    define('LANG_CONTENT_WRONG_PARENT',         'Wrong parent selected');
    define('LANG_CONTENT_TEMPLATE',             'Item view template');
    define('LANG_RULE_CONTENT_VIEW_LIST',    'View a item list');
    define('LANG_RULE_CONTENT_VIEW_LIST_HINT', 'If this rule is set for at least one of the groups, the items list is not displayed to the guests');
    define('LANG_RULE_CONTENT_ADD',          'Adding entries');
    define('LANG_RULE_CONTENT_ADD_TO_PARENT','Adding entries to parent');
    define('LANG_RULE_CONTENT_BIND_TO_PARENT','Bind child entries to parent');
    define('LANG_RULE_CONTENT_BIND_OFF_PARENT','Unbind child entries from parent');
    define('LANG_RULE_CONTENT_EDIT',         'Editing entries');
    define('LANG_RULE_CONTENT_EDIT_TIMES',   'Time to edit entries');
    define('LANG_RULE_CONTENT_EDIT_TIMES_HINT',   'In minutes. If not specified - unlimited. Available if editing of entries is allowed.');
    define('LANG_RULE_CONTENT_DELETE_TIMES',   'Time to deleting entries');
    define('LANG_RULE_CONTENT_DELETE_TIMES_HINT',   'In minutes. If not specified - unlimited. Available if deleting entries is allowed.');
    define('LANG_RULE_CONTENT_DELETE',       'Deleting entries');
    define('LANG_RULE_CONTENT_MOVE_TO_TRASH', 'Deleting entries to trash');
    define('LANG_RULE_CONTENT_TRASH_LEFT_TIME', 'Trash items lifetime, hours');
    define('LANG_RULE_CONTENT_TRASH_LEFT_TIME_HINT', 'After this time, the item will be completely deleted. It may be overridden individually for each a moderator.. 0 - do not remove.');
    define('LANG_RULE_CONTENT_RESTORE',      'Restore items');
    define('LANG_RULE_CONTENT_ADD_CAT',      'Adding categories');
    define('LANG_RULE_CONTENT_EDIT_CAT',     'Editing categories');
    define('LANG_RULE_CONTENT_DELETE_CAT',   'Deleting categories');
    define('LANG_RULE_CONTENT_DISABLE_COMMENTS', 'Disabling comments ');
    define('LANG_RULE_CONTENT_RATE',        'Rating');
    define('LANG_RULE_CONTENT_PRIVACY',      'Configuring privacy settings');
    define('LANG_RULE_CONTENT_VIEW_ALL',     'Viewing private entries');
    define('LANG_RULE_CONTENT_LIMIT',       'Maximum number of entries');
    define('LANG_RULE_CONTENT_LIMIT24',     'Maximum number of entries per day');
    define('LANG_RULE_CONTENT_KARMA',       'Reputation limit');
    define('LANG_RULE_CONTENT_PUB_LATE',     'Selecting publication start date');
    define('LANG_RULE_CONTENT_PUB_LONG',     'Selecting publication end date');
    define('LANG_RULE_CONTENT_PUB_MAX_DAYS', 'Maximum publication period, days');
    define('LANG_RULE_CONTENT_PUB_MAX_EXT',     'Extending publication period');
    define('LANG_RULE_CONTENT_PUB_ON',         'Disabling publication');
    define('LANG_RULE_CONTENT_CHANGE_OWNER',   'Changing ownership of your entries');
    define('LANG_PERM_OPTION_DAYS', 'Days');
    define('LANG_PERM_OPTION_ANY', 'Any date');
    define('LANG_CONTENT_CATS_ALLOW_ADD',     'Groups whose members can add entries in this category');
    define('LANG_CONTENT_CATS_ALLOW_ADD_HINT', 'Selected groups should have permission to add entries');
    define('LANG_CONTENT_ACTIVITY_ADD',     'Adding %s');
    define('LANG_CONTENT_ACTIVITY_ADD_DESC','adds %s %s');
    define('LANG_CONTENT_SELECT_CATEGORY',  '-- select category --');
    define('LANG_CONTENT_SELECT_CATEGORIES', 'Click to select additional categories');
    define('LANG_CONTENT_SELECT_FOLDER',    '-- select folder --');
    define('LANG_CONTENT_PRIVATE_FRIEND_ITEMS', 'Private %s of friends');
    define('LANG_CONTENT_PRIVATE_FRIEND_INFO', '%s available only to author\'s friends <a href="%s">%s</a>');
    define('LANG_CONTENT_ITEM_IN_TRASH', 'The item is in the trash');
    //WIDGETS
    define('LANG_WP_CONTENT_ALL_PAGES',     '%s: All pages');
    define('LANG_WP_CONTENT_LIST',          '%s: List view');
    define('LANG_WP_CONTENT_ITEM',          '%s: Entry view');
    define('LANG_WP_CONTENT_ITEM_EDIT',     '%s: Editing');
    define('LANG_CONTENT_CONTEXT_LT_CATEGORY_VIEW', 'In categories');
    define('LANG_CONTENT_CONTEXT_LT_ITEM_VIEW_RELATION_TAB', 'In relations, in the tab');
    define('LANG_CONTENT_CONTEXT_LT_ITEM_VIEW_RELATION_LIST', 'In lists, in the tab');
    define('LANG_CONTENT_CONTEXT_LT_ITEMS_FROM_FRIENDS', 'In private friends items');
    define('LANG_CONTENT_CONTEXT_LT_TRASH', 'In the trash');
    define('LANG_CONTENT_CONTEXT_LT_MODERATION_LIST', 'In the moderation list');
    define('LANG_CONTENT_CONTEXT_LT_PROFILE_CONTENT', 'In profile');
    define('LANG_CONTENT_CONTEXT_LT_FORM_FIELD', 'In relations, in field');
    define('LANG_CONTENT_NOTIFY_END_DATE',  'Notify the imminent publication end date of your %s');
    define('LANG_CONTENT_SHOW_FILTER_COUNT',  'offer|offers|offers');
    define('LANG_CONTENT_PERMS_TIME_HINT',  'After publication you will have access to:');
    define('LANG_CONTENT_PERMS_TIME_HINT_EDIT',  'for editing');
    define('LANG_CONTENT_PERMS_TIME_HINT_DELETE',  'for removing');
    define('LANG_CONTENT_PERMS_TIME_HINT1',  'After the specified time, these actions will become unavailable.');
    define('LANG_CONTENT_PERMS_TIME_UP_EDIT',  'The time for editing is over');
    define('LANG_CONTENT_PERMS_TIME_UP_DELETE',  'Time for deletion is over');
