@extends('web.layouts.default')

@section('content')
    <section class="hero-area">
        <h3 class="subtitle">Aqui você encontra o que tanto procura!</h3>
        <h1 class="title">O que você está procurando?</h1>
        <div class="search-area">
            <input class="search-text" type="text" placeholder="Estou procurando por..." />
            <select class="categories-options">
                <option selected hidden disabled value="">Categoria</option>
                <option value="cars">Carros</option>
                <option value="eletronics">Eletrônicos</option>
                <option value="clothes">Roupas</option>
                <option value="sports">Esporte</option>
                <option value="babies">Bebês</option>
            </select>
            <select class="states">
                <option selected hidden disabled value="">Estado</option>
                <option value="PB">Paraíba</option>
                <option value="PE">Pernambuco</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="SP">São Paulo</option>
            </select>
            <button class="search-button">Procurar</button>
        </div>
    </section>
    <div class="categories-area">
        <div class="title">Categorias</div>
        <div class="buttons">
            <button class="cars">
                <img src="{{ asset('assets/icons/carIcon.png') }}" alt="Ícone Carros" />
                Carros
            </button>
            <button class="eletronics">
                <img src="{{ asset('assets/icons/eletronicsIcon.png') }}" alt="Ícone Eletrônicos" />
                Eletrônicos
            </button>
            <button class="clothes">
                <img src="{{ asset('assets/icons/clothesIcon.png') }}" alt="Ícone Roupas" />
                Roupas
            </button>
            <button class="sports">
                <img src="{{ asset('assets/icons/sportsIcon.png') }}" alt="Ícone Esportes" />
                Esportes
            </button>
            <button class="babies">
                <img src="{{ asset('assets/icons/babiesIcon.png') }}" alt="Ícone Bebês" />
                Bebês
            </button>
        </div>
    </div>
    <div class="ads">
        <div class="ads-title">Anúncios recentes</div>
        <div class="ads-area">
            @forelse($advertisements as $advertisement)
                @include('components.advertisement', $advertisement)
            @empty
                <div>Nenhum anúncio encontrado</div>
            @endforelse
        </div>
    </div>
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/myAdsStyle.css') }}" />
@endsection
