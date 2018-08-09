<?php

// Theme Options
// Theme Name : Elan Bio

$themename = "BU Options";
$shortname = "bu";
$version = "1.0";

// Create theme options
global $options;
$options = array (

array( "name" => "Header",
 "type" => "section"),
 
 array( "type" => "open"),
 
 array( "name" => "Header Logo",
 "desc" => "Paste your logo URL here.",
 "id" => $shortname."_logo_url",
 "type" => "text",
 "std" => ""), 
 array( "name" => "Tagline",
 "desc" => "Paste your Tagline here.",
 "id" => $shortname."_tagline",
 "type" => "text",
 "std" => ""), 
 array( "type" => "close"),
 
 array( "name" => "Home page Slider",
 "type" => "section"),
 
 array( "type" => "open"),
 
 array( "name" => "Slider1 Image Size(1349X684)",
 "desc" => "Upload Slider1 image URL here.",
 "id" => $shortname."_slider1img",
 "type" => "upload",
 "std" => ""),
 array( "name" => "Slider2 Image Size(1349X684)",
 "desc" => "Upload Slider2 image URL here.",
 "id" => $shortname."_slider2img",
 "type" => "upload",
 "std" => ""),
 array( "name" => "Slider3 Image Size(1349X684)",
 "desc" => "Upload Slider3 image URL here.",
 "id" => $shortname."_slider3img",
 "type" => "upload",
 "std" => ""),
 
  array( "name" => "Slider4 Image Size(1349X684)",
 "desc" => "Upload Slider4 image URL here.",
 "id" => $shortname."_slider4img",
 "type" => "upload",
 "std" => ""),
 
 array( "name" => "Slider5 Image Size(1349X684)",
 "desc" => "Upload Slider5 image URL here.",
 "id" => $shortname."_slider5img",
 "type" => "upload",
 "std" => ""),
 
array( "type" => "close"),

array( "name" => "Footer",
 "type" => "section"),
 
 array( "type" => "open"),
 
 array( "name" => "Footer Logo",
 "desc" => "Paste your Footer logo URL here.",
 "id" => $shortname."_flogo_url",
 "type" => "text",
 "std" => ""), 
 array( "name" => "Copyright",
 "desc" => "Paste your Copyright here.",
 "id" => $shortname."_copyright",
 "type" => "text",
 "std" => ""), 
 array( "name" => "Contact",
 "desc" => "Paste your Contact here.",
 "id" => $shortname."_contact",
 "type" => "text",
 "std" => ""), 

array( "name" => "Email-Id",
 "desc" => "Paste your Email-Id here.",
 "id" => $shortname."_email",
 "type" => "text",
 "std" => ""), 


array( "type" => "close"),

/*array( "name" => "Slider Option",
 "type" => "section"),
 
 array( "type" => "open"),
 
array( "name" => "Slider1 Image",
 "desc" => "Paste Slider1 image URL here.",
 "id" => $shortname."_slider1img",
 "type" => "text",
 "std" => ""),
array( "name" => "Slider1 Heading",
 "desc" => "Enter Slider1 Heading here.",
 "id" => $shortname."_slider1heading",
 "type" => "text",
 "std" => ""), 
array( "type" => "close"),*/

array( "name" => "Social Links",
 "type" => "section"),

array( "type" => "open"),

array( "name" => "Facebbok Page Link",
 "desc" => "Enter Facebook page link here.",
 "id" => $shortname."_facebook_link",
 "type" => "text",
 "std" => ""),

array( "name" => "Instagram Page Link",
 "desc" => "Enter Instagram page link here.",
 "id" => $shortname."_instagram_link",
 "type" => "text",
 "std" => ""),

/*array( "name" => "Pinterest",
 "desc" => "Enter Your Pinterest Link here.",
 "id" => $shortname."_pin_link",
 "type" => "text",
 "std" => ""),

*/

array( "type" => "close"),
 
/*array( "name" => "Footer",
 "type" => "section"),

array( "type" => "open"),*/

 /*array( "name" => "Footer Logo Left",
 "desc" => "Paste your footer left logo URL here.",
 "id" => $shortname."_footer_left_logo_url",
 "type" => "text",
 "std" => ""),
 */
);
function p2h_add_admin() {

    global $themename, $shortname, $options;

	if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {

		if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){

			foreach ( $options as $value ) {
				if ( array_key_exists('id', $value) ) {
				
			if ( isset( $_REQUEST[ $value['id'] ] ) ) {
						update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
					}
					else {
						delete_option( $value['id'] );
					}
					
					
					if(!empty( $_FILES['attachement_'.$value['id']]['name'])){ 
						$src = $_FILES['attachement_'.$value['id']]['tmp_name'];
						$newname = date('Ymdhis')."_".$_FILES['attachement_'.$value['id']]['name'];
						$dest_path = get_image_phy_destination_path_user().$newname;
						//$user_photo = image_resize_custom($src,$dest_path,1360,684);
						move_uploaded_file($src,$dest_path);
						//$photo_path = get_image_rel_destination_path_user().$user_photo['file'];
						$impath = get_image_rel_destination_path_user().$newname;
						update_option( $value['id'] , $impath );
						}
					
					
				}
			}
		header("Location: admin.php?page=".basename(__FILE__)."&saved=true");
		}
		else if ( isset ($_REQUEST['action']) && ( 'reset' == $_REQUEST['action'] ) ) {
			foreach ($options as $value) {
				if ( array_key_exists('id', $value) ) {
					delete_option( $value['id'] );
				}
			}
		header("Location: admin.php?page=".basename(__FILE__)."&reset=true");
		}
	}

add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'p2h_admin');
add_submenu_page(basename(__FILE__), $themename . ' Options', 'Theme Options', 'administrator',  basename(__FILE__),'p2h_admin'); // Default
}

function p2h_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("p2hCss", $file_dir."/functions/theme-options.css", false, "1.0", "all");
wp_enqueue_script("p2hScript", $file_dir."/functions/theme-options.js", false, "1.0");

}

function p2h_admin() {

    global $themename, $shortname, $version, $options;
	$i=0;

	if ( isset ($_REQUEST['saved']) && ($_REQUEST['saved'] ) )echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
	if ( isset ($_REQUEST['reset']) && ($_REQUEST['reset'] ) ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

?>

<div class="wrap ">
<div class="options_wrap">
<h2 class="settings-title"><?php echo $themename; ?> Settings</h2>
<form method="post" enctype="multipart/form-data">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "section":
?>
	<div class="section_wrap">
	<h3 class="section_title"><?php echo $value['name']; ?></h3>
	<div class="section_body">

<?php
break;
case "upload":
?>
<div class="options_input options_text">
<div class="options_desc"><?php echo $value['desc']; ?></div>
<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
<input type="file" name="<?php echo 'attachement_'.$value['id'] ?>" class="upload_input"></input>
<span class="submit"><input name="save" type="submit" value="Upload" class="button upload_save" /></span>
<div class="clear"></div>
<input class="upload-input-text" name="<?php echo $value['id'] ?>" value="<?php echo get_option($value['id']) ?>" style="width:490px !important;"/>
<div class="clear"></div>
<?php if(get_option($value['id']) !=''){ ?>
<img src="<?php echo get_option($value['id']) ?>" alt="" width="500" height="200" />
<?php } ?>
<div class="clear"></div>
</div>
<?php
break;
case 'text':
?>

	<div class="options_input options_text">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	</div>

<?php
break;
case 'textarea':
?>
	<div class="options_input options_textarea">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	</div>

<?php
break;
case 'select':
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php foreach ($value['options'] as $option) { ?>
				<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
		</select>
	</div>

<?php
break;
case "radio":
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		  <?php foreach ($value['options'] as $key=>$option) {
			$radio_setting = get_option($value['id']);
			if($radio_setting != ''){
				if ($key == get_option($value['id']) ) {
					$checked = "checked";
					} else {
						$checked = "";
					}
			}else{
				if($key == $value['std']){
					$checked = "checked";
				}else{
					$checked = "";
				}
			}?>
			<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
			<?php } ?>
	</div>

<?php
break;
case "checkbox":
?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php if(get_option($value['id'])){ $checked = "checked"; }else{ $checked = "";} ?>
		<input type="checkbox" name="<?php echo $value['id']; ?>2" id="<?php echo $value['id']; ?>2" value="true" <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	 </div>

<?php
break;
case "close":
$i++;
?>
<span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save Changes" /></span>
</div><!--#section_body-->
</div><!--#section_wrap-->

<?php break;
}
}
?>

<input type="hidden" name="action" value="save" />
<span class="submit">
<input name="save" type="submit" value="Save All Changes" />
</span>
</form>

<!--<form method="post">
<span class="submit">
<input name="reset" type="submit" value="Reset All Options" />
<input type="hidden" name="action" value="reset" />
</span>
</form>-->

</div><!--#options-wrap-->

</div><!--#wrap-->
<?php
}
add_action('admin_init', 'p2h_add_init');
add_action('admin_menu' , 'p2h_add_admin');
?>
