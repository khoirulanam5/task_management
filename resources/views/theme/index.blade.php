<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr"
      data-theme="theme-default"
      data-assets-path="{{ asset('theme/') }}"
      data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ config('app.name') }} - @yield('title')</title>

    <meta name="description" content="{{ $appSetting->description ?? '' }}" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
          href="{{ asset('theme/img/favicon/' . ($appSetting->logo ?? 'favicon.ico')) }}" />

    {{-- Styles --}}
    @include('theme.styles')
    @yield('styles')

    <script src="{{ asset('theme/js/config.js') }}"></script>
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Sidebar -->
            @include('theme.sidebar')

            <div class="layout-page">

                <!-- Navbar -->
                @include('theme.navbar')

                <!-- Content -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        @yield('content')
                    </div>

                    {{-- Footer --}}
                    @include('theme.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- /Content -->

            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    {{-- Scripts --}}
    @include('theme.scripts')
    @yield('scripts')
</body>
</html>
