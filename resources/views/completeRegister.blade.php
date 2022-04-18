<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prof</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('/CustomAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('/CustomAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ajoutez vos infos!</h1>
                            </div>
                            <form method="POST" class="user" action="{{ route('Enregistrer') }}">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="Last_name"
                                            placeholder="Nom">
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="date_birth"
                                            placeholder="Date de naissance (aaaa-mm-jj)">
                                    </div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="date_recrutement"
                                            placeholder="Date de recrutement">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="state"
                                            placeholder="Etat (interne/externe)">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="speciality"
                                            placeholder="Specialité">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-sm-6">
                                        <input type="file" class="form-control form-control-user" name="File"
                                            placeholder="Dossier">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="File_type"
                                            placeholder="Type du dossier">
                                    </div>
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Enregistrer') }}
                                </button>
                                
                            </form>
                               
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('voyager.login') }}">Avez vous déjà un compte? s'identifier!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>