<?php

use GeoffTech\LaravelOpenGraph\OpenGraph;

if (!function_exists('openGraph')) {
    function openGraph()
    {
        return app(OpenGraph::class);
    }
}
