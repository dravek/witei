<?php

	/*
	WITEI class to retrieve XML feed of properties
	https://github.com/dravek 
	v1 2018
	*/
	/* EXAMPLE of getting properties list */

	namespace Dravek\witei;

	include "Witei.php";

	Witei::getProperties();

	foreach (Witei::$propertyList as $p) 
	{
		echo "Ref: ".$p->ref."<br>";
		echo "Title: ".$p->title."<br>";
		echo "Desc: ".$p->desc_es."<br>";
		echo "Price: ".$p->price."<br>";
		echo "Price Freq: ".$p->price_freq."<br>";
		echo "Currency: ".$p->currency."<br>";

		foreach ($p->images as $img) {
			?>
				<img src="<?= $img ?>" style="width:250px;height:250px;">
			<?php
		}
	}