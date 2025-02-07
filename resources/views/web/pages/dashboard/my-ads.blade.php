@extends('web.layouts.default')
@section('title', 'B7Store - Minha conta')

@section('content')

    <div class="my-ads-page">
        @include('web.layouts.sidebar')
        <div class="myAds-area">
            <h3 class="myAds-title">Meus Anúncios</h3>
            <div class="myAds-ads-area">
                <div class="my-ad-item">
                    <div class="ad-image-area">
                        <div class="ad-buttons">
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/deleteIcon.png') }}" />
                            </div>
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/editIcon.png') }}" />
                            </div>
                        </div>
                        <div class="ad-image" style="background-image: url('{{ asset('assets/myAds/game1.png') }}')"></div>
                    </div>
                    <div class="ad-title">Controle PS4 - Preto</div>
                    <div class="ad-price">R$ 275,00</div>
                </div>
                <div class="my-ad-item">
                    <div class="ad-image-area">
                        <div class="ad-buttons">
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/deleteIcon.png') }}" />
                            </div>
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/editIcon.png') }}" />
                            </div>
                        </div>
                        <div class="ad-image" style="background-image: url('{{ asset('assets/myAds/game2.png') }}')"></div>
                    </div>
                    <div class="ad-title">Controle Xbox One S - Branco</div>
                    <div class="ad-price">R$ 275,00</div>
                </div>
                <div class="my-ad-item">
                    <div class="ad-image-area">
                        <div class="ad-buttons">
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/deleteIcon.png') }}" />
                            </div>
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/editIcon.png') }}" />
                            </div>
                        </div>
                        <div class="ad-image" style="background-image: url('{{ asset('assets/myAds/game3.png') }}')"></div>
                    </div>
                    <div class="ad-title">PlayStation 5 - Digital Edition</div>
                    <div class="ad-price">R$ 4.898,96</div>
                </div>
                <div class="my-ad-item">
                    <div class="ad-image-area">
                        <div class="ad-buttons">
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/deleteIcon.png') }}" />
                            </div>
                            <div class="ad-button">
                                <img src="{{ asset('assets/icons/editIcon.png') }}" />
                            </div>
                        </div>
                        <div class="ad-image" style="background-image: url('{{ asset('assets/myAds/game4.png') }}')"></div>
                    </div>
                    <div class="ad-title">Controle PS5 - Azul</div>
                    <div class="ad-price">R$ 575,00</div>
                </div>
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
