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
        '/admin/appointment' => [[['_route' => 'admin_appointments', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::index'], null, null, null, true, false, null]],
        '/admin/planning' => [[['_route' => 'admin_planning_index', '_controller' => 'App\\Controller\\GestionPlanning\\AdminPlanningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/planning/new' => [[['_route' => 'admin_planning_new', '_controller' => 'App\\Controller\\GestionPlanning\\AdminPlanningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/appointment' => [[['_route' => 'appointment_index', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/appointment/choose' => [[['_route' => 'appointment_choose', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::choose'], null, ['GET' => 0], null, false, false, null]],
        '/planning' => [[['_route' => 'planning_index', '_controller' => 'App\\Controller\\GestionPlanning\\PlanningController::index'], null, ['GET' => 0], null, true, false, null]],
        '/planning/new' => [[['_route' => 'planning_new', '_controller' => 'App\\Controller\\GestionPlanning\\PlanningController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register/doctor' => [[['_route' => 'doctor_register', '_controller' => 'App\\Controller\\GestionUser\\DoctorRegistrationController::register'], null, null, null, false, false, null]],
        '/forgot-password' => [[['_route' => 'forgot_password', '_controller' => 'App\\Controller\\GestionUser\\ForgotPasswordController::request'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'gestion_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::list'], null, null, null, false, false, null]],
        '/admin/registration-choice' => [[['_route' => 'admin_registration_choice', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::registrationChoice'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'user_profile', '_controller' => 'App\\Controller\\GestionUser\\ProfileController::index'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'user_profile_edit', '_controller' => 'App\\Controller\\GestionUser\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/delete-account' => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\GestionUser\\ProfileController::deleteUser'], null, ['POST' => 0], null, false, false, null]],
        '/admin/profile' => [[['_route' => 'admin_profile', '_controller' => 'App\\Controller\\GestionUser\\ProfileController::adminProfile'], null, null, null, false, false, null]],
        '/admin/profile/edit' => [[['_route' => 'admin_profile_edit', '_controller' => 'App\\Controller\\GestionUser\\ProfileController::adminEdit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/delete-account' => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\GestionUser\\ProfileController::deleteAdmin'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|dmin/(?'
                        .'|appointment/(?'
                            .'|choose/([^/]++)(*:245)'
                            .'|new/([^/]++)/([^/]++)(*:274)'
                            .'|admin/user/([^/]++)/appointment(?'
                                .'|s(*:317)'
                                .'|/(?'
                                    .'|choose\\-planning(*:345)'
                                    .'|add/([^/]++)(*:365)'
                                .')'
                            .')'
                            .'|edit/([^/]++)(*:388)'
                            .'|delete/([^/]++)(*:411)'
                        .')'
                        .'|planning/([^/]++)(?'
                            .'|(*:440)'
                            .'|/edit(*:453)'
                            .'|(*:461)'
                        .')'
                        .'|user/(?'
                            .'|create/([^/]++)(*:493)'
                            .'|([^/]++)/(?'
                                .'|edit(*:517)'
                                .'|delete(*:531)'
                            .')'
                        .')'
                    .')'
                    .'|ppointment/(?'
                        .'|new/([^/]++)(*:568)'
                        .'|([^/]++)(?'
                            .'|(*:587)'
                            .'|/edit(*:600)'
                            .'|(*:608)'
                        .')'
                        .'|available\\-times/([^/]++)(*:642)'
                    .')'
                .')'
                .'|/planning/([^/]++)(?'
                    .'|(*:673)'
                    .'|/edit(*:686)'
                    .'|(*:694)'
                .')'
                .'|/verify/([^/]++)(*:719)'
                .'|/reset\\-password/([^/]++)(*:752)'
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
        245 => [[['_route' => 'admin_appointment_choose', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::choose'], ['userId'], ['GET' => 0], null, false, true, null]],
        274 => [[['_route' => 'admin_appointment_new', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::new'], ['planningId', 'userId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        317 => [[['_route' => 'admin_user_appointments', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::userAppointments'], ['id'], null, null, false, false, null]],
        345 => [[['_route' => 'admin_appointment_choose_planning', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::choosePlanning'], ['id'], null, null, false, false, null]],
        365 => [[['_route' => 'admin_appointment_add', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::addAppointment'], ['id', 'planningId'], null, null, false, true, null]],
        388 => [[['_route' => 'admin_appointment_edit', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        411 => [[['_route' => 'admin_appointment_delete', '_controller' => 'App\\Controller\\GestionPlanning\\AdminAppointmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        440 => [[['_route' => 'admin_planning_show', '_controller' => 'App\\Controller\\GestionPlanning\\AdminPlanningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        453 => [[['_route' => 'admin_planning_edit', '_controller' => 'App\\Controller\\GestionPlanning\\AdminPlanningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'admin_planning_delete', '_controller' => 'App\\Controller\\GestionPlanning\\AdminPlanningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        493 => [[['_route' => 'admin_create_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::create'], ['type'], null, null, false, true, null]],
        517 => [[['_route' => 'admin_edit_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::edit'], ['id'], null, null, false, false, null]],
        531 => [[['_route' => 'admin_delete_user', '_controller' => 'App\\Controller\\GestionUser\\GestionUserController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        568 => [[['_route' => 'appointment_new', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::new'], ['planningId'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        587 => [[['_route' => 'appointment_show', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'appointment_edit', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'appointment_delete', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        642 => [[['_route' => 'appointment_available_times', '_controller' => 'App\\Controller\\GestionPlanning\\AppointmentController::availableTimes'], ['planningId'], ['GET' => 0], null, false, true, null]],
        673 => [[['_route' => 'planning_show', '_controller' => 'App\\Controller\\GestionPlanning\\PlanningController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        686 => [[['_route' => 'planning_edit', '_controller' => 'App\\Controller\\GestionPlanning\\PlanningController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        694 => [[['_route' => 'planning_delete', '_controller' => 'App\\Controller\\GestionPlanning\\PlanningController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        719 => [[['_route' => 'verify_email', '_controller' => 'App\\Controller\\GestionUser\\RegistrationController::verifyEmail'], ['token'], null, null, false, true, null]],
        752 => [
            [['_route' => 'reset_password', '_controller' => 'App\\Controller\\GestionUser\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
