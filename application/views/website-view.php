<?php 
	$data['page_title'] = 'Cheap Local Business Websites!';
	$data['page'] = 'Website';
	$data['meta'] = 'FreeWebAudits.com also builds affordable websites too!';
	$this->load->view('includes/header-default-view', $data); 
?>

<div
      class="jumbotron jumbotron-fluid bg-info text-white text-center"
      style="background: #aaa"
    >
      <div class="container">
      <h1>Need A Website?</h1>
      <h4>Get A Website For As Low As <span class="price-crossout">$497</span>!</h4>
      </div>
</div>

<h4 style="text-align:center;">Contact</h4>

<div class="errors"><?php echo validation_errors(); ?></div>
<div class="container" style="margin-bottom: 50px">
    <div class="d-flex justify-content-center">

		<form action="<?php echo base_url('index.php/websites/request_website'); ?>" method=post>
			<input type="text" placeholder="Your Email" name="email" class="home-input" size="40" />
			<textarea placeholder="   How can we help you? *" name="message"  style="width: 100%; max-width: 100%;" rows="4"></textarea><br >
			<input type="submit" name="" id="" value="Submit"/>
		</form>
	</div>
</div>

<h4 style="text-align:center;">Samples</h4>
<div class="container d-flex justify-content-center">
    <div class="row">
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
            <a href="https://rooferleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/roofinghome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Roofer</h3>
    		</a>
          </div>
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
          	<a href="https://attorneyleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/chiropractorhome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Chiropractor</h3>
    		</a>
          </div>
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
          	<a href="https://dentistleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/dentisthome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Dentist</h3>
    		</a>
          </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row" style="margin-top: 50px">
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
            <a href="https://rooferleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/plumbinghome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Plumber</h3>
    		</a>
          </div>
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
          	<a href="https://attorneyleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/dermatologisthome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Dermatologist</h3>
    		</a>
          </div>
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
          	<a href="https://dentistleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/bankruptcyhome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Attorney</h3>
    		</a>
          </div>
    </div>
</div>
<div class="container d-flex justify-content-center">
    <div class="row" style="margin-top: 50px">
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
            <a href="https://rooferleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/pediatricianhome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Pediatrician</h3>
    		</a>
          </div>
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
          	<a href="https://attorneyleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/seniorcarehome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">Senior Care</h3>
    		</a>
          </div>
          <div class="col-12 col-md-4 thumb d-flex justify-content-center">
          	<a href="https://dentistleads.xyz" target="_blank" style="display: block;">
    		<img src="<?php echo base_url('images/small-websites/hvachome2.jpg'); ?>" alt="" height="auto" width="200px">
    		<h3 style="text-align:center; color:#18A2B8;">HVAC</h3>
    		</a>
          </div>
    </div>
</div>
<h4 style="text-align:center;">|</h4>


<?php $this->load->view('includes/footer-default-view'); ?>
