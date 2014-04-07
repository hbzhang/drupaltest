<div class="club border">
<?php
	$outBody = $content['body']['#items']['0']['safe_value'];
	print "<style>#content-title {display:none;}</style><h1>$title Club</h1><hr>";
	print "<img src='" . file_create_url($content['field_club_image']['#items']['0']['uri']) . "'>";
	$url = $content['field_website']['#items']['0']['safe_value'];
	$email = $content['field_contact_email']['#items']['0']['safe_value'];
	$name = $content['field_contact_name']['#items']['0']['safe_value'];
	print "<strong>Contact Info:</strong> If you are interested in joining this club team, or have questions, you should contact:<br><br>";
	print "<strong>$name</strong><br><a href='mailto:$email'>$email</a><br><br>";
	print "<strong>Website</strong><br><a href='$url' target='_blank'>Visit the $title Web site</a></div>";
	print "<h2 style='clear:both;'>About $title Club</h2><br>" . $outBody;
?>
<a href="..">Go Back to the Full Club Listing</a><br><br>