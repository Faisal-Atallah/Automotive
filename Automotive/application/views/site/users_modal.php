<div id="Add_user" class="modal fade" role="dialog">
      <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="background-color: #444444">
            <form action="#" id="form" class="form-horizontal">

                      <div class="modal-header" >
                            <button type="button" class="close" data-dismiss="modal"><img style="color:#E60000" src="<?php echo base_url()?>public/Home/image/close.png"></button>
                            <h3 class="modal-title"></h3>
                          </div>
                      <div class="modal-body">
                    <input type="hidden" value="" name="cust_id"/>
                           <div class="col-sm-12">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" name="username">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name"  name="lastname">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Birth of Date</label>
                            <input type="date"  class="form-control"  name="date">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control"  name="phone" placeholder="phone">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control"  name="password" placeholder="password">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>Country</label>
                            <select id="country" name="country" class="form-control">
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
                        </div></div>
            </form>
                  </div>
              <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                  </div>
            </div>
</div>