<!DOCTYPE html>
<html lang="en">

@include('DashboardUser.bagian._head')

<body class="fix-header fix-sidebar card-no-border">

    <div id="main-wrapper">

    @include('DashboardUser.bagian._header')

    @include('DashboardUser.bagian._sidebar')
    
    <div class="page-wrapper">
        <div class="container-fluid">
            @section('konten-dashboard')
                @show
        </div>
    </div>

    @include('DashboardUser.bagian._footer')

    </div>


    <script src="{{ asset('admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/tether.min.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('admin/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('admin/assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/js/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!-- Flot Charts JavaScript -->

    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
 
    <!-- Include Editor JS files. -->
    <script type="text/javascript" src="{{ asset('froala/js/froala_editor.pkgd.min.js') }}"></script>
 
    <!-- Initialize the editor. -->
    <script> $(function() { $('textarea').froalaEditor({height: 400}) }); </script>
    <script> $(function(){
            $('#edit').froalaEditor({
              height: 400
            })
          });
        </script>
</body>

</html>