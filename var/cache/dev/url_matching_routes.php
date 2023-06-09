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
        '/api/deck/draw' => [[['_route' => 'api_draw', '_controller' => 'App\\Controller\\ApiController::apiDraw'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck' => [[['_route' => 'api_deck', '_controller' => 'App\\Controller\\ApiController::apiDeck'], null, ['GET' => 0], null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api_shuffle', '_controller' => 'App\\Controller\\ApiController::apiShuffle'], null, ['GET' => 0], null, false, false, null]],
        '/api/library/books' => [[['_route' => 'api_library', '_controller' => 'App\\Controller\\ApiController::getLibraryBooks'], null, ['GET' => 0], null, false, false, null]],
        '/proj' => [[['_route' => 'proj_start', '_controller' => 'App\\Controller\\BlackJackController::start'], null, null, null, false, false, null]],
        '/proj/game' => [[['_route' => 'proj_game', '_controller' => 'App\\Controller\\BlackJackController::startGame'], null, null, null, false, false, null]],
        '/proj/game/draw' => [[['_route' => 'proj_game_draw', '_controller' => 'App\\Controller\\BlackJackController::drawCard'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card', '_controller' => 'App\\Controller\\CardsController::card'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'deck', '_controller' => 'App\\Controller\\CardsController::deck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'deck_shuffle', '_controller' => 'App\\Controller\\CardsController::shuffleDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'deck_draw', '_controller' => 'App\\Controller\\CardsController::draw'], null, null, null, false, false, null]],
        '/card/deck/draw_start' => [[['_route' => 'draw_start', '_controller' => 'App\\Controller\\CardsController::drawStart'], null, null, null, false, false, null]],
        '/card/deck/draw_callback' => [[['_route' => 'draw_callback', '_controller' => 'App\\Controller\\CardsController::drawCallback'], null, ['POST' => 0], null, false, false, null]],
        '/game' => [[['_route' => 'game', '_controller' => 'App\\Controller\\GameController::gameHome'], null, null, null, false, false, null]],
        '/game/board' => [[['_route' => 'board', '_controller' => 'App\\Controller\\GameController::gameBoard'], null, null, null, false, false, null]],
        '/game/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\GameController::resetGame'], null, null, null, false, false, null]],
        '/game/draw' => [[['_route' => 'draw', '_controller' => 'App\\Controller\\GameController::drawCard'], null, null, null, false, false, null]],
        '/game/stop' => [[['_route' => 'stop', '_controller' => 'App\\Controller\\GameController::stopGame'], null, null, null, false, false, null]],
        '/game/doc' => [[['_route' => 'docs', '_controller' => 'App\\Controller\\GameController::gameDocs'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::number'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\HomeController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\HomeController::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\HomeController::fox'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\HomeController::api'], null, null, null, false, false, null]],
        '/api/quote' => [[['_route' => 'quote', '_controller' => 'App\\Controller\\HomeController::quote'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'metrics', '_controller' => 'App\\Controller\\HomeController::metrics'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'library', '_controller' => 'App\\Controller\\LibraryController::index'], null, null, null, false, false, null]],
        '/library/create' => [[['_route' => 'book_create', '_controller' => 'App\\Controller\\LibraryController::createBook'], null, null, null, false, false, null]],
        '/book/submit' => [[['_route' => 'book_submit', '_controller' => 'App\\Controller\\LibraryController::handleBookForm'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|deck/draw/(\\d+)(*:192)'
                    .'|library/book/([^/]++)(*:221)'
                .')'
                .'|/card/deck/draw/(\\d+)(*:251)'
                .'|/read/([^/]++)(*:273)'
                .'|/book/(?'
                    .'|delete/([^/]++)(*:305)'
                    .'|edit/([^/]++)(*:326)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'api_draw_multiple', '_controller' => 'App\\Controller\\ApiController::apiDrawMultiple'], ['num'], ['GET' => 0], null, false, true, null]],
        221 => [[['_route' => 'api_library_book', '_controller' => 'App\\Controller\\ApiController::getBookByISBN'], ['isbn'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'deck_draw_multiple', '_controller' => 'App\\Controller\\CardsController::drawMultiple'], ['num'], null, null, false, true, null]],
        273 => [[['_route' => 'read', '_controller' => 'App\\Controller\\LibraryController::read'], ['id'], null, null, false, true, null]],
        305 => [[['_route' => 'book_delete_by_id', '_controller' => 'App\\Controller\\LibraryController::deleteBookById'], ['id'], null, null, false, true, null]],
        326 => [
            [['_route' => 'book_edit_by_id', '_controller' => 'App\\Controller\\LibraryController::editBook'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
