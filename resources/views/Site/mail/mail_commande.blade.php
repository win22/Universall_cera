<!DOCTYPE html>

<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

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
        <div class="container">

            <img src="{{ asset('images/logoucs.jpg')}}">
            <h3 style="color: #004669">Bonjour {{ $name }}</h3>
            <p>Nous avons reçu une commande au nom de {{ $name }} <br>
                par cette adresse email {{ $email }} le <span style="color: tomato">: {{ $date }}</span><br/>
                au niveau de notre site internet wwww.universallceramiquesuarl.com
            </p>
            <p>Voici les information de cette commande</p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-white text-center"
                           style="background-color: rgba(255,51,0,0.85); border-radius: 30px !important; color: white">
                    <tr style="background-color: rgba(255,51,0,0.85); color: white ">
                        <th style="width: 10px">image</th>
                        <th>Numero commande</th>
                        <th>Nom du Produit</th>
                        <th>Proprietaire</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Adresse</th>
                        <th>Phone</th>
                        <th>Option</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody style="background-color: #004669; color: white">

                    <tr class="text-center">
                        <td><img src="{{ URL::to(asset($image)) }}"
                                 style=" height: 40px; width: 40px; border-radius: 15px;">
                        </td>
                        <td>{{ $num_commande }}</td>
                        <td>{{ $name_produit}}</td>
                        <td>{{ $name }}</td>
                        <td>{{ $quantite }}</td>
                        <td>{{ $prix }} FCFA</td>
                        <td>{{ $adresse }}</td>
                        <td>{{ $phone }}</td>

                        <td>
                            <span style="color: tomato"> Non confirmée</span>
                        </td>

                        <td class="td-actions text-center">
                            <a id="delete" href="{{ route('validate_prod', $token) }} " title="Valider votre commande "
                               class="btn btn-success btn-link btn-sm" style="margin-left: 2px; color: #00cd5a">
                                Valider
                            </a>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <p> Merci de confirmer votre commande afin de nous <br>
                permettre de la valider.</p>

            <p> Si toute fois cette vous n'etes pas l'auteur de cette action <br>
                nous vous prions de nous contacter au numero : (+221) 33 878 65 60. <br/>
                ou par mail : sagesse@gmail.com
            </p>
            <h4 style="color: #004669">Merci<br>
                L'équipe de Gestion des commande d'universal céramique suarl.
            </h4>

        </div>
</div>
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
</body>
</html>
