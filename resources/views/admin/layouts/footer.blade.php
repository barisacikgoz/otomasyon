<aside class="control-sidebar control-sidebar-dark">
</aside>
</div>

<script src="{{ asset('lte/') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ asset('lte/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/chart.js/Chart.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/sparklines/sparkline.js"></script>
<script src="{{ asset('lte/') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<script src="{{ asset('lte/') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{ asset('lte/') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/summernote/summernote-bs4.min.js"></script>
<script src="{{ asset('lte/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="{{ asset('lte/') }}/dist/js/adminlte.js"></script>
<script src="{{ asset('lte/') }}/dist/js/demo.js"></script>
<script src="{{ asset('lte/') }}/dist/js/pages/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
@toastr_js
@toastr_render

</body>
</html>
<script>
    $(document).ready( function () {
        $('#brand_list').DataTable();

        $('.amount').on('change', function (){
            let amount = $(this).val();
            let item_price = $(this).attr("data-price");
            let total = parseInt(amount) * parseFloat(item_price);

            $(".total_price").html(total+" TL");
        });

        $('#confirmation').on('change', function (){
            let confirm = $(this).val();
            console.log(confirm)
        });
    });

    $(document).ready( function () {
        $('#product_list').DataTable();
    } );
</script>
