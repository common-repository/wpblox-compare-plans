=== WPBLOX | COMPARE PLANS ===
Contributors: wpo365
Tags: pricing table, pricing tables, compare plans, compare editions, compare offers, compare services, compare prices
Requires at least: 5.0
Tested up to: 5.6
Stable tag: 3.0.0
Requires PHP: 5.6.40
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

A useful, usable and beautiful responsive plan / product / service / price / edition comparison table. It allows your customers to quickly find your offering that best answers to their needs. With a compelling call-to-action WPBLOX | COMPARE PLANS will help you convert website visitors into paying customers with ease!

Check out these great online examples [here](https://www.wpo365.com/compare-all-wpo365-extensions/?wpblox) [here](https://wpblox.com/compare-plans/?wpblox) and [here](https://www.wpo365.com/compare-all-wpo365-bundles/?wpblox).

= Plugin Features =

- Create groups of features (capabilities) that the user can expand / collapse.
- Add up to 3 plans.
- Toggle compact mode.
- Define your own accent color.
- Add a call-to-action button for each plan.
- Let end-users toggle between *table* and *compact* mode.

= Premium Features =

- Add more than 3 plans.
- Make all headers of all plans of the same height.
- Define your own background, accent and foreground color.
- Override the accent color for an individual plan.
- Repeat the call-to-action button at the bottom of each plan.
- Add a link (opens a new browser tab) to each feature so users can continue reading.
- Configure the number of visible plans.
- Leave expanded group(s) of features (capablity) open.
- Export / edit / import the table's configuration as JSON.
- Hide the *Powered by WPBLOX.com* notice at the bottom of the table.

= Fields

**To describe a group of features**
- Title (e.g. *Collaboration*)

**To describe a single feature**
- Title (e.g. *Video conferencing*)
- Link to continue reading (e.g. *https://example.com/video-conferencing*) [premium]

**To describe a plan**
- Title (e.g. *Office Business Basic*)
- Subtitle (e.g. *For small teams with up to 5 users*)
- Name (e.g. *BASIC*)
- Price (e.g. *99*)
- Nr. of decimals (e.g. *2*)
- Currency (e.g. *$* or *EUR*)
- Place currency before (e.g. $ 99)
- Recurrence (e.g. / Yearly)
- Call-to-action button
- Description
- Custom accent color

= Support =

Go to [Support Page](https://wpblox.com/contact/) to get in touch in case the plugin is not working as expected. There are endless possible Wordpress configurations and versions so any feedback is appreciated and helps to improve and shape the product!

== Installation ==

= Documentation =

Check the [online documentation](https://wpblox.com/documentation/) for the latest updates.

= Installation =

1. Go to **WP Admin > Plugins > Add new** and search for WPBLOX.
2. Find the **WPBLOX | COMPARE PLANS** plugin and click **Install**.
3. Wait until the installation finishes and then click **Activate**.

= Configuration =

1. Create a new post / page or choose an existing one.
2. In edit mode, add a new **Compare plans** block by clicking to add a new block from the **Widgets** section.
3. Select the block to activate the block's editor in the right panel.
4. To be able to *compare plans* (or prices, products, services, editions etc.) you must first add features. Expand the **Manage features** panel and click **Launch editor** to start editing features.
5. Features must be grouped in capabilities so click to **Add capability** e.g. *Collaboration*.
6. Then add one or more features e.g. *Video conferencing* and *Instant messaging*. Changes you made are saved instantly.
7. Continue adding capabilities and features until you have described all features of all your collective plans.
8. Once you finished adding all features, continue adding the various plans by expanding the **Managed plans** panel and click **+ Add plan**.
9. A new empty plan will be created with a random name. Click the **Pencil** button to start editing the plan.
10. Add a Title, Subtitle, Name, Price, Nr. of decimals, Currency, Recurrence, Call-to-action and Description. Both Call-to-action and Description may contain valid HTML source.
11. Finally at the bottom of each plan you can simply check all features that apply for the plan you are currently editing.
12. Click **Save** to finalize the plan.

= Change appearance =

Optionally you can choose to change the default configuration of the **Compare plans** block when you expand the **Manage appearance**.

- Add a title that appears above the table. If left empty, it will be ignored.
- Add a subtitle that appears above the table. If left empty, it will be ignored.
- Change the nr. of visible columns (default 3).
- Update the nr. of visible columns (when the available screenwidth is less than 768px).
- Choose to leave a group of features (capability) expanded when the user clicks to open another capability.
- Repeat the *call-to-action* row at the bottom of the table.
- Supress the auto-scroll from automatically scrolling through the plans.
- Hide the *Powered by WPBLOX.com* notice at the bottom of the table.

= Edit JSON =

You can copy the JSON representation of the block's configuration incl. Features, Plans and Appearance. This way you can create a backup of the configuration that you can re-use on other pages. It also allows you to edit the configuration directly (at your own risk).

== Frequently Asked Questions ==

== Screenshots ==

1. Compare Plans example.
2. Compact mode (with accent colors).
3. Add Compare Plans block.
4. Adding (groups of) features.
5. Adding plans.
6. Editing plans.
7. Updating appearance.
8. Editing JSON.

== Upgrade Notice ==

After you install a new version of the plugin the block may no longer render as expected both in for end-users and / or for authors when editing the page. In that case you should edit the page, select the block and click *Attempt block recovery*. Once recovered you can update the block's configuration and save / re-publish the page.

== Changelog ==

= 3.0.0 =
* Feature: An end-user can now toggle between *table* and *compact* mode (but the author can choose to hide it) [all versions].
* Change: The title and subtext have been removed [all versions]
* Improvement: the call-to-action button now will appear 20% darker for improved engagement [all versions].
* Improvement: Configuring an accent color is now an option available for the free version [basic version].
* Fix: The plan's title, price, recurrence and call-to-action now will never wrap to a next line [all versions].

= 2.0.0 =
* Feature: Support for compact mode [all versions].
* Improvement: Support for equalizing the height of all headers of all plans [premium only].
* Improvement: Support for configuring background, accent and foreground colors [premium only].
* Improvement: Support for overriding the accent color for a single plan [premium only].

= 1.0.0 =
* Initial version.
