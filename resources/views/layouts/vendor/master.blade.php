<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

@include('layouts.vendor.includes.head')



<body>
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Menu ========== -->
    <?php $segment=Request::segment(2); ?>
    @if(($segment != "login") && ($segment != "form_email"))
            @include('layouts.vendor.includes.side_menu')
    @endif

<!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <?php $segment=Request::segment(2); ?>
        @if(($segment != "login") && ($segment != "form_email"))
              @include('layouts.vendor.includes.nav')
            @endif

        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">
                <!-- start page title -->
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
                       {{__("Please check the form below for errors")}}
                    </div>
            @endif
                <div class="modal fade" id="popup-modal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <center>
                                            <h2 style="color: rgba(96,96,96,0.68)">
                                                <i class="tio-shopping-cart-outlined"></i><span id="count_order"></span> {{__('New order')}}
                                            </h2>
                                            <hr>
                                            <button onclick="check_order()" class="btn btn-primary">{{__("GO Orders")}}</button>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @yield('content')
                <!-- end page-->
            </div>
            <!-- End Content-->
        </div>

        <!-- Start Footer here -->
        @include('layouts.vendor.includes.footer')
    <!-- End Footer -->
    </div>
</div>
@include('layouts.vendor.includes.scripts')
@yield('script')
@stack('script')



@if(request()->filled("print"))
    <script>
        window.print();
        self.focus();
         window.onafterprint = function(){
             window.close();
         }
    </script>
    <style>
        @media print {
            form, input, button, .btn, .hidden-print{
                display: none !important;
            }
        }
    </style>
@endif

<audio id="myAudio">
    <source src="{{ asset('assets/sound/mixkit-doorbell-single-press-333.wav') }}" type="audio/mpeg">
</audio>

<script>
    var audio = document.getElementById("myAudio");

    function playAudio() {
        audio.play();
    }

    function pauseAudio() {
        audio.pause();
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        setInterval(function () {
            $.get({
                url: '{{ route('vendor.order.order-uncheck-count') }}',
                dataType: 'json',
                success: function (response) {
                   //  alert("Ddkk");
                    let data = response.data;
                    if (data.new_order > 0) {

                        $("#count_order").text(data.new_order);
                        playAudio();
                        $('#popup-modal').appendTo("body").modal('show');
                    }
                },
            });
        }, 1000000);


    });
    function check_order() {
        location.href = "{{route('vendor.order.index')}}";
    }
</script>

<script type="text/javascript">
    function search_advance(type){
// Get the current URL
        var baseURL = window.location.origin;

// Create a new URL with the search parameters
        var newURL = baseURL +'/vendor-panel/'+type+'?advancedSearch='+$("input[name='advanced_search']").val();

// Push the new state with the updated URL
        window.history.pushState({ path: newURL }, '', newURL);

        $.ajax({
            url:baseURL +'/vendor-panel/'+type,
            type: "GET",
            data: {
                advancedSearch: $("input[name='advanced_search']").val(),
                // Add more key-value pairs as needed
            },
            success: function(response) {

                // Handle the success response here
                //console.log(response);
                $(".append_advanced").empty();
                $(".append_advanced").append(response);
            },
            error: function(xhr, status, error) {
                // Handle the error response here
                console.log(error);
            }
        });
    }

</script>
</body>
</html>

