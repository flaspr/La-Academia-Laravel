<div class="section-text">
    <div class="py-6">
        <div class="container">
            @isset ($article)
            <h2 class="display-6 font-weight-bold">
                {{ $article['title'] }}
            </h2>
            <h2 class="display-7">
                {{ $article['body'] }}
            </h2>
            @isset ($article['optional'])
            <h2 class="display-7 d-none d-lg-inline">
                {{ $article['optional'] }}
            </h2>
            @endisset
            @endisset
        </div>
    </div>

</div>
