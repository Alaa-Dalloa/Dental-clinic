<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DENTACARE</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DENTACARE') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    DENTACARE
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
                    @if (Auth::check())
                        @if (Auth::user()->role ==1 ||Auth::user()->role ==2 )
                           <!-- Operations -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Operations
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('operations.index')}}">All Operations</a>
                                    <a class="dropdown-item" href="{{route ('operations.create')}}">Add Operation</a>
                                  </div>
                                </li>

                       
                           <!-- Specializations -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Specializations
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('specializations.index')}}">All Specializations</a>
                                    <a class="dropdown-item" href="{{route ('specializations.create')}}">Add Specializations</a>
                                  </div>
                                </li>


                                <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Patient
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('patients.index')}}">All Patient</a>
                                    <a class="dropdown-item" href="{{route ('patients.create')}}">Add Patient</a>
                                  </div>
                                </li>


                                 <!-- Dropdown -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Doctors
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('doctors.index')}}">All Doctors</a>
                                    <a class="dropdown-item" href="{{route ('doctors.create')}}">Add Doctors</a>
                                  </div>
                                </li>
                                <!-- Dropdown -->

                                  <!-- Reveals -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Reveals
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('reveals.index')}}">All Reveals</a>
                                    <a class="dropdown-item" href="{{route ('reveals.create')}}">Add Reveal</a>
                                  </div>
                                </li>

                                                         
                              
                                  <!-- Services -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Services
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('services.index')}}">All Services</a>
                                    <a class="dropdown-item" href="{{route ('services.create')}}">Add Service</a>
                                  </div>
                                </li>


                                        <!-- Reservations -->
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Reservations
                                  </a>
                                  <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('reservations.index')}}">All Reservations</a>
                                    <a class="dropdown-item" href="{{route ('reservations.create')}}">Add Reservation</a>
                                  </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('control')}}">Control</a>
                                </li>
                           @else

                               {{-- notification --}}

                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Notification
                                  </a>
                                  <div class="dropdown-menu">
                                    @forelse ($user->notifications as $notification)
                                    <a class="dropdown-item" href="{{route('services.show',$notification->data['name'])}}">{{$notification->data['name']}}</a>
                                  
                                    @empty
                                      No notification  
                                    @endforelse
                                   
                                  
                                  </div>
                                </li> 


                            @endif
                       @endif
                   </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>


                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('control') }}">{{ __('control') }}</a>
                          </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
