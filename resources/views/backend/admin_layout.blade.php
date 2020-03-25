@if(Auth::check())
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Universall ceramique </title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/fontawesome-free/css/all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/assets/dist/css/adminlte.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('backend/assets/plugins/toastr/toastr.min.css') }}">
    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">

        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" style="color: orangered" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <p class="reveal-3" style="color: white; padding-top: 20px">
            Pannel d'administration
        </p>
        <p hidden class="alert ">{{ $message = Session::get('message')}}</p>
        @if($message)
        <div id="alert"  class="alert alert-success alert-with-icon small right ml-5">
            <i class="fa fa-bell" data-notify="icon"></i>
            </button>
            <span class="text-center data-notify="message"> {{$message }} </span>
        </div>
        {{ Session::put('message',NULL) }}
        @endif

        <!-- Right navbar links -->

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-orange elevation-4" >
        <!-- Brand Logo -->
        <a href="/dashboard" class="brand-link">
            <img style="width: 63px; border-radius: 10px" src="{{ asset('images/logoucs.jpg')}}">
            <span class="brand-text text-white font-weight-light">U.ceramique</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ URL::asset(Auth::user()->image)}}"  class="img-circle">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="/dashboard" class="nav-link {{ request()->is('dashboard')? 'active' : ''  }}" >
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Tableau de bord
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/all_admin" class="nav-link {{ request()->is('all_admin')? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Utilisateurs
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sol') }}" class="nav-link {{ request()->is('all_sol')? 'active' : '' }}">
                            <i class=" {{ request()->is('all_sol')? 'nav-icon fas fa-circle' : 'far fa-circle nav-icon' }} "></i>

                            <p>
                                Sol
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sol') }}" class="nav-link {{ request()->is('all_faience')? 'active' : '' }}">
                            <i class=" {{ request()->is('all_faience')? 'nav-icon fas fa-circle' : 'far fa-circle nav-icon' }} "></i>

                            <p>
                                Faience
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sol') }}" class="nav-link {{ request()->is('all_anitaire')? 'active' : '' }}">
                            <i class=" {{ request()->is('all_anitaire')? 'nav-icon fas fa-circle' : 'far fa-circle nav-icon' }} "></i>

                            <p>
                                Sanitaire
                            </p>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a href="/logout" class="nav-link">
                            <i style="color: orangered" class="nav-icon fas fa-power-off"></i>
                            <p>
                                Déconnexion
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @yield('contenu')
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    <!-- Main Footer -->
    <footer class="main-footer card-success1 card-outline1">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            Universal Céramique
        </div>
        <!-- Default to the left -->
        <span class="small">Copyright &copy; 2020 | Design by  <a  href="http://nataalagency.com/">Nataal Agency</a>.</span>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('backend/assets/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('backend/assets/dist/js/my.js') }}"></script>
<script src="{{ asset('backend/assets/dist/js/app.js') }}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('backend/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<!-- Toastr -->
<script src="{{ asset('backend/assets/plugins/toastr/toastr.min.js') }}"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/js/fileinput.js" type="text/javascript"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/themes/fa/theme.js" type="text/javascript"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" type="text/javascript"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" type="text/javascript"></script>-->


<!-- Pour declenché l'action du bouton delete -->
<script type="text/javascript" src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>
<script>
    $(document).on("click", "#delete",function (e) {
        e.preventDefault();
        var link = $(this).attr("href");
        bootbox.confirm("Voulez-vous poursuivre cette action?", function (confirmed) {
            if (confirmed) {
                window.location.href = link;
            };
        });
    });
</script>
<!-- Pour mon modal de modification -->
<script>
    $('#updateModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var email = button.data('email')
        var role = button.data('role')

        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #email').val(email)
        modal.find('.modal-body #role').val(role)
    })
</script>

<script>
    $('#updateModal2').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var email = button.data('email')
        var message = button.data('message')
        var phone = button.data('phone')
        var name_p = button.data('name_p')


        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #name').val(name)
        modal.find('.modal-body #email').val(email)
        modal.find('.modal-body #message').val(message)
        modal.find('.modal-body #phone').val(phone)
        modal.find('.modal-body #name_p').val(name_p)
    })
</script>

<script>
    $('#updateModal3').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)
        var id = button.data('id')
        var model = button.data('model')
        var prix = button.data('prix')
        var taille = button.data('taille')
        var categorie_id = button.data('categorie_id')
        var parent_id = button.data('parent_id')
        var description = button.data('description')


        var modal = $(this)
        modal.find('.modal-body #id').val(id)
        modal.find('.modal-body #model').val(model)
        modal.find('.modal-body #prix').val(prix)
        modal.find('.modal-body #taille').val(taille)
        modal.find('.modal-body #categorie_id').val(categorie_id)
        modal.find('.modal-body #parent_id').val(parent_id)
        modal.find('.modal-body #description').val(description)
    })
</script>


<!-- Pour afficher l'animation au niveau de l'alerte -->
<script>
    jQuery(function ($) {
        var alert = $('#alert');
        if(alert.length > 0){
            alert.hide().slideDown(730).delay(3850).slideUp(600);

        }
    })
</script>
<script type="text/javascript">
    $(function() {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        $('.swalDefaultSuccess').click(function() {
            Toast.fire({
                type: 'success',
                title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
            })
        });

    });

</script>
<script>
    $(document).ready(function () {
        $(".forma").hide();

        $('.dynamic2').change(function () {

            if($(this).val() != '')
            {
                var select = $(this).attr("id");
                var value = $(this).val();

                if (value == 1) {
                    $(".forma").hide().slideDown("slow");
                };
                if (value ==2) {
                    $(".forma").hide().slideUp("slow");

                };
            }
        });
    });
</script>

<!--pour le slide du back-->
<script>
    $(document).ready(function () {
        $('.slider').bxSlider({
            sliderWidth: 500
        });
    });
</script>
<!-- pour le hover au niveau des card -->
<script>
    $(document).ready(function () {
        $('.carde').hover(
            function () {
                $(this).animate({
                    marginTop: "-1%",
                },100);
            },
            function () {
                $(this).animate({
                    marginTop: "0%",
                },100);
            }
        )
    });
</script>

<!--Annimation pour la transition -->

</body>
</html>
@endif
