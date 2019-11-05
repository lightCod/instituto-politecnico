<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <!-- Generated: 2018-04-16 09:29:05 +0200 -->
    <title>Instituto Politecnico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="{{asset('assets/js/require.min.js')}}"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      });
    </script>
    <!-- Dashboard Core -->
    <link href="{{asset('assets/css/dashboard.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <!-- c3.js Charts Plugin -->
    <link href="{{asset('assets/plugins/charts-c3/plugin.css')}}" rel="stylesheet" />
    <script src="{{asset('assets/plugins/charts-c3/plugin.js')}}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{asset('assets/plugins/input-mask/plugin.js')}}"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="{{ url('/') }}">
                <img src="{{asset('assets/images/logo/logo.jpg')}}" class="header-brand-img" alt="tabler logo">Instituto Politecnico
              </a>
              <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                @guest
                @else 
                  <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">{{ Auth::user()->name }}</span>
                      <small class="text-muted d-block mt-1">{{ Auth::user()->user_type }}</small>
                    </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="{{ route('user.edit') }}">
                      <i class="dropdown-icon fe fe-settings"></i> Mudar Passe
                    </a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">             
                      <i class="dropdown-icon fe fe-log-out"></i> {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @endguest
                  </div>
                </div>
              </div>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Gerir </a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="{{ url('debittypes') }}" class="dropdown-item ">Tipo de debitos</a>
                      @if(Auth::user()->user_type == 'Administrador')
                        <a href="{{ url('users') }}" class="dropdown-item ">Usuarios</a>
                      @endif  
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Cursos</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="{{ url('ncourses') }}" class="dropdown-item ">Comercias</a>
                      <a href="{{ url('courses') }}" class="dropdown-item ">N&atilde;o Comercias</a>
                    </div>
                  </li>  
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fa fa-wpforms"></i> Relatorios </a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="{{ url('report.daily') }}" class="dropdown-item ">Diario</a>
                      <a href="{{ url('report.weekly') }}" class="dropdown-item ">Semanal</a>
                      <a href="{{ url('report.monthly') }}" class="dropdown-item ">Mensal</a>
                      <a href="{{ url('report.bydate') }}" class="dropdown-item ">Por data</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('report.gender') }}" class="nav-link"><i class="fa fa-line-chart"></i> Estatistica de Generos </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
			<div class="my-3 my-md-5">
			    <div class="container">
            @yield('content')
			   </div>    
			</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="#">Acerca</a></li>
                    <li class="list-inline-item"><a href="#">Contacte-nos</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2019 <a href="#">Instituto Politecnico</a>. Developed by <a href="#" target="_blank">TechnoTur</a> All rights reserved.
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
