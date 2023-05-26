<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'api_draw' => [[], ['_controller' => 'App\\Controller\\ApiController::apiDraw'], [], [['text', '/api/deck/draw']], [], [], []],
    'api_draw_multiple' => [['num'], ['_controller' => 'App\\Controller\\ApiController::apiDrawMultiple'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/api/deck/draw']], [], [], []],
    'api_deck' => [[], ['_controller' => 'App\\Controller\\ApiController::apiDeck'], [], [['text', '/api/deck']], [], [], []],
    'api_shuffle' => [[], ['_controller' => 'App\\Controller\\ApiController::apiShuffle'], [], [['text', '/api/deck/shuffle']], [], [], []],
    'api_library' => [[], ['_controller' => 'App\\Controller\\ApiController::getLibraryBooks'], [], [['text', '/api/library/books']], [], [], []],
    'api_library_book' => [['isbn'], ['_controller' => 'App\\Controller\\ApiController::getBookByISBN'], [], [['variable', '/', '[^/]++', 'isbn', true], ['text', '/api/library/book']], [], [], []],
    'proj_start' => [[], ['_controller' => 'App\\Controller\\BlackJackController::start'], [], [['text', '/proj']], [], [], []],
    'proj_game' => [[], ['_controller' => 'App\\Controller\\BlackJackController::startGame'], [], [['text', '/proj/game']], [], [], []],
    'proj_game_draw' => [[], ['_controller' => 'App\\Controller\\BlackJackController::drawCard'], [], [['text', '/proj/game/draw']], [], [], []],
    'card' => [[], ['_controller' => 'App\\Controller\\CardsController::card'], [], [['text', '/card']], [], [], []],
    'deck' => [[], ['_controller' => 'App\\Controller\\CardsController::deck'], [], [['text', '/card/deck']], [], [], []],
    'deck_shuffle' => [[], ['_controller' => 'App\\Controller\\CardsController::shuffleDeck'], [], [['text', '/card/deck/shuffle']], [], [], []],
    'deck_draw' => [[], ['_controller' => 'App\\Controller\\CardsController::draw'], [], [['text', '/card/deck/draw']], [], [], []],
    'deck_draw_multiple' => [['num'], ['_controller' => 'App\\Controller\\CardsController::drawMultiple'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/card/deck/draw']], [], [], []],
    'draw_start' => [[], ['_controller' => 'App\\Controller\\CardsController::drawStart'], [], [['text', '/card/deck/draw_start']], [], [], []],
    'draw_callback' => [[], ['_controller' => 'App\\Controller\\CardsController::drawCallback'], [], [['text', '/card/deck/draw_callback']], [], [], []],
    'game' => [[], ['_controller' => 'App\\Controller\\GameController::gameHome'], [], [['text', '/game']], [], [], []],
    'board' => [[], ['_controller' => 'App\\Controller\\GameController::gameBoard'], [], [['text', '/game/board']], [], [], []],
    'reset' => [[], ['_controller' => 'App\\Controller\\GameController::resetGame'], [], [['text', '/game/reset']], [], [], []],
    'draw' => [[], ['_controller' => 'App\\Controller\\GameController::drawCard'], [], [['text', '/game/draw']], [], [], []],
    'stop' => [[], ['_controller' => 'App\\Controller\\GameController::stopGame'], [], [['text', '/game/stop']], [], [], []],
    'docs' => [[], ['_controller' => 'App\\Controller\\GameController::gameDocs'], [], [['text', '/game/doc']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::number'], [], [['text', '/']], [], [], []],
    'about' => [[], ['_controller' => 'App\\Controller\\HomeController::about'], [], [['text', '/about']], [], [], []],
    'report' => [[], ['_controller' => 'App\\Controller\\HomeController::report'], [], [['text', '/report']], [], [], []],
    'lucky' => [[], ['_controller' => 'App\\Controller\\HomeController::fox'], [], [['text', '/lucky']], [], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\HomeController::api'], [], [['text', '/api']], [], [], []],
    'quote' => [[], ['_controller' => 'App\\Controller\\HomeController::quote'], [], [['text', '/api/quote']], [], [], []],
    'metrics' => [[], ['_controller' => 'App\\Controller\\HomeController::metrics'], [], [['text', '/metrics']], [], [], []],
    'library' => [[], ['_controller' => 'App\\Controller\\LibraryController::index'], [], [['text', '/library']], [], [], []],
    'book_create' => [[], ['_controller' => 'App\\Controller\\LibraryController::createBook'], [], [['text', '/library/create']], [], [], []],
    'book_submit' => [[], ['_controller' => 'App\\Controller\\LibraryController::handleBookForm'], [], [['text', '/book/submit']], [], [], []],
    'read' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::read'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/read']], [], [], []],
    'book_delete_by_id' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::deleteBookById'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/delete']], [], [], []],
    'book_edit_by_id' => [['id'], ['_controller' => 'App\\Controller\\LibraryController::editBook'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/book/edit']], [], [], []],
];
