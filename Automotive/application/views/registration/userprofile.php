


<!doctype>
<html>
<head>
    <title>
    </title>
</head>

<body>

<br><br><br>

<br><br>
<?php
print_r($this->session->all_userdata());
?>

<?php $this->load->view('Services')?>

<?php $this->load->view('HowWeWork')?>
<!--About-->
<?php $this->load->view('About')?>

<!-- Contact -->

<?php $this->load->view('Contact')?>

<!--map --->

<?php $this->load->view('map')?>


</body>

</html>