Labka Vet

Custom WordPress theme for Labka Vet, a veterinary clinic website. The theme is built by hand from a static HTML/CSS layout, without page builders or a starter theme.

Status: work in progress.

Pages
Home
About
Services
Our Team
Blog
Contact
What is done
Static layout split into header.php and footer.php
Styles and scripts loaded through wp_enqueue_scripts
Navigation managed from the WordPress admin (header-menu location)
Front page template (front-page.php)
Theme support for title-tag and post-thumbnails

Planned
Templates for the inner pages (About, Services, Our Team, Contact)
Blog listing and single post templates using the WordPress loop
Editable content fields instead of hardcoded text

Installation
Clone the repository into the themes folder of a WordPress install:
bash
   cd wp-content/themes
   git clone https://github.com/DarynaLiakhova/labka-vet.git
In the WordPress admin, go to Appearance → Themes and activate Labka Vet.
Go to Appearance → Menus, create a menu and assign it to the Header Menu location.
Go to Settings → Reading, choose A static page and set the home page and the posts page.
