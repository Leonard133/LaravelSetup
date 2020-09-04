
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!--begin::Head-->
<head>
    <meta charset="utf-8"/>
    <title>{{ config('app.name') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link href="{{ asset('tailwind.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    {{--begin::Fonts--}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('admin-asset/template/plugins/global/plugins.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin-asset/template/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.5') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('admin-asset/template/css/style.bundle.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('admin-asset/template/css/themes/layout/header/base/light.css?v=7.0.5') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('admin-asset/template/css/themes/layout/header/menu/light.css?v=7.0.5') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('admin-asset/template/css/themes/layout/brand/dark.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin-asset/template/css/themes/layout/aside/dark.css?v=7.0.5') }}" rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->

    <link rel="shortcut icon" href="{{ asset('admin-asset/template/media/logos/favicon.ico') }}"/>

    @stack('styles')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
@include('admin.shared.header-mobile')
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
    @include('admin.shared.navbar')
    <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
        @include('admin.shared.header')
        <!--end::Header-->
            <!--begin::Content-->
        @yield('content')
        <!--end::Content-->
            <!--begin::Footer-->
        @include('admin.shared.footer')
        <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">@include('admin.shared.user_panel')</div>
<!-- end::User Panel-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><g fill="none" fill-rule="evenodd"><path
                        d="M0 0h24v24H0z"/><rect fill="#000" opacity=".3" x="11" y="10" width="2" height="10" rx="1"/><path
                        d="M6.707 12.707a1 1 0 11-1.414-1.414l6-6a1 1 0 011.383-.03l6 5.5a1 1 0 11-1.352 1.474L12.03 7.384l-5.323 5.323z"
                        fill="#000" fill-rule="nonzero"/></g></svg>
                <!--end::Svg Icon-->
			</span>
</div>
<!--end::Scrolltop-->
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = {
        "breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('admin-asset/template/plugins/global/plugins.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('admin-asset/template/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('admin-asset/template/js/scripts.bundle.js?v=7.0.5') }}"></script>
<script src="{{ asset('admin-asset/template/js/pages/features/miscellaneous/sweetalert2.js?v=7.0.6') }}"></script>
<!--end::Global Theme Bundle-->
{{-- <script src="{{ mix('js/app.js') }}"></script> --}}
<!--end::Page Scripts-->
@stack('scripts')
@include('admin.shared.sweetalert')
</body>
<!--end::Body-->
</html>
