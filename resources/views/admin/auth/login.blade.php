<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>{{__('auth.login')}} {{config('systemname.name')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin-asset/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin-asset/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin-asset/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin-asset/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    </head>

    <body>
       
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-soft-primary">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">{{config('systemname.name')}}</h5>
                                            <p>@lang('auth.loginmessage')</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="{{ asset('admin-asset/images/profile-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="p-2">
                                    <form class="form-horizontal" action="{{ route('admin.login') }}">
        
                                        <div class="form-group">
                                            <label for="username">{{__('auth.username')}}</label>
                                            <input type="text" class="form-control" name="username" id="username" >
                                        </div>
                
                                        <div class="form-group">
                                            <label for="userpassword">{{__('auth.password')}}</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" >
                                        </div>
                
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline">@lang('auth.rememberme')</label> 
                                        </div> 
                                        
                                        <div class="mt-3">
                                            <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">{{__('auth.login')}}</button>
                                        </div>
            
                                    </form>
                                </div>
            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{ asset('admin-asset/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin-asset/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin-asset/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin-asset/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin-asset/libs/node-waves/waves.min.js') }}"></script>
        
        <!-- App js -->
        <script src="{{ asset('admin-asset/js/app.js') }}"></script>
    </body>
</html>

