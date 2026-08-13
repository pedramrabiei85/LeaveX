<!DOCTYPE html>
<html lang="fa" id="html">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://localhost/school/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/school/assets/css/load-hostplus-icon.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title></title>
    <meta name="theme-color" content="#da1003">

</head>
<body id="all_body">
<header>
    <div class="top_section">
        <div class="logo_section">
            <img src="assets/img/logo.png">
            <h4 style="
    font-size: 23px;
">
                تدبیرنگر
            </h4>
        </div>
        <div class="top_header_shape">
            <span></span>
        </div>
        <div class="top_contact_info">
            <div class="top_contact_logo_section">
                <i aria-hidden="true" class="hpl-icon hpl-call-6"></i>
            </div>

            <div class="top_contact_main_info">
                021-6564334
            </div>

            <div class="top_contact_logo_help">
                پشتیبانی
            </div>
        </div>

        <span class="button_line"></span>
    </div>

    <div class="buttom_section">


        <div class="main_header_itmes_section">
            <li><a href="#">صفحه اصلی</a></li>
            <li><a href="#">خدمات</a></li>
            <li><a href="#">محصولات</a></li>
            <li><a href="#">نمونه&zwnj;کارها</a></li>
            <li><a href="#">تعرفه&zwnj;ها</a></li>
        </div>

        <div class="main_header_tools">
            <a href="#" class="account_header_tool">
                <i class="hpl-icon hpl-account"></i>
            </a>

            <a href="#" class="search_header_tool">
                <i class="hpl-icon hpl-magnifier"></i>
            </a>

            <a href="#" class="cart_header_tool">
                <span style="
    font-weight: 600;
    color: #232323;
">آغازگر تحول باشید</span>

            </a>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
