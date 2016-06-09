<div id="Content">
	<nav class="sideNavLeft col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
	    <ul>
	      <li style="border-top: none;"><a href="#">Locations</a></li>
				<?php
					include('../spGeofyn/phpHandling/sidebarContent.php');
					$loc = new Locations();
					$loc->GetLocationsDb();
				 ?>
	    </ul>
	</nav>
	<div class="mainContent col-xl-8 col-lg-8 col-md-8 col-sm-8 col-xs-8">
		<!-- <h1>This is the main content</h1>
			<ul>
				<li>We need a login page</li>
				<li>We need a statistics page</li>
				<li>We need to create a place for registering V.I.P(laces) from Fyn</li>
			</ul> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d290655.8589948922!2d10.4274656!3d55.3100076!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sdk!4v1463469384519" width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<nav id="RightNav"class="sideNavRight col-xl-2 col-lg-2 col-md-2 col-sm-2 col-xs-2">
	</nav>
</div>
<div class="createLocationForm" id="LocForm">
		<label>
			Location Name :
		</label>
			<input type="text" name="name" value="">
			<label>
				Decsription :
			</label>
			<input type="text" name="description" value="">
			<button type="button" name="button">Create New Location</button>
</div>
<div class="createLocationBtn" id="LocBtn">
		<button type="button" name="button" onclick="HideCreateLocBtn()">Create Location</button>
</div>
