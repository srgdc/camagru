<script type="application/javascript" src="js/upload.js"></script>
	<div class="side">
		<video id="camera" width="640" height="480"></video>
	</div>
	<div class="side">
		<canvas id="canvas" width="640" height="480"></canvas>
	</div>
<br/>
<button id="capture">Capture</button>
<br>
<select size="2" multiple>
	<option id ="o1">1</option>
	<option id="o2">2</option>
	<option id="o3">3</option>
</select>

<form enctype="multipart/form-data" id="form" method="post" action="index.php?controller=upload&action=upload">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="text" name="selectedImage" id="selectedImage">
    <button name="submit" type="submit">Upload Image</button>
</form>