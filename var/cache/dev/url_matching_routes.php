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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/cour/list' => [[['_route' => 'app_cour_list', '_controller' => 'App\\Controller\\GestionEvent\\CourController::listCour'], null, null, null, false, false, null]],
        '/admin/cour' => [[['_route' => 'app_cour_add', '_controller' => 'App\\Controller\\GestionEvent\\CourController::add'], null, null, null, false, false, null]],
        '/front_event' => [[['_route' => 'front_event', '_controller' => 'App\\Controller\\GestionEvent\\EventController::listEvent'], null, null, null, false, false, null]],
        '/event/list' => [[['_route' => 'list', '_controller' => 'App\\Controller\\GestionEvent\\EventController::listEvents'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'app_event_add', '_controller' => 'App\\Controller\\GestionEvent\\EventController::add'], null, null, null, false, false, null]],
        '/register/doctor' => [[['_route' => 'doctor_register', '_controller' => 'App\\Controller\\GestionUser\\DoctorRegistrationController::register'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\GestionUser\\ForgotPasswordController::request'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'gestion_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::list'], null, null, null, false, false, null]],
        '/admin/registration-choice' => [[['_route' => 'admin_registration_choice', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::registrationChoice'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'registration_choice', '_controller' => 'App\\Controller\\GestionUser\\RegistrationChoiceController::choice'], null, null, null, false, false, null]],
        '/register/patient' => [[['_route' => 'patient_register', '_controller' => 'App\\Controller\\GestionUser\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\GestionUser\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\GestionUser\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\HomeController::contact'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'services', '_controller' => 'App\\Controller\\HomeController::services'], null, null, null, false, false, null]],
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
                .'|/cour_front/([^/]++)(*:222)'
                .'|/admin/(?'
                    .'|cour/(?'
                        .'|edit/([^/]++)(*:261)'
                        .'|delete/([^/]++)(*:284)'
                    .')'
                    .'|user/(?'
                        .'|create/([^/]++)(*:316)'
                        .'|([^/]++)/(?'
                            .'|edit(*:340)'
                            .'|delete(*:354)'
                        .')'
                    .')'
                .')'
                .'|/event/(?'
                    .'|edit/([^/]++)(*:388)'
                    .'|delete/([^/]++)(*:411)'
                .')'
                .'|/verify/([^/]++)(*:436)'
                .'|/reset\\-password/([^/]++)(*:469)'
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
        222 => [[['_route' => 'cour_front', '_controller' => 'App\\Controller\\GestionEvent\\CourController::listCours'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'app_cour_edit', '_controller' => 'App\\Controller\\GestionEvent\\CourController::edit'], ['id'], null, null, false, true, null]],
        284 => [[['_route' => 'app_cour_delete', '_controller' => 'App\\Controller\\GestionEvent\\CourController::delete'], ['id'], null, null, false, true, null]],
        316 => [[['_route' => 'admin_create_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::create'], ['type'], null, null, false, true, null]],
        340 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::edit'], ['id'], null, null, false, false, null]],
        354 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        388 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\GestionEvent\\EventController::edit'], ['id'], null, null, false, true, null]],
        411 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\GestionEvent\\EventController::delete'], ['id'], null, null, false, true, null]],
        436 => [[['_route' => 'verify_email', '_controller' => 'App\\Controller\\GestionUser\\RegistrationController::verifyEmail'], ['token'], null, null, false, true, null]],
        469 => [
            [['_route' => 'reset_password', '_controller' => 'App\\Controller\\GestionUser\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
