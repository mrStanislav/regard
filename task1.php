<?php
	class test {
		public $next;
	}

	$a = new test();
	$b = new test();
	$c = new test();
	$a->next = $b;
	$b->next = $c;
	$c->next = null;

	function reverse($a) 
	{
		// для удобства и наглядности (можно передать в while срзу "a")
		$curItem = $a;
		$prevItem = null;
		while ($curItem != null) {
			$nextItem = $curItem->next;
			$curItem->next = $prevItem;
			$prevItem = $curItem;
			$curItem = $nextItem;
		}
		return $prevItem;
	}

	$ob1 = reverse($a);
	var_dump($ob1);


