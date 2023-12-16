<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPIAKAD 2023</title>

    <link rel="stylesheet" href="{{asset('temp/assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{asset('temp/assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{asset('temp/assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('temp/assets/images/logo/favicon.png')}}" type="image/png">

<link rel="stylesheet" href="{{asset('temp/assets/css/shared/iconly.css')}}">
<link rel="stylesheet" href="{{asset('temp/assets/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/pages/fontawesome.css')}}">
<link rel="stylesheet" href="{{asset('temp/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}">
<link rel="stylesheet" href="{{asset('temp/assets/css/pages/datatables.css')}}">
<link rel="stylesheet" href="{{asset('temp/assets/extensions/choices.js/public/assets/styles/choices.css')}}">
<link rel="stylesheet" href="{{asset('temp/assets/extensions/toastify-js/src/toastify.css')}}">
<link rel="stylesheet" href="{{asset('temp/assets/extensions/@fortawesome/fontawesome-free/css/all.min.css')}}">
</head>

<body onload="myFunction()">
    <div class="loader" id="loader">
        {{-- <div class="loading">
          <img src="{{asset('preloader.gif')}}" width="80">
        </div> --}}
      </div>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                {{-- <a href="index.html"><img src="{{asset('temp/assets/images/logo/logo.svg')}}" alt="Logo" srcset=""></a> --}}
                <a href="/ddashboard"><img src="{{asset('temp/assets/images/logo/logo.svg')}}" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        @if (Auth::user()->role == 'admin')
        <ul class="menu">
            <li>
                <div class="dropdown">
                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2" >
                            <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name">{{Auth::user()->name}}</h6>
                            <p class="user-dropdown-status text-sm text-muted">{{Auth::user()->role}}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                      {{-- <li><a class="dropdown-item" href="#">My Account</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li> --}}
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                      </li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-title">Menu</li>

            <li
                class="sidebar-item @yield('dashboard') ">
                <a href="/" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            {{-- <li
                class="sidebar-item @yield('dosen') ">
                <a href="/ddashboard" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dosen</span>
                </a>
            </li> --}}
            <li class="sidebar-title">Settings</li>
            <li
                class="sidebar-item @yield('headproduct') has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-clipboard-check-fill"></i>
                    <span>Nilai Manajemen</span>
                </a>
                <ul class="submenu @yield('ulnilai')">
                    <li class="submenu-item @yield('inputnilai')">
                        <a href="/input-nilai">Input Nilai </a>
                    </li>
                    {{-- <li class="submenu-item @yield('knnnilai')">
                        <a href="/knn-nilai">KNN-Manajemen</a>
                    </li> --}}
                </ul>
            </li>
            <li
                class="sidebar-item @yield('headuser') has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Users</span>
                </a>
                <ul class="submenu @yield('uluser')">
                    <li class="submenu-item @yield('alldosen')">
                        <a href="/all-user?role=dosen">Dosen</a>
                    </li>
                    <li class="submenu-item @yield('alladmin')">
                        <a href="/all-user?role=admin">Admin</a>
                    </li>

                </ul>
            </li>
            {{-- <li
                class="sidebar-item @yield('inputnilai') ">
                <a href="/input-nilai" class='sidebar-link'>
                    <i class="bi bi-clipboard-check-fill"></i>
                    <span>Input Nilai</span>
                </a>
            </li> --}}

            <li class="sidebar-title">Settings</li>

            <li
                class="sidebar-item @yield('headproduct') has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Perkuliahan</span>
                </a>
                <ul class="submenu @yield('ulproduct')">
                    <li class="submenu-item @yield('allproduct')">
                        <a href="/mmatkul">Manajemen Matkul</a>
                    </li>
                    <li class="submenu-item @yield('allproduct')">
                        <a href="/all-user?role=admin">Tambah Matkul</a>
                    </li>
                    <li class="submenu-item @yield('allproduct')">
                        <a href="/all-user?role=admin">Kelompok</a>
                    </li>
                </ul>
            </li>
            <li
                class="sidebar-item @yield('headuser') has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Users</span>
                </a>
                <ul class="submenu @yield('uluser')">
                    <li class="submenu-item @yield('alldosen')">
                        <a href="/all-user?role=dosen">Dosen</a>
                    </li>
                    <li class="submenu-item @yield('alladmin')">
                        <a href="/all-user?role=admin">User Management</a>
                    </li>

                </ul>
            </li>

        </ul>
        @else
        <ul class="menu">
            <li>
                <div class="dropdown">
                    <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="avatar avatar-md2" >
                            <img src="{{asset('temp/assets/images/faces/1.jpg')}}" alt="Avatar">
                        </div>
                        <div class="text">
                            <h6 class="user-dropdown-name">{{Auth::user()->name}}</h6>
                            <p class="user-dropdown-status text-sm text-muted">{{Auth::user()->role}}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                      {{-- <li><a class="dropdown-item" href="#">My Account</a></li>
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><hr class="dropdown-divider"></li> --}}
                      <li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                      </li>
                    </ul>
                </div>
            </li>

            <li class="sidebar-title">Menu</li>
            
            {{-- <li
                class="sidebar-item @yield('dosen') ">
                <a href="/dosen" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dosen</span>
                </a>
            </li> --}}
            
            <li class="sidebar-item @yield('dashboard') ">
            <a href="/" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
            </li>
            
            {{-- <li
                class="sidebar-item @yield('inputnilai') ">
                <a href="/input-nilai" class='sidebar-link'>
                    <i class="bi bi-clipboard-check-fill"></i>
                    <span>Input Nilai</span>
                </a>
            </li> --}}

        </ul>
        @endif
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="col-sm animate-bottom" style="display:none" id="content">
                <div class="container-sm"></div>
                @yield('content')
            </div>
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2023 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi & Haris Adiyatma Farhan</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{asset('temp/assets/js/bootstrap.js')}}"></script>
    <script src="{{asset('temp/assets/js/app.js')}}"></script>
{{-- JQUERY --}}
    <script src="{{asset('temp/assets/extensions/jquery/jquery.min.js')}}"></script>
{{-- DATATABLES --}}
    <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
    <script src="{{asset('temp/assets/js/pages/datatables.js')}}"></script>
<!-- Need: Apexcharts -->
    <script src="{{asset('temp/assets/extensions/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('temp/assets/js/pages/dashboard.js')}}"></script>

<script>
    function myFunction() {
        setTimeout(showPage, 200);
    }
    function showPage() {
        document.getElementById("loader").style.display = "none";
        // $("#content").fadeIn();
        document.getElementById("content").style.display = "block";
    }
</script>
<script src="{{asset('temp/assets/extensions/choices.js/public/assets/scripts/choices.js')}}"></script>
<script src="{{asset('temp/assets/js/pages/form-element-select.js')}}"></script>
<script src="{{asset('temp/assets/extensions/toastify-js/src/toastify.js')}}"></script>

@if (Session::has('success'))
<script>
    $(document).ready(function(){
        Toastify({
            text: "<?php echo Session::get('success') ?>",
            duration: 3000,
            style: {
                background: "green",
            }
        }).showToast();
    })
</script>

@endif

@yield('script')
</body>

</html>
