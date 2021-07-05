<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon -->
    <link href="{{ asset('img/favicon/favicon.png') }}" rel="icon" type="image/png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!-- Google Font: Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
    <div class="wrapper">
        @include('layouts.admin.header')

        @include('layouts.admin.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    @yield('main-content')
                </div>
            </section>
        </div>

    </div>

    <!-- jQuery -->

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <!-- format money -->
    <script src="{{ asset('vendor/jquery/simple.money.format.js') }}"></script>
    <script type="text/javascript">
        $('.format_money').simpleMoneyFormat();
        $(function() {
            $('.checkbox_warpper').on('click', (function() {
                $(this).parents('.dadd').find('.checkbox_chỉldren').prop('checked', $(this).prop('checked'));
            }));
            $('.checkalls').on('click', (function() {
                $(this).parents().find('.checkbox_chỉldren').prop('checked', $(this).prop('checked'));
                $(this).parents().find('.checkbox_warpper').prop('checked', $(this).prop('checked'));
            }));
        });
    </script>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}">
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/locales/bootstrap-datepicker.vi.min.js') }}" charset="UTF-8">
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
    <script>
        $('.select2_init').select2({
            'placeholder': '--Chọn vai trò--'
        });
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('vendor/adminlte/adminlte.min.js') }}"></script>

    <script src="{{ asset('js/admin.js') }}"></script>

    <!--  -->
    <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js') }}"></script>



    <!-- validate -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        function init_text_editor() {
            tinymce.init({
                selector: "textarea.rich-text",
                menubar: false,
                relative_urls: false,
                remove_script_host: false,
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime media nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor",
                ],
                toolbar: "styleselect bold italic bullist numlist alignleft aligncenter alignright alignjustify  outdent indent link table image media preview code fullscreen",
            });
        }
        init_text_editor();
    </script>


    <script>
        //delete
        var user_id;
        var data;
        $(document).on('click', ".delete-d", function() {
            user_id = $(this).attr('id');
            data = $(this).attr('data');
            console.log("user_id" + user_id + "va" + data);
            $("#exampleModal").modal("show");
            $('#confirm-delete').click(function() {
                destroy(user_id, data);
                $("#exampleModal").modal("hide");
            });
        })


        function destroy(user_id, data) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "DELETE",
                url: `/${data}/delete/${user_id}`,
                dataType: "json",
                data: {
                    "id": user_id
                },
                success: function() {
                    $('#hdcnModal').modal('hide');
                    console.log('success');
                    location.reload();
                },
                error: function(xhr, textStatus, thrownError) {
                    console.log(' Error');
                    location.reload();
                },
            });

        }
        //cancel
        $(document).on('click', "#cancel", function() {
            location.reload();
        });
        //end cancel
        //end delete
    </script>
    <script>
        var change_id;
        var dataUpdate;
        //statrt update
        $(document).on('click', ".status", function() {
            change_id = $(this).attr('id');
            dataUpdate = $(this).attr('data');
            $("#exampleModal1").modal("show");
            $('#confirm-change').click(function() {
                changeUser(change_id, dataUpdate);
                $("#exampleModal1").modal("hide");
            });
        })

        function changeUser(change_id, dataUpdate) {
    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: `/${dataUpdate}/update/${change_id}`,
                dataType: "json",
                data: {
                    "id": change_id
                },
                success: function() {
                    $('#hdcnModal').modal('hide');
                    console.log('success');
                    location.reload();
                },
                error: function(xhr, textStatus, thrownError) {
                    console.log(' Error');
                    location.reload();
                },
            });

        }
    </script>

    <style>
        #resetPass {
            opacity: 0;
            visibility: hidden;
        }

        .opacity {
            opacity: 1 !important;
            visibility: visible !important;
        }

        .swal-button-container .swal-button--cancel {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .swal-button-container .swal-button--cancel:hover {
            color: #fff;
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .swal-button-container .swal-button--confirm {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .swal-button-container .swal-button--confirm:hover {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .swal-modal .swal-title {
            text-align: left;
            color: #666666;
            font-size: 20px;
        }

        .block {
            display: inline-block;
        }

        #resetPass {
            border: 0;
            background-color: #f5f6fa !important;
            outline: none;
        }

        #resetPass:hover {
            color: #f70 !important;
        }
    </style>
    <script>
        $('.selectall').click(function() {
            $('.selectbox').prop('checked', $(this).prop('checked'));
        })
        $('.selectbox').change(function() {
            var total = $('.selectbox').length;
            var number = $('.selectbox:checked').length;
            if ((total) == number) {
                $('.selectall').prop('checked', true);
            } else {
                $('.selectall').prop('checked', false);
            }
        })
        $('input[type=checkbox]').click(function() {
            if ($(this).is(':checked')) {
                $("#resetPass").addClass("opacity")
            }
        });
    </script>
    <script>
        $(function() {
            $("#deposit_date").datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked",
                clearBtn: true,
                language: "vi",
                autoclose: true,
                todayHighlight: true,
                toggleActive: true,
                orientation: "bottom auto",
            });
            $("#departure_time").datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked",
                clearBtn: true,
                language: "vi",
                autoclose: true,
                todayHighlight: true,
                toggleActive: true,
                orientation: "bottom auto",
            });
            $('.input-daterange').datepicker({
                todayBtn: "linked",
                clearBtn: true,
                todayHighlight: true,
                language: "vi",
                orientation: "bottom auto",
                format: "yyyy-mm-dd",
            });
        });
    </script>


    <script>
        jQuery.validator.setDefaults({
            debug: true,
            success: "valid"
        });
        $("#myform").validate({
            rules: {
                field: {
                    required: true,
                    email: true,
                },
                phone: {
                    required: true,
                    number: true,
                },
                commission_adult: {
                    required: true
                },
                password_comfirm: {
                    equalTo: "#password",
                },
                amount: {
                    required: true,
                    number: true,
                },
                income_fee: {
                    required: true,
                    number: true,
                }
            },
            messages: {
                phone: {
                    required: "Vui lòng nhập số điện thoại"
                },
                email: {
                    required: "Vui lòng nhập email"
                },
                address: {
                    required: "Vui lòng nhập địa chỉ"
                },
                full_name: {
                    required: "Vui lòng nhập tên đầy đủ"
                },
                name: {
                    required: "Vui lòng nhập tên"
                },
                commission_adult: {
                    required: "{{ trans('common.confirm_required_commission_adult') }}"
                },
                description: {
                    required: "{{ trans('common.confirm_required_description') }}"
                },
                code: {
                    required: "Vui lòng nhập mã sản phẩm"
                },
                doc_no: {
                    required: "{{ trans('common.confirm_required_doc_no') }}"
                },
                income_fee: {
                    required: "{{ trans('common.confirm_required_income_fee') }}"
                },
                deposit_date: {
                    required: "{{ trans('common.confirm_required_deposit_date') }}"
                },
                amount: {
                    required: "{{ trans('common.confirm_required_amount') }}"
                },
                //booking
                departure_time: {
                    required: "{{ trans('common.confirm_required_departure_time') }}"
                },
                destination_time: {
                    required: "{{ trans('common.confirm_required_destination_time') }}"
                },
                flight_number: {
                    required: "{{ trans('common.confirm_required_flight_number') }}"
                },

            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
</body>

</html>