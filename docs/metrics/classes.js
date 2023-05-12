var classes = [
    {
        "name": "App\\Controller\\LibraryController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "index",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "createBook",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "handleBookForm",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "read",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deleteBookById",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "editBook",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getLibraryBooks",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBookByISBN",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 8,
        "nbMethods": 8,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 8,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 13,
        "ccn": 6,
        "ccnMethodMax": 3,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Repository\\BookRepository",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Entity\\Book",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Entity\\Book",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Doctrine\\Persistence\\ManagerRegistry",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "App\\Repository\\BookRepository",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "App\\Repository\\BookRepository"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 211,
        "vocabulary": 50,
        "volume": 1190.85,
        "difficulty": 9.83,
        "effort": 11710.06,
        "level": 0.1,
        "bugs": 0.4,
        "time": 651,
        "intelligentContent": 121.1,
        "number_operators": 34,
        "number_operands": 177,
        "number_operators_unique": 5,
        "number_operands_unique": 45,
        "cloc": 8,
        "loc": 88,
        "lloc": 80,
        "mi": 58.66,
        "mIwoC": 36.14,
        "commentWeight": 22.51,
        "kanDefect": 0.66,
        "relativeStructuralComplexity": 576,
        "relativeDataComplexity": 0.46,
        "relativeSystemComplexity": 576.46,
        "totalStructuralComplexity": 4608,
        "totalDataComplexity": 3.68,
        "totalSystemComplexity": 4611.68,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 7,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\GameController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "gameHome",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "gameBoard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "resetGame",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "stopGame",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "gameDocs",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiDrawMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 11,
        "ccn": 5,
        "ccnMethodMax": 3,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\Game",
            "Symfony\\Component\\HttpFoundation\\RedirectResponse",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\RedirectResponse",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\RedirectResponse",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 3,
        "length": 118,
        "vocabulary": 36,
        "volume": 610.05,
        "difficulty": 7.74,
        "effort": 4722.98,
        "level": 0.13,
        "bugs": 0.2,
        "time": 262,
        "intelligentContent": 78.8,
        "number_operators": 22,
        "number_operands": 96,
        "number_operators_unique": 5,
        "number_operands_unique": 31,
        "cloc": 12,
        "loc": 65,
        "lloc": 53,
        "mi": 73.09,
        "mIwoC": 42.21,
        "commentWeight": 30.88,
        "kanDefect": 0.36,
        "relativeStructuralComplexity": 196,
        "relativeDataComplexity": 0.51,
        "relativeSystemComplexity": 196.51,
        "totalStructuralComplexity": 1372,
        "totalDataComplexity": 3.6,
        "totalSystemComplexity": 1375.6,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 5,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\HomeController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "number",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "about",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "report",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "fox",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "api",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "quote",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 6,
        "nbMethods": 6,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 6,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 6,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Contracts\\HttpClient\\HttpClientInterface",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "DateTime",
            "Symfony\\Component\\HttpFoundation\\JsonResponse"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 2,
        "length": 81,
        "vocabulary": 45,
        "volume": 444.84,
        "difficulty": 1.53,
        "effort": 682.78,
        "level": 0.65,
        "bugs": 0.15,
        "time": 38,
        "intelligentContent": 289.82,
        "number_operators": 15,
        "number_operands": 66,
        "number_operators_unique": 2,
        "number_operands_unique": 43,
        "cloc": 6,
        "loc": 43,
        "lloc": 37,
        "mi": 74.46,
        "mIwoC": 47.11,
        "commentWeight": 27.35,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 1.03,
        "relativeSystemComplexity": 26.03,
        "totalStructuralComplexity": 150,
        "totalDataComplexity": 6.17,
        "totalSystemComplexity": 156.17,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 5,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Controller\\CardsController",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "card",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "deck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "shuffleDeck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "draw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawStart",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawCallback",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiDeck",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiShuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiDraw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "apiDrawMultiple",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 11,
        "nbMethods": 11,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 11,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 23,
        "ccn": 13,
        "ccnMethodMax": 4,
        "externals": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "App\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardHand",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardHand",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Request",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "App\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\DeckOfCards",
            "Symfony\\Component\\HttpFoundation\\JsonResponse",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardHand",
            "Symfony\\Component\\HttpFoundation\\Response",
            "Symfony\\Component\\HttpFoundation\\Session\\SessionInterface",
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardHand"
        ],
        "parents": [
            "Symfony\\Bundle\\FrameworkBundle\\Controller\\AbstractController"
        ],
        "implements": [],
        "lcom": 3,
        "length": 280,
        "vocabulary": 55,
        "volume": 1618.78,
        "difficulty": 10.8,
        "effort": 17482.83,
        "level": 0.09,
        "bugs": 0.54,
        "time": 971,
        "intelligentContent": 149.89,
        "number_operators": 64,
        "number_operands": 216,
        "number_operators_unique": 5,
        "number_operands_unique": 50,
        "cloc": 12,
        "loc": 133,
        "lloc": 121,
        "mi": 52.78,
        "mIwoC": 30.35,
        "commentWeight": 22.44,
        "kanDefect": 0.85,
        "relativeStructuralComplexity": 169,
        "relativeDataComplexity": 0.84,
        "relativeSystemComplexity": 169.84,
        "totalStructuralComplexity": 1859,
        "totalDataComplexity": 9.29,
        "totalSystemComplexity": 1868.29,
        "package": "App\\Controller\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 7,
        "instability": 1,
        "violations": {}
    },
    {
        "name": "App\\Repository\\BookRepository",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "save",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "remove",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 3,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 3,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 5,
        "ccn": 3,
        "ccnMethodMax": 2,
        "externals": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository",
            "Doctrine\\Persistence\\ManagerRegistry",
            "App\\Entity\\Book",
            "App\\Entity\\Book"
        ],
        "parents": [
            "Doctrine\\Bundle\\DoctrineBundle\\Repository\\ServiceEntityRepository"
        ],
        "implements": [],
        "lcom": 2,
        "length": 16,
        "vocabulary": 5,
        "volume": 37.15,
        "difficulty": 1.75,
        "effort": 65.01,
        "level": 0.57,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 21.23,
        "number_operators": 2,
        "number_operands": 14,
        "number_operators_unique": 1,
        "number_operands_unique": 4,
        "cloc": 32,
        "loc": 53,
        "lloc": 22,
        "mi": 105.99,
        "mIwoC": 59.32,
        "commentWeight": 46.67,
        "kanDefect": 0.29,
        "relativeStructuralComplexity": 25,
        "relativeDataComplexity": 0.28,
        "relativeSystemComplexity": 25.28,
        "totalStructuralComplexity": 75,
        "totalDataComplexity": 0.83,
        "totalSystemComplexity": 75.83,
        "package": "App\\Repository\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 3,
        "instability": 0.75,
        "violations": {}
    },
    {
        "name": "App\\Card\\Card",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSuit",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getRank",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 3,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 12,
        "vocabulary": 5,
        "volume": 27.86,
        "difficulty": 2.67,
        "effort": 74.3,
        "level": 0.38,
        "bugs": 0.01,
        "time": 4,
        "intelligentContent": 10.45,
        "number_operators": 4,
        "number_operands": 8,
        "number_operators_unique": 2,
        "number_operands_unique": 3,
        "cloc": 12,
        "loc": 31,
        "lloc": 19,
        "mi": 102.92,
        "mIwoC": 61.85,
        "commentWeight": 41.07,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 2.67,
        "relativeSystemComplexity": 2.67,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 8,
        "totalSystemComplexity": 8,
        "package": "App\\Card\\",
        "pageRank": 0.41,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Card\\CardHand",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCards",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "draw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getAmount",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "addCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getHand",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCardGraphics",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "reset",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTotalValue",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 2,
        "nbMethodsSetters": 0,
        "wmc": 16,
        "ccn": 10,
        "ccnMethodMax": 8,
        "externals": [
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardGraphic",
            "Exception",
            "App\\Card\\CardGraphic"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 106,
        "vocabulary": 25,
        "volume": 492.25,
        "difficulty": 26.32,
        "effort": 12956.69,
        "level": 0.04,
        "bugs": 0.16,
        "time": 720,
        "intelligentContent": 18.7,
        "number_operators": 39,
        "number_operands": 67,
        "number_operators_unique": 11,
        "number_operands_unique": 14,
        "cloc": 51,
        "loc": 128,
        "lloc": 77,
        "mi": 80.12,
        "mIwoC": 38.65,
        "commentWeight": 41.47,
        "kanDefect": 1.12,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.56,
        "relativeSystemComplexity": 10.56,
        "totalStructuralComplexity": 81,
        "totalDataComplexity": 14,
        "totalSystemComplexity": 95,
        "package": "App\\Card\\",
        "pageRank": 0.07,
        "afferentCoupling": 2,
        "efferentCoupling": 3,
        "instability": 0.6,
        "violations": {}
    },
    {
        "name": "App\\Card\\CardGraphic",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getImage",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 1,
        "nbMethods": 1,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 1,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 1,
        "ccn": 1,
        "ccnMethodMax": 1,
        "externals": [
            "App\\Card\\Card"
        ],
        "parents": [
            "App\\Card\\Card"
        ],
        "implements": [],
        "lcom": 1,
        "length": 12,
        "vocabulary": 8,
        "volume": 36,
        "difficulty": 1.5,
        "effort": 54,
        "level": 0.67,
        "bugs": 0.01,
        "time": 3,
        "intelligentContent": 24,
        "number_operators": 3,
        "number_operands": 9,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 6,
        "loc": 16,
        "lloc": 10,
        "mi": 107.79,
        "mIwoC": 67.15,
        "commentWeight": 40.63,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 4,
        "relativeDataComplexity": 0.33,
        "relativeSystemComplexity": 4.33,
        "totalStructuralComplexity": 4,
        "totalDataComplexity": 0.33,
        "totalSystemComplexity": 4.33,
        "package": "App\\Card\\",
        "pageRank": 0.16,
        "afferentCoupling": 2,
        "efferentCoupling": 1,
        "instability": 0.33,
        "violations": {}
    },
    {
        "name": "App\\Card\\DeckOfCards",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getInitialCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "draw",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getCards",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "shuffle",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "reset",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getSortedList",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 7,
        "nbMethods": 7,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 7,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 17,
        "ccn": 11,
        "ccnMethodMax": 6,
        "externals": [
            "App\\Card\\Card",
            "App\\Card\\CardGraphic",
            "App\\Card\\Card",
            "App\\Card\\Card",
            "App\\Card\\CardGraphic"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 129,
        "vocabulary": 38,
        "volume": 676.98,
        "difficulty": 7.12,
        "effort": 4820.94,
        "level": 0.14,
        "bugs": 0.23,
        "time": 268,
        "intelligentContent": 95.07,
        "number_operators": 35,
        "number_operands": 94,
        "number_operators_unique": 5,
        "number_operands_unique": 33,
        "cloc": 37,
        "loc": 111,
        "lloc": 74,
        "mi": 76.92,
        "mIwoC": 37.93,
        "commentWeight": 38.99,
        "kanDefect": 1.21,
        "relativeStructuralComplexity": 9,
        "relativeDataComplexity": 1.75,
        "relativeSystemComplexity": 10.75,
        "totalStructuralComplexity": 63,
        "totalDataComplexity": 12.25,
        "totalSystemComplexity": 75.25,
        "package": "App\\Card\\",
        "pageRank": 0.09,
        "afferentCoupling": 3,
        "efferentCoupling": 2,
        "instability": 0.4,
        "violations": {}
    },
    {
        "name": "App\\Card\\Game",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "__construct",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "drawCard",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "stop",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPlayerHand",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBankHand",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getDrawnCards",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBankCards",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getPlayerScore",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getBankScore",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "reset",
                "role": null,
                "public": true,
                "private": false,
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 10,
        "nbMethods": 6,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 6,
        "nbMethodsGetter": 4,
        "nbMethodsSetters": 0,
        "wmc": 11,
        "ccn": 6,
        "ccnMethodMax": 5,
        "externals": [
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardHand",
            "App\\Card\\CardHand",
            "App\\Card\\CardHand",
            "App\\Card\\CardHand",
            "App\\Card\\DeckOfCards",
            "App\\Card\\CardHand",
            "App\\Card\\CardHand"
        ],
        "parents": [],
        "implements": [],
        "lcom": 1,
        "length": 108,
        "vocabulary": 19,
        "volume": 458.78,
        "difficulty": 20.13,
        "effort": 9232.87,
        "level": 0.05,
        "bugs": 0.15,
        "time": 513,
        "intelligentContent": 22.8,
        "number_operators": 39,
        "number_operands": 69,
        "number_operators_unique": 7,
        "number_operands_unique": 12,
        "cloc": 42,
        "loc": 122,
        "lloc": 80,
        "mi": 78.49,
        "mIwoC": 39.04,
        "commentWeight": 39.44,
        "kanDefect": 0.52,
        "relativeStructuralComplexity": 16,
        "relativeDataComplexity": 1.6,
        "relativeSystemComplexity": 17.6,
        "totalStructuralComplexity": 160,
        "totalDataComplexity": 16,
        "totalSystemComplexity": 176,
        "package": "App\\Card\\",
        "pageRank": 0.03,
        "afferentCoupling": 1,
        "efferentCoupling": 2,
        "instability": 0.67,
        "violations": {}
    },
    {
        "name": "App\\Entity\\Book",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [
            {
                "name": "getId",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getName",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setName",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getTitle",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setTitle",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getIsbn",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setIsbn",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "getImage",
                "role": "getter",
                "_type": "Hal\\Metric\\FunctionMetric"
            },
            {
                "name": "setImage",
                "role": "setter",
                "_type": "Hal\\Metric\\FunctionMetric"
            }
        ],
        "nbMethodsIncludingGettersSetters": 9,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 5,
        "nbMethodsSetters": 4,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [],
        "parents": [],
        "implements": [],
        "lcom": 0,
        "length": 37,
        "vocabulary": 8,
        "volume": 111,
        "difficulty": 4,
        "effort": 444,
        "level": 0.25,
        "bugs": 0.04,
        "time": 25,
        "intelligentContent": 27.75,
        "number_operators": 13,
        "number_operands": 24,
        "number_operators_unique": 2,
        "number_operands_unique": 6,
        "cloc": 8,
        "loc": 57,
        "lloc": 49,
        "mi": 76.09,
        "mIwoC": 48.67,
        "commentWeight": 27.42,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 9.44,
        "relativeSystemComplexity": 9.44,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 85,
        "totalSystemComplexity": 85,
        "package": "App\\Entity\\",
        "pageRank": 0.06,
        "afferentCoupling": 2,
        "efferentCoupling": 0,
        "instability": 0,
        "violations": {}
    },
    {
        "name": "App\\Kernel",
        "interface": false,
        "abstract": false,
        "final": false,
        "methods": [],
        "nbMethodsIncludingGettersSetters": 0,
        "nbMethods": 0,
        "nbMethodsPrivate": 0,
        "nbMethodsPublic": 0,
        "nbMethodsGetter": 0,
        "nbMethodsSetters": 0,
        "wmc": 0,
        "ccn": 1,
        "ccnMethodMax": 0,
        "externals": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "parents": [
            "Symfony\\Component\\HttpKernel\\Kernel"
        ],
        "implements": [],
        "lcom": 0,
        "length": 0,
        "vocabulary": 0,
        "volume": 0,
        "difficulty": 0,
        "effort": 0,
        "level": 0,
        "bugs": 0,
        "time": 0,
        "intelligentContent": 0,
        "number_operators": 0,
        "number_operands": 0,
        "number_operators_unique": 0,
        "number_operands_unique": 0,
        "cloc": 0,
        "loc": 5,
        "lloc": 5,
        "mi": 171,
        "mIwoC": 171,
        "commentWeight": 0,
        "kanDefect": 0.15,
        "relativeStructuralComplexity": 0,
        "relativeDataComplexity": 0,
        "relativeSystemComplexity": 0,
        "totalStructuralComplexity": 0,
        "totalDataComplexity": 0,
        "totalSystemComplexity": 0,
        "package": "App\\",
        "pageRank": 0.03,
        "afferentCoupling": 0,
        "efferentCoupling": 1,
        "instability": 1,
        "violations": {}
    }
]