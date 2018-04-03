<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<!-- Bootstrap popper Core JavaScript -->
<script src="{{ template_plugin('bootstrap/js/popper.min.js') }}"></script>
<script src="{{ template_plugin('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{ template_theme('bold/js/perfect-scrollbar.jquery.min.js') }}"></script>
<!--Wave Effects -->
<script src="{{ template_theme('bold/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{ template_theme('bold/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{ template_theme('bold/js/custom.min.js') }}"></script>

<!-- Bootstrap table -->
<script src="{{ template_plugin('bootstrap-table/src/bootstrap-table.js') }}"></script>
<script src="{{ template_plugin('bootstrap-table/src/locale/bootstrap-table-es-MX.js') }}"></script>
<script src="{{ template_plugin('bootstrap-table/src/extensions/export/bootstrap-table-export.js') }}"></script>
<!-- End Bootstrap table -->

<script src="{{ template_plugin('icheck/icheck.min.js') }}"></script>

<!-- PNotify -->
<script src="{{ template_plugin('icheck/icheck.min.js') }}"></script>
<script src="{{ template_plugin('pnotify/pnotify.custom.min.js') }}"></script>
<script> PNotify.prototype.options.styling = "bootstrap3"; </script>

<!-- Lightbox -->
<script src="{{ template_plugin('Magnific-Popup-master/dist/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ template_plugin('Magnific-Popup-master/dist/jquery.magnific-popup-init.js') }}"></script>


<script>
    $(document).ready(function () {

        !$('input:not(".iCheckOff"):not("[data-field]")').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue',
            increaseArea: '-20%'
        });

        $.extend($.fn.bootstrapTable.defaults, $.fn.bootstrapTable.locales['es-MX']);


        $('.bs-tbl').on('load-error.bs.table', function (e, status) {
            new PNotify({title: 'Table remote data', text: 'Status: ' + status + ', Res: ' + res, type: 'error'});
        });
        $('.bs-tbl').on('load-success.bs.table', function (e, data) {
            console.log(data);
            if (data == null) {
                new PNotify({title: 'Table remote data', text: 'data: ' + data, type: 'error'});
            }
        });
    });
</script>
<!-- End bootstrap -->

@stack('scripts')