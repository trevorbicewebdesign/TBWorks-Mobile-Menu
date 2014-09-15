<?php
// no direct access
defined('_JEXEC') or die;
?>
<div id="tbworks_mobilemenu" >
<div class="slidewrapper">
<select id="mainmenu" class="inputbox">
	<option value="">-- Main Menu --</option>
	<?php
	foreach ($list as $i => &$item) :
		//print_r($item);
		//die();
		if($item->type == "alias") {
			$link 	= $item->flink;
		}
		else {
			$link 	= $item->link."&Itemid=".$item->id;
		}
		$title 	= $nextlevel.$item->title;
		if ( $item->deeper ) {
			$nextlevel = '--';
		}
		else {
			$nextlevel = '';
		}
		unset($selected);
		$Itemid = JRequest::getVar('Itemid');
		preg_match("#Itemid[=]([0-9]?[0-9]?[0-9]?[0-9])#",$item->flink, $tmp);
		$alisItemid = $tmp[1];
		if( $item->id == $Itemid || $alisItemid == $Itemid ) {
			$selected = " selected";	
		}
	?>
    	<option value="<?php echo $link; ?>" <?php echo $selected; ?>><?php echo $title; ?></option>
	<?php endforeach; ?>
</select>
</div>
</div>
