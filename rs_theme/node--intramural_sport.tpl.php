<?php
if($view_mode == "full")
{
$captain = "";
$players = "";
$conflict = "";
$refund = "";
$rules = "";

$refLink = $content['field_refundlink']['#items']['0']['value'];
switch($refLink)
{
	case "0":
		// nothing
		break;
	case "1":
		// text only
		$refund = "<li>Online Refund Request</li>";
		break;
	case "2":
		// text and link
		$refund = "<li><a href='https://www.signup.recsports.vt.edu/refunds/refunds/request/index.php'>Online Refund Request</a></li>";
		break;
}

$confLink = $content['field_conflictlink']['#items']['0']['value'];
switch($confLink)
{
	case "0":
		// nothing
		break;
	case "1":
		// text only
		$conflict = "<li>Playoff Conflict Sheet</li>";
		break;
	case "2":
		// text and link
		$conflict = "<li><a href='#'>Playoff Conflict Sheet</a></li>";
		break;
}

$rulesLink = $content['field_ruleslink']['#items']['0']['value'];
switch($rulesLink)
{
	case "0":
		// nothing
		break;
	case "1":
		// text only
		$rules = "<li>Captain's Information / Rules</li>";
		break;
	case "2":
		// text and link
		$rulesPDF = "#";
		if(isset($content['field_captainfile']))
		{
			$rulesPDF = file_create_url($content['field_captainfile']['#items']['0']['uri']);
		}
		$rules = "<li><a href='$rulesPDF'>Captain's Information / Rules</a></li>";
		break;
}

$numpLink = $content['field_numplaylink']['#items']['0']['value'];
switch($numpLink)
{
	case "0":
		// nothing
		break;
	case "1":
		// text only
		$players = "<li>Number of Players on a Team</li>";
		break;
	case "2":
		// text and link
		$players = "<li><a href='minimum-players'>Number of Players on a Team</a></li>";
		break;
}

$capmLink = $content['field_showcaplink']['#items']['0']['value'];
switch($capmLink)
{
	case "0":
		// nothing
		break;
	case "1":
		// text only
		$captain = "<li>Captain's Meetings</li>";
		break;
	case "2":
		// text and link
		$captain = "<li><a href='http://www.recsports.vt.edu/intramurals/links/captains_meeting_information.php'>Captain's Meetings</a></li>";
		break;
}
?>
<style>
#content-title {display:none;}
</style>
<h1><?php print $title; ?> Info and Forms</h1>
<hr>
<ul class="bullet pad">
	<li class="head">Downloads</li>
	<?php print $players; ?>
	<?php print $captain; ?>
	<?php print $rules; ?>
	<?php print $conflict; ?>
	<?php print $refund; ?>
</ul>
<?php
}
else if($view_mode == "teaser")
{
	$sel = db_select('url_alias', 'u')->fields('u', array('alias'))->condition('source',$node->uri['path'])->execute()->fetchCol();
	$furl = "/" . $sel[0];
	$hasPlayoffs = 0;
	$cssstatus = "closed";
	$status = "Registration Closed";
	$schedule = "";
	$playoff = "";
	$tz = new DateTimeZone("UTC");
	$startreg = new DateTime($content['field_start_date']['#items']['0']['value'], $tz);
	$endreg = new DateTime($content['field_start_date']['#items']['0']['value2'], $tz);
	$tz2 = new DateTimeZone("America/New_York");
	$startreg->setTimezone($tz2);
	$endreg->setTimezone($tz2);
	$today = new DateTime(null, $tz2);
	$startreg = $startreg->format("l, F j \a\\t g:ia");
	$endreg = $endreg->format("l, F j \a\\t g:ia");
	$regout = $startreg . " through " . $endreg;
	$cancelled = 0;
	if(isset($content['field_cancelled']))
	{
		$cancelled = intval($content['field_cancelled']['#items']['0']['value']);
	}
	if($cancelled == 1)
	{
		$regout = "$title HAS BEEN CANCELLED FOR THIS SEMESTER";
	}
	if(isset($content['field_hasplayoffs']))
	{
		$hasPlayoffs = $content['field_hasplayoffs']['#items']['0']['value'];
	}
	if($today <= $endreg && $today >= $startreg && $cancelled != 1)
	{
		$status = "Registration Open";
		$cssstatus = "open";
	}
	else
	{
		if(intval($hasPlayoffs) == 1)
		{
			$playoff = "<a href='/intramurals/sports/" . htmlspecialchars($title) . "/playoffs'>Playoff Brackets</a>";
		}
		$schedule = "<a href='/intramurals/sports/" . htmlspecialchars($title) . "/schedule'>Schedule / Results</a>";
	}
?>
<style type="text/css">
#content-title
{
	display:none;
}
</style>
<div class="imsport">
	<div class="topbar">
		<div class="title">
			<span><?php print $title;
				if (user_access("edit any intramural_sport content")) {
					print l("Edit", "node/$nid/edit",array('attributes' => array('class' => 'sport-edit-link')));
				}
				//Need to show the list of files for this sport as well
				if (user_access("edit any intramural_sport_schedule content")) {
					print "<a class='sport-edit-link' href='/intramurals/sport_files?sport=$nid'>Files</a>";
				}
				?></span></div>
		<div class="regstatus">
			<div class="statusbox <?php print $cssstatus; ?>"><?php print $status; ?></div>
		</div>
	</div>
	<div class="reginfo">
		Registration: <?php print $regout; ?>
	</div>
	<div class="bottombar">
		<div class="forms"><a href="<?php print $furl; ?>">Info &amp; Forms</a></div>
		<div class="schedules"><?php print $schedule; ?></div>
		<div class="playoffs"><?php print $playoff; ?></div>
	</div>
</div>
<?php
}
?>