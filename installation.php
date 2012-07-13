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
			<h1>To install the block on moodle 1.9.x please follow these steps: </h1>
			<ol>
				<li>Download the software from github website (see side block on the right of this page)</li>
				<li>Decompress the file and rename the plugin folder to <span style="color: #000099">moodle_notifications</span> (just in case you have chosen a different name during the download)</li>
				<li>Move the folder to the blocks directory of your Moodle installation</li>
				<li>Login in your Moodle platform as Administrator and click on notifications link in the site Administration block.</li>
				<li>Install the block &quot;<span style="color: #000099">Notifications</span>&quot; in the courses for which you want to send notifications</li>
				<li>Wait for the next cronjob run to receive notification emails.</li>
			</ol>

			<h1>To install the block on moodle 2.x please follow these steps: </h1>
			<ol>
				<li>Download the software from github website (see side block on the right of this page)</li>
				<li>Decompress the file and rename the plugin folder to <span style="color: #000099">notifications</span> (just in case you have chosen a different name during the download)</li>
				<li>Login in your Moodle platform as Administrator and remove previous 1.1.x installation if you have any. The 1.2 branch breaks the backward compatibility. Hopefully this is going to be the last time the backward compatibility is broken.</li>
				<li>Move the folder to the blocks directory of your Moodle installation</li>
				<li>Switch to your Moodle installation and click on Notifications link in the site Administration block.</li>
				<li>Install the block &quot;<span style="color: #000099">Notifications</span>&quot; in the courses for which you want to send notifications</li>
				<li>Wait for the next cronjob run to receive notification emails.</li>
			</ol>
			<p>PLEASE NOTICE THAT SMS notifications require a subscription to a SMS service provider. See the page <a href="howitworks.php">how it works</a> for details. </p>
			<p>There are three level of settings for this block: at platform level, course level, and user level.</p>

			<h1>Upgrade notes:</h1>
			<div>Please note that for Moodle 2.x the Notifications version 1.2 breaks the backward compatibility. Please remove any previous installation and then install the 1.2 version. Check the README.txt and UPGRADE.txt files for more information.</div>
			<br />
		</div>
	</div>
	<?php include "lib/footer.php"; ?>	 
</body>

</html>
