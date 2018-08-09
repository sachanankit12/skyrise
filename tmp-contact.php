<?php 
	/*
	Template Name:Contact
	*/
	get_header();
?>
	<div class="faq_sec contact">
		<div class="container">
			<h2>Contact</h2>
			<div class="row">
				<div class="col-md-6">
					<form action="">
						<div>
						<label for="">Name</label>
						<input type="text" placeholder="Name">
						</div>
						<div>
						<label for="">Email</label>
						<input type="text" placeholder="Email">							
						</div>
						<div class="div">
						<label for="">Phone</label>
						<input type="text" placeholder="Phone">
						</div>
						<div class="div">
						<label for="">Address</label>
						<textarea name="" id="" placeholder="Address"></textarea>
						</div>
						<div class="div">
						<label for="">Contact For</label>
						<input type="text" placeholder="Contact For">
						</div>
						<div class="div">
						<label for="">Message</label>
						<textarea name="" id="" placeholder="Message"></textarea>
						</div>
						<button>SUBMIT</button>

					</form>
				</div>
				<div class="col-md-6">
					<h4>Address</h4>
					<address>
						A-17, New delhi , vikashpuri
						<br>
						+91-0987654321
						<br>
						example@abc.com
					</address>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer();?>