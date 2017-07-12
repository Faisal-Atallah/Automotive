


<div class="container-fluid">


    <h3>Product Data</h3>

    <button style="background-color:#444444;border-color:transparent" class="btn btn-success" onclick="add_product()"><i class="glyphicon glyphicon-plus"></i> Add Product</button>
    <button class="btn btn-default" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
    <br />
    <br />

    <table id="tableProduct" class="table table-striped table-bordered" cellspacing="0" width="100%">

        <thead>

        <tr>
            <th>Id</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Description</th>
            <th>Category Id</th>
            <th>Product Price</th>
            <th style="width:125px;">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>

        <tfoot>
        <tr>
            <th>Id</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Description</th>
            <th>Category Id</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>
</div>

<!-- Bootstrap modal -->
<!-- Modal -->
<?php $this->load->view('site/product_modal')?>



