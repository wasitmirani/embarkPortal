<?php
namespace App\Helpers;

class HelperComponent {

    public static function SideBar(){
        return [
                [
                    "g_heading"=>"Dashboard",
                    "menu"=>[
                        "title"=>'Dashboards',
                        "icon"=>"icon-rocket",
                        "color_code"=>"",
                        "can"=>"",
                        "v-can"=>"",
                        "sub_menu"=>[
                            setSubMenu(
                                null,
                                "Dashboard",
                                null,
                                null,
                                null,
                                "/",
                            ),
                        ]
                    ]
                ],
                // [
                //     "single_link" => setSingleLink(' My inventory ', "icon-basket", null, null, null, '/inventory'),
                // ],
                [
                    "g_heading"=>"DIRECTORIES",
                    "menu"=>[
                        "title"=>'Payment Management',
                        "icon"=>"fas fa-money-check",
                        "color_code"=>"",
                        "can"=>"",
                        "v-can"=>"",
                        "sub_menu"=>[
                                setSubMenu(
                                    null,
                                    "Transactions",
                                    null,
                                    null,
                                    null,
                                    "/transaction",
                                ),
                                setSubMenu(
                                    null,
                                    "link Generate",
                                    null,
                                    null,
                                    null,
                                    "/roles",
                                ),
                                setSubMenu(
                                    null,
                                    "Permissions",
                                    null,
                                    null,
                                    null,
                                    "/permissions",
                                ),
                        ],

                    ],

                ],

                // [
                //     "single_link" => setSingleLink(' My inventory ', "icon-basket", null, null, null, '/inventory'),
                // ],

     ];
    }
}
