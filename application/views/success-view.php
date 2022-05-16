<?php 
	$data['page_title'] = 'Success';
	$data['page'] = '';
	$data['meta'] = '';
	$this->load->view('includes/header-default-view', $data); 
?>

<div
      class="jumbotron jumbotron-fluid bg-info text-white text-center"
      style="background: #aaa"
    >
      <div class="container">
      <h1><?php echo $title; ?></h1>
      <h4><?php echo $message; ?></h4>
      </div>
</div>

<div class="container">
    <div class="d-flex justify-content-center">
    </div>
</div>

<?php $this->load->view('includes/footer-default-view'); ?>
