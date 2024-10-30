=== Listic Listicle Creator ===
Contributors: ebernstein
Tags: listicle, multi-page, pagination
Author URI: http://elliottbernstein.com
Tested up to: 4.3.1

== Description ==
For detailed instructions on using this plugin, including shortcode examples and images,  visit http://elliottbernstein.com/listic-listicle-creator/

= What is Listic? =
Listic is a WordPress plugin that allows users to quickly and easily create multi-page listicles of any size within a single post. This is accomplished by using the [listic] shortcode along with item names or numbers of your choice.

= Quick Start Example Code =
NOTE: All Listicl listicles MUST start with a "start" item, as shown below.

`[listic item="start"] 
STARTING SLIDE CONTENTS HERE 
[/listic]

[listic item="1"] 
SLIDE CONTENTS HERE 
[/listic]

[listic item="2"] 
SLIDE CONTENTS HERE 
[/listic]

[listic item="3"] 
SLIDE CONTENTS HERE 
[/listic]`

= How to Use Listic =

The key to using Listic is the [listic] shortcode. Use the shortcode multiple times in one post to build up your list, but remember to start with the start page!

= 1. Create the Start Page =

Your first listic item is your start page. It is the item that will be displayed on the blog page and category pages. Other items and pagination will only appear on the single post page itself.

The first item must always be called "start", and will look something like this:

`[listic item="start"] 
STARTING SLIDE CONTENTS HERE 
[/listic]`

The start page contains no item list numbers (compared to when it is shown in a single post page, when it will contain the pagination below it)

= 2. Create Item Pages =

After you've set up your start page, you can create as many item pages as you like. At this point, your code will look something like this:

`[listic item="start"] 
STARTING SLIDE CONTENTS HERE 
[/listic]

[listic item="1"] 
SLIDE CONTENTS HERE 
[/listic]

[listic item="2"] 
SLIDE CONTENTS HERE 
[/listic]

[listic item="3"] 
SLIDE CONTENTS HERE 
[/listic]`

Each slide will load according to the item that has been clicked in the pagination.

= 3. Customize Item Names (optional) =

One of the coolest things about Listic is that after you've created the initial "start" page, you can use ANY names you want for the slides. Want to change slides from "1, 2, 3" to "Mandarin Oriental, Belmond, Peninsula"? You can do it! Just type code as such:

`[listic item="start"] 
STARTING SLIDE CONTENTS HERE 
[/listic]

[listic item="Mandarin Oriental"] 
SLIDE CONTENTS HERE 
[/listic]

[listic item="Belmond"] 
SLIDE CONTENTS HERE 
[/listic]

[listic item="Peninsula"] 
SLIDE CONTENTS HERE 
[/listic]`

The result will be renamed slide buttons.

= Customizing Listic's Look =

Althoug the basic formatting of Listic should adapt well to most WordPress themes and sites, users may want to use the numerous css classes included in Listic to change the look of various elements. Any of the following classes can be used to do so:

`listic-content-box (content box area) 
listic-contet-box-[item number or name] (a specific content box in your list)
listic-item-number (all item numbers)
listic-item-number-[item number or name] (a specific item number in your list)
listic-list-preview (the start page cotents that display on non-single posts)
listic-current-item-number (the number of the current item being displayed)`
