Marble theme for Bludit
========================

Ported Marble template (Designed by [FREEHTML5.co](https://freehtml5.co/)) to [Bludit](https://www.bludit.com/).

## Differences from the original theme

- No portforio page.
- No recent blog on home page.

## How to use

The static page will be used for the menu.

For the hero image, the theme needs a static page with the slug name "service" (not the title) and a child page describing the service. Each page must have a cover image and a description.

```
service
├ service1 (with cover image and description)
├ service2 (with cover image and description)
└ service3 (with cover image and description)
```

To change the service icon, append the following json to the custom field And enter the icomoon icon name in the service child page options.

```json
{
  "icon": {
    "type": "string",
    "placeholder": "Enter icomoon icon name"
  }
}
```

Adding a static page with the slug name "contact" (not the title) will display a link to the contact page and a description in the footer. The contact page is supported by [contact3](https://plugins.bludit.com/plugin/contact3).






## Compatible

- Bludit v3.x

## Author

- Jun Nogata <nogajun@gmail.com>

<a href="https://www.buymeacoffee.com/nogajun" target="_blank"><img src="https://www.buymeacoffee.com/assets/img/custom_images/yellow_img.png" alt="Buy Me A Coffee" style="height: 41px !important;width: 174px !important;box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;-webkit-box-shadow: 0px 3px 2px 0px rgba(190, 190, 190, 0.5) !important;" ></a>

## Credits

- TITLE: Marble - Fully Responsive Free HTML5 template
- AUTHOR: DESIGNED & DEVELOPED by FREEHTML5.co
    - Website: http://freehtml5.co/
    - Twitter: http://twitter.com/fh5co
    - Facebook: http://facebook.com/fh5co

- Marble Free HTML5 Bootstrap Template for Portfolio or Multi Purpose Websites: https://freehtml5.co/marble-free-html5-bootstrap-template-for-portfolio-or-multi-purpose-websites/

## License

- [Creative Commons Attribution 3.0 Unported (CC BY 3.0) ](https://creativecommons.org/licenses/by/3.0/)
- Frequently Asked Questions - FreeHTML5.co: https://freehtml5.co/faq/#faq-license

## Screenshot

- N/A

## Live Demo

- N/A
