<div class="sidebar">
    <div class="sidebar-top">
        <a href="{{ route('dashboard.my-account') }}"
            class="config {{ request()->routeIs('dashboard.my-account') ? 'active' : '' }}">
            @if (request()->routeIs('dashboard.my-account'))
                <img src="{{ asset('assets/icons/configIcon.png') }}" width="24" height="24" />
            @else
                <img src="{{ asset('assets/icons/configIconGray.png') }}" width="24" height="24" />
            @endif
            Configurações
        </a>
        <a href="{{ route('dashboard.my-ads') }}" class="{{ request()->routeIs('dashboard.my-ads') ? 'active' : '' }}">
            @if (request()->routeIs('dashboard.my-ads'))
                <img src="{{ asset('assets/icons/layersIcon.png') }}" width="24" height="24" />
            @else
                <img src="{{ asset('assets/icons/layersIconGray.png') }}" width="24" height="24" />
            @endif
            Meus Anúncios
        </a>
    </div>
    <div class="sidebar-bottom">
        <a href="{{ route('logout') }}"><img src="{{ asset('assets/icons/logoutIcon.png') }}" /> Sair</a>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/sidebar.css') }}">
@endpush
