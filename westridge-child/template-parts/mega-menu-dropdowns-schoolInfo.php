<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://amelia.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}	
	?>
		<ul>
			
			<li class="int"><a href="https://westridge.provo.edu/school-information/calendar/">Westridge Calendar</a></li>
			<li class="int"><a href="https://westridge.provo.edu/school-information/district-school-year-calendar/">District Events Calendar</a></li>
					
		</ul>
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/parents.svg" alt="" />Parent Resources</h3>
			<?php
		}	
	?>
		<ul>
			<li class="ext"><a href="https://grades.provo.edu/public/">PowerSchool (Grades & Attendance)</a></li>
			<li class="int"><a href="https://westridge.provo.edu/faculty-staff/teachers-directory/">Classrooms</a></li>
			
		</ul>	
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Westridge</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://wasatch.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Westridge</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://westridge.provo.edu/school-information/contact-our-school/">Contact Our School</a></li>
            <li class="int"><a href="https://westridge.provo.edu/school-information/school-hours/">Hours of Operation &amp; Daily Schedule</a></li>
            <li class="int"><a href="https://westridge.provo.edu/school-information/school-profile/">School Profile</a></li>
         <!--   <li class="pdf"><a href="https://westridge.provo.edu/wp-content/uploads/2019/01/01242019-AchievmentData-Westridge.pdf">Achievement Data</a></li> -->
            <li class="int"><a href="https://westridge.provo.edu/community-council/">Community Council</a></li>
            <li class="int"><a href="https://provo.edu/transportation/find-your-bus-route/">Bus Routes</a></li>
            <li class="int"><a href="https://westridge.provo.edu/school-information/student-drop-off-and-pick-up-procedures/">Student Drop Off and Pick Up Procedures</a></li>
            <li class="int"><a href="https://westridge.provo.edu/school-information/get-to-school-safe/">Get To School Safe</a></li>
            <li class="int"><a href="https://westridge.provo.edu/emergency-information/">Emergency Information</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 117, get_post_ancestors($post))){
			?>
			<h2><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://lakeview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h3>
			<?php
		}	
	?>
			<ul>
				<?php
					$cnmenuhandle = curl_init();
					$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu.php";
					// Set the url
					curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
					// Set the result output to be a string.
					curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
					$cnmenuoutput = curl_exec($cnmenuhandle);
					// close the curl connection
					curl_close($cnmenuhandle); 
					echo $cnmenuoutput;
				?>
			</ul>	
</div>