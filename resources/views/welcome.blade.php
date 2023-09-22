<h2>
    @lang('words.wel_come') <br>
    @lang('words.lang_s') : {{ session('lang') }} <br>
    @lang('words.lang_g') : {{ \App::getLocale() }}
    <ul>
        <li>
            <a href="/lang/uz">Uz</a>
        </li>
        <li>
            <a href="/lang/ru">Ru</a>
        </li>
        <li>
            <a href="/lang/en">En</a>
        </li>
    </ul>
</h2>
<div class="container">
    <div class="row">
        @foreach ($services as $service)
            <div class="col-lg-6 @if(!$loop->first) mt-4 mt-md-0 @endif">
                
                <h3>
                    <a href="#">{{ $service['title_'.\App::getLocale()] }}</a>
                </h3>
                <p>
                    {{ $service['description_'.\App::getLocale()] }}
                </p>
            </div>
        @endforeach
    </div>
</div>
