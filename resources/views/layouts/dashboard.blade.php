<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content={{ csrf_token() }}>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>@yield('title')</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.8/cr-1.7.0/fh-3.4.0/r-2.5.0/datatables.min.css"
        rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success",
                timer: 5000
            });
        </script>
    @endif
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="/dashboard">
                    <span class="align-middle">AdminKit</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item @yield('active-dashboard')">
                        <a class="sidebar-link" href="/dashboard">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item @yield('active-user')">
                        <a class="sidebar-link" href="/dashboard/user">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">User</span>
                        </a>
                    </li>

                    <li class="sidebar-item @yield('active-admin')">
                        <a class="sidebar-link" href="/dashboard/admin">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Admin</span>
                        </a>
                    </li>

                    <li class="sidebar-item @yield('active-order')">
                        <a class="sidebar-link" href="/dashboard/order">
                            <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Order</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/dashboard/service">
                            <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Service</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Tools & Components
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-buttons.html">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-forms.html">
                            <i class="align-middle" data-feather="check-square"></i> <span
                                class="align-middle">Forms</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-cards.html">
                            <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="ui-typography.html">
                            <i class="align-middle" data-feather="align-left"></i> <span
                                class="align-middle">Typography</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="icons-feather.html">
                            <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Plugins & Addons
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="charts-chartjs.html">
                            <i class="align-middle" data-feather="bar-chart-2"></i> <span
                                class="align-middle">Charts</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="maps-google.html">
                            <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                        </a>
                    </li>
                </ul>

                <div class="sidebar-cta">
                    <div class="sidebar-cta-content">
                        <strong class="d-inline-block mb-2">Upgrade to Pro</strong>
                        <div class="mb-3 text-sm">
                            Are you looking for more components? Check out our premium version.
                        </div>
                        <div class="d-grid">
                            <a href="upgrade-to-pro.html" class="btn btn-primary">Upgrade to Pro</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator">4</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="alertsDropdown">
                                <div class="dropdown-menu-header">
                                    4 New Notifications
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-danger" data-feather="alert-circle"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Update completed</div>
                                                <div class="text-muted small mt-1">Restart server 12 to complete the
                                                    update.</div>
                                                <div class="text-muted small mt-1">30m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-warning" data-feather="bell"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Lorem ipsum</div>
                                                <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate
                                                    hendrerit et.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-primary" data-feather="home"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">Login from 192.186.1.8</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <i class="text-success" data-feather="user-plus"></i>
                                            </div>
                                            <div class="col-10">
                                                <div class="text-dark">New connection</div>
                                                <div class="text-muted small mt-1">Christina accepted your request.
                                                </div>
                                                <div class="text-muted small mt-1">14h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all notifications</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown"
                                data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="message-square"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                                aria-labelledby="messagesDropdown">
                                <div class="dropdown-menu-header">
                                    <div class="position-relative">
                                        4 New Messages
                                    </div>
                                </div>
                                <div class="list-group">
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-5.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Vanessa Tucker</div>
                                                <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis
                                                    arcu tortor.</div>
                                                <div class="text-muted small mt-1">15m ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-2.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="William Harris">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">William Harris</div>
                                                <div class="text-muted small mt-1">Curabitur ligula sapien euismod
                                                    vitae.</div>
                                                <div class="text-muted small mt-1">2h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-4.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Christina Mason</div>
                                                <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.
                                                </div>
                                                <div class="text-muted small mt-1">4h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <div class="row g-0 align-items-center">
                                            <div class="col-2">
                                                <img src="img/avatars/avatar-3.jpg"
                                                    class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                            </div>
                                            <div class="col-10 ps-2">
                                                <div class="text-dark">Sharon Lessman</div>
                                                <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed,
                                                    posuere ac, mattis non.</div>
                                                <div class="text-muted small mt-1">5h ago</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-menu-footer">
                                    <a href="#" class="text-muted">Show all messages</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                {{ $who }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                                        data-feather="user"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="pie-chart"></i> Analytics</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.html"><i class="align-middle me-1"
                                        data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1"
                                        data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" id="logout">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            @yield('content')

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                    href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div> 

    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/cr-1.7.0/fh-3.4.0/r-2.5.0/datatables.min.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
            // Line chart
            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                        "Dec"
                    ],
                    datasets: [{
                        label: "Sales ($)",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: window.theme.primary,
                        data: [
                            2115,
                            1562,
                            1584,
                            1892,
                            1587,
                            1923,
                            2566,
                            2448,
                            2805,
                            3438,
                            2917,
                            3327
                        ]
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            reverse: true,
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 1000
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });

        @if (session('success'))
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success",
                timer: 5000
            });
        @endif

        $(document).on('click', '#logout', function(e) {
            e.preventDefault();
            var link = $(this).attr("href");

            Swal.fire({
                title: "Yakin ingin logout?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Logout!"
            }).then((result) => {
                if (result.isConfirmed) {
                    location = link
                    Swal.fire({
                        title: "Logout!",
                        text: "Berhasil logout.",
                        icon: "success"
                    });
                }
            });
        })
    </script>
    

    {{-- DataTable --}}
    <script>
        $(document).ready(function() {
            $('#tableAdmins').dataTable({
                processing: true,
                serverSide: true,
                fixedHeader: true,
                ajax: {
                    url: "{{ route('adminapi') }}",
                    type: "GET",
                    dataType: "json",
                    dataSrc: "data"
                },
                columns: [
                    {
                        data: 'nama',
                        name: 'Nama'
                    },
                    {
                        data: 'email',
                        name: 'Email'
                    },
                    {
                        data: 'created_at',
                        name: 'Created_at'
                    }
                ]
            });
        });

        $(document).ready(function() {
            $('#tableUsers').dataTable({
                processing: true,
                serverSide: true,
                fixedHeader: true,
                ajax: {
                    url: "{{ route('userapi') }}",
                    type: "GET",
                    dataType: "json",
                    dataSrc: "data"
                },
                columns: [
                    {
                        data: 'nama',
                        name: 'Nama'
                    },
                    {
                        data: 'email',
                        name: 'Email'
                    },
                    {
                        data: 'created_at',
                        name: 'Created_at'
                    }
                ]
            });
        });

        $(document).ready(function() {
            $('#tableOrder').dataTable({
                processing: true,
                serverSide: true,
                fixedHeader: true,
                ajax: {
                    url: "{{ route('orderapi') }}",
                    type: "GET",
                    dataType: "json",
                    dataSrc: "data"
                },
                columns: [
                    {
                        data: 'name',
                        name: 'Name'
                    },
                    {
                        data: 'company',
                        name: 'Company'
                    },
                    {
                        data: 'budget',
                        name: 'Budget'
                    },
                    {
                        data: 'created_at',
                        name: 'Created_at'
                    },
                    {
                        data: 'aksi',
                        name: 'Aksi'
                    }
                ]
            });
        });

        $(document).ready(function() {
            $('#tableService').dataTable({
                processing: true,
                serverSide: true,
                fixedHeader: true,
                ajax: {
                    url: "{{ route('serviceapi') }}",
                    type: "GET",
                    dataType: "json",
                    dataSrc: "data"
                },
                columns: [
                    {
                        data: 'id',
                        name: 'ID'
                    },
                    {
                        data: 'title',
                        name: 'Title'
                    },
                    {
                        data: 'description',
                        name: 'Description'
                    },
                    {
                        data: 'created_at',
                        name: 'Created_at'
                    },
                    {
                        data: 'aksi',
                        name: 'Aksi'
                    }
                ]
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('body').on('click', '#serviceBtn', function(e) {
            e.preventDefault();
            $('#serviceModal').modal('show');

            $('body').on('click', '#saveServiceBtn', function() {
                var formData = new FormData();
                formData.append('title', $("#title").val());
                formData.append('description', $("#description").val());
                formData.append('gambar', $("#gambar")[0].files[0]);

                $.ajax({
                    url: "{{ route('addservice') }}",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.errors) {
                            console.log(response.errors);
                            $('#title-error').text(response.errors.title ? response.errors.title[0] : '');
                            $('#description-error').text(response.errors.description ? response.errors.description[0] : '');
                            $('#gambar-error').text(response.errors.gambar ? response.errors.gambar[0] : '');
                        } else {
                            $('#title-error, #description-error, #gambar-error').text('');
                            $('#serviceModal').modal('hide');

                            Swal.fire({
                                title: "Succeed",
                                text: response.success,
                                icon: "success"
                            });

                            $('#tableService').DataTable().ajax.reload();
                        }
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });
        });

        $('body').on('click', '#serviceEditBtn', function(e){
            var id = $(this).data('id');

            $.ajax({
                url: "/dashboard/service/" + id + '/edit',
                type: "GET",
                success: function(response){
                    console.log(response.result);
                    $("#serviceEditModal").modal('show');
                    $('#titleEdit').val(response.result.title);
                    $('#descriptionEdit').val(response.result.description);

                    $("#updateServiceBtn").click(function() {


                        $.ajax({
                            url: "/dashboard/service/" + id + '/update',
                            type: 'POST',
                            data: {
                                title: $('#titleEdit').val(),
                                description: $('#descriptionEdit').val()
                            },
                            success: function(response) {
                                console.log(response);
                                if (response.errors) {
                                    // Tampilkan pesan kesalahan di bawah input yang sesuai
                                    $('#titleEdit-error').text(response.errors.title ?
                                        response.errors
                                        .title[0] : '');
                                    $('#descriptionEdit-error').text(response.errors.description ?
                                        response.errors
                                        .description[0] : '');
                                } else {
                                    // Sembunyikan pesan kesalahan jika tidak ada kesalahan
                                    $('#titleEdit-error').text('');
                                    $('#descriptionEdit-error').text('');

                                    $('#serviceEditModal').modal('hide');

                                    Swal.fire({
                                        title: "Succeed",
                                        text: response.success,
                                        icon: "success"
                                    });

                                }
                                $('#tableService').DataTable().ajax.reload();
                            }
                        });
                    });
                }
            })
        });

        $('body').on('click', '#serviceDeleteBtn', function(e) {
        var id = $(this).data('id');
        $.ajax({
            url: '/dashboard/service/' + id + '/delete',
            type: 'GET',
            success: function(response) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "Delete with title " + response.result.title,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: response.success,
                            icon: "success"
                        });
                        $.ajax({
                            url: '/dashboard/service/' + id + '/destroy',
                            type: 'delete'
                        });
                        $('#tableService').DataTable().ajax.reload();
                    }
                });
            }
        });
    });

    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
            var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                prevArrow: "<span title=\"Previous month\">&laquo;</span>",
                nextArrow: "<span title=\"Next month\">&raquo;</span>",
                defaultDate: defaultDate
            });
        });
    </script>

</body>

</html>
