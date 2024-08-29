> [!CAUTION]
> The author is no longer using Bludit and will archive this theme. If you want to change it, please fork it.
>
> 作者がBluditを使わなくなったので、このテーマをアーカイブ化します。変更したい人はフォークしてください。

# Marble theme for Bludit

Ported Marble template (original designed by [FREEHTML5.co](https://freehtml5.co/)) to [Bludit](https://www.bludit.com/).

## Differences from the original theme

- No portforio page.
- No recent blog on top page.

## How to add a top page

1. Add a static page.
2. Open the options for that page and set "top" as the template on the Advanced tab.
3. Go to Settings > Advanced. Set the static page you created to the homepage of the predefined page.

### How to set the hero image in a top page

1. Add a static page with the slug name "service".
2. Create a child page on that "service" static page with a cover image and description.

static pages ex)

```text
service
├ service1 (with cover image and description)
├ service2 (with cover image and description)
└ service3 (with cover image and description)
```

### How to set icons on service child pages

1. Go to Custom Fields in Settings. Add the json below.

```json
{
  "icon": {
    "type": "string",
    "placeholder": "add a icomoon icon name"
  }
}
```

2. Go to the child page of the service static page.
3. Open Options and set icomoon font name to Custom. icomoon font name can be found in <https://icomoon.io/#preview-free>.

## How to add a contact page

1. Add a static page with the slug name "contact".

A link to the contact page is added to the footer. The contact page is supported by [contact3](https://plugins.bludit.com/plugin/contact3).

## Compatible

- Bludit v3.x

## Author

- Jun Nogata <nogajun+bludit@gmail.com>

## Original credits

- Title: Marble - Fully Responsive Free HTML5 template
  - Marble Free HTML5 Bootstrap Template for Portfolio or Multi Purpose Websites: <https://freehtml5.co/marble-free-html5-bootstrap-template-for-portfolio-or-multi-purpose-websites/>
- Original designed by [FREEHTML5.co](http://freehtml5.co/)
- License
  - [Creative Commons Attribution 3.0 Unported (CC BY 3.0) ](https://creativecommons.org/licenses/by/3.0/)
  - Frequently Asked Questions - FreeHTML5.co: https://freehtml5.co/faq/#faq-license
