<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/usermanagement' => [[['_route' => 'admin_usermanagement', '_controller' => 'App\\Controller\\AdminController::manage'], null, ['GET' => 0], null, false, false, null]],
        '/admin/userregistration' => [[['_route' => 'admin_userregistration', '_controller' => 'App\\Controller\\AdminController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/announcement' => [[['_route' => 'app_announcement_index', '_controller' => 'App\\Controller\\AnnouncementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/announcement/new' => [[['_route' => 'app_announcement_new', '_controller' => 'App\\Controller\\AnnouncementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar/day' => [[['_route' => 'calendar_day_view', '_controller' => 'App\\Controller\\CalendarController::dayView'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/calendar/clock-in' => [[['_route' => 'calendar_clock_in', '_controller' => 'App\\Controller\\CalendarController::clockIn'], null, ['POST' => 0], null, false, false, null]],
        '/calendar/clock-out' => [[['_route' => 'calendar_clock_out', '_controller' => 'App\\Controller\\CalendarController::clockOut'], null, ['POST' => 0], null, false, false, null]],
        '/calendar/entry' => [[['_route' => 'app_calendar_entry_index', '_controller' => 'App\\Controller\\CalendarEntryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/calendar/entry/new' => [[['_route' => 'app_calendar_entry_new', '_controller' => 'App\\Controller\\CalendarEntryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, ['GET' => 0], null, false, false, null]],
        '/document' => [[['_route' => 'app_document_index', '_controller' => 'App\\Controller\\DocumentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/document/new' => [[['_route' => 'app_document_new', '_controller' => 'App\\Controller\\DocumentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/no-access' => [[['_route' => 'no_access', '_controller' => 'App\\Controller\\ErrorController::noAccess'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'job_home', '_controller' => 'App\\Controller\\JobsController::index'], null, null, null, false, false, null]],
        '/jobs' => [[['_route' => 'job_list', '_controller' => 'App\\Controller\\JobsController::index'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/wachtwoord-vergeten' => [[['_route' => 'app_forgot_password', '_controller' => 'App\\Controller\\SecurityController::forgot'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'app_forgot_password_en', '_controller' => 'App\\Controller\\SecurityController::forgot'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|dmin/usermanagement/([^/]++)/edit(*:240)'
                    .'|nnouncement/([^/]++)(?'
                        .'|(*:271)'
                        .'|/edit(*:284)'
                        .'|(*:292)'
                    .')'
                .')'
                .'|/c(?'
                    .'|alendar/(?'
                        .'|month(?'
                            .'|(?:/(\\d{4})(?:/(\\d{1,2}))?)?(*:354)'
                            .'|(*:362)'
                        .')'
                        .'|entry/([^/]++)(?'
                            .'|(*:388)'
                            .'|/edit(*:401)'
                            .'|(*:409)'
                        .')'
                    .')'
                    .'|omment/([^/]++)/delete(*:441)'
                .')'
                .'|/document/([^/]++)(?'
                    .'|(*:471)'
                    .'|/(?'
                        .'|edit(*:487)'
                        .'|logs(*:499)'
                    .')'
                    .'|(*:508)'
                .')'
                .'|/jobs/([^/]++)(*:531)'
                .'|/wachtwoord\\-reset/([^/]++)(*:566)'
                .'|/reset\\-password/([^/]++)(*:599)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => 'admin_usermanagement_edit', '_controller' => 'App\\Controller\\AdminController::editUser'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'app_announcement_show', '_controller' => 'App\\Controller\\AnnouncementController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        284 => [[['_route' => 'app_announcement_edit', '_controller' => 'App\\Controller\\AnnouncementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        292 => [[['_route' => 'app_announcement_delete', '_controller' => 'App\\Controller\\AnnouncementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        354 => [[['_route' => 'calendar_month_view', 'year' => null, 'month' => null, '_controller' => 'App\\Controller\\CalendarController::monthView'], ['year', 'month'], ['GET' => 0], null, false, true, null]],
        362 => [[['_route' => 'calendar_month_default', '_controller' => 'App\\Controller\\CalendarController::monthView'], [], ['GET' => 0], null, false, false, null]],
        388 => [[['_route' => 'app_calendar_entry_show', '_controller' => 'App\\Controller\\CalendarEntryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        401 => [[['_route' => 'app_calendar_entry_edit', '_controller' => 'App\\Controller\\CalendarEntryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        409 => [[['_route' => 'app_calendar_entry_delete', '_controller' => 'App\\Controller\\CalendarEntryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        441 => [[['_route' => 'comment_delete', '_controller' => 'App\\Controller\\CommentController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        471 => [[['_route' => 'app_document_show', '_controller' => 'App\\Controller\\DocumentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        487 => [[['_route' => 'app_document_edit', '_controller' => 'App\\Controller\\DocumentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        499 => [[['_route' => 'app_document_logs', '_controller' => 'App\\Controller\\DocumentLogController::viewLogs'], ['id'], ['GET' => 0], null, false, false, null]],
        508 => [[['_route' => 'app_document_delete', '_controller' => 'App\\Controller\\DocumentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        531 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JobsController::show'], ['slug'], null, null, false, true, null]],
        566 => [[['_route' => 'app_reset_password_nl', '_controller' => 'App\\Controller\\SecurityController::reset'], ['token'], null, null, false, true, null]],
        599 => [
            [['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\SecurityController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
