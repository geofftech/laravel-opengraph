<?php

namespace GeoffTech\LaravelOpenGraph;

class OpenGraph
{
    public array $data = [
        'title' => null,
        'description' => null,
        'url' => null,
        'image' => null,

        'twitter_card_size' => null,
        'twitter_handle' => null,
    ];

    public function merge(array $data)
    {
        $this->$data = [...$this->$data, ...$data];
    }

    public function get(string $field, string $default = '')
    {
        return self::$data[$field] ?? $default;
    }
}
