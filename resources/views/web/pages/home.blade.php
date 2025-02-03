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
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Bola de Futebol Americano Wilson</div>
                <div class="ad-price">R$ 138,61</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Tênis vans Baby - 1 ano</div>
                <div class="ad-price">R$ 189,99</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Controle PS4 - Preto</div>
                <div class="ad-price">R$ 275,00</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Volkswagen Fusca 68</div>
                <div class="ad-price">R$ 34.990,00</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Volkswagen Polo 2015 - Azul</div>
                <div class="ad-price">R$ 67.900,00</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Camisas sociais masculinas</div>
                <div class="ad-price">R$ 110,00</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">Bola de Basquete Spalding - NBA</div>
                <div class="ad-price">R$ 190,36</div>
            </div>
            <div class="ad-item">
                <div class="ad-image" style="background-image: url('http://placehold.co/150x150')"></div>
                <div class="ad-title">MacBook Pro</div>
                <div class="ad-price">R$ 8.349,10</div>
            </div>
        </div>
    </div>
@endsection
