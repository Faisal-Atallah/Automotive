
var save_method; //for save method string
var table;
$(document).ready(function() {
    //datatables
    table = $('#tableProduct').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {

            "url":"http://localhost/Automotive/site/Product/product_list",
            "type": "POST"
        },




        //Set column definition initialisation properties.
        "columnDefs": [
            {
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
            },
        ],

    });
});

function add_product()
{
    save_method = 'add';
    $('#FormProduct')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#ProductModal').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add Products');
}

function edit_product(product_id)
{
    save_method = 'update';
    $('#FormProduct')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url:'http://localhost/Automotive/site/Product/product_edit/' + product_id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {

            $('[name="product_id"]').val(data.product_id);
            $('[name="product_image"]').val(data.product_image);
            $('[name="product_name"]').val(data.product_name);
            $('[name="product_code"]').val(data.product_code);
            $('[name="product_description"]').val(data.product_description);
            $('[name="category_id"]').val(data.category_id);
            $('[name="produc_price"]').val(data.produc_price);
            $('#ProductModal').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Product'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null , false); //reload datatable ajax
}

function save()
{
    $('#btnSavePro').text('saving...'); //change button text
    $('#btnSavePro').attr('disabled',true); //set button disable
    var url;

    if(save_method == 'add') {
        url = "http://localhost/Automotive/site/Product/product_add";
    } else {
        url = "http://localhost/Automotive/site/Product/product_update";
    }
    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#FormProduct').serialize(),
        dataType: "JSON",
        success: function(data)
        {
            if(data.status) //if success close modal and reload ajax table
            {
                $('#ProductModal').modal('hide');
                reload_table();
            }
            $('#btnSavePro').text('save'); //change button text
            $('#btnSavePro').attr('disabled',false); //set button enable

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSavePro').text('save'); //change button text
            $('#btnSavePro').attr('disabled',false); //set button enable
        }
    });
}
function delete_product(product_id)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url:'http://localhost/Automotive/site/Product/product_delete/' + product_id ,
            type: "POST",
            success: function(data)
            {
                //if success reload ajax table
                $('#ProductModal').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });
    }
}