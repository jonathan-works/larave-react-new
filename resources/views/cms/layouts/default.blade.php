@extends('cms.layouts.base')

@section('body.class', 'skin-blue sidebar-mini')

@section('body')
    <div id="app" class="wrapper">
    @include('cms.layouts.partials.header')

    @include('cms.layouts.partials.sidebar')

        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright &copy; 2017 <a href="#">Laravel</a>.</strong> All rights
            reserved.
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>
@endsection