<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('../../assets/sass/main.css') }}" />
  <link rel="stylesheet" href="{{ asset('ssets/src/output.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.rtl.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('assets/css/datatable.css')}}" />
  <title>St Teacher</title>
  <link rel="icon" href="{{ asset('assets/images/logo-1.png')}}" type="image/x-icon" />
</head>

<body>

    <!-- start login -->
<section class="authentication">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="authentication_div">
                    <div class="form_auth">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('assets/images/logo-1.png')}}" alt="logo" width="120" height="120">
                        </div>
                        <h4 class="text-third-color font-semibold !text-[18px] text-center mb-4"> تسجيل دخول </h4>
                        <form action="{{ route('teacher.auth.postLogin') }}" method="post">
                            @csrf
                            <div class="input-group flex-nowrap form-floating mb-3 phone-number">
                                <span class="input-group-text" id="addon-wrapping">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M14.05 6C15.0268 6.19057 15.9244 6.66826 16.6281 7.37194C17.3318 8.07561 17.8095 8.97326 18 9.95M14.05 2C16.0793 2.22544 17.9716 3.13417 19.4163 4.57701C20.8609 6.01984 21.7721 7.91101 22 9.94" stroke="#553DDD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.38064 9.85323C8.07664 11.3028 9.02543 12.6615 10.227 13.8631C11.4286 15.0646 12.7872 16.0134 14.2368 16.7094C14.3615 16.7693 14.4239 16.7992 14.5028 16.8222C14.7831 16.904 15.1274 16.8453 15.3648 16.6752C15.4316 16.6274 15.4888 16.5702 15.6031 16.4559C15.9527 16.1063 16.1275 15.9315 16.3033 15.8172C16.9662 15.3862 17.8208 15.3862 18.4836 15.8172C18.6594 15.9315 18.8342 16.1063 19.1838 16.4559L19.3787 16.6508C19.9101 17.1822 20.1759 17.448 20.3202 17.7333C20.6073 18.3009 20.6073 18.9712 20.3202 19.5387C20.1759 19.8241 19.9101 20.0898 19.3787 20.6213L19.2211 20.7789C18.6914 21.3085 18.4266 21.5733 18.0666 21.7756C17.6671 22 17.0466 22.1614 16.5884 22.16C16.1754 22.1588 15.8932 22.0787 15.3288 21.9185C12.2954 21.0575 9.43301 19.433 7.04503 17.045C4.65705 14.6571 3.03257 11.7947 2.1716 8.76131C2.01139 8.19687 1.93129 7.91464 1.93006 7.5017C1.9287 7.04347 2.09006 6.42298 2.31448 6.02348C2.51673 5.66345 2.78154 5.39863 3.31116 4.86901L3.4688 4.71138C4.00024 4.17993 4.26596 3.91421 4.55134 3.76987C5.1189 3.4828 5.78917 3.4828 6.35673 3.76987C6.64211 3.91421 6.90783 4.17993 7.43927 4.71138L7.63414 4.90625C7.98375 5.25585 8.15855 5.43065 8.27284 5.60643C8.70383 6.26932 8.70383 7.1239 8.27284 7.78679C8.15855 7.96257 7.98375 8.13738 7.63414 8.48698C7.51983 8.60129 7.46268 8.65845 7.41483 8.72526C7.24482 8.96269 7.18612 9.30695 7.26785 9.5873C7.29084 9.6662 7.32078 9.72854 7.38064 9.85323Z" stroke="#553DDD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="phone" aria-label="phone"
                                    aria-describedby="addon-wrapping" name="email" id="email">
                                <label for="floatingPassword"> البريد الألكتروني </label>
                            </div>
                            <div class="input-group flex-nowrap form-floating mb-3">
                                <span class="input-group-text" id="addon-wrapping">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M17 10V8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8V10" stroke="#553DDD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 14.5V16.5M8.8 21H15.2C16.8802 21 17.7202 21 18.362 20.673C18.9265 20.3854 19.3854 19.9265 19.673 19.362C20 18.7202 20 17.8802 20 16.2V14.8C20 13.1198 20 12.2798 19.673 11.638C19.3854 11.0735 18.9265 10.6146 18.362 10.327C17.7202 10 16.8802 10 15.2 10H8.8C7.11984 10 6.27976 10 5.63803 10.327C5.07354 10.6146 4.6146 11.0735 4.32698 11.638C4 12.2798 4 13.1198 4 14.8V16.2C4 17.8802 4 18.7202 4.32698 19.362C4.6146 19.9265 5.07354 20.3854 5.63803 20.673C6.27976 21 7.11984 21 8.8 21Z" stroke="#553DDD" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <input type="password" class="form-control password" placeholder="password"
                                    aria-label="password" aria-describedby="addon-wrapping" name="password" id="password">
                                <label for="floatingPassword">كلمة المرور</label>
                            </div>
                            <div class="forget_password">
                                <a href="{{--route('teacher.auth.forgetpass')--}}./forget-password.html"> نسيت
                                    كلمة المرور ؟ </a>
                            </div>
                             <button type="submit" class="submit_form hvr-rectangle-out"> تسجيل الدخول </button>
                           <!-- <a href="./home.html" class="submit_form hvr-rectangle-out"> تسجيل الدخول   </a>-->


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
</section>
<!-- end login -->


  <script src="{{asset('assets/js/jquery.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/datatable.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
   <!-- DataTables JS -->
   <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
   <!-- DataTables Buttons CSS -->
   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
   <!-- DataTables Buttons JS -->
   <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
   <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
   <!-- JSZip for Excel export -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
   <!-- pdfmake for PDF export -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
</body>

</html>
