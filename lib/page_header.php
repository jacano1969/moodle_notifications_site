<div id="header">
	<div id="logo">
		<div id="logo_text">
			<!-- class="logo_colour", allows you to change the colour of the text -->
			<h1><a href="index.php">Moodle Notifications <span class="logo_colour"></span></a></h1>
			<h2>Be always updated with the latest course's news </h2>
		</div>
	</div>
	<div id="menubar">
		<ul id="menu">
			<!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
			<?php $page = basename($_SERVER['SCRIPT_FILENAME']); ?>
			<li class="<?php echo $page === 'index.php' ? 'selected': ''; ?>"><a href="index.php">Home</a></li>
			<li class="<?php echo $page === 'howitworks.php' ? 'selected': ''; ?>"><a href="howitworks.php">How it works </a></li>
			<li class="<?php echo $page === 'credits.php' ? 'selected': ''; ?>"><a href="credits.php">Credits</a></li>
			<li class="<?php echo $page === 'installation.php' ? 'selected': ''; ?>"><a href="installation.php">Installation </a></li>
			<li class="<?php echo $page === 'contact.php' ? 'selected': ''; ?>"><a href="contact.php">Contact Us</a></li>
		</ul>
	</div>
</div>
<div id="content_header"></div>

