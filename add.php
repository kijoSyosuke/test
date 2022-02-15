<!DOCTYPE html>
<html id="pagetop" lang="ja">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <title>園日誌|保育システム Hoic</title>
    <meta name="description" content="保育現場のお声から生まれた、保育園・幼稚園経営のICT業務支援管理システム「Hoic」">
    <meta name="keywords" content="保育園,幼稚園,管理システム,ICT化,Hoic">

    <link rel="shortcut icon" href="/hachioji/assets/img/common/favicon-07.ico">
    <link rel="apple-touch-icon" href="/hachioji/assets/img/common/apple-touch-icon.png">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/style.css?20220127134650" />
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/new-style.css" />
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/iziModal.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/earlyaccess/notosansjapanese.css">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/new-template/main-tailwind.css" />
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/new-template/style-fix-main-tailwind.css" />
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/pc-information.css">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/diary_addPage_newCommon.css">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/diary.css">

    <link rel="stylesheet" href="/hachioji/assets/css/template-proper.css?12320220127134650" />
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/hachioji/assets/css/pc-information.css?20220127134650" />


    <style>
        select[name=output] {
            font-size: 16px !important;
            background: #dddddd !important;
            padding: 0.25em 0.4em !important;
        }

        #modal-edit,
        #modal-copy,
        #modal-template,
        #modal-fixed-phrase,
        #modal-diary-copy,
        #modal-edit-date {
            z-index: 999999 !important;
        }

        #modal-edit ul,
        #modal-copy ul,
        #modal-template ul,
        #modal-fixed-phrase ul,
        #modal-diary-copy ul,
        #modal-edit-date {
            padding-bottom: 5rem;
        }

        input[name=writer],
        input[name=ymd] {
            border: 1px solid #cdd6dd;
        }
        .modal{
            box-sizing: content-box;
        }
        .modal-tag-date p {
            text-align: right;
            font-size: 18px;
        }

        .modal-tag-content p {
            background-color: transparent;
            display: block;
            box-sizing: border-box;
            padding: 0;
            margin: 0;
            resize: none;
            border-width: 0;
            color: inherit;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            white-space: pre-line;
        }
    </style>

</head>

<body class="bg-[#FDF1F5] ">
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3GG2WW" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Page -->
    <div id="document-layout">
        <!-- Header -->
        <header class="w-full mx-auto mt-0 mb-0 px-0 screen800:py-6 screen800:w-[1100px] screen800:mx-auto">
            <!-- Header Top lg:w-[1100px] -->
            <div class="flex items-end justify-between">
                <!-- Logo -->
                <div class="logo mb-[5px] hidden screen800:block">
                    <a href="https://at.ls.w103120101.hoic.jp/hachioji/" class="block w-[100px]">
                        <img src="/hachioji/assets/img/new-template/common/logo.svg" style="max-width: 100px" alt="Logo">
                    </a>
                </div>

                <div class="flex items-center justify-between text-[#707F89] text-xs space-x-5">
                    <!-- toggle mobile -->
                    <span class="flex items-center justify-center e-toggle-menu-mobile cursor-pointer h-[50px] w-[50px] right-[-50px] top-[25px] bg-[#ED7A9B] screen800:hidden">
                        <img class="open" src="/hachioji/assets/img//new-template/common/icon-toggle-menu-mobile-open.svg" style="max-width: 16px" alt="toggle menu mobile open">
                        <img class="hidden close" src="/hachioji/assets/img//new-template/common/icon-toggle-menu-mobile-close.svg" style="max-width: 28px" alt="toggle menu mobile close">
                    </span>
                    <!-- User name -->
                    <div class="flex items-center display-name mr-[10px] screen800:ml-0">
                        <img class="mr-2" src="/hachioji/assets/img/new-template/common/icon-user-gray.svg" style="max-width: 24px" alt="user">
                        <span>八王子市　管理者</span>
                    </div>
                    <!-- School name -->
                    <label class="border bg-[#ED7A9B] text-white rounded px-2 py-2">
                        <span>八王子市</span>
                    </label>
                    <!-- Logout -->
                    <div>
                        <a href="https://at.ls.w103120101.hoic.jp/hachioji/?action=logout" class="hidden screen800:block">
                            <button class="flex items-center bg-white border border-gray-400 rounded px-2 py-2" style="border: 1px solid rgba(156, 163, 175, 1) !important;">
                                <img class="mr-2" src="/hachioji/assets/img/new-template/common/icon-logout.svg" style="max-width: 16px" alt="logout">
                                <span>ログアウト</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->

            <!-- Breadcrumb -->
            <div class="breadcrumb pt-2 text-xs hidden screen800:block">

                <nav class="rounded w-full">
                    <ol class="list-reset flex items-center text-[#707F89]">
                        <li>
                            <a href="/hachioji/" class="flex items-center">
                                <img class="mr-2" src="/hachioji/assets/img/new-template/common/icon-top-breadcrumb.svg" style="max-width: 22px" alt="breadcrumb">
                                <span>TOPページ</span>
                            </a>
                        </li>
                        <!-- /*=========== Main loop starts here =========== */ -->
                        <li><span class="mx-3">></span></li>
                        <li>
                            <a class="" href="/hachioji/program/">計画日誌</a>
                        </li>
                        <!-- /*=========== Main loop ends here =========== */ -->
                        <li><span class="mx-3">></span></li>
                        <li>
                            経過記録 </li>
                    </ol>
                </nav>
            </div>
            <!-- End Breadcrumb -->
        </header> <!-- End Header -->

        <!-- Main -->
        <div id="main" class="flex w-full screen800:w-[1100px] screen800:mx-auto">
            <!-- Sidemenu -->
            <div id="sidebar" class="relative w-0 screen800:w-[230px]">

                <span class="e-toggle-menu absolute cursor-pointer h-[50px] w-[50px] right-[-50px] top-[25px] hidden screen800:block" id="btn-sidemenu">
                    <img src="/hachioji/assets/img/new-template/common/icon-toggle-menu.svg" style="max-width: 50px" alt="toggle menu">
                </span>
                <div class="side-content absolute top-0 w-[275px] screen800:bg-transparent screen800:relative screen800:w-[100%] screen800:block hidden" id="side-control" style="display: none; width: 230px;">
                    <ul class="side-main-menu block text-white bg-white">
                        <!-- menu action mobile -->
                        <li class="block screen800:hidden">
                            <div class="grid grid-cols-2 gap-[1px] border-b-[2px] border-white">
                                <!-- Top back -->
                                <a href="https://at.ls.w103120101.hoic.jp/hachioji/" class="flex items-center justify-center bg-[#707F89] hover:bg-opacity-75">
                                    <img src="/hachioji/assets/img/new-template/common/icon-top-back-mobile.svg" style="max-width: 20px" alt="Go to Top">
                                    <span class="ml-2 font-bold text-white text-[16px] py-2 my-1">TOPに戻る</span>
                                </a>
                                <!-- Logout -->
                                <a href="https://at.ls.w103120101.hoic.jp/hachioji/?action=logout" class="flex items-center justify-center bg-[#ED7A9B] hover:bg-opacity-75">
                                    <img src="/hachioji/assets/img/new-template/common/icon-logout-mobile.svg" style="max-width: 16px" alt="Logout">
                                    <span class="ml-2 font-bold text-white text-[16px] py-2 my-1">ログアウト</span>
                                </a>
                            </div>
                        </li>
                        <!-- End menu action mobile -->

                        <!-- List menu -->
                        <!-- keyGroup: pink|blue|green|yellow -->
                        <!-- Menu group -->
                        <li class="has-sub cursor-pointer">
                            <div class="menu-item block bg-[#ED7A9B] hover:bg-opacity-75 border-b-[2px] border-white">
                                <div class="flex items-center justify-between py-1 pr-[20px]">
                                    <!-- menu-name -->
                                    <span class="block border-l-[6px] border-white px-[10px] py-2 ml-[20px] my-1 font-bold text-white text-[16px]">デイリーボード</span>
                                    <svg class="menu-icon-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.775" height="19.774" viewBox="0 0 19.775 19.774">
                                        <defs>
                                            <clipPath id="a">
                                                <rect width="19.775" height="19.774" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g transform="translate(-275 -318.511)">
                                            <g transform="translate(275 318.511)">
                                                <g clip-path="url(#a)">
                                                    <g transform="translate(0 0)">
                                                        <path d="M519.807,402.384v-8.652h-8.652v-2.472h8.652v-8.652h2.471v8.652h8.652v2.472h-8.652v8.652Z" transform="translate(-511.155 -382.609)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="menu-icon-minus hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="2" viewBox="0 0 16 2">
                                        <g transform="translate(-275 -449.602)">
                                            <g transform="translate(270 437.602)">
                                                <g transform="translate(5 5)">
                                                    <path d="M16,7V9H0V7Z" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="m-0 p-0 hidden">
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/attendance_contact">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            デイリーボード（出欠連絡） </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/dailyboard_contactnote">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            デイリーボード（連絡帳） </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/dailyboard_healthcare">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            デイリーボード（健康管理） </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/dailyboard_school_lunch">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            デイリーボード（給食管理） </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                            </ul>
                        </li>
                        <!-- Menu group -->
                        <li class="has-sub cursor-pointer">
                            <div class="menu-item block bg-[#ED7A9B] hover:bg-opacity-75 border-b-[2px] border-white">
                                <div class="flex items-center justify-between py-1 pr-[20px]">
                                    <!-- menu-name -->
                                    <span class="block border-l-[6px] border-white px-[10px] py-2 ml-[20px] my-1 font-bold text-white text-[16px]">園児・保護者情報</span>
                                    <svg class="menu-icon-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.775" height="19.774" viewBox="0 0 19.775 19.774">
                                        <defs>
                                            <clipPath id="a">
                                                <rect width="19.775" height="19.774" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g transform="translate(-275 -318.511)">
                                            <g transform="translate(275 318.511)">
                                                <g clip-path="url(#a)">
                                                    <g transform="translate(0 0)">
                                                        <path d="M519.807,402.384v-8.652h-8.652v-2.472h8.652v-8.652h2.471v8.652h8.652v2.472h-8.652v8.652Z" transform="translate(-511.155 -382.609)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="menu-icon-minus hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="2" viewBox="0 0 16 2">
                                        <g transform="translate(-275 -449.602)">
                                            <g transform="translate(270 437.602)">
                                                <g transform="translate(5 5)">
                                                    <path d="M16,7V9H0V7Z" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="m-0 p-0 hidden">
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/users">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            園児台帳 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/nap_check">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            ブレスチェック </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/user_attendance">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            登降園記録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/growth_records">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            成長記録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/billing_management">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            請求管理 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/walk">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            お散歩位置情報 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu link -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/my_hachioji" target="_blank">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            保護者マイページ（別） </span>
                                        <img src="/hachioji/assets/img/new-template/common/icon-menu-link.svg" style="max-width: 16px" alt="Menu link">
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                            </ul>
                        </li>
                        <!-- Menu group -->
                        <li class="has-sub cursor-pointer">
                            <div class="menu-item block bg-[#ED7A9B] hover:bg-opacity-75 border-b-[2px] border-white">
                                <div class="flex items-center justify-between py-1 pr-[20px]">
                                    <!-- menu-name -->
                                    <span class="block border-l-[6px] border-white px-[10px] py-2 ml-[20px] my-1 font-bold text-white text-[16px]">帳票</span>
                                    <svg class="menu-icon-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.775" height="19.774" viewBox="0 0 19.775 19.774">
                                        <defs>
                                            <clipPath id="a">
                                                <rect width="19.775" height="19.774" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g transform="translate(-275 -318.511)">
                                            <g transform="translate(275 318.511)">
                                                <g clip-path="url(#a)">
                                                    <g transform="translate(0 0)">
                                                        <path d="M519.807,402.384v-8.652h-8.652v-2.472h8.652v-8.652h2.471v8.652h8.652v2.472h-8.652v8.652Z" transform="translate(-511.155 -382.609)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="menu-icon-minus hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="2" viewBox="0 0 16 2">
                                        <g transform="translate(-275 -449.602)">
                                            <g transform="translate(270 437.602)">
                                                <g transform="translate(5 5)">
                                                    <path d="M16,7V9H0V7Z" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="m-0 p-0 hidden">
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=year">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            年案 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=yearByAge">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            年案（異年齢） </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=month">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            月案 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=daycare">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            保育日誌 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=school">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            園日誌 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=oldGrowth">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            発達記録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=growth">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            発達記録（新） </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=food">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            食育計画 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=meal">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            給食日誌 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=mealCheck">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            検食簿 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=recordsSchool">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            要録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=reportAccident">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            事故・ヒアリハット </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=recordsPassage">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            経過記録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=overallPlan">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            全体的な計画 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=template">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            テンプレート登録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=fixedPhrase">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            定型文登録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/evacuation_drill_content/?action=Index">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            避難訓練点検内容 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/evacuation_check/?action=Index">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            避難訓練チェック </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/program/?action=evacuationPlan">
                                        <span class="block border-l-[6px] border-[#ED7A9B] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            避難訓練年間計画 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                            </ul>
                        </li>
                        <!-- keyGroup: pink|blue|green|yellow -->
                        <!-- Menu group -->
                        <li class="has-sub cursor-pointer">
                            <div class="menu-item block bg-[#83B6E4] hover:bg-opacity-75 border-b-[2px] border-white">
                                <div class="flex items-center justify-between py-1 pr-[20px]">
                                    <!-- menu-name -->
                                    <span class="block border-l-[6px] border-white px-[10px] py-2 ml-[20px] my-1 font-bold text-white text-[16px]">職員・シフト管理</span>
                                    <svg class="menu-icon-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.775" height="19.774" viewBox="0 0 19.775 19.774">
                                        <defs>
                                            <clipPath id="a">
                                                <rect width="19.775" height="19.774" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g transform="translate(-275 -318.511)">
                                            <g transform="translate(275 318.511)">
                                                <g clip-path="url(#a)">
                                                    <g transform="translate(0 0)">
                                                        <path d="M519.807,402.384v-8.652h-8.652v-2.472h8.652v-8.652h2.471v8.652h8.652v2.472h-8.652v8.652Z" transform="translate(-511.155 -382.609)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="menu-icon-minus hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="2" viewBox="0 0 16 2">
                                        <g transform="translate(-275 -449.602)">
                                            <g transform="translate(270 437.602)">
                                                <g transform="translate(5 5)">
                                                    <path d="M16,7V9H0V7Z" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="m-0 p-0 hidden">
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/staff">
                                        <span class="block border-l-[6px] border-[#83B6E4] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            職員台帳 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/staff_shift">
                                        <span class="block border-l-[6px] border-[#83B6E4] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            シフト管理 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/staff_attendance">
                                        <span class="block border-l-[6px] border-[#83B6E4] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            職員出退勤記録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu link -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/mystaff_hachioji" target="_blank">
                                        <span class="block border-l-[6px] border-[#83B6E4] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            スタッフマイページ（別） </span>
                                        <img src="/hachioji/assets/img/new-template/common/icon-menu-link.svg" style="max-width: 16px" alt="Menu link">
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                            </ul>
                        </li>
                        <!-- keyGroup: pink|blue|green|yellow -->
                        <!-- Menu group -->
                        <li class="has-sub cursor-pointer">
                            <div class="menu-item block bg-[#EEA03E] hover:bg-opacity-75 border-b-[2px] border-white">
                                <div class="flex items-center justify-between py-1 pr-[20px]">
                                    <!-- menu-name -->
                                    <span class="block border-l-[6px] border-white px-[10px] py-2 ml-[20px] my-1 font-bold text-white text-[16px]">設定</span>
                                    <svg class="menu-icon-plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.775" height="19.774" viewBox="0 0 19.775 19.774">
                                        <defs>
                                            <clipPath id="a">
                                                <rect width="19.775" height="19.774" fill="#fff" />
                                            </clipPath>
                                        </defs>
                                        <g transform="translate(-275 -318.511)">
                                            <g transform="translate(275 318.511)">
                                                <g clip-path="url(#a)">
                                                    <g transform="translate(0 0)">
                                                        <path d="M519.807,402.384v-8.652h-8.652v-2.472h8.652v-8.652h2.471v8.652h8.652v2.472h-8.652v8.652Z" transform="translate(-511.155 -382.609)" fill="#fff" />
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                    <svg class="menu-icon-minus hidden" xmlns="http://www.w3.org/2000/svg" width="16" height="2" viewBox="0 0 16 2">
                                        <g transform="translate(-275 -449.602)">
                                            <g transform="translate(270 437.602)">
                                                <g transform="translate(5 5)">
                                                    <path d="M16,7V9H0V7Z" fill="#fff" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <ul class="m-0 p-0 hidden">
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_base">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            園の基本情報 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_class">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            クラス・グループ管理設定 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_shift">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            シフト設定 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_auth">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            権限設定 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_pay/?action=menu&school_code=99">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            保育料設定 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_special_holiday">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            特別休園日設定 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_allergy">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            アレルギー設定 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_card">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            ICカード登録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/config_qr">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            QRコード登録 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu link -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/clock-inout/?school_code=99" target="_blank">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            QRコード打刻画面 </span>
                                        <img src="/hachioji/assets/img/new-template/common/icon-menu-link.svg" style="max-width: 16px" alt="Menu link">
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/file_manager">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            ファイル管理 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/original_template_manager">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            オリジナルテンプレート管理 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                                <!-- One Item Menu in Child -->
                                <!-- One Submenu -->
                                <li class="block bg-[#FDF1F5] border-b-[2px] border-white">
                                    <a class="flex items-center justify-between py-1 pr-[20px]" href="https://at.ls.w103120101.hoic.jp/hachioji/support">
                                        <span class="block border-l-[6px] border-[#EEA03E] px-[10px] py-2 ml-[20px] my-1 text-[#464646] text-[14px] text-nowrap font-size-13">
                                            操作でお困りの場合 </span>
                                    </a>
                                </li>
                                <!-- End One Item Menu in Child -->
                            </ul>
                        </li>
                        <!-- End List menu -->
                    </ul>
                </div>
            </div>
            <!-- End Sidemenu -->

            <!-- Content -->
            <div class="w-full px-8 pt-4 pb-8 mb-8 bg-white">
                <!-- More content here -->

                <!-- Content -->
                <main id="main-content" class="w-full px-8 pt-4 pb-8 mb-8 bg-white screen800:ml-0 screen800:mr-0 " style="width: 100%;">
                    <!-- More content here -->
                    <h2><img src="../assets/img/program/program-title.png" alt="保育経過記録"><span><span>帳票</span>園日誌</span></h2>

                    <form action="./" method="post" name="program_year_form" id="program-daycare-form" class="">
                        <input type="hidden" name="action" value="recordsPassageRegist" id="action" />
                        <input type="hidden" name="year" value="2021">
                        <input type="hidden" name="month" value="2">
                        <input type="hidden" name="grade" value="1">
                        <input type="hidden" name="grade_format" value="1">
                        <input type="hidden" name="class_name" value="">
                        <input type="hidden" name="program_passage[child_name]" value="あ　あ">
                        <input id="status" type="hidden" name="status" value="">
                        <input type="hidden" name="program_passage_seq" value="26" />
                        <input type="hidden" id="currently-editing" name="comment" value="" />

                        <div class="pc-search program year month">
                            <div class="search-inner create mt-3 search-inner py-4 px-3">

                                <div class="row  pr-1 pl-10  justify-center">
                                    <div class="col-auto mb-[5px]">
                                        <p>年度</p>
                                        <div class="mt-3">2021年　10月　10日</div>
                                    </div>
                                    <div class="col-3  mb-[5px]">
                                        <p>記入者</p>
                                        <input class="w-100 h3 mt-2" type="text" name="writer" value="八王子市　管理者" placeholder="" />
                                    </div>
                                    <div class="col-1-5  mb-[5px]">
                                        <p>ステータス</p>
                                        <div class="mt-3">
                                            <span class="status__making">作成中</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row  pr-7 pl-7 ">
                                    <div class="col-auto flex items-center  smt-flex-col">
                                        <a href="" class="bg-[#EB769A] text-white text-center text-xl mr-4 pr-7 pl-7 py-2">
                                            <span>差し戻しコメント</span>
                                        </a>
                                        <div class="flex1">差し戻しました</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <section class="program-year-edit">
                            <div class="flex justify-start mb-4">
                                <div class="flex add_btn">
                                    <a href="">
                                        <img src="../assets/img/common/ico-update.svg" alt="+">最新情報を再取得
                                    </a>
                                </div>
                            </div>
                            <h3 class="diary-ttl">園日誌</h3>
                            <div class="table-box table-topBorder  mb-6">
                                <table class="tbl03">
                                    <tr>
                                        <th class="text-left">日付</th>
                                        <th>天候</th>
                                        <th>室温</th>
                                        <th>湿度</th>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left; border-left: none;">2021年10月10日（月）</td>
                                        <td>晴れ</td>
                                        <td>0℃</td>
                                        <td>0%</td>
                                    </tr>
                                </table>
                                <table class="tbl03">
                                    <tr>
                                        <th rowspan="2">3歳<br>未満児数</th>
                                        <th>在籍数</th>
                                        <th>出席数</th>
                                        <th>欠席数</th>
                                        <th>計</th>
                                        <th rowspan="2">3歳<br>以上児数</th>
                                        <th>在籍数</th>
                                        <th>出席数</th>
                                        <th>欠席数</th>
                                        <th>計</th>
                                    </tr>
                                    <tr>
                                        <td>10人</td>
                                        <td>9人</td>
                                        <td>1人</td>
                                        <td>8人</td>
                                        <td>9人</td>
                                        <td>7人</td>
                                        <td>8人</td>
                                        <td>8人</td>
                                    </tr>
                                </table>
                                <table class="tbl03">
                                    <tr>
                                        <th class="width10 border-t-none" rowspan="8">職員の<br>状況</th>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">休暇</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">生休</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">時間休</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">週休</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">研修　出張</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">正規</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="display: none;"></th>
                                        <th class="text-left">臨時</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-left" colspan="2">保育担当等の変更</th>
                                        <td class="border-r-none">
                                            <textarea name="daycare_items[0][]" readonly></textarea>
                                        </td>
                                        <td class="width10 border-l-none">
                                            <button type="button" class="open-modal-staff button-inner-01">
                                                <p class="text-light-black">職員選択</p>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                                <table class="tbl03">
                                    <tr>
                                        <th class="width10 border-t-none">早出</th>
                                        <td class="border-t-none"><textarea name="daycare_items[0][]" class="modal-tag" rows="2"></textarea></td>
                                        <th class="width10 border-t-none">中遅</th>
                                        <td class="border-t-none"><textarea name="daycare_items[0][]" class="modal-tag" rows="2"></textarea></td>
                                        <th class="width10 border-t-none">遅出</th>
                                        <td class="border-t-none"><textarea name="daycare_items[0][]" class="modal-tag" rows="2"></textarea></td>
                                        <th class="width10 border-t-none">延長</th>
                                        <td class="border-t-none"><textarea name="daycare_items[0][]" class="modal-tag" rows="2"></textarea></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="text-right mb-2 mt-4">
                                ①療休　②産休　③通院　④結婚　⑤夏休　⑥忌引　⑦職免　⑧育休　⑨時差出勤　⑩保育タイム　⑪4時間勤務　⑫代休
                            </div>
                            <div class="table-box mt-1 mb-6">
                                <table class="tbl03">
                                    <tr>
                                        <th class="width10">記事</th>
                                        <td colspan="3"><textarea name="daycare_items[0][]" class="modal-tag open-modal-edit2" rows="3"></textarea></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="text-right mb-2 mt-4">
                                ①会議　②行事　③事務連絡　④来訪者　⑤その他
                            </div>
                            <div class="table-box  mt-1 mb-6">
                                <table class="tbl03">
                                    <tr>
                                        <th class="width10">保健衛生</th>
                                        <td colspan="2"><textarea name="daycare_items[0][]" class="modal-tag open-modal-edit2" rows="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" class="width10">給食</th>
                                        <td colspan="2"><textarea name="daycare_items[0][]" class="modal-tag open-modal-edit" rows="2"></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="width25 border-r-none">
                                            <div class="flex justify-center" >
                                                <label class="mr-4"><input type="radio" name="is_ope_manage" value="0">平常</label>
                                                <label class="mr-4"><input type="radio" name="is_ope_manage" value="1">変更</label>
                                                <label class=""><input type="radio" name="is_ope_manage" value="1">中止</label>
                                            </div>
                                        </td>
                                        <td style="border-left: none;"><textarea name="daycare_items[0][]" class="modal-tag open-modal-edit" rows="3"></textarea></td>
                                    </tr>
                                    <tr>
                                        <th class="width10">特記事項</th>
                                        <td colspan="2"><textarea name="daycare_items[0][]" class="modal-tag open-modal-edit" rows="3"></textarea></td>
                                    </tr>
                                </table>
                            </div>

                            <ul class="approval_block">
                                <li class="approval_box open-modal-approval" data-seq="1">
                                    <p class="approval_name">担任承認</p>
                                    <p class="approval_status">港　陽子<span>(代理)</span></p>
                                </li><!--
                                --><li class="approval_box open-modal-approval" data-seq="2">
                                    <p class="approval_name">主任承認</p>
                                    <p class="approval_status">港　陽子</p>
                                </li><!--
                                --><li class="approval_box open-modal-approval" data-seq="3">
                                    <p class="approval_name">園長承認</p>
                                    <p class="approval_status"></p>
                                </li><!--
                                --><li class="approval_box open-modal-approval" data-seq="4">
                                    <p class="approval_name">副園長承認</p>
                                    <p class="approval_status"></p>
                                </li>
                            </ul>

                            <div class="btn_area">
                                <a href="#" class="btn_style_back" type="button" onclick="history.back();return false;">
                                    <img src="https://ls.w103120101.hoic.jp/hachioji/assets/img/common/prev-arrow.png" alt="delete btn">
                                    <span>戻る</span>
                                </a>
                                <a href="javascript: void(0);" class="btn_style_white_gray">下書き保存</a>
                                <a href="javascript: void(0);" class="btn_style_pink_white">申請する</a>
                                <a href="#" class="btn_style_gray_white open-modal-remand">差し戻す</a>
                            </div>
                        </section>
                    </form>

                    <div class="modal modal-box fixed-phrase" id="modal-edit">
                        <input type="hidden" id="currently-editing" name="last-requested-input" value="" />
                        <p class="modal-ttl">内容を入力・修正してください</p>
                        <textarea id="currently-editing-sasimodoshi-text" style="font-size:16px;"></textarea>

                        <div class="btn_area mt-2">
                            <a href="#" class="btn_style_back" type="button" onclick="history.back();return false;">
                                <img src="https://ls.w103120101.hoic.jp/hachioji/assets/img/common/prev-arrow.png" alt="delete btn">
                                <span>戻る</span>
                            </a>
                            <a href="javascript: void(0);" class="btn_style_pink_white">決定</a>
                        </div>
                    </div>

                    <div class="modal modal-box fixed-phrase" id="modal-edit2">
                        <input type="hidden" id="currently-editing" name="last-requested-input" value="" />
                        <input type="hidden" id="currently-type" name="currently-type" value="" />
                        <p class="modal-ttl">内容を入力・修正してください</p>
                        <textarea id="currently-editing-text" style="font-size:16px;"></textarea>

                        <div class="flex justify-end mt-2 mb-4">
                            <button type="button" class="button-inner-01" onclick="fixedPhraseRegist()">
                                <p class="text-light-black">定型文として登録する</p>
                            </button>
                        </div>
                        <p class="modal-ttl">クラス活動</p>
                        <div class="mt-2 modal-listBox">
                            <!-- 項目ごとに表示させるリストが違う -->
                            <!-- 健康状況 -->
                            <ul class="modal-list template" id="add_fixed1">
                                <li class="md-phrases-select" data-id="0">
                                    <p class="modal-listName" id="fixed_phrases_1_0">健康状況</p>
                                    <div class="modal-select" data-id="0">
                                        <button type="button" class="button-inner-01">
                                            <p class="text-light-black">挿入</p>
                                        </button>
                                    </div>
                                </li>
                                <li class="md-phrases-select" data-id="1">
                                    <p class="modal-listName" id="fixed_phrases_1_1">テスト</p>
                                    <div class="modal-select" data-id="0">
                                        <button type="button" class="button-inner-01">
                                            <p class="text-light-black">挿入</p>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="btn_area mt-4">
                            <a href="#" class="btn_style_back" type="button" onclick="history.back();return false;">
                                <img src="https://ls.w103120101.hoic.jp/hachioji/assets/img/common/prev-arrow.png" alt="delete btn">
                                <span>戻る</span>
                            </a>
                            <a href="javascript: void(0);" id="currently_btn" class="btn_style_pink_white">決定</a>
                        </div>
                    </div>

                    <div class="modal modal-box fixed-phrase" id="modal-remand">
                        <input type="hidden" id="currently-editing" name="last-requested-input" value="" />
                        <p class="modal-ttl">差し戻しコメントを入力してください</p>
                        <textarea id="currently-editing-sasimodoshi-text" style="font-size:16px;"></textarea>

                        <div class="btn_area mt-4">
                            <a href="#" class="btn_style_back" type="button" onclick="history.back();return false;">
                                <img src="https://ls.w103120101.hoic.jp/hachioji/assets/img/common/prev-arrow.png" alt="delete btn">
                                <span>戻る</span>
                            </a>
                            <a href="javascript: void(0);" id="currently_btn" class="btn_style_pink_white">決定</a>
                        </div>
                    </div>

                    <div class="modal" id="modal-staff">
                        <strong class="modal-ttl">職員を選択してください</strong>

                        <div class="mt-3 search-inner py-4 px-3 mb-6">
                            <form action="./" method="get" name="search_form">
                                <div class="row">
                                    <div class="col-4 mr-2">
                                        <h6>種別</h6>
                                        <select class="w-100 h3 px-1 mt-2" name="qualification" id="search-qualification" data-select="0">
                                            <option value="0">すべて</option>
                                            <option value="2">保育士</option>
                                            <option value="3">子育て支援員</option>
                                            <option value="4">子育て支援員（予定）</option>
                                            <option value="5">保健師</option>
                                            <option value="6">看護師</option>
                                            <option value="7">准看護師</option>
                                            <option value="8">栄養士</option>
                                            <option value="9">調理員</option>
                                            <option value="10">その他</option>
                                        </select>
                                    </div>
                                    <div>
                                        <h6>雇用形態</h6>
                                        <select class="w-100 h3 px-1 mt-2" name="employee_type" id="search-class" data-select="0">
                                            <option value="0"></option>
                                            <option value="1">正社員</option>
                                            <option value="2">派遣</option>
                                            <option value="3">委託</option>
                                            <option value="4">パート</option>
                                        </select>
                                    </div>

                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-7 mr-2">
                                            <h6>職員名（カナ）</h6>
                                            <input
                                                class="w-100 h3 mt-2"
                                                type="text"
                                                name="staff_kana"
                                                value=""
                                                placeholder=""
                                            />
                                    </div>
                                    <div class="flex items-end">
                                        <a href="" class="bg-[#EE7799] text-white flex text-center rounded text-xl pr-7 pl-7 py-2">
                                            <span>検索する</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <ul class="modal-list table-topBorder">
                            <li class="modal-listHead">
                                <p class="modal-listName">職員名</p>
                                <span>選択</span>
                            </li>
                            <li>
                                <p class="modal-listName">港　花子</p>
                                <div class="modal-select" data-seq="1">
                                    <button type="button" class="button-inner-01">
                                        <p class="text-light-black">選択</p>
                                    </button>
                                </div>
                            </li>
                            <li>
                                <p class="modal-listName">島田　ひろ子</p>
                                <div class="modal-select" data-seq="1">
                                    <button type="button" class="button-inner-01">
                                        <p class="text-light-black">選択</p>
                                    </button>
                                </div>
                            </li>
                        </ul>
                        <div class="btn_area mt-4">
                            <a href="javascript: void(0);" id="currently_btn" class="btn_style_pink_white">決定</a>
                        </div>
                    </div>

                    <!-- 承認処理モーダル -->
                    <div class="modal" id="modal-approval">
                        <input type="hidden" id="last-requested-approval" name="last-requested-approval" value="" />

                        <p class="modal-ttl">担任の承認者を入力してください</p>
                        <ul class="modal-list">
                            <li>
                                <p class="modal-listName" id="apploval_name_14">八王子　テスト職員</p>
                                <div class="modal-select" data-seq="0" data-id="14">
                                    <button type="button" class="button-inner-01">
                                        <p class="text-light-black">選択</p>
                                    </button>
                                </div>
                            </li>
                            <li>
                                <p class="modal-listName" id="apploval_name_16">八王子 　管理者2</p>
                                <div class="modal-select" data-seq="1" data-id="16">
                                    <button type="button" class="button-inner-01">
                                        <p class="text-light-black">選択</p>
                                    </button>
                                </div>
                            </li>

                        </ul>
                        <div>
                            <div class="approval-nameBox">
                                <p>承認者</p>
                                <div class="approval-nameBoxRight">
                                    <input type="text" name="" value="" class="approval-name">
                                    <input type="hidden" name="" value="" class="approval-name">
                                    <input type="hidden" name="" value="" class="approval-seq">
                                    <input type="hidden" name="" value="" class="sub_approval">

                                    <div><label><input type="checkbox" name="sub_approval" id="sub_approval">代理で承認する</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="btn_area mt-4">
                            <a href="#" class="btn_style_back" type="button" onclick="history.back();return false;">
                                <img src="https://ls.w103120101.hoic.jp/hachioji/assets/img/common/prev-arrow.png" alt="delete btn">
                                <span>戻る</span>
                            </a>
                            <a href="javascript: void(0);" id="currently_btn" class="btn_style_pink_white">決定</a>
                        </div>
                    </div>

                    <!-- Footer -->
                </main>
                <!-- End Content -->
            </div>
        </div>
        <!-- End Main -->

        <!-- Footer -->
        <footer class="py-2 text-xs bg-[#ED7A9B] text-white text-center mt-8 w-full">
            保育園ICTシステム Hoic<br>Copyrights © Hoic Light. All Rights Reserved.
        </footer>
        <!-- End Footer -->

    </div>
    <!-- End Page -->

    <span id="config-auth" data-config-grant="2" data-child-grant="3" data-stafff-grant="2" data-shift-grant="2" data-mypage-grant="1">
    </span>

    <script src="/hachioji/assets/js/jquery-2.2.4.min.js"></script>
    <script src="/hachioji/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="/hachioji/assets/js/iziModal.min.js"></script>
    <script src="/hachioji/assets/js/jquery.validate.min.js"></script>
    <script src="/hachioji/assets/js/additional-methods.min.js"></script>
    <script src="/hachioji/assets/js/common.js?20220127134650"></script>
    <script src="/hachioji/assets/js/new-template/main-tailwind.js"></script>
    <script src="https://kit.fontawesome.com/7ffb4189a0.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(function () {
            var configs = ['config-grant', 'child-grant', 'staff-grant', 'shift-grant', 'mypage-grant'];
            $.each(configs, function (i, config) {
                var is_edit = $('#config-auth').data(config) == '2' ? 0 : 1;
                if (is_edit != '1') {
                    $('form.' + config + ' input').prop("disabled", true);
                    $('form.' + config + ' textarea').prop("disabled", true);
                    $('form.' + config + ' select').prop("disabled", true);
                    $('form.' + config + ' button').prop("disabled", true);
                    $('form.' + config + ' a').attr('onclick', '');
                    $('form.' + config + ' a').on('click', function (e) {
                        e.preventDefault();
                        e.stopPropagation();
                        e.stopImmediatePropagation();
                        return false;
                    });
                    //$('input, textarea, select').prop("disabled", true);
                }
            });
        });
    </script>
    <!-- End Footer -->

    <!-- End Page -->


    <script>
        $(function () {

            $(document).on('click', '.open-modal-edit', function (event) {
                event.preventDefault();
                $('#modal-edit').iziModal('open');
            });
            $(document).on('click', '.open-modal-edit2', function (event) {
                event.preventDefault();
                $('#modal-edit2').iziModal('open');
            });
            $(document).on('click', '.open-modal-staff', function (event) {
                event.preventDefault();
                $('#modal-staff').iziModal('open');
            });
            $(document).on('click', '.open-modal-remand', function (event) {
                event.preventDefault();
                $('#modal-remand').iziModal('open');
            });
            $(document).on('click', '.open-modal-approval', function (event) {
                event.preventDefault();
                $('#modal-approval').iziModal('open');
            });
            $('#modal-edit').iziModal();
            $('#modal-edit2').iziModal();
            $('#modal-staff').iziModal();
            $('#modal-remand').iziModal();
            $('#modal-approval').iziModal();
        });
    </script>


</body>

</html>