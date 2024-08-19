<?php

namespace GeoffTech\LaravelOpenGraph;

class OpenGraph
{
    public array $data = [];

    public function __construct()
    {
        $this->data = [

            // og
            'type' => 'article',
            'title' => '',
            // 'title' => config("app.name"),
            'description' => '',
            'image' => '', // default = first on page
            'url' => config('app.url'),

            // twitter
            'twitter:card' => 'summary_large_image',
            'twitter:site' => '', // twitter_handle
            'twitter:description' => '',
            'twitter:image' => '',

        ];
    }

    public function title(string $title)
    {
        $this->data['title'] = $title;

        return $this;
    }

    public function description(string $description)
    {
        $this->data['description'] = $description;

        return $this;
    }

    public function image(string $image)
    {
        $this->data['image'] = $image;

        return $this;
    }

    public function set($field, $value)
    {
        $this->data[$field] = $value;

        return $this;
    }

    public function merge(array $data)
    {
        $this->data = [...$this->data, ...$data];

        return $this;
    }

    public function get(array $fields)
    {
        $result = null;

        while (!$result && count($fields)) {
            $field = array_shift($fields);
            $result = is_callable($field)
                ? $field()
                : $this->data[$field] ?? null;
        }

        return $result;
    }

    public function getTitle(array $fields)
    {
        $result = $this->get($fields);

        $result = (bool) $result
            ? $result . ' :: ' . config('app.name')
            : config('app.name');

        return $result;
    }
}
