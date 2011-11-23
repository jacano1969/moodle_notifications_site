<!DOCTYPE HTML>
<html>

<head>
<title>Moodle Notifications: How it works</title>
<?php include "lib/head_content.php"; ?>
</head>

<body>
	<?php include "lib/page_header.php"; ?>
	<div id="site_content">
		<?php include "lib/sidebar.php"; ?>
		<div id="content">
			<!-- insert the page content here -->
			<p>This block	implements a missing functionality of the Moodle LMS: the notifications of new contents or events via multiple and configurable channels e-mail, RSS and SMS. This module is available as side block on Moodle courses. The instructor of the course can configure which notification methods to use in his course, and the learner can decide which of them to adopt. </p>
			<p>Every a configurable number of hours, the block search for new content and resources included in the course. If new content or resources are found, it notify the learners about the new contents.</p>
			<h1>Notifications types </h1>
			<p>
				Users of the learning platform can choose which of the enabled notification methods to use (these cand be emails, SMS and RSS). The SMS message notification requires that the user insert his/her mobile phone number in the own profile. The RSS aggregator is always available for any user, it does not require a specific configuration in his/her profile. The only requirement is a RSS reader software for receiving the news.</p>
			<h1>Multiple level settings </h1>
			<p>This plugin has three levels of settings. On each level it is possible to enable or disable a notification type. <br>
				- <span style="font-weight: bold">Global settings</span>, managed by Administrators via the block configuations.<br>
				- <span style="font-weight: bold">Course settings, </span>managed by Teachers and assistants<br>
				- <span style="font-weight: bold">Personal settings, </span>managed by Students.</p>
			<p>Global settings have priority on Course settings and the Course settings have priority on Personal Settings. The e-mail and sms channels can be enabled and disabled on every level. Only the rss channel is managed Globally or on Course level.</p>
			<h1>Presets </h1>
			<p>You can use presets to set default user choices on which channels to enable. The presets can be decided globally or per course. The course presets have precedence over the global presets and the user preferences have precedence over course presets.</p>
			<h1>SMS notifications</h1>
			<p>SMS notifications require a subscription to a SMS service provider. On default installation SMS are not available. To enable SMS channel please extend lib/AbstractSMS.php class. Call the new class SMS. Check lib/SMS.php.sample for a sample of this code.</p>
			<h1>Screenshots </h1>
			<p>The side block visible to students and instructors. </p>
			<p><img src="images/screen1.png" alt="screen1"></p>
			<p>Block settings where instructors can define course settings. </p>
			<p><img src="images/screen2.png" alt="screen2"></p>
			<p>Configurable personal settings </p>
			<p><img src="images/screen3.png" alt="screen3"></p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		</div>
	</div>
	<?php include "lib/footer.php"; ?>	 
</body>

</html>
