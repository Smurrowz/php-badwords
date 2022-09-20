<?php


$p = 'Lorem, ipsum dolor sit amet consectetur  sit adipisicing elit. At officia odit qui hic quibusdam dicta, sit adipisci repellendus temporibus odio corrupti sit corporis facere, nihil recusandae ad, blanditiis tempore nobis itaque neque.';
$l = strlen($p);

$w = $_GET['word'];
$r = $_GET['replace'];
$cussWords = str_replace($w, $r, $p, $count);

?>

<h3>Paragrafo originale: <?php echo $p?></h3>
<p>la lunghezza del paragrafo e' <?php echo $l ?></p>
<h3> Paragrafo modificato :<?php echo $cussWords ?></h3>
<p> la parola era presente <?php echo $count ?> volta/e </p>


