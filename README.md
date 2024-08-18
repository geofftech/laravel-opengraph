# GeoffTech Laravel OpenGraph

## Usage

- in render function

```
   OpenGraph::set([
      'title' => 'Badges',
    ]);
```

````
    OpenGraph::merge([
      'title' => 'Organisation :: ' . $this->organisation->name,
      'image' => $this->organisation->image_url,
    ]);
```

## Implementation

- add to layout head

````

    <x-opengraph />

```

## Tutorials

- https://www.digitalocean.com/community/tutorials/how-to-add-twitter-card-and-open-graph-social-metadata-to-your-webpage-with-html

## Card Validators

- Twitter Card validator

  - https://cards-dev.twitter.com/validator

- Facebook Sharing Debugger

  - https://developers.facebook.com/tools/debug/

- LinkedIn Post Inspector

  - https://www.linkedin.com/post-inspector/

- Pinterest Rich Pins Validator

  - https://developers.pinterest.com/docs/rich-pins/rich-pins/
```
