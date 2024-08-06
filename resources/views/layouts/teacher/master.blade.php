<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.teacher.includes.head')

<body>
    <?php $segment=Request::segment(2); ?>
    @if(($segment != "login") && ($segment != "form_email"))
        @include('layouts.teacher.includes.side_menu')
    @endif
    <section class="home-section">

        @include('layouts.teacher.includes.nav')


        @if ($message = Session::get('success'))

            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if ($message = Session::get('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if ($message = Session::get('info'))
            <div class="alert alert-info alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif


        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{__('Please check the form below for errors')}}
            </div>
        @endif
        <div class="home-content">

             @yield('content')
        </div>
    </section>
    @include('layouts.teacher.includes.footer')
   {{-- @include('layouts.teacher.includes.scripts')--}}
    @yield('script')
    @stack('script')


</body>
</html>

