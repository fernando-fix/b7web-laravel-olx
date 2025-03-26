<div class="sidebar">
    <div class="sidebar-top">
        <a href="{{ route('profile.edit', Auth::user()) }}"
            class="config {{ request()->routeIs('profile.edit') ? 'active' : '' }}">
            @if (request()->routeIs('profile.edit'))
                <img src="{{ asset('assets/icons/configIcon.png') }}" width="24" height="24" />
            @else
                <img src="{{ asset('assets/icons/configIconGray.png') }}" width="24" height="24" />
            @endif
            Configurações
        </a>
        <a href="{{ route('advertisements.index') }}" class="{{ request()->routeIs('advertisements.index') ? 'active' : '' }}">
            @if (request()->routeIs('advertisements.index'))
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
