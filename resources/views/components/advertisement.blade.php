<div class="my-ad-item">
    <div class="ad-image-area">
        @if (auth()->check() && auth()->id() == $advertisement->user_id)
            <div class="ad-buttons">
                <div class="ad-button">
                    <a href="{{ route('ad.delete', $advertisement->id) }}" class="js_delete-button">
                        <img src="{{ asset('assets/icons/deleteIcon.png') }}" />
                    </a>
                </div>
                <div class="ad-button">
                    <a href="#">
                        <img src="{{ asset('assets/icons/editIcon.png') }}" />
                    </a>
                </div>
            </div>
        @endif
        <div class="ad-image" style="background-image: url('{{ $advertisement->featured_link() }}')">
        </div>
    </div>
    <div class="ad-title">{{ $advertisement->title }}</div>
    <div class="ad-price">R$ {{ number_format($advertisement->price, 2, ',', '.') }}</div>
</div>
