<script src="{{ asset('assets/js/sweetalert.js') }}"></script>
@if (session('alerts'))
    <script>
        let queue = [];
        @foreach (session('alerts') as $alert)
            queue.push({
                icon: '{{ $alert['type'] }}',
                title: '{{ $alert['message'] }}',
            });
        @endforeach
        async function showNextAlert() {
            if (queue.length > 0) {
                const alert = queue.shift();
                await Swal.fire(alert);
                showNextAlert();
            }
        }
        showNextAlert();
    </script>
    {{ session()->forget('alerts') }}
@endif
