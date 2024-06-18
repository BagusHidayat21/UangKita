<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Poppins:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!-- Design System CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/app.css') }}">

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="icon" href="{{ asset('asset/logokecil.svg') }}">
    <title>@yield('title', 'Dashboard | UangKita')</title>
</head>

<body class="bg-light-gray min-vh-100 d-flex flex-column">

    <!-- Unified Navigation Header & Mobile Offcanvas Sidebar -->
    @include('layout.navigation')

    <!-- Main Content Body -->
    <main class="flex-grow-1 py-4">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layout.footer')

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            /* ── 1. Progress Bar Width Initializer ── */
            document.querySelectorAll('[data-width]').forEach(function (el) {
                el.style.width = el.getAttribute('data-width');
            });

            /* ── 2. Currency Auto-Formatter (Strict Rp Format) ── */
            const CURRENCY_ATTRS = ['jumlah', 'target', 'additional_amount'];
            const formatter = new Intl.NumberFormat('id-ID', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            });

            function parseRaw(val) {
                const cleaned = val.replace(/[^\d]/g, '');
                return cleaned === '' ? '' : parseInt(cleaned, 10);
            }

            function formatRp(num) {
                if (num === '' || isNaN(num)) return '';
                return 'Rp ' + formatter.format(num);
            }

            function initCurrencyInput(input) {
                if (input.dataset.currencyInit) return;
                input.dataset.currencyInit = 'true';

                const hidden = document.createElement('input');
                hidden.type = 'hidden';
                hidden.name = input.name;
                input.removeAttribute('name');

                hidden.value = input.value || '';
                input.parentNode.insertBefore(hidden, input.nextSibling);

                input.type = 'text';
                input.placeholder = 'Rp 0';
                input.autocomplete = 'off';

                if (hidden.value !== '') {
                    input.value = formatRp(parseInt(hidden.value, 10));
                }

                input.addEventListener('input', function () {
                    const raw = parseRaw(this.value);
                    hidden.value = (raw === '') ? '' : raw;
                    const cursorPos = this.selectionStart;
                    const oldLen = this.value.length;
                    this.value = (raw === '') ? '' : formatRp(raw);
                    const newLen = this.value.length;
                    this.setSelectionRange(cursorPos + (newLen - oldLen), cursorPos + (newLen - oldLen));
                });

                input.addEventListener('focus', function () {
                    if (this.value === '') this.value = 'Rp ';
                });

                input.addEventListener('blur', function () {
                    if (this.value === 'Rp ' || this.value.trim() === '') {
                        this.value = '';
                        hidden.value = '';
                    }
                });
            }

            CURRENCY_ATTRS.forEach(function (name) {
                document.querySelectorAll('input[name="' + name + '"]').forEach(initCurrencyInput);
            });
        });
    </script>
</body>
</html>
