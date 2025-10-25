<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('theme/vendor/libs/jquery/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('theme/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('theme/vendor/libs/trix-editor/trix.js') }}"></script>
    <script src="{{ asset('theme/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('theme/vendor/libs/apex-charts/apexcharts.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('theme/js/main.js') }}"></script>

    <!-- DataTables JS -->
    <script src="{{ asset('theme/vendor/libs/dataTables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/libs/dataTables/dataTables.bootstrap5.min.js') }}"></script>

    @stack('scripts')
    <!-- Page JS -->
    {{-- <script src="{{ asset('theme/js/dashboards-analytics.js') }}"></script> --}}
    <script src="{{ asset('theme/vendor/libs/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('theme/vendor/libs/select2/select2-custom.js') }}"></script>