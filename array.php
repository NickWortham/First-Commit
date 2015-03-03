<?php

$flavors = array("Vanilla", "Chocolate", "Strawberry","Cookie Dough")

?><html>
<body>

		<p><?php echo "We have " . count($flavors) . " flavors available. " . "Here's a list:\n"; ?></p>

	<?php foreach($flavors as $flavor) { ?>

	<div><?php echo $flavor; ?></div>


 <?php }?>



</body>
</html>
