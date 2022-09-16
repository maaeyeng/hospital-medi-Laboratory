@extends('hp-labs.layouts')
@section('content')
<div class="container w-100">
   <h1> HP-Lab </h1>
   <div class="row">
    <div class="col-2">
        <div class="card">
        <h5 class="card-header">Menu</h5>
    <ul style="float:left;list-style-type:none;">
        <li class="p-2" ><a href="registers">Register</a></li>
        <li class="p-2" ><a href="speciments">Speciment</a></li>
        <li class="p-2" ><a href="payments">Patient Payment</a></li>
        <li class="p-2" ><a href="dsts">DST</a></li>
        <li class="p-2" ><a href="xperts">Xpert</a></li>
        <li class="p-2" ><a href="cultures">Culture</a></li>
        <li class="p-2" ><a href="print">Print</a></li>
        <li class="p-2"><a href="toexcel">To Excel</a></li>
    </ul>
</div>
</div>
<div class="col-10">
    Nation ID :<input type="text" name="nation_id"><a href="" class="btn btn-success" >Search ID</a>
    <div class="card">
        <h5 class="card-header">Summary List</h5>
<table class="table">
        <thead>
            <tr>
            <td>LSN OPDC</td>
            <td>Order Number</td>
            <td>DST</td>
            <td>Payment</td>
            <td>Action</td>
</tr>
</thead>
<tr>
<td>111</td>
<td>111</td>
<td>111</td>
<td>111</td>
<td>111</td>
</tr>
</table>
</div>
</div>
</div>
</div>
@endsection