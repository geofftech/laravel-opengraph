# GeoffTech Laravel OpenGraph

## Usage examples

- in render function

```
   public function render(OpenGraph $og)
    {
        if (!$this->project->is_published) {
            abort(404);
        }

        $og->title($this->project->name);

        return view('livewire.pages.project-show-page');
    }
```

## Implementation

- add to layout head

```
    <x-opengraph::head />
```

- remove any `title` tags that may be there

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

```
