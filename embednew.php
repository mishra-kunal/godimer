<?php
$apikey = "AIzaSyDxRdM-Mr6H-hwhem0kaQdioaZdComQQ7E";
if (isset($_GET['id'])) {
    $id = $_GET['id']; 

} else {
    header('location:index.php') ;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drive Video</title>
</head>
<body>

<script src="https://cdn.fluidplayer.com/v3/current/fluidplayer.min.js"></script>
<div class="video-container">
<video id="video-id" width="100%">
    <source src="https://www.googleapis.com/drive/v3/files/<?php echo $id ; ?>?alt=media&key=<?php echo $apikey ; ?>" type="video/mp4" >
</video>
</div>
<script>
    var myFP = fluidPlayer(
        'video-id',	{
	"layoutControls": {
		"controlBar": {
			"autoHideTimeout": 3,
			"animated": true,
			"autoHide": true
		},
		"htmlOnPauseBlock": {
			"html": null,
			"height": null,
			"width": null
		},
		"autoPlay": true,
		"mute": true,
		"allowTheatre": true,
		"playPauseAnimation": true,
		"playbackRateEnabled": true,
		"allowDownload": true,
		"playButtonShowing": true,
		"fillToContainer": true,
		"posterImage": ""
	},
	"vastOptions": {
		"adList": [],
		"adCTAText": false,
		"adCTATextPosition": ""
	}
})
</script>
<style>
.video-container{
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

</style>
</body>
</html>