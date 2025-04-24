<div class="language-switcher">
    @foreach(['tr', 'eu', 'ru'] as $language)
        <a href="{{ route('language.switch', $language) }}"
           class="{{ app()->getLocale() == $language ? 'active' : '' }}">
            <img src="{{ asset("images/flags/{$language}.png") }}" 
                 alt="{{ strtoupper($language) }}" width="20">
        </a>
    @endforeach
</div>