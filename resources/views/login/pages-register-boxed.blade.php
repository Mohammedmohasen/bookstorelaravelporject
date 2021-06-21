<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register Boxed - ArchitectUI HTML Bootstrap 4 Dashboard Template</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="ArchitectUI HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="{{ asset('admin/main.d810cf0ae7f39f28f336.css') }}" rel="stylesheet"></head>

<body>

    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            
                        <form method="POST"  action="{{ action('controlController@store') }}">
                     <input type="hidden" name="requestName" value="register"/>
            <div class="h-100 bg-premium-dark">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="app-logo-inverse mx-auto mb-3"></div>
                        <div class="modal-dialog w-100">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <h5 class="modal-title">
                                        <h4 class="mt-2">
                                            <div>Welcome,</div>
                                            <span>It only takes a <span class="text-success">few seconds</span> to create your account</span>
                                        </h4>
                                    </h5>
                                     @csrf
                                    
                                    <div class="divider row"></div>
                                  @include('include.massege')
                                    <div class="form-row">
                                    
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="email" id="exampleEmail"  placeholder="Email here..." type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="username" id="exampleName" placeholder="Name here..." type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <input name="password"  id="examplePassword" placeholder="Password here..." type="password"  class="form-control">
                                            </div>
                                        </div>
                                   
                                    </div>
                                    <div class="divider row"></div>
                                    <h6 class="mb-0">Already have an account? 
                                     
                                        <a name="signin" href="{{ route('login') }}" class="text-primary">Sign in</a> | 
                                    </h6>
                                </div>
                                <div class="modal-footer d-block text-center">
                                    <input type="submit" class="btn-wide btn-pill btn-shadow btn-hover-shine btn btn-primary btn-lg" value='Create Account' />
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">Copyright © ArchitectUI 2019</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                                      </form>

<script type="text/javascript" src="{{ asset('admin/assets/scripts/main.d810cf0ae7f39f28f336.js') }}"></script></body>

</html>