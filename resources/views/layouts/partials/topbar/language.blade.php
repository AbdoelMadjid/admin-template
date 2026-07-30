@php
    $locales = [
        'en' => ['name' => 'English', 'flag' => 'us', 'code' => 'EN'],
        'id' => ['name' => 'Indonesian', 'flag' => 'id', 'code' => 'ID'],
    ];
    $currentLocale = App::getLocale();
    $current = $locales[$currentLocale] ?? $locales['en'];
@endphp

<div class="topbar-item">
    <div class="dropdown">
        <button class="topbar-link fw-bold" data-bs-toggle="dropdown" data-bs-offset="0,21" type="button"
            aria-haspopup="false" aria-expanded="false">
            <img src="/images/flags/{{ $current['flag'] }}.svg" alt="user-image" class="w-100 rounded me-2" height="18"
                id="selected-language-image"> <span id="selected-language-code">{{ $current['code'] }}</span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            @foreach ($locales as $code => $lang)
                <a href="{{ route('lang.switch', $code) }}" class="dropdown-item"
                    data-translator-lang="{{ $code }}" title="{{ $lang['name'] }}">
                    <img src="/images/flags/{{ $lang['flag'] }}.svg" alt="{{ $lang['name'] }}" class="me-1 rounded"
                        height="18" data-translator-image>
                    <span class="align-middle">{{ $lang['name'] }}</span>
                </a>
            @endforeach
        </div> <!-- end dropdown-menu-->
    </div> <!-- end dropdown-->
</div>
