@extends('layouts.app')

@section('content')
    {{-- Datatable --}}
    <div class="content">
        <div class="container-fluid mb-4" display="none">
            <div class="card">
                <div class="card-header">
                    {{-- <h4 class="mb-1">Visitor Registration</h4> --}}
                    <div class="row">
                        <div class="col-12">
                            <h4 class="">
                                FILTER
                            </h4>
                            {{-- <hr class="border-bottom border-0 border-dark"> --}}
                        </div>
                    </div>
                </div>

                <div class="card-block" id="">
                    <form action="" method="" id="report">
                        <div class="row">
                            <div class="col-sm-12">

                                {{-- Row 1 --}}
                                <div class="form-group row mt-3 ms-3 me-3">
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="idCard_filter">ID Card</Title></label>
                                        <input type="text" id="idCard_filter"
                                            name="idCard_filter" class="form-control input-sm"
                                            placeholder="Search ID Card" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="name_filter">Name</Title></label>
                                        <input type="text" id="name_filter"
                                            name="name_filter" class="form-control input-sm"
                                            placeholder="Search Name" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="phoneNumber_filter">Phone Number</Title></label>
                                        <input type="text" id="phoneNumber_filter" name="phoneNumber_filter"
                                            class="form-control input-sm" placeholder="Search Phone Number" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="email_filter">Email</Title></label>
                                        <input type="text" id="email_filter" name="email_filter"
                                            class="form-control input-sm" placeholder="Search Email" autocomplete="off">
                                    </div>

                                </div>

                                {{-- Row 2 --}}
                                <div class="form-group row mt-2 ms-3 me-3 mb-4">
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="created_filter">Created At</Title></label>
                                        <input type="date" id="created_filter"
                                            name="created_filter"class="form-control input-sm date datetimepicker"
                                            type="text" data-min-view="2" data-date-format="yyyy-mm-dd"
                                            autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="updated_filter">Updated At</Title></label>
                                        <input type="date" id="updated_at"
                                            name="updated_at"class="form-control input-sm date datetimepicker"
                                            type="text" data-min-view="2" data-date-format="yyyy-mm-dd"
                                            autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="submitSearch">&nbsp;</label>
                                        <button id="submitSearch" name="submitSearch"
                                            class="btn btn-space btn-primary form-control input-sm"
                                            type="button">Search</button>
                                    </div>

                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="resetFilter">&nbsp;</label>
                                        <button id="resetFilter" name="resetFilter"
                                            class="btn btn-space btn-secondary form-control input-sm"
                                            type="button">Reset</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>

        
        <div class="container-fluid pb-5" id="">
            <div class="card header-info-filter">
                <div class="card-body">
                    <div class="button-row" style="display: flex; justify-content:end; gap: 10px;">
                        <button id="excelButton" class="btn btn-success mb-3">
                            <i class="fa-regular fa-file-excel me-0"></i> Excel
                        </button>

                        <button id="btnAddData" type="button" class="btn btn-success mb-3" data-toggle="modal">
                            Add New Data
                        </button>
                    </div>

                    <table id="inputTable" width="100%" class="table table-striped nowrap m-1">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID Card</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot></tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

    {{-- Modal Add --}}
    <div class="modal fade" id="modalInput" tabindex="-1" aria-labelledby="modalInput" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="" method="POST" id="formInput">
                        @csrf
                        <div class="mb-3">
                            <label for="idCard" class="form-label">ID Card</label>
                            <input type="text" name="idCard" id="idCard" class="form-control" placeholder="Input ID Card" required>
                            <span id="idCard_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Input Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="text" name="phoneNumber" id="phoneNumber" class="form-control" placeholder="Input Phone Number" required>
                            <span id="phoneNumber_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Input Email" required>
                            <span id="email_error" class="text-danger"></span>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Detail --}}
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetail" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="" method="POST" id="formDetail">
                        @csrf
                        <input type="hidden" id="input_id" name="input_id">
                        <div class="mb-3">
                            <label for="idCard_detail" class="form-label">ID Card</label>
                            <input type="text" name="idCard_detail" id="idCard_detail" class="form-control" placeholder="Input ID Card" required>
                            <span id="idCard_detail_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="name_detail" class="form-label">Name</label>
                            <input type="text" name="name_detail" id="name_detail" class="form-control" placeholder="Input Name" required>
                        </div>

                        <div class="mb-3">
                            <label for="phoneNumber_detail" class="form-label">Phone Number</label>
                            <input type="text" name="phoneNumber_detail" id="phoneNumber_detail" class="form-control" placeholder="Input Phone Number" required>
                            <span id="phoneNumber_detail_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="email_detail" class="form-label">Email</label>
                            <input type="text" name="email_detail" id="email_detail" class="form-control" placeholder="Input Email" required>
                            <span id="email_detail_error" class="text-danger"></span>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSaveEdit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            table = $('#inputTable').DataTable({
                "responsive": false,
                "paging": true,
                "scrollX": true,
                "scrollY": "500px",
                "scrollCollapse": true,
                "scroller": true,
                "order": [],
                "autoWidth": true,
                "searching": false,
                lengthMenu: [
                    [10, 25, 50, -1],
                    ['10', '25', '50', 'All']
                ],
                "buttons": [{
                    extend: 'excelHtml5',
                    text: '<i class="fa-regular fa-file-excel me-0"></i> Excel',
                    className: 'buttons-excel d-none',
                    filename: function() {
                        return "Excel Report-" + new Date().getTime();
                    },
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6]
                    }
                }],
                "ajax": {
                    "url": "{{ route('indexData') }}",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    "type": "GET",
                    // "contentType": 'application/json',
                    "data": function(d) {
                        d.idCard_filter      = $('#idCard_filter').val();
                        d.name_filter        = $('#name_filter').val();
                        d.phoneNumber_filter = $('#phoneNumber_filter').val();
                        d.email_filter       = $('#email_filter').val();
                        d.created_filter     = $('#created_filter').val();
                        d.updated_filter     = $('#updated_at').val();
                    },
                    "dataSrc": function(json) {
                        return json.data;
                    }

                }
            });

            // Search Filter
            $('#submitSearch').on('click', function() {
                table.ajax.reload();
            });
            // Reset Filter
            $('#resetFilter').on('click', function() {
                $('#idCard_filter').val('');
                $('#name_filter').val('');
                $('#phoneNumber_filter').val('');
                $('#email_filter').val('');
                $('#created_filter').val('');
                $('#updated_at').val('');
                table.ajax.reload();
            });

            $('#excelButton').on('click', function() {
                table.button('.buttons-excel').trigger();
            });

            // ADD DATA
            $("#btnSave").click(function(e) {
                e.preventDefault();
                var formData = new FormData($('#formInput')[0]);

                $(this).prop('disabled', true).text('Please wait...');

                // === ID Card Validation ===
                var idCard = $('#idCard').val().trim();
                if (!idCard) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input ID Card!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                } else if (isNaN(idCard) || idCard.length !== 8) {
                    swal.fire({
                        title: 'Warning',
                        text: 'ID Card must be a number and consist of 8 digits!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // === Name Validation ===
                var name = $('#name').val();
                if (!name) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Name!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // === Phone Number Validation ===
                var phoneNumber = $('#phoneNumber').val();
                if (!phoneNumber) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Phone Number!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').text('Submit');
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                } else if (isNaN(phoneNumber) || phoneNumber.length !== 12) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Phone Number must be numeric and consist of 12 digits!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // === Email Validation ===
                var email = $('#email').val().trim()
                if (!email) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Email!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                } else {
                    // regex simple email
                    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(email)) {
                        swal.fire({
                            title: 'Warning',
                            text: 'Please enter a valid email format!',
                            icon: 'warning',
                            target: '#modalInput'
                        });
                        $('#btnSave').prop('disabled', false).text('Save');
                        return false;
                    }
                    // check specifically for Gmail
                    // if (!email.endsWith('@gmail.com')) {
                    //     swal.fire({
                    //         title: 'Warning',
                    //         text: 'Email must be a Gmail address!',
                    //         icon: 'warning',
                    //         target: '#modalInput'
                    //     });
                    //     $('#btnSave').prop('disabled', false).text('Save');
                    //     return false;
                    // }
                }

                $.ajax({
                    type: "POST",
                    url: "{{ url('/') }}/saveData",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(data) {
                        if (data.code == 200) {
                            swal.fire({
                                title: 'Success',
                                text: data.message,
                                icon: 'success',
                            });
                        } else {
                            swal.fire({
                                title: 'Insert Failed!',
                                text: 'Internal Server Error!',
                                icon: 'error',
                            });
                        }
                        $('#modalInput').modal('hide');
                        clearform();
                        ReloadTable();

                        $('#btnSave').text('Submit');
                        $('#btnSave').prop('disabled', false);
                    },

                    error: function(jqXHR, textStatus, errorThrown) {
                        var myText = errorThrown;
                        swal.fire({
                            title: 'Warning',
                            icon: 'warning',
                            target: '#modalInput'
                        });
                        $('#btnSave').text('Submit');
                        $('#btnSave').prop('disabled', false);
                    },

                });
            });

            // DETAIL BUTTON
            $('#inputTable').on('click', '.showData', function() {
                var id = $(this).data('id');
                $('#input_id').val(id);
                $('#modalDetail').modal('show');

                $.ajax({
                    url: "{{ url('/detailData') }}/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(response) {
                        // console.log('detail id:', response.data);

                        $('[name="idCard_detail"]').val(response.data.id_card);
                        $('[name="name_detail"]').val(response.data.name);
                        $('[name="phoneNumber_detail"]').val(response.data.phone_number);
                        $('[name="email_detail"]').val(response.data.email);
                    },

                    error: function(jqXHR, textStatus, errorThrown) {
                        var myText = errorThrown;
                        swal.fire({
                            title: 'Warning',
                            icon: 'warning',
                        });
                    }
                });
            });

            // EDIT DATA
            $('#btnSaveEdit').on('click', function() {
                var id = parseInt($('#input_id').val());
                var formData = new FormData($('#formDetail')[0]);

                // === ID Card Validation ===
                var idCard = $('#idCard_detail').val().trim();
                if (!idCard) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input ID Card!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save');
                    return false;
                } else if (isNaN(idCard) || idCard.length !== 8) {
                    swal.fire({
                        title: 'Warning',
                        text: 'ID Card must be a number and consist of 8 digits!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save');
                    return false;
                }

                // === Name Validation ===
                var name = $('#name_detail').val().trim();
                if (!name) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Name!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save');
                    return false;
                }

                // === Phone Number Validation ===
                var phoneNumber = $('#phoneNumber_detail').val().trim();
                if (!phoneNumber) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Phone Number!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save');
                    return false;
                } else if (isNaN(phoneNumber) || phoneNumber.length !== 12) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Phone Number must be numeric and consist of 12 digits!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save');
                    return false;
                }

                // === Email Validation ===
                var email = $('#email_detail').val().trim();
                if (!email) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Email!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save');
                    return false;
                } else {
                    // regex simple email
                    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(email)) {
                        swal.fire({
                            title: 'Warning',
                            text: 'Please enter a valid email format!',
                            icon: 'warning',
                            target: '#modalDetail'
                        });
                        $('#btnSaveEdit').prop('disabled', false).text('Save');
                        return false;
                    }
                }

                $.ajax({
                    url: "{{ url('/saveEdit') }}/" + id,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        if (data.code == 200) {
                            swal.fire({
                                title: 'Success',
                                text: 'Data Updated Successfully!',
                                icon: 'success',
                            });
                            $('#modalDetail').modal('hide');
                        } else {
                            swal.fire('Error: ' + data.message);
                        }
                        ReloadTable();
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var myText = errorThrown;
                        swal.fire(myText);
                        // $('#btnSaveEdit').text('Submit');
                        $('#btnSaveEdit').prop('disabled', false);
                    }
                });
            });

            // DELETE DATA
            $('#inputTable').on('click', '.deleteData', function() {
                var id = $(this).data('id');

                Swal.fire({
                    title: "Are you sure",
                    text: "Deleted data cannot be recovered!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "Cancel"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('/deleteData') }}/" + id,
                            type: 'DELETE',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            success: function(data) {
                                if (data.code == 200) {
                                    swal.fire({
                                        title: 'Success',
                                        text: 'Data Updated Successfully!',
                                        icon: 'success',
                                    });

                                } else {
                                    swal.fire('Error: ' + data.message);
                                }
                                ReloadTable();
                            },
                            error: function(jqXHR, textStatus, errorThrown) {
                                var myText = errorThrown;
                                swal.fire(myText);
                                $('#btnSaveEdit').text('Submit');
                                $('#btnSaveEdit').prop('disabled', false);
                            }
                        });
                    }
                });
            });


            // Button OpenModal Add
            $("#btnAddData").click(function() {
                $("#modalInput").modal('show');
            });
            // Autoclear input
            $('#modalInput').on('hidden.bs.modal', function () {
                clearform();

                // Hapus error message & class invalid
                $('#idCard_error').text('');
                $('#email_error').text('');
                $('#phoneNumber_error').text('');
                $('#email').removeClass('is-invalid');
                $('#phoneNumber').removeClass('is-invalid');
                $('#btnSave').prop('disabled', false);
            });


            // Cek ID Card duplikat (MODAL ADD)
            $('#idCard').on('blur', function() {
                let idCard = $(this).val();
                if (idCard !== '') {
                    $.ajax({
                        url: "{{ route('checkDuplicate') }}",
                        method: "POST",
                        data: {
                            field: 'id_card',
                            value: idCard,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#idCard_error').text('ID Card is already registered!');
                                $('#idCard').addClass('is-invalid');
                                $('#btnSave').prop('disabled', true);
                            } else {
                                $('#idCard_error').text('');
                                $('#idCard').removeClass('is-invalid');
                                $('#btnSave').prop('disabled', false);
                            }
                        }
                    });
                }
            });
            // Cek Phone Number duplikat (MODAL ADD)
            $('#phoneNumber').on('blur', function() {
                let phone = $(this).val();
                if (phone !== '') {
                    $.ajax({
                        url: "{{ route('checkDuplicate') }}",
                        method: "POST",
                        data: {
                            field: 'phone_number',
                            value: phone,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#phoneNumber_error').text('Phone number is already registered!');
                                $('#phoneNumber').addClass('is-invalid');
                                $('#btnSave').prop('disabled', true);
                            } else {
                                $('#phoneNumber_error').text('');
                                $('#phoneNumber').removeClass('is-invalid');
                                $('#btnSave').prop('disabled', false);
                            }
                        }
                    });
                }
            });
            // Cek Email duplikat (MODAL ADD)
            $('#email').on('blur', function() {
                let email = $(this).val();
                if (email !== '') {
                    $.ajax({
                        url: "{{ route('checkDuplicate') }}",
                        method: "POST",
                        data: {
                            field: 'email',
                            value: email,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#email_error').text('Email is already registered!');
                                $('#email').addClass('is-invalid');
                                $('#btnSave').prop('disabled', true);
                            } else {
                                $('#email_error').text('');
                                $('#email').removeClass('is-invalid');
                                $('#btnSave').prop('disabled', false);
                            }
                        }
                    });
                }
            });


            // Cek ID Card duplikat (MODAL ADD)
            $('#idCard_detail').on('blur', function() {
                let idCard_detail = $(this).val();
                if (idCard_detail !== '') {
                    $.ajax({
                        url: "{{ route('checkDuplicate') }}",
                        method: "POST",
                        data: {
                            field: 'id_card',
                            value: idCard_detail,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#idCard_detail_error').text('ID Card is already registered!');
                                $('#idCard_detail').addClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', true);
                            } else {
                                $('#idCard_detail_error').text('');
                                $('#idCard_detail').removeClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', false);
                            }
                        }
                    });
                }
            });
            // Cek Phone Number duplikat (MODAL EDIT)
            $('#phoneNumber_detail').on('blur', function() {
                let phone = $(this).val();
                let id = $('#input_id').val();

                if (phone !== '') {
                    $.ajax({
                        url: "{{ route('checkDuplicate') }}",
                        method: "POST",
                        data: {
                            field: 'phone_number',
                            value: phone,
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#phoneNumber_detail_error').text('Phone number is already registered!');
                                $('#phoneNumber_detail').addClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', true);
                            } else {
                                $('#phoneNumber_detail_error').text('');
                                $('#phoneNumber_detail').removeClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', false);
                            }
                        }
                    });
                }
            });
            // Cek Email duplikat (MODAL EDIT)
            $('#email_detail').on('blur', function() {
                let email = $(this).val();
                let id = $('#input_id').val(); // ambil id dari hidden input
                
                if (email !== '') {
                    $.ajax({
                        url: "{{ route('checkDuplicate') }}",
                        method: "POST",
                        data: {
                            field: 'email',
                            value: email,
                            id: id, // kirim id biar tidak cek dirinya sendiri
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#email_detail_error').text('Email is already registered!');
                                $('#email_detail').addClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', true);
                            } else {
                                $('#email_detail_error').text('');
                                $('#email_detail').removeClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', false);
                            }
                        }
                    });
                }
            });
        });

        function clearform() {
            $("#formInput")[0].reset();
        }
        
        function ReloadTable() {
            table.ajax.reload(null, false);
        }

    </script>
@endsection
