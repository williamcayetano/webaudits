<?php 
	$data['page_title'] = 'Free Website Audits By Humans!';
	$data['page'] = 'Home';
	$data['meta'] = 'Audit your website for FREE.';
	
	$this->load->view('includes/header-default-view', $data); 
?>

<div
      class="jumbotron jumbotron-fluid bg-info text-white text-center"
      style="background: #aaa"
    >
      <div class="container">
      <h1>Welcome to Free Web Audits!</h1>
      <h4>Please Enter In Your Website URL To Get Your Free Web Audit...By a Human</h4>
      </div>
</div>
<div class="errors"><?php echo validation_errors(); ?></div>

<div class="container">
    <div class="d-flex justify-content-center">
		
		<form action="<?php echo base_url('index.php/home/request_audit'); ?>" method=post>
			<input type="text" placeholder="Website URL" name="url" class="home-input" size="40" />
			<input type="text" placeholder="Your Email" name="email" class="home-input" size="40" />
			<input type="submit" name="" id="" value="Submit"/>
		</form>
	</div>
	
	<div class="d-flex justify-content-center render-time">
		<a href="<?php echo base_url('index.php/websites'); ?>"><span class="elapsed-time">I Need A Website!</span></a>
		<!--<p>Page rendered in <span class="elapsed-time">{elapsed_time}</span> seconds.</p>-->
	</div>

</div>

<?php $this->load->view('includes/footer-default-view'); ?>
