<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<title>Management Area</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('Assets/bootstrap/bootstrap.css'); ?>">
	<style>
		#formRow {
			width: 300px;
			margin-left: 20px;
			/*margin-right: auto;*/
		}
		#submitBtn {
			width: 200px;
			margin-top: 2px;
			margin-left: 50px;
			/*margin-right: auto;*/
			margin-bottom: 5px;
		}
		.table {
			width: 800px;
			margin-left: 100px;
		}
		#checkbox {
			text-align: left;
		}
		.h3 {
			margin-left: 10px;
		}
	</style>
</head>
<body>
<h3 class="h3">Add a New Album</h3>
	<div class="jumbotron">
			<form name="music_form" method="post" action="<?= base_url('music/store'); ?>">
					<input class="form-control" id="formRow" type="text" name="album" placeholder="Album" maxlength="50"/><br>
					<input class="form-control" id="formRow" type="text" name="music_name" placeholder="Music Name" maxlength="50"/><br>
					<input class="form-control" id="formRow" type="text" name="artist" placeholder="Artist" maxlength="70"/><br>
					<input class="form-control" id="formRow" type="text" name="album_year" placeholder="Album Year" maxlength="11"/><br>
					<!-- <input class="form-control" id="formRow" type="date" name="birthday" placeholder="Birthday" maxlength="10"/><br> -->
					<!-- <input id="checkbox" name="Is_active" type="checkbox" value="1"/>Is active!<br> -->
					<input class="btn btn-primary btn-block" id="submitBtn" type="submit"  name="submit" value="Submit">
			</form>
	</div>
</body>
</html>