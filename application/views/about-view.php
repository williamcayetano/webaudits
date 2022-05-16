<?php 
	$data['page_title'] = 'About Free Web Audits';
	$data['page'] = 'About';
	$data['meta'] = 'All you want to know about freewebaudits.com';
	$this->load->view('includes/header-default-view', $data); 
?>

<div
      class="jumbotron jumbotron-fluid bg-info text-white text-center"
      style="background: #aaa"
    >
      <div class="container">
      <h1>About This Website</h1>
      </div>
</div>

<h4 style="text-align:center;">Web Audit Checklist</h4>
<div class="container d-flex justify-content-center">
    <div class="row">
          <ul>
          		<li>Content Analysis</li>
				<li>Relevant Meta Descriptions</li>
				<li>Relevant Title Tags</li>
				<li>SSL Certificate Exists</li>
				<li>No Broken Links</li>
				<li>Redirect to Preferred Domain</li>
				<li>Robots.txt Exists</li>
				<li>XML Sitemap Exists</li>
				<li>Clean URLs</li>
				<li>Mobile Friendliness</li>
				<li>Site Loads Fast</li>
				<li>Schema Exists</li>
				<li>Open Graph Protocol</li>
				<li>Favicon Exists</li>
				<li>Custom 404 Page Exists</li>
				<li>Minification Opportunities</li>
				<li>Retargeting Pixel Exists</li>
				<li>Social Media Links</li>
				<br >
				...and much, much more!
          </ul>
    </div>
</div>

<h4 style="text-align:center;">New Website Add-Ons</h4>
<div class="container d-flex justify-content-center">
    <div class="row">
         <ul>
         		<li>Hosting</li>
				<li>Domain Name Purchase</li>
				<li>Relevant Website Content</li>
				<li>Logo Design</li>
				<li>Backlinks</li>
         </ul>
    </div>
</div>

<h4 style="text-align:center;">Contact</h4>

<div class="errors"><?php echo validation_errors(); ?></div>
<div class="container" style="margin-bottom: 50px">
    <div class="d-flex justify-content-center">

		<form action="<?php echo base_url('index.php/about/request_contact'); ?>" method=post>
			<input type="text" placeholder="Your Email" name="email" class="home-input" size="40" />
			<textarea placeholder="   How can we help you? *" name="message"  style="width: 100%; max-width: 100%;" rows="4"></textarea><br >
			<input type="submit" name="" id="" value="Submit"/>
		</form>
	</div>
</div>

<h4 style="text-align:center;">|</h4>


<?php $this->load->view('includes/footer-default-view'); ?>
