<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <title>Admin dashboard</title>

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
{{--    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">--}}


</head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

<div class="wrapper">
    <!-- Header  -->
    @include('admin.body.headerh')

    @include('admin.body.sidebar')

    <div class="content-wrapper">
        <div class="container-full">

            @yield('admin')

        </div>
    </div>

    @include('admin.body.footer')

</div>


<!-- Vendor JS -->
<script src="{{ asset('js/vendors.min.js') }}"></script>
<script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
<script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>

<script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
{{--<script src="{{ asset('js/pages/data-table.js') }}"></script>--}}
<!-- Sunny Admin App -->
<script src="{{ asset('js/template.js') }}"></script>
<script src="{{ asset('js/pages/dashboard.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{--<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>--}}
<script type="text/javascript">
    $(function () {
        $(document).on('click', '#delete', function (e) {
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
                title: 'Are you sure?',
                text: "Delete This Data!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#fe0116',
                cancelButtonColor: '#23a637',
                confirmButtonText: 'Yes, delete it!',
                method: "delete"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = link
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        });
    });
</script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
    @if( Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}"
    switch (type) {
        case 'info':
            toastr.info(" {{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success(" {{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning(" {{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error(" {{ Session::get('message') }}");
            break;
    }
    @endif
</script>


</body>
</html>
