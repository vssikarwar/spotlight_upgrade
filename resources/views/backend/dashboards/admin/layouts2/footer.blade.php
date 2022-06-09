<div class="control-sidebar-bg"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
        <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
        <script src="{{ URL::asset('js/star-rating.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.slimscroll.min.js') }}">

        </script><script src="{{ URL::asset('js/fastclick.js') }}"></script>
        <script src="{{ URL::asset('js/AdminLTE.min.js') }}"></script>
        <script src="{{ URL::asset('js/select2.min.js') }}"></script>
        <script src="{{ URL::asset('js/chosen.ajaxaddition.jquery.js?q=60820317') }}"></script>
        <script src="{{ URL::asset('js/Chart.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery-ui-1.10.4.custom.min.js') }} "></script>
        <script src="{{ URL::asset('js/common.js') }}"></script>
        <script src="{{ URL::asset('js/form.submit.js') }} "></script>       
        <script type="text/javascript">
            $(document).ready(function () {
                $(".navbar .menu").slimscroll({
                    height: "200px",
                    alwaysVisible: false,
                    size: "3px"
                }).css("width", "100%");

                var a = $('a[href="/affinity-categories"]');
                if (!a.parent().hasClass('treeview')) {
                    a.parent().addClass('active').parents('.treeview').addClass('active');
                }
            });
            $('.select2').select2();
        </script>
        
    </body>
</html>