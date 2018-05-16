<?php

/*
	WITEI class to retrieve XML feed of properties
	https://github.com/dravek 
	v1 2018
*/

namespace Dravek\witei;

class Witei{

	/* URL of you XML feed */
	protected static $url = "YOUR_XML_FEED_URL";

	public static $propertyList;

	/* Process all Properties on your feed */
	public static function getProperties()
	{

		$xml = simplexml_load_string(file_get_contents(self::$url));

		foreach ($xml as $p) 
		{
			if(!empty($p->ref))
			{
				$property->ref = $p->ref;
				$property->price = $p->price;
				$property->currency = $p->currency;
				$property->price_freq = $p->price_freq;
				$property->desc_es = $p->desc->es;
				$property->title = $p->title;

				foreach ($p->images->image as $i) {
					$property->images[] = $i->url;
				}

				self::$propertyList[] = $property;				
			}

			$property = new \stdClass();
		}	
	}
}