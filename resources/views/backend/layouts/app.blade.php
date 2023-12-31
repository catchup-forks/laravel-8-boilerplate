<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', app_name())</title>

    {{-- See https://laravel.com/docs/5.5/blade#stacks for usage --}}
    @stack('before-styles')

    {{ style(mix('css/backend.css')) }}

    @stack('after-styles')
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show {{ config('backend.body_classes') }}">
@include('backend.includes.header')

<div class="app-body">
    @include('backend.includes.sidebar')

    <main class="main">
        @include('includes.partials.logged-in-as')
        {!! Breadcrumbs::render() !!}

        <div class="container-fluid">
            <div class="animated fadeIn">
                <div class="content-header">
                    @yield('page-header')
                </div><!--content-header-->

                @include('includes.partials.messages')
                @yield('content')
            </div><!--animated-->
        </div><!--container-fluid-->
    </main><!--main-->

    @include('backend.includes.aside')
</div><!--app-body-->

@include('backend.includes.footer')

<!-- Scripts -->
@stack('before-scripts')
{!! script(mix('js/backend.js')) !!}
@stack('after-scripts')
</body>
</html>
