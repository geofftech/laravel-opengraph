@section("opengraph")

@php($og = opengraph())

{{-- Page Title --}}

<title>
    @hasSection("title") @yield("title") :: @endif
    {{ $og->getTitle(["title"]) }}
</title>

{{-- Open Graph --}}

<x-opengraph::meta property="og:type" :content="$og->get(['type'])" />
<x-opengraph::meta property="og:title" :content="$og->getTitle(['title'])" />
<x-opengraph::meta
    property="og:description"
    :content="$og->get(['description'])"
/>
<x-opengraph::meta property="og:image" :content="$og->get(['image'])" />
<meta
    property="og:url"
    content="{{ $og->get(["image", fn () => Request::url()]) }}"
/>

{{-- Twiter --}}

<x-opengraph::meta
    property="twitter:card"
    :content="$og->get(['twitter:card'])"
/>
<x-opengraph::meta
    property="twitter:site"
    :content="$og->get(['twitter:site'])"
/>
<x-opengraph::meta
    property="twitter:title"
    :content="$og->getTitle(['twitter:title', 'title'])"
/>
<x-opengraph::meta
    property="twitter:description"
    :content="$og->get(['twitter:description', 'description'])"
/>
<x-opengraph::meta
    property="twitter:image"
    :content="$og->get(['twitter:image', 'image'])"
/>

@show
