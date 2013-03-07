<?php
/**
 * Class GoogleAnalyticsTracker
 * Includes the tracking code for Google Analytics
 * http://www.google.com/analytics/
 *
 * @author		Gerardo Colorado Diaz-Caneja <gcdiazcaneja@diaz-caneja-consultores.com>
 * @link		http://www.diaz-caneja-consultores.com
 * @link        https://github.com/gerardocdc/google-analytics-tracker
 * @copyright	Copyright (c) 2012 Diaz-Caneja Consultores
 * @license		Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)
 * @version     1.1
 * @filesource
 */

/**
 * Class GoogleAnalyticsTracker
 * Includes the tracking code for Google Analytics
 * http://www.google.com/analytics/
 *
 * Usage:
 * <code>
 *      $googleAnalyticsTracking = new GoogleAnalyticsTracker();
 *      $googleAnalyticsTracking->setAccount("UA-XXXXX-Y");
 *      $googleAnalyticsTracking->setDomainName("domain.com");
 *      $googleAnalyticsTracking->render();
 * </code>
 *
 * @package		GoogleAnalytics
 * @version     1.1
 * @since		Version 1.0
 */
class GoogleAnalyticsTracker
{
	/*--------------------------------------------
	|             V A R I A B L E S             |
	============================================*/

	/**
	 * Account tracking Id (UA-XXXXX-Y)
	 *
	 * @var string
	 */
	private $account;

	/**
	 * Domain name
	 *
	 * @var string
	 */
	private $domainName;

	/**
	 * Allows several top-level domains. Default value: true.
	 *
	 * @var boolean
	 */
	private $tld = true;

	/*--------------------------------------------
	|           C O N S T R U C T O R           |
	============================================*/

	/**
	 * Constructor
	 */
	function __construct()
	{
	}

	/*--------------------------------------------
	|      G E T T E R S / S E T T E R S        |
	============================================*/


	/**
	 * @param string $account
	 */
	public function setAccount($account)
	{
		$this->account = $account;
	}

	/**
	 * @return string
	 */
	public function getAccount()
	{
		return $this->account;
	}

	/**
	 * @param string $domainName
	 */
	public function setDomainName($domainName)
	{
		$this->domainName = $domainName;
	}

	/**
	 * @return string
	 */
	public function getDomainName()
	{
		return $this->domainName;
	}

	/**
	 * @param boolean $tld
	 */
	public function setTld($tld)
	{
		$this->tld = $tld;
	}

	/**
	 * @return boolean
	 */
	public function getTld()
	{
		return $this->tld;
	}

	/*--------------------------------------------
	|        C L A S S   M E T H O D S          |
	============================================*/

	/**
	 * Renderizes and creates the Google Analytics tracking code
	 */
	public function render()
	{
		$code = "<script type=\"text/javascript\">\r\n";

		$code .= "var _gaq = _gaq || [];\r\n";
		$code .= "_gaq.push(['_setAccount', '".$this->getAccount()."']);\r\n";
		$code .= "_gaq.push(['_setDomainName', '".$this->getDomainName()."']);\r\n";
		if ($this->getTld()) { $code .= "_gaq.push(['_setAllowLinker', true]);\r\n"; }
		$code .= "_gaq.push(['_trackPageview']);\r\n\r\n";

		$code .= "(function() {\r\n";
		$code .= "\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;\r\n";
		$code .= "\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';\r\n";
		$code .= "\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);\r\n";
		$code .= "})();\r\n";

		$code .= "</script>\r\n";

		echo $code;
	}
}