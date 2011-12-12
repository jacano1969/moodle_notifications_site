<!DOCTYPE HTML>
<html>

<head>
<title>Moodle Notifications: Installation</title>
<?php include "lib/head_content.php"; ?>
</head>

<body>
	<?php include "lib/page_header.php"; ?>
	<div id="site_content">
		<?php include "lib/sidebar.php"; ?>
		<div id="content">
			<!-- insert the page content here -->
			<h1>To install the block you have to: </h1>
			<ol>
				<li>Download the software from github website (see side block on the right of this page)</li>
				<li>Decompress the file and rename the plugin folder to <span style="color: #000099">moodle_notifications</span> (just in case you have chosen a different name during the download)</li>
				<li>Move the folder to the blocks directory of your Moodle installation</li>
				<li>Login in your Moodle platform as Administrator and click on notifications link in the site Administration block.</li>
				<li>Install the block &quot;<span style="color: #000099">Notifications</span>&quot; in the courses for which you want to send notifications</li>
				<li>Wait for the next cronjob run to receive notification emails.</li>
			</ol>
			<p>PLEASE NOTICE THAT SMS notifications require a subscription to a SMS service provider. See the page <a href="howitworks.php">how it works</a> for details. </p>
			<p>There are three level of settings for this block: at platform level, course level, and user level. </p>

			<h1>Upgrade notes:</h1>
			<div>This plugin was previously named "<span style="color: #000099">notify_changes</span>". The name has been changed to "<span style="color: #000099">moodle_notifications</span>" and some additional features, such as presets, have been added. Please read the UPGRADE.txt file if you are upgrading from previous versions of this plugin.</div>
			<br />
		</div>
	</div>
	<?php include "lib/footer.php"; ?>	 
</body>

</html>
