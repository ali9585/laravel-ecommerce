<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script>
    var token = $("meta[name='csrf-token']").attr("content");
    $.ajaxPrefilter(function(options, originalOptions, jqXHR) {
        jqXHR.setRequestHeader('X-CSRF-Token', token);
    });
</script>
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>
<script src="{{ asset('assets/js/main-2.js') }}"></script>
<script src="{{ asset('assets/js/app-ecommerce-product-list.js') }}"></script>
<script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@yield('page-script')
<!-- END: Page JS-->
