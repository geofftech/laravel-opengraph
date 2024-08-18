@section('open-graph')

@php($og = app($og->class))

@php
$title = $og->get('title');
if ($title) $title = $title . ' :: ';
$title = $title . config('app.name')
@endphp

<title>
    @hasSection("title") @yield("title") ::
    @endif {{ config("app.name") }}
</title>

<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $title }}" />
<meta property="og:description" content="{{ $og->get('description', config('app.name')) }}" />
<meta property="og:url" content="{{ $og->get('url', Request::url()) }}" />
<meta property="og:image" content="{{ $og->get('image', asset('images/logo-green.webp')) }}" />

<meta name="twitter:card" content="{{ $og->get('twitter_card_size', 'summary_large_image') }}" />
<meta name="twitter:site" content="{{ $og->get('twitter_handle', config('app.twitter_handle')) }}" />
<meta name="twitter:title" content="{{ $title }}" />
<meta name="twitter:description" content="{{ $og->get('description', config('app.name')) }}" />
<meta name="twitter:image" content="{{ $og->get('image', asset('images/logo-green.webp')) }}" />

@show