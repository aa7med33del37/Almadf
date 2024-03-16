<script src="{{ asset('layouts/frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/jquery.meanmenu.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/odometer.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/fancybox.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/jquery-ui.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/selectize.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/aos.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/form-validator.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/contact-form-script.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('layouts/frontend/assets/js/main.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($popup)
    <script>
        window.addEventListener('DOMContentLoaded', (event) => {
            setTimeout(()=>{
                Swal.fire({
                    title: "{{ $popup->popup_title ?? '' }}",
                    text: "{{ $popup->popup_text ?? '' }}",
                    icon: 'success',
                    confirmButtonText: 'تواصل معنا',
                })
            }, 2500);
        });
    </script>
    @endif

