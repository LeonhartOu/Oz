@extends('layouts.app')

@section('content')
    {{-- Datatable --}}
    <div class="content">
        <div class="container-fluid" display="none">
            <div class="card">

                <div class="card-header mb-0 pb-0">
                    {{-- <h4 class="mb-1">Student Registration</h4> --}}
                    <div class="row">
                        <div class="col-12">
                            <h4>
                                FILTER
                            </h4>
                        </div>
                    </div>
                </div>

                <div class="card-block" id="">
                    <form action="" method="" id="report">
                        <div class="row">
                            <div class="col-sm-12">

                                {{-- Row 1 --}}
                                <div class="form-group row ms-1 mt-2">
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="nim_filter">NIM</Title></label>
                                        <input type="text" id="nim_filter" name="nim_filter"
                                            class="form-control input-sm" placeholder="Search NIM" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="nik_filter">NIK</Title></label>
                                        <input type="text" id="nik_filter" name="nik_filter"
                                            class="form-control input-sm" placeholder="Search NIK" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="name_filter">Name</Title></label>
                                        <input type="text" id="name_filter" name="name_filter"
                                            class="form-control input-sm" placeholder="Search Name" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="dob_filter">DOB</Title></label>
                                        <input type="date" id="dob_filter" name="dob_filter"
                                            class="form-control input-sm" placeholder="Search DOB" autocomplete="off">
                                    </div>
                                </div>

                                {{-- Row 2 --}}
                                <div class="form-group row ms-1">
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="gender_filter">Gender</Title></label>
                                        <select name="gender_filter" id="gender_filter" class="form-control dropdown"
                                            data-placeholder="Select Gender">
                                            <option value="" disabled selected> Select Gender </option>
                                            <option value="Male"> Male </option>
                                            <option value="Female"> Female </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="address_filter">Address</Title></label>
                                        <input type="text" id="address_filter" name="address_filter"
                                            class="form-control input-sm" placeholder="Search Address" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="phoneNumber_filter">Phone Number</Title></label>
                                        <input type="text" id="phoneNumber_filter" name="phoneNumber_filter"
                                            class="form-control input-sm" placeholder="Search Phone Number"
                                            autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="email_filter">Email</Title></label>
                                        <input type="text" id="email_filter" name="email_filter"
                                            class="form-control input-sm" placeholder="Search Email" autocomplete="off">
                                    </div>
                                </div>

                                {{-- Row 3 --}}
                                <div class="form-group row ms-1">
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="status_filter">Status</Title></label>
                                        {{-- <input type="text" id="status_filter" name="status_filter"
                                            class="form-control input-sm" placeholder="Search Status" autocomplete="off"> --}}
                                        <select name="status_filter" id="status_filter" class="form-control dropdown"
                                            data-placeholder="Select Status">
                                            <option value="" disabled selected> Select Gender </option>
                                            <option value="Active"> Active </option>
                                            <option value="Inactive"> Inactive </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="createdAt_filter">Created At</Title></label>
                                        <input type="date" id="createdAt_filter"
                                            name="createdAt_filter"class="form-control input-sm date datetimepicker"
                                            data-min-view="2" data-date-format="yyyy-mm-dd" autocomplete="off">
                                    </div>
                                    <div class="col-sm-3 xs-mb-15">
                                        <label for="updatedAt_filter">Updated At</Title></label>
                                        <input type="date" id="updatedAt_filter"
                                            name="updatedAt_filter"class="form-control input-sm date datetimepicker"
                                            data-min-view="2" data-date-format="yyyy-mm-dd" autocomplete="off">
                                    </div>
                                    <div class="col-sm-2 xs-mb-15">
                                        <label for="submitSearch">&nbsp;</label>
                                        <button id="submitSearch" name="submitSearch"
                                            class="btn btn-space btn-primary form-control input-sm"
                                            type="button">Search</button>
                                    </div>
                                    <div class="col-sm-1 xs-mb-15">
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
                                <th scope="col">NIM</th>
                                <th scope="col">NIK</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of Birth</th>

                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">Phone Number</th>
                                <th scope="col">Email</th>

                                <th scope="col">Status</th>
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
                        {{-- Row 1 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-6 mb-2">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" name="nim" id="nim" class="form-control" readonly>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" name="nik" id="nik" class="form-control"
                                        placeholder="Input NIK" required>
                                    <span id="nik_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>

                        {{-- Row 2 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-6 mb-2">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Input Name" required>
                                </div>

                                <div class="col-md-3 mb-2">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" id="gender" class="select2"
                                        data-placeholder="Select Gender">
                                        <option value="" disabled selected> Select Gender </option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="select2"
                                        data-placeholder="Select Status">
                                        <option value="" disabled selected> Select Status </option>
                                        <option value="Active"> Active </option>
                                        <option value="Inactive"> Inactive </option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        {{-- Row 3 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-4 mb-2">
                                    <label for="dob" class="form-label">DOB</label>
                                    <input type="date" name="dob" id="dob"
                                        class="form-control input-sm date datetimepicker" required>
                                </div>
                                <div class="col-md-8 mb-2">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" name="address" id="address" class="form-control"
                                        placeholder="Input Address" required>
                                </div>
                            </div>
                        </div>

                        {{-- Row 4 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-6 mb-2">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"
                                        placeholder="Input Phone Number" required>
                                    <span id="phoneNumber_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Input Email" required>
                                    <span id="email_error" class="text-danger"></span>
                                </div>
                            </div>
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
                        {{-- Row 1 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-6 mb-2">
                                    <label for="nim_detail" class="form-label">NIM</label>
                                    <input type="text" name="nim_detail" id="nim_detail" class="form-control"
                                        readonly>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="nik_detail" class="form-label">NIK</label>
                                    <input type="text" name="nik_detail" id="nik_detail" class="form-control"
                                        placeholder="Input NIK" required>
                                    <span id="nik_detail_error" class="text-danger"></span>
                                </div>
                            </div>
                        </div>

                        {{-- Row 2 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-6 mb-2">
                                    <label for="name_detail" class="form-label">Name</label>
                                    <input type="text" name="name_detail" id="name_detail" class="form-control"
                                        placeholder="Input Name" required>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="gender_detail" class="form-label">Gender</label>
                                    <select name="gender_detail" id="gender_detail" class="select2"
                                        data-placeholder="Select Gender">
                                        <option value="" disabled selected> Select Gender </option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-2">
                                    <label for="status_detail" class="form-label">Status</label>
                                    <select name="status_detail" id="status_detail" class="select2"
                                        data-placeholder="Select Status">
                                        <option value="" disabled selected> Select Status </option>
                                        <option value="Active"> Active </option>
                                        <option value="Inactive"> Inactive </option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Row 3 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-4 mb-2">
                                    <label for="dob_detail" class="form-label">DOB</label>
                                    <input type="date" name="dob_detail" id="dob_detail"
                                        class="form-control input-sm date datetimepicker" required>
                                </div>
                                <div class="col-md-8 mb-2">
                                    <label for="address_detail" class="form-label">Address</label>
                                    <input type="text" name="address_detail" id="address_detail" class="form-control"
                                        placeholder="Input Address" required>
                                </div>
                            </div>
                        </div>

                        {{-- Row 4 --}}
                        <div class="row mb-2">
                            <div class="row align-items-center col-md-12">
                                <div class="col-md-6 mb-2">
                                    <label for="phoneNumber_detail" class="form-label">Phone Number</label>
                                    <input type="text" name="phoneNumber_detail" id="phoneNumber_detail"
                                        class="form-control" placeholder="Input Phone Number" required>
                                    <span id="phoneNumber_detail_error" class="text-danger"></span>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="email_detail" class="form-label">Email</label>
                                    <input type="text" name="email_detail" id="email_detail" class="form-control"
                                        placeholder="Input Email" required>
                                    <span id="email_detail_error" class="text-danger"></span>
                                </div>
                            </div>
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
            $('#formInput .select2').select2({
                placeholder: $(this).data("placeholder") ?? 'Select Data',
                dropdownParent: $('#formInput'),
                width: '100%',
                // theme: 'bootstrap4',
                templateResult: function(data) {
                    if (data.title) {
                        return $('<div class="m-0">' +
                            '<p class="m-0" >' + data.text + '</p>' +
                            '<p class="small mb-0" >' + data.title + '</p>' +
                            '</div>');
                    } else {
                        return $('<span class="mb-0">' + data.text + '</span>');
                    }
                },
                matcher: function(params, data) {
                    if ($.trim(params.term) === '') {
                        return data;
                    }
                    if (typeof data.text === 'undefined') {
                        return null;
                    }
                    var search = params.term.toLowerCase();
                    var text = data.text.toLowerCase();
                    var title = data.title ? data.title.toLowerCase() : '';

                    if (text.indexOf(search) > -1) {
                        var modifiedData = $.extend({}, data, true);
                        var reg = new RegExp(search, 'gi');
                        modifiedData.text = modifiedData.text.replace(reg, function(str) {
                            return str.bold()
                        });
                        return modifiedData;
                    }

                    if (title.indexOf(search) > -1) {
                        var modifiedData2 = $.extend({}, data, true);
                        var reg2 = new RegExp(search, 'gi');
                        modifiedData2.title = modifiedData2.title.replace(reg2, function(str2) {
                            return str2.bold()
                        });
                        return modifiedData2;
                    }
                    return null;
                }
            });


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
                        return "Student Report-" + new Date().getTime();
                    },
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
                    }
                }],
                "ajax": {
                    "url": "{{ url('') }}/student/getData",
                    "headers": {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    "type": "GET",
                    // "contentType": 'application/json',
                    "data": function(d) {
                        d.nim_filter = $('#nim_filter').val();
                        d.nik_filter = $('#nik_filter').val();
                        d.name_filter = $('#name_filter').val();
                        d.dob_filter = $('#dob_filter').val();

                        d.gender_filter = $('#gender_filter').val();
                        d.address_filter = $('#address_filter').val();
                        d.phoneNumber_filter = $('#phoneNumber_filter').val();
                        d.email_filter = $('#email_filter').val();

                        d.status_filter = $('#status_filter').val();
                        d.createdAt_filter = $('#createdAt_filter').val();
                        d.updatedAt_filter = $('#updatedAt_filter').val();
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
                $('#nim_filter').val('');
                $('#nik_filter').val('');
                $('#name_filter').val('');
                $('#dob_filter').val('');
                $('#gender_filter').val('').trigger('change');
                $('#address_filter').val('');
                $('#phoneNumber_filter').val('');
                $('#email_filter').val('');
                $('#status_filter').val('').trigger('change');;
                $('#createdAt_filter').val('');
                $('#updatedAt_filter').val('');
                table.ajax.reload();
            });
            // Excel Button
            $('#excelButton').on('click', function() {
                table.button('.buttons-excel').trigger();
            });


            // === ADD DATA ===
            $("#btnSave").click(function(e) {
                e.preventDefault();
                var formData = new FormData($('#formInput')[0]);

                $(this).prop('disabled', true).text('Please wait...');

                // NIK Validation
                var nik = $('#nik').val().trim();
                if (!nik) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input NIK!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                } else if (isNaN(nik) || nik.length !== 8) {
                    swal.fire({
                        title: 'Warning',
                        text: 'NIK must be a number and consist of 8 digits!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // Name Validation
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

                // Gender Validation
                var gender = $('#gender').val();
                if (!gender) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Gender!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // Status Validation
                var status = $('#status').val();
                if (!status) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Status!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // Date of Birth Validation 
                var dob = $('#dob').val();
                if (!dob) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Date of Birth!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // Address Validation
                var address = $('#address').val();
                if (!address) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Address!',
                        icon: 'warning',
                        target: '#modalInput'
                    });
                    $('#btnSave').prop('disabled', false).text('Save');
                    return false;
                }

                // Phone Number Validation
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

                // Email Validation
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
                    url: "{{ url('/') }}/student/saveData",
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

            // === DETAIL BUTTON ===
            $('#inputTable').on('click', '.showData', function() {
                var id = $(this).data('id');
                $('#input_id').val(id);
                $('#modalDetail').modal('show');

                $.ajax({
                    url: "{{ url('/') }}/student/detailData/" + id,
                    type: "GET",
                    dataType: "JSON",
                    success: function(response) {
                        // console.log('detail id:', response.data);
                        $('[name="nim_detail"]').val(response.data.nim);
                        $('[name="nik_detail"]').val(response.data.nik);
                        $('[name="name_detail"]').val(response.data.name);
                        $('[name="dob_detail"]').val(response.data.dob);

                        $('[name="gender_detail"]').val(response.data.gender);
                        $('[name="address_detail"]').val(response.data.address);
                        $('[name="phoneNumber_detail"]').val(response.data.phone_number);
                        $('[name="email_detail"]').val(response.data.email);

                        $('[name="status_detail"]').val(response.data.status);

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

            // === EDIT DATA ===
            $('#btnSaveEdit').on('click', function() {
                var id = parseInt($('#input_id').val());
                var formData = new FormData($('#formDetail')[0]);

                // NIK Validation
                var nik_detail = $('#nik_detail').val().trim();
                if (!nik_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input NIK!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                } else if (isNaN(nik_detail) || nik_detail.length !== 8) {
                    swal.fire({
                        title: 'Warning',
                        text: 'NIK must be a number and consist of 8 digits!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Name Validation
                var name_detail = $('#name_detail').val();
                if (!name_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Name!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Gender Validation
                var gender_detail = $('#gender_detail').val();
                if (!gender_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Gender!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Status Validation
                var status_detail = $('#status_detail').val();
                if (!status_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Status!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Date of Birth Validation 
                var dob_detail = $('#dob_detail').val();
                if (!dob_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Date of Birth!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Address Validation
                var address_detail = $('#address_detail').val();
                if (!address_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Address!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Phone Number Validation
                var phoneNumber_detail = $('#phoneNumber_detail').val();
                if (!phoneNumber_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Phone Number!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').text('Submit');
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                } else if (isNaN(phoneNumber_detail) || phoneNumber_detail.length !== 12) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Phone Number must be numeric and consist of 12 digits!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                }

                // Email Validation
                var email_detail = $('#email_detail').val().trim()
                if (!email_detail) {
                    swal.fire({
                        title: 'Warning',
                        text: 'Please Input Email!',
                        icon: 'warning',
                        target: '#modalDetail'
                    });
                    $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                    return false;
                } else {
                    // regex simple email
                    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    if (!emailPattern.test(email_detail)) {
                        swal.fire({
                            title: 'Warning',
                            text: 'Please enter a valid email format!',
                            icon: 'warning',
                            target: '#modalDetail'
                        });
                        $('#btnSaveEdit').prop('disabled', false).text('Save Changes');
                        return false;
                    }
                }

                $.ajax({
                    url: "{{ url('/') }}/student/saveEdit/" + id,
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
                        $('#btnSaveEdit').prop('disabled', false);
                    }
                });
            });

            // === DELETE DATA ===
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
                            url: "{{ url('/') }}/student/deleteData/" + id,
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


            // === MODAL ADD ===
            // Button OpenModal Add
            $("#btnAddData").click(function() {
                $("#modalInput").modal('show');
            });
            // Generate NIM after open modal
            $('#modalInput').on('show.bs.modal', function() {
                $.get('{{ route('student.createNim') }}', function(data) {
                    $('#nim').val(data.nim);
                });
            });
            // Autoclear input
            $('#modalInput').on('hidden.bs.modal', function() {
                $("#formInput")[0].reset();

                $("#gender").val('').trigger('change');
                $("#status").val('').trigger('change');

                $('#nik_error').text('');
                $('#email_error').text('');
                $('#phoneNumber_error').text('');

                $('#nik').removeClass('is-invalid');
                $('#email').removeClass('is-invalid');
                $('#phoneNumber').removeClass('is-invalid');

                $('#btnSave').prop('disabled', false);
            });


            // === MODAL DETAIL ===
            $('#modalDetail').on('shown.bs.modal', function() {
                $('#formDetail .select2').select2({
                    placeholder: $(this).data("placeholder") ?? 'Select Data',
                    dropdownParent: $('#formDetail'),
                    width: '100%',
                    // theme: 'bootstrap4',
                    templateResult: function(data) {
                        if (data.title) {
                            return $('<div class="m-0">' +
                                '<p class="m-0" >' + data.text + '</p>' +
                                '<p class="small mb-0" >' + data.title + '</p>' +
                                '</div>');
                        } else {
                            return $('<span class="mb-0">' + data.text + '</span>');
                        }
                    },
                    matcher: function(params, data) {
                        if ($.trim(params.term) === '') {
                            return data;
                        }
                        if (typeof data.text === 'undefined') {
                            return null;
                        }
                        var search = params.term.toLowerCase();
                        var text = data.text.toLowerCase();
                        var title = data.title ? data.title.toLowerCase() : '';

                        if (text.indexOf(search) > -1) {
                            var modifiedData = $.extend({}, data, true);
                            var reg = new RegExp(search, 'gi');
                            modifiedData.text = modifiedData.text.replace(reg, function(str) {
                                return str.bold()
                            });
                            return modifiedData;
                        }

                        if (title.indexOf(search) > -1) {
                            var modifiedData2 = $.extend({}, data, true);
                            var reg2 = new RegExp(search, 'gi');
                            modifiedData2.title = modifiedData2.title.replace(reg2, function(
                                str2) {
                                return str2.bold()
                            });
                            return modifiedData2;
                        }
                        return null;
                    }
                });
            });


            // Cek NIK duplikat (MODAL ADD)
            $('#nik').on('blur', function() {
                let nik = $(this).val();
                if (nik !== '') {
                    $.ajax({
                        url: "{{ route('check.duplicate') }}",
                        method: "POST",
                        data: {
                            field: 'nik',
                            value: nik,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#nik_error').text('NIK is already registered!');
                                $('#nik').addClass('is-invalid');
                                $('#btnSave').prop('disabled', true);
                            } else {
                                $('#nik_error').text('');
                                $('#nik').removeClass('is-invalid');
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
                        url: "{{ route('check.duplicate') }}",
                        method: "POST",
                        data: {
                            field: 'phone_number',
                            value: phone,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#phoneNumber_error').text(
                                    'Phone number is already registered!');
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
                        url: "{{ route('check.duplicate') }}",
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


            // Cek NIK duplikat (MODAL DETAIL)
            $('#nik_detail').on('blur', function() {
                let nik = $(this).val();
                let id = $('#input_id').val();

                if (nik !== '') {
                    $.ajax({
                        url: "{{ route('check.duplicate') }}",
                        method: "POST",
                        data: {
                            field: 'nik',
                            value: nik,
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#nik_detail_error').text('NIK is already registered!');
                                $('#nik_detail').addClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', true);
                            } else {
                                $('#nik_detail_error').text('');
                                $('#nik_detail').removeClass('is-invalid');
                                $('#btnSaveEdit').prop('disabled', false);
                            }
                        }
                    });
                }
            });
            // Cek Phone Number duplikat (MODAL DETAIL)
            $('#phoneNumber_detail').on('blur', function() {
                let phone = $(this).val();
                let id = $('#input_id').val();

                if (phone !== '') {
                    $.ajax({
                        url: "{{ route('check.duplicate') }}",
                        method: "POST",
                        data: {
                            field: 'phone_number',
                            value: phone,
                            id: id,
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res) {
                            if (res.exists) {
                                $('#phoneNumber_detail_error').text(
                                    'Phone number is already registered!');
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
            // Cek Email duplikat (MODAL DETAIL)
            $('#email_detail').on('blur', function() {
                let email = $(this).val();
                let id = $('#input_id').val(); // ambil id dari hidden input

                if (email !== '') {
                    $.ajax({
                        url: "{{ route('check.duplicate') }}",
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

        function ReloadTable() {
            table.ajax.reload(null, false);
        }

        $('#status_filter').select2({
            placeholder: 'Select Status',
            width: '100%'
        });

        $('#gender_filter').select2({
            placeholder: 'Select Gender',
            width: '100%'
        });
    </script>
@endsection
