<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
    foreach ($cart as $item):
        $grand_total = $grand_total + $item['subtotal'];
    endforeach;
endif;
?>





<div class="container-fluid">

    <h2 class="text-left">Billing Info</h2>

    <?php // Create form for enter user imformation and send values 'shopping/save_order' function?>
    <form name="billing" method="post" id="billing" action="<?php echo base_url() . 'shopping/save_order' ?>" >
        <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
           <label for="firstname">User Name</label>
            <input type="text" class="form-control" name="username" placeholder="First Name" id="firstname" value="<?php echo $this->session->userdata('name');?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" id="email"value="<?php echo $this->session->userdata('email');?>">
        </div>
    </div>


    <div class="col-sm-2">
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control"name="phone" placeholder="Phone" id="phone" value="<?php echo $this->session->userdata('phone');?>">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-2">
        <div class="form-group">
            <label for="home">Building Number</label>
            <input type="text" id="home" class="form-control" name="homenumber" placeholder="Building Number">

        </div>
    </div>

        <div class="col-sm-2">
            <div class="form-group">


                <label for="street">Street Address</label>
                <input type="text" name="street" class="form-control" placeholder="Street Address" id="street">
        </div>
          </div>
    </div>
        <div class="row">
        <div class="col-sm-4">
        <div class="form-group">

            <label for="country">Country</label>
            <select id="country" name="country" class="form-control" id="country">
                          <option>Amman</option>
                <option>Irbid</option>
                <option>Al Salt</option>
                <option>Al Ramtha</option>
                <option>Madaba</option>
                <option>Mafraq</option>
                <option>Jerash</option>
                <option>Ma'an</option>
                <option>Tafilah</option>
                <option>Karak</option>
                <option>Ajloun</option>
                <option>Aqaba</option>
            </select>

            </div>

            </div>
            </div>
        <div class="row">
        <div class="col-sm-4">
            <label>Delivery method</label>
            <br>
            <label class="radio-inline"><input type="radio">Pick from store</label>
            <label class="radio-inline"><input type="radio">Delivery by company</label>
           </div>
        </div>
        <br>
        <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="note">Note</label>
            <textarea class="form-control" name="note" rows="5" placeholder="Note.." id="note"></textarea>
        </div>
    </div>
            </div>

<div class="row">
        <div class="col-sm-4">
            <button class='btn btn-block' type="submit"  style="background-color: #222222;color: whitesmoke;border:none;font-size: 22px">Confirm</button>
     </div>   </div>
</div>

</form>

<div id="BillingSuc" class="modal fade">
    <div class="modal-dialog"  >

        <!-- Modal content-->
        <div class="modal-content" style="background-color: #14181C ;color: whitesmoke">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #E60000;color: whitesmoke;border-color:transparent">Close</button>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('master/footer');?>

<script src="<?php echo  base_url()?>public/js/billing.js"></script>

