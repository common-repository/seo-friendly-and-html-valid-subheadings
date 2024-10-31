=== SEO friendly and HTML valid subheadings ===
Tags: SEO, headings
Requires at least: 1.5
Tested up to: 2.7
Stable tag: 1.1

On certain pages turns any H2 into H3, H3 into H4, H4 into H5, H5 into H6 and H6 into P.headingSix. Use `<? add_filter('the_content', 'heading_replacement_filter_headings'); ?>` in theme pages.

== Description ==

When coming up with an SEO optimized theme, you should take care of the following:

- have the H1 on archive pages and the homepage set to the title of those pages, or the name of your blog
- set the H1 on single posts or pages to be the title of the post/page

This causes an issue with subheadings when composing your posts. In the category pages the articles titles will be the H2, but in the individual posts the articles titles will be the H1. Do you set your subheadings to start at H2 and please the single pages, or H3 and please the category pages?

This plugin resolves the issue by replacing subheading tags with the following on pages where the plugin tag is added:

- H2 into H3
- H3 into H4
- H4 into H5
- H5 into H6
- H6 into P.headingSix

== Installation ==

1. [Download](http://downloads.wordpress.org/plugin/seo-friendly-and-html-valid-subheadings.zip)
2. Unzip the contents of the downloaded folder
3. Upload the `wp-seo-html-valid-subheadings.php` file to the `/wp-content/plugins/` directory of your WordPress installation.
4. Log in to your WordPress dashboard and activate the `wp_date_with_a_nice_tone` plugin that should now be visible in the list.
5. Go into the theme and place the code `<? add_filter('the_content', 'heading_replacement_filter_headings'); ?>` on any page which outputs multiple posts, such as the home page, category pages, archive pages and tag pages. Place the code at the top of each file, to ensure it comes before the WordPress loop and the wp_content tag.