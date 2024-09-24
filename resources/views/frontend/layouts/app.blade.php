<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head>
    @include('frontend.components.styles')
    <title>@yield('title')</title>
</head>

<body class="page page-id-314 page-template-default unknown wpb-js-composer js-comp-ver-3.6.10.1 vc_responsive">
    @include('frontend.includes.header')
    <div class="content_holder">
        <div id="page-314"
            class="post-314 page type-page status-publish hentry single_page single_page_without_column">
            <h1 class="page_title title">{{ \App\Helper\Helper::getPageTitle() }}</h1>
            <div class="black_bg">
                <div class="page_content">
                    @yield('content')
                </div> <!-- end .page_content -->
                <div class="wpb_clear"></div>
            </div>
        </div>

    </div> <!-- end .content_holder -->
    @include('frontend.components.scripts')
</body>

</html>
