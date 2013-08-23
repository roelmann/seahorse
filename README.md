Seahorse
========
This is an experimental theme currently in Alpha. It builds on experimental work
I have been doing using the flexbox layout model for Moodle themes.

seahorse currently links to base as parent for basic css styling, but
applies its own page layout through the flexbox model.

The flexbox model itself, and the responsive menu, work equally well if
bootstrapbase is used as a parent - although more work would need to be done in
overriding bootstrap styles and docking currently (27/7/13) does not work in
bootstrapbase themes.

Layout Files:
-------------
The main layout files in Seahorse are general.php, frontpage.php and my.php
Each of these calls preheader.php, header.php and footer.php which are simply 
single files so that core parts of the layout files can be centralised and 
edited once rather than multiple times.

my.php and frontpage.php are specifically created for the MyCourses page and 
FrontPage respectively.
general.php is (as suggested by its name) the general layout file for all other
pagelayout types. It has a theme setting which allows the administrator to 
determine whether the general layout has a standard 3 column HolyGrail layout,
2 left sidebars (blogleft) or 2 right sidebars (blogright).
Single column layouts can be created by adjusting the config.php to allow only
side-pre or side-post for the required layout.

Separate layout files are provided if required but are not actually used in the
default setup of the theme - these enable different layouts to be used for 
different page types while the theme setting in general.php would apply to the 
whole site. To use these layout files edit the config.php file to the required 
pagetype to the layout (threecolhg, blogleft, blogright) as needed.

Edit 18/8/13:
1 sidebar column pre and post options have now been added to the settings page
Additional 'spare' layout files for these options have also been added to the
theme - these are NOT used by default in the theme but are present if an admin
wishes to set different layouts for different page types.

IE Fallbacks
------------
Because the theme is built primarily on the flexbox model, this has implications
for the use of older browsers. See http://caniuse/flexbox for more details.
the biggest issue is that IE only supports flexbox from IE10 onwards - with IE8
not supporting HTML5 either. IE9 users should be in a position to update their
browsers to IE10. However that is not the case for many IE8 users who are 
restricted by their use of WinXP. The options are to install FF/Chrome or even
ChromeFrame within IE8, all of which will permit the full working of the theme.
Alongside that, an ie.css file has been included with sufficient hacks to make
the theme usable on IE8.
CONSIDER - creating a fixed lt-ie10 theme to package with this one and include
instructions for setting the device detection - this could be created without
the HTML5 and flexbox using more standard layouts???



