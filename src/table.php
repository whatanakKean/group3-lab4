<!DOCTYPE html>
<html>
<head>
   <title>PHP - Jquery Datatables Example</title>
   <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


<div class="container my-5">
  <h2>Product Table</h2>
  <table id="my-example">
    <a class="btn btn-primary btn-sm my-1" href="create_product.php"> Add </a>
    <thead>
      <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Amount</th>
          <th>Price</th>
          <th>Actions</th>
      </tr>
    </thead>
  </table>
</div>


</body>


<script type="text/javascript">
  $(document).ready(function() {
      $('#my-example').DataTable({
        "bProcessing": true,
        "sAjaxSource": "getProducts.php",
        "aoColumns": [
              { mDataProp: 'p_id' } ,
              { mDataProp: 'p_name' },
              { mDataProp: 'p_amount'},
              { mDataProp: 'p_price'},
              {
                "mData": null,
                "bSortable": false,
                "mRender": () => {
                  return `<div>
                            <a class="btn btn-info btn-sm" href=#> Edit </a>
                            <a class="btn btn-danger btn-sm" href=#> Delete </a>
                          </div>
                          `;
                }
              }
            ],
      });  
  });
  
</script>
</html>