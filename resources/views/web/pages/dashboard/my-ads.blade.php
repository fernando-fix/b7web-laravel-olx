@extends('web.layouts.default')
@section('title', 'B7Store - Minha conta')

@section('content')

    <div class="my-ads-page">
        @include('web.layouts.sidebar')
        <div class="myAds-area">
            <h3 class="myAds-title">Meus Anúncios</h3>
            <div class="myAds-ads-area">
                @forelse ($advertisements as $advertisement)
                    @include('components.advertisement', $advertisement)
                @empty
                    <div>Nenhum anúncio cadastrado</div>
                @endforelse
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/myAdsStyle.css') }}" />
@endsection

@push('scripts')
    <script>
        let saveButton = document.querySelector('.save-button');
        let inputs = document.querySelectorAll('input, select');
        inputs.forEach(function(input) {
            input.addEventListener('change', function() {
                saveButton.style.opacity = '1';
            })
        })
    </script>
@endpush
