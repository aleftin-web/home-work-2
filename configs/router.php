<?php

return [
    "" => [
        "GET" => [
            "controller" => "\\controllers\\HomeController",
            "action" => "home",
            "params" => "",
        ],
    ],
    "section" => [
        "GET" => [
            "controller" => "\\controllers\\HomeController",
            "action" => "section",
            "params" => "",
        ],
    ],
    "products" => [
        "GET" => [
            "controller" => "\\controllers\\HomeController",
            "action" => "products",
            "params" => "",
        ],
    ],
    "export_xml" => [
        "GET" => [
            "controller" => "\\controllers\\Export",
            "action" => "xmlExport",
            "params" => "",
        ],
    ],
    "export_csv" => [
        "GET" => [
            "controller" => "\\controllers\\Export",
            "action" => "csvExport",
            "params" => "",
        ],
    ],
    "export_json" => [
        "GET" => [
            "controller" => "\\controllers\\Export",
            "action" => "jsonExport",
            "params" => "",
        ],
    ],
];