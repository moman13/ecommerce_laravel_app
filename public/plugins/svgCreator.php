<?php
header('Content-type: image/svg+xml');
echo '<?xml version="1.0" encoding="utf-8" standalone="no"?>
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN"
"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
if(isset($_GET["points"])) {
	$values = $_GET["points"];
	$colors = $_GET["colors"];
} else {
	echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"></svg>";
	die();
}
$paths = array();
$mergevalues = array();
foreach($values as $points) {
	$mergevalues = array_merge($mergevalues,$points);
}
$height = max($mergevalues);
foreach($values as $i => $points) {
	$step = 100/(count($points)-1);
	$paths[$i] = $line = "m-10,".($height+10)." l0,-".($points[0]+10)." l10,0 ";
	for($p=1;$p<count($points);$p++) {
		$paths[$i] .= "l$step,".($points[$p-1]-$points[$p])." ";
	}
	$paths[$i] .= "l10,".($points[count($points)-1]+10)." z";
}
?>
<svg
	width="100%"
	height="100%"
	id="graph"
	version="1.1"
	xmlns="http://www.w3.org/2000/svg"
	viewBox="0 0 100 <?php echo $height;?>"
	preserveAspectRatio="none">
	<?php
	foreach($colors as $color) {
		echo '
		<linearGradient
			id="gradient'.$color.'"
			x1="0"
			y1="0"
			x2="0"
			y2="100%">
			<stop
				style="stop-color:#'.$color.';stop-opacity:.3;"
				offset="0" />
			<stop
				style="stop-color:#'.$color.';stop-opacity:0;"
				offset="1" />
		</linearGradient>
		';
	}
	foreach($paths as $i => $path) {
		echo '
		<path
			id="line"
			stroke-width="2px"
			vector-effect="non-scaling-stroke"
			style="fill:url(#gradient'.$colors[$i].');stroke:#'.$colors[$i].';"
			d="'.$path.'"
		/>
		';
	}
	?>
</svg>
