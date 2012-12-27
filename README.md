Google Analytics-tracker
========================

Includes Google Analytics tracking code



Twitter Timeline Widget
=======================

Purpose
-------
Includes the tracking code for Google Analytics.

Configuration
-------------
You must first create an account on Google Analytics
http://www.google.com/analytics/
Once you have created the account, you must obtain the tracking's Id from the configuration menu for your website. They consist normally of a set of numbers and letters (like UA-XXXXX-Y).

Usage
-----
	$googleAnalyticsTracking = new GoogleAnalyticsTracker();
	$googleAnalyticsTracking->setAccount("UA-XXXXX-Y");
	$googleAnalyticsTracking->setDomainName("domain.com");
	$googleAnalyticsTracking->render();

	Optional configuration:
	* Allows several top-level domains (true,false):   $googleAnalyticsTracking->setTld(true);

Copyright
---------
Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)
Copyright (c) 2012 Diaz-Caneja Consultores

Contact
--------
Gerardo Colorado Diaz-Caneja   gcdiazcaneja@diaz-caneja-consultores.com
Github: https://github.com/gerardocdc/google-analytics-tracker