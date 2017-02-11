
<?php
	$sums = [];
	$i = 0;
	foreach($student as $s) {
		$sum = $s->mc+$s->tc+$s->hw+$s->bs+$s->ks+$s->ac;
		$sums[i] = $sum;
		i = i+1;
	}
	$sums.arsort();
	echo $sums[count($sums)];
?>