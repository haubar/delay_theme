=== Toujours ===

Requires at least: 4.0
Tested up to: 4.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Toujours has a simple, elegant design that's perfect for planning and sharing moments from your wedding. The theme highlights your content with a slideshow, large featured images, and a unique layout for recent posts.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= Does this theme support any plugins? =

Toujours includes support for a few Jetpack features, including Infinite Scroll, Site Logo, and Featured Content (the posts are displayed in the slideshow in the blog page).

= How do I use the Guestbook Template? =

You can use the Guestbook Template by following these steps:

1. Create a new page, or edit an existing page.
2. Under Page Attributes, change the Template to Guestbook.
3. Under Discussion, make sure that 'Allow comments.' is checked.

= How do I add the Featured Content slideshow =

The Featured Content slideshow requires the Jetpack plugin (https://wordpress.org/plugins/jetpack/). Once installed, it can be set up following these steps:

1. In the Customizer > Featured Content, enter a post tag to use to mark Featured Content. Click Save & Publish.
2. Add that tag to posts you would like to show in the Featured Content slideshow.
3. The posts will automatically appear in the slideshow, at the top of the blog page. They will use the Featured Image from each post, and display the title and published date overtop.

= How do I add the three most recent posts above the rest on the blog page? =

Toujours allows you to display the three most recent posts in a special area above the other posts on the blog page. To do this:

1. Navigate to the Customizer > Theme Options.
2. Check the checkbox labelled "Display the three most recent posts in a special area above your other posts". Click Save & Publish.
3. Your three most recent posts will automatically appear above the rest of the posts on the blog page. They will each display a Featured Image, and an excerpt from the post.

== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2017 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2017 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)

== Licensing ==

Toujours WordPress theme, Copyright 2015 Automattic
Distributed under the GNU GPL

Toujours WordPress theme bundles the following third-party resources:

jQuery FlexSlider v2.6.0 Copyright 2012 WooThemes
Licensed under the terms of the GNU GPL, Version 2 (or later) (https://www.gnu.org/licenses/gpl-2.0.html)
Source: https://github.com/woothemes/FlexSlider

Genericons icon font, Copyright 2015 Automattic
Licensed under the terms of the GNU GPL, Version 2 (or later) (https://www.gnu.org/licenses/gpl-2.0.html)
Source: http://www.genericons.com

imagesLoaded v4.0.0
Licensed under the terms of the MIT License (http://opensource.org/licenses/MIT)
Source: https://github.com/desandro/imagesloaded

Alegreya Sans Font
Licensed under SIL Open Font License, 1.1 (http://scripts.sil.org/OFL)
Source: https://www.google.com/fonts/specimen/Alegreya+Sans

Merriweather Font
Licensed under SIL Open Font License, 1.1 (http://scripts.sil.org/OFL)
Source: https://www.google.com/fonts/specimen/Merriweather

Theme screenshot uses an image from Unsplash
Licensed under Creative Commons Zero, 1.0 (http://creativecommons.org/publicdomain/zero/1.0/)
Source: https://unsplash.com/photos/51QcRqMjy6w


== Changelog ==

= 23 February 2017 =
* Udpate readme

= 26 January 2017 =
* Check for is_wp_error() in cases when using get_the_blog_list() to avoid potential fatal errors.

= 30 December 2016 =
* Update styles to show/hide site tagline, both in the Customizer preview, and on the site itself.

= 29 December 2016 =
* clean up retired a8c widget Time Machine styles.

= 31 October 2016 =
* Remove post-navigation overflow to make sure italic fonts are displayed properly.

= 26 August 2016 =
* Add Featured Content to Headstart annotations.

= 23 August 2016 =
* Re-add social menu - accidentally removed as part of a fix for another ticket -

= 22 August 2016 =
* Footer link URL caused custom footer link options not to be applied. Updated URL to match other themes.

= 14 August 2016 =
* translation updates

= 4 July 2016 =
* Update theme tags in readme.txt to only include WP.org tags.
* Localize slideshow previous/next strings.

= 12 May 2016 =
* Add new classic-menu tag.

= 9 May 2016 =
* Add posts_per_page on recent posts query, to make sure it's not overridden by a lower posts-per-page setting in WordPress.

= 13 April 2016 =
* Ensure we escape $content on output.
* Replace custom gallery shortcode regex with get_shortcode_regex() for better security.

= 15 February 2016 =
* Correcting script name - I changed it in one place but not another, breaking the slideshow.
* Remove unneeded pre
* Add license information for image used in screenshot. Bump version number.

= 1 February 2016 =
* Correcting text-domain in template-tags file.
* Removing complete fallback social menu - replacing with just a check for Jetpack social menu before adding it. Removing fallback social menu styles. Adding styles for Recent Comments widget markup for self-hosted WordPress.

= 16 January 2016 =
* Tweaking recent three posts markup, so Edit link won't crowd the post meta when there's no content.

= 14 January 2016 =
* Fleshing out the how-tos in the theme's readme file.
* Make recent three posts respect the Display tag content in all listings setting in the Featured Content.
* Adding check to make sure site is not loaded in iframe before attaching links to whole slides in slideshow. This prevents them from being links in the Customizer, and users being able to click them and load the site with the admin bar.
* tweaking container that's used for comment avatars.

= 13 January 2016 =
* Adding check for menu, and not outputting container around menu if it doesn't exist.

= 12 January 2016 =
* Updating readme file.
* Updating description to remove redundant term.
* Adding POT file for theme.
* Tweaking theme description.
* Fixing byline styles in slideshow to match other entry meta text.
* Add fallback for social menu, if Jetpack social menu is not present.
* Making byline visible when there's more than one post author; tweaking byline styles.
* Add clarification comment to JS for checking whether to add prev/next links to slideshow.
* Swapping 'big day' for 'wedding' in the theme description.
* Add check to make sure slideshow prev/next links are not added when there's only one featured content slide.
* Fixing custom header image link to point to site, rather than current post.

= 8 January 2016 =
* Updating image sizes to better match the sizes the images are actually displayed.
* Removing restrion on post formats that can show up in recent posts. Allowing all formats, not just Standard. Hiding post format label in recent posts area.
* Making post format styles more specific. Tweaking Ratings, Sharing spacing. Updating table of contents and section numbering.
* Adding support for custom header images.

= 7 January 2016 =
* Fixing ratings header colour on format quote posts.

= 6 January 2016 =
* Updating background image to use retina-friendly image for the default, and regular size for custom images. Borrowed from Button.

= 5 January 2016 =
* Tweaking spacing around post meta; adding break word to link tags.
* Fixing some design issues including adding more padding around rating flair, and adding styles when ratings flair is used in recent posts. Making sure post pagination markup is in all content parts.
* Make whole slide area clickable.
* Make infinite scroll click to scroll when there is a social menu assigned.
* Making the post format label a link.
* Adding styles for more html5 input styles to cover all currently supported by _s.
* Making post format styles more specific, so they don't affect search result styles.
* Swapping out Slider JS library for Flexslider for the featured content slideshow.

= 4 January 2016 =
* Swapping out regular menu for social menu, for one built right into Jetpack.
* Removing unused  variable from index.php
* Cleaning up code in post format files, specifically:
* Code cleanup, including:
* Code clean up - adding spacing to align associative arrays.
* Tweaking customizer label further for clarity
* Improving customizer label so it makes more sense.

= 1 January 2016 =
* Making featured trio posts more consistent with other posts on small screens. Making entry footer meta all display block on smaller screens.
* Adjustments for colour annotations. Minor formatting

= 31 December 2015 =
* Replace blank screenshot with screenshot of theme.
* Updating theme description.
* Cleaning up comments in header.php, and adding fallback background colour for featured content missing featured images.
* Fixing minor issues with slideshow for RTL languages.
* Adding theme description, tags; fixing formatting and adding styles for unmute button for audio player.
* initial pass of RTL styles.
* Hiding border under pages; reducing spacing
* Fixing selector for single footer widget.
* Making base colour of archive, categories widgets to only target unordered list.
* Tweaking styles on Recent Posts widget.
* Hiding marker for sticky posts on all but first page.

= 30 December 2015 =
* Adding check to make sure wrapping avatars in divs don't affect the dashboard avatars.
* Adding hover effects throughout theme.
* Tweaking gallery format posts; adjusting spinner placement for infinite scroll.
* fixing borders in widgets.

= 29 December 2015 =
* Adding gallery post format support to theme.
* Tidying up widget styles; fixing link colours in quote format links.
* Fixing minor issues in editor styles.
* Removing outline border from editor styles; was displaying unnecessarily whenever editor was in use.
* Updating recent posts customizer default; updating label text to make it clearer what it does.
* Style tweaks, including:
* Adding styles for quote format posts, for related posts and sharing.
* Moving masonry functions into a window ready function.
* Replacing styles that were accidentally removed in the last revision.
* Adding styles for prev/next posts links used in non-infinite-scroll situations.
* Adding editor styles.
* Tweaking widget styles and building out shortcode styles; moving WP.com specific styles to separate stylesheet, and adding related posts, sharedaddy styles.
* Removing Header image section from customizer.
* Re-firing masonry for footer to make sure widgets loaded with JS don't screw up the layout.
* Continuing to build out widget styles. Fixing some minor display issues with menu defaults.
* Fixing issue with Customizer not saving recent posts setting.
* Replacing span wrapping avatar with div to fix issue in admin toolbar.
* Tweaking widget styles; adding colour tweaks for footer widgets.
* Building out styles for WP.com widgets.

= 28 December 2015 =
* Moving theme from dev to pub directory.
