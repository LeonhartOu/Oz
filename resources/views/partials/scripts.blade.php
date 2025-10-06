<!-- Required Jquery -->
{{-- Load library jQuery yang diperlukan untuk hampir semua plugin JS --}}
<script type="text/javascript" src="{{asset('files/build/jquery/js/jquery.min.js')}}"></script>
{{-- Plugin jQuery UI: menambah fungsi UI seperti drag & drop, datepicker, dll --}}
<script type="text/javascript" src="{{asset('files/build/jquery-ui/js/jquery-ui.min.js')}}"></script>
{{-- Popper.js: dipakai Bootstrap untuk posisi tooltip, popover, dll --}}
<script type="text/javascript" src="{{asset('files/build/popper.js/js/popper.min.js')}}"></script>
{{-- Bootstrap JavaScript: komponen interaktif Bootstrap (modal, dropdown, dsb) --}}
<script type="text/javascript" src="{{asset('files/build/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- jQuery Slimscroll -->
{{-- menambahkan scrollbar custom  --}}
{{-- <script type="text/javascript" src="{{asset('files/build/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script> --}}

<!-- Modernizr: deteksi fitur browser (HTML5/CSS3) -->
<script type="text/javascript" src="{{asset('files/build/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/modernizr/js/css-scrollbars.js')}}"></script>

<!-- Moment.js + Bootstrap Date/Time picker: manipulasi tanggal/waktu & komponen datetime picker -->
<script type="text/javascript" src="{{asset('files/assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>

<!-- Date Range Picker: pilih rentang tanggal -->
<script type="text/javascript" src="{{asset('files/build/daterangepicker/js/daterangepicker.js')}}"></script>

<!-- DateDropper: komponen date picker alternatif dengan style berbeda -->
<script type="text/javascript" src="{{asset('files/build/datedropper/js/datedropper.min.js')}}"></script>

<!-- DataTables: plugin untuk tabel interaktif (sorting, paging, responsive) -->
<script type="text/javascript" src="{{asset('files/build/datatables.net/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/pages/data-table/js/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/datatables.net-responsive/js/dataTables.responsive.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/datatables.net-responsive-bs4/js/responsive.bootstrap4.js')}}"></script>

<!-- DataTables Buttons: fitur export (Excel, CSV, PDF), membutuhkan JSZip -->
<script type="text/javascript" src="{{asset('files/build/DataTables/Buttons-2.4.1/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/DataTables/Buttons-2.4.1/js/buttons.bootstrap5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/DataTables/Buttons-2.4.1/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/DataTables/JSZip-3.10.1/jszip.min.js')}}"></script>

<!-- CKEditor: editor teks WYSIWYG -->
<script type="text/javascript" src="{{asset('files/assets/pages/ckeditor/ckeditor.js')}}"></script>

<!-- i18next: library internationalization (multi-bahasa) + plugin pendukung -->
<script type="text/javascript" src="{{asset('files/build/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/build/jquery-i18next/js/jquery-i18next.min.js')}}"></script>

<!-- Pcoded & layout scripts: pengaturan tema/layout template -->
<script type="text/javascript" src="{{asset('files/assets/js/pcoded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/vartical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<!-- Custom scripts -->
<script type="text/javascript" src="{{asset('files/assets/js/script.js')}}"></script>

{{-- Select2 --}}
<script type="text/javascript" src="{{asset('files/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<!-- Parsley -->
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>

<!-- Sweeralert2 -->
<script type="text/javascript" src="{{asset('files/assets/js/sweetalert2.min.js')}}"></script>