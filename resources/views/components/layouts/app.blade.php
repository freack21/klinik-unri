<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Klinik UNRI') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @stack('styles')
    @stack('script-top')
</head>

<body class="bg-[#F8FAFC] min-h-screen relative">
    <x-navbar />

    {{ $slot }}

    @livewireScripts

    <script>
        // Global listener untuk Livewire 3
        document.addEventListener('livewire:init', () => {
            // Toast event: notifikasi ringan
            Livewire.on('toast', (data) => {
                const {
                    title = 'Informasi',
                    text = '',
                    icon = 'info',
                    duration = 3000,
                    position = 'top-end',
                    didOpen: (toast) => {
                        toast.onmouseenter = Swal.stopTimer;
                        toast.onmouseleave = Swal.resumeTimer;
                    }
                } = data

                const Toast = Swal.mixin({
                    toast: true,
                    position,
                    showConfirmButton: false,
                    timer: duration,
                    timerProgressBar: true,
                })

                Toast.fire({ icon, title, text })
            })

            // Swal event: alert/prompt interaktif
            Livewire.on('swal', (data) => {
                const {
                    title = 'Info',
                    text = '',
                    icon = 'info',
                    confirmButtonText = 'OK',
                    showCancelButton = false,
                    cancelButtonText = 'Batal',
                    input = null,
                    inputPlaceholder = '',
                } = data

                Swal.fire({
                    title,
                    text,
                    icon,
                    confirmButtonText,
                    showCancelButton,
                    cancelButtonText,
                    input,
                    inputPlaceholder,
                }).then(result => {
                    if (result.isConfirmed) {
                        Livewire.dispatch('swalConfirmed', { value: result.value })
                    } else if (result.isDismissed) {
                        Livewire.dispatch('swalDismissed')
                    }
                })
            })
        })
    </script>

    @stack('script-bottom')
</body>
</html>
