<div id="ProductModal" class="modal fade" role="dialog" >
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="background-color:#373737">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><img style="color:#E60000" src="<?php echo base_url()?>public/Home/image/close.png"></button>
                <h4 class="modal-title">Product Data</h4>
            </div>
            <div class="modal-body">

                <form class="" action="#" id="FormProduct" enctype="multipart/form-data">
                    <input type="hidden" value="" name="product_id"/>

                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" placeholder="Product Name" name="product_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Product Code</label>
                        <input type="number" placeholder="Product Code" name="product_code" class="form-control">
                    </div>

                    <!--end first col-12-->
                    <div class="form-group">
                        <label>Category Id</label>
                        <input type="number" placeholder="Category Id" class="form-control" name="category_id">
                    </div>

                    <div class="form-group">
                        <label>Product Price</label>
                        <input type="text" placeholder="Product Price" class="form-control"  name="produc_price">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Product Image" class="form-control" name="product_image">
                    </div>


                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="5" placeholder="Description......"  name="product_description"></textarea>
                    </div>


            </div>

            <div class="modal-footer">
                <button type="button" id="btnSavePro" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>

            </form>

        </div>

    </div>
</div>
