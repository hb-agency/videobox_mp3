<!-- indexer::stop -->
<div id="<?php echo $this->id; ?>"><noscript><p><?php echo $this->noscript; ?></p></noscript></div>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
if (!Browser.Plugins.Flash.version > 0)
{
	$('<?php echo $this->id; ?>').set('text', '<?php echo $this->noflash; ?>');
}
else
{
	var obj = new Swiff('system/modules/videobox_mp3/html/player_mp3.swf', {
		id: '<?php echo $this->id; ?>',
		width: <?php echo $this->width; ?>,
		height: <?php echo $this->height; ?>,
		container: '<?php echo $this->id; ?>',
		params: {
			FlashVars: 'mp3=<?php echo $this->videomp3link; ?>',
			wmode: 'transparent',
			allowscriptaccess: 'true',
			allowFullScreen: 'false'
		}
	});
}
//--><!]]>
</script>
<!-- indexer::continue -->