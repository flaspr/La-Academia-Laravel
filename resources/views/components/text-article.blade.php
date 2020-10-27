<div class="section-text">
    <div class="py-6">
        <div class="container">
            <h2 class="display-7 font-weight-bold">
                {{ $title }}
            </h2>
            <h2 class="display-8">
                {{ $body }}
            </h2>
            @isset($optional)
                <h2 class="display-8 d-none d-lg-inline">
                    {{ $optional }}
                </h2>
            @endisset
        </div>
    </div>

</div>
