=== Plugin Name ===
Contributors: makihekakodo
Donate link: /
Tags: nogometna lestvica
Requires at least: 5.4
Tested up to: 5.6
Stable tag: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Automatic update of 3. Slovenian soccer league standings.

== Description ==

So far, without changing any of the plugin code, this will work on all soccer leaguges of NZS(Nogometna zveza Slovenije, official website at http://www.nzs.si). 
It retrieves all data(matches played, scoresheet, ...), it parses it using "PHP Simple HTML DOM Parser" made by S.C. Chen (me578022@gmail.com),  included in the standings table on desired site. 

More about parser can be found here : http://simplehtmldom.sourceforge.net/

The widget retrieves last update from WP options system on each visit of the website (or wherever the widget is embedded). Update rate, among other things, of the official standings can be manually set in the settings of the widget.
If more time than specified in the settings has passed, widget uses parser to get information, otherwise it simply takes it from local database (we don't really want to spam requests on NZS).

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/lestvica` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the Appearance->Widgets->Lestvica screen to configure the plugin.
4. Make sure you click "Save" so the defaults are initialized into instance of the widget.


== Frequently Asked Questions ==

= Will this plugin/widget see any updates? =

Yes, it will.

= Can I suggest you to add some additionally functionality that I could use? =

Sure, feel free to contact me at maki.majmun at gmail.com with suggestions.

== Screenshots ==

1. Widget admin page form.
2. Widget front page display.

== Changelog ==

= 1.0 =
* First release !
* Url, colors, style, update rate can be manually set in widget configuration page.

== Upgrade Notice ==

= 1.0 =
* First release !