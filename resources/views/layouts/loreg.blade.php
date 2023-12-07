<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content={{ csrf_token() }}>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/examples/list-groups/list-groups.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <title>@yield('title') | Mascitra</title>
</head>

<body>
    @yield('content')

    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var navbar = $('.navbar');

            $(window).scroll(function() {
                if ($(this).scrollTop() > 125) {
                    navbar.addClass('scrolled');
                } else {
                    navbar.removeClass('scrolled');
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

        $(document).ready(function() {
            $('body').on('click', '#logout', function(e) {
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
            });
        })

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '#orderBtn', function(e) {
            e.preventDefault();
            $('#orderModal').modal('show');

            $('#saveOrderBtn').click(function() {
                $.ajax({
                    url: "{{ route('order') }}",
                    type: "POST",
                    data: {
                        name: $("#name").val(),
                        email: $("#email").val(),
                        phone: $("#phone").val(),
                        budget: $("input[name='budget']:checked").val(),
                        has: $("input[name='has[]']:checked").map(function () {
                            return this.value;
                        }).get(),
                        company: $("#company").val(),
                        survey: $("#survey").val(),
                        message: $("#message").val()
                    },
                    success: function(response) {
                        if (response.errors) {
                            console.log(response.errors);
                            $('#name-error').text(response.errors.name ? response.errors.name[
                                0] : '');
                            $('#email-error').text(response.errors.email ? response.errors
                                .email[0] : '');
                            $('#phone-error').text(response.errors.phone ? response.errors
                                .phone[0] : '');
                            $('#budget-error').text(response.errors.budget ? response.errors
                                .budget[0] :
                                '');
                            $('#has-error').text(response.errors.has ? response.errors.has[0] :
                                '');
                            $('#company-error').text(response.errors.company ? response.errors
                                .company[0] :
                                '');
                            $('#survey-error').text(response.errors.survey ? response.errors
                                .survey[0] :
                                '');
                            $('#message-error').text(response.errors.message ? response.errors
                                .message[0] :
                                '');
                        } else {
                            $('#name-error').text('');
                            $('#email-error').text('');
                            $('#phone-error').text('');
                            $('#budget-error').text('');
                            $('#has-error').text('');
                            $('#company-error').text('');
                            $('#survey-error').text('');
                            $('#message-error').text('');

                            $('#orderModal').modal('hide');

                            Swal.fire({
                                title: "Succeed",
                                text: response.success,
                                icon: "success"
                            });
                        }
                    }
                })
            })
        });
    </script>
</body>

</html>
