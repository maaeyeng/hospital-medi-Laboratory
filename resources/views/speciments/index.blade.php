@extends('hp-labs.layouts')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="container">
   <div class="card pb-4">
    <h5 class="card-header"> Register Section</h5>
    <div class="row">
        <div class="col pt-2 pb-2">
        <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" maxlength="10"
            placeholder="Search Nation ID"> <span class="input-group-btn">
            <button type="submit" class="btn btn-info">
                <span class="glyphicon glyphicon-search"> Search</span>
            </button>
        </span>
    </div>
</form>
    
    Name : <input type="text" name="nid">

    LastName: <input type="text" name="nid"> Bdate : <input type="date" name="nid">
</div>
</div>
<div class="row">
        <div class="col pt-2 pb-2">
    Gender: <input type="" name="nid"> Nationality : <input type="text" name="nid">
    Nation ID: <input type="text" name="nid"> Name : <input type="text" name="nid">

</div>
</div>
</div>
</div>
<div class="container">
    <div class="row">
        <div class="col-6">
        <div class="card pt-2">
    <h5 class="card-header"> Speciment Section</h5>
   
    <div class="row">
   
        <div class="col pt-2 pd-2">
    LSN_OPDC : <input type="text" name="nid"> <br />

</div>
</div>
<div class="row">
<div class="col pt-2 pd-2">
   Speciment : <input type="text" name="nid">
</div>
</div>
<div class="row">
<div class="col pt-2 pd-2">
    Volumn : <input type="text" name="nid"> 
</div>
</div>
<div class="row">
<div class="col pt-2 pd-2">
     Ref Date : <input type="date" name="nid"> 
</div>
<button class="btn btn-primary">Save</button>
</div>
</div>

</div>
<div class="col-6">
    <div class="row">
    <div class="card">
    <h5 class="card-header"> Lab Section</h5>
    <table id="new-lab" class="table table-striped table-wrapper-scroll-y ">
    <a class="btn btn-primary rounded-0 btn-block" id="insertRow" href="#">Add new Lab</a>
    <theader>
        <tr>
            <td>Item</td>
            <td>Description</td>
            <td>Status</td>
            <td>Action</td>
</tr>
    </theader>
</table>
<a href="" class="btn btn-danger">Old Lab</a>
<div class="container py-1">
    <div class="row">
        <div class="col-lg-7 mx-auto">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body p-5">
                    
                    <!--  Bootstrap table-->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Add rows button-->
                    <a class="btn btn-primary rounded-0 btn-block" id="insertRow" href="#">Add new row</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
$(function () {

// Start counting from the third row
var counter = 1;

$("#insertRow").on("click", function (event) {
    event.preventDefault();

    var newRow = $("<tr>");
    var cols = '';

    // Table columns
    cols += '<th scrope="row">' + counter + '</th>';
    cols += '<td><input class="form-control rounded-0" type="text" name="firstname" placeholder="Description"></td>';
    cols += '<td><input class="form-control rounded-0" type="text" name="lastname" placeholder="Status"></td>';
    cols += '<td><button class="btn btn-success rounded-0" id ="save"><i class="fa fa-trash">Save</i></button</td>';
    cols += '<td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash">Del</i></button</td>';

    // Insert the columns inside a row
    newRow.append(cols);

    // Insert the row inside a table
    $("#new-lab").append(newRow);

    // Increase counter after each row insertion
    counter++;
});
// Save row when delete btn is clicked
$("table").on("click", "#save", function (event) {
    $(this).hide();
});
// Remove row when delete btn is clicked
$("table").on("click", "#deleteRow", function (event) {
    $(this).closest("tr").remove();
    counter -= 1
});
});
</script>
@endsection