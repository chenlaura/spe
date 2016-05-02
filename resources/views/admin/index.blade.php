@extends('app')
 
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="panel-group" id="accordion">
			{!! Form::open(array('url'=>'foo/bar','class' => 'form-horizontal','role' => 'form')) !!}
			<!--Shipper Details-->
			 <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					Shipper Details</a>
				  </h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in">
				  <div class="panel-body">
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Shipper/Company Name:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipper_name" id="shipper_name">
						</div>
					</div>			
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Address:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <textarea class="form-control" rows="5" name="shipper_address" id="shipper_address"></textarea>
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">City:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipper_city" id="shipper_city">
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Postal/Zip Code:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipper_zipcode" id="shipper_zipcode">
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Province/Region:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipper_province" id="shipper_province">
						</div>
					</div>						
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Country:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipper_country" id="shipper_country">
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Phone:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipper_phone" id="shipper_phone">
						</div>
					</div>			
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipper">Delivery Instruction:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <textarea class="form-control" rows="5" name="shipper_delivery_instruction" id="shipper_delivery_instruction"></textarea>
						</div>
					</div>						
				  </div>
				</div>
			  </div>
			<!--End Shipper Details-->
			<!--Shipment Details-->			
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					Shipment Details</a>
				  </h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse">
				  <div class="panel-body">
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Type of Goods:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<label class="radio-inline">
							  <input type="radio" name="document"><p class="goodsType">Document</p>
							</label>
							<label class="radio-inline">
							  <input type="radio" name="parcel"><p class="goodsType">Parcel</p>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Origin:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <select class="form-control" name="shipment_origin" id="shipment_origin">
							<option value="pilih">-Select Location-</option>
							<option value="jakarta">Jakarta</option>
							<option value="papua">Papua</option>
						  </select>
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Destination:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <select class="form-control" name="shipment_destination" id="shipment_destination">
							<option value="pilih">-Select Location-</option>
						  <option value="jakarta">Jakarta</option>
							<option value="papua">Papua</option>
						  </select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Time:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<div class="bootstrap-timepicker">		
								<input type="text" class="form-control timepicker" name="shipment_province" id="shipment_province">
							</div>	
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Date:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipment_province" id="shipment_province" placeholder="dd/mm/yyyy">
						</div>
					</div>						
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Quantity:</label>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						  <input type="text" class="form-control" name="shipment_qty" id="shipment_qty">
						</div>
						<label class="col-xs-1 col-sm-1 col-md-1 col-lg-1 qwdStyle">pcs</label>
						<label class="control-label col-xs-1 col-sm-1 col-md-1 col-lg-1" for="shipment">Weight:</label>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
						  <input type="text" class="form-control" name="shipment_weight" id="shipment_weight">
						</div>
						<label class="col-xs-1 col-sm-1 col-md-1 col-lg-1 qwdStyle">kg</label>	
						<label class="control-label col-xs-1 col-sm-1 col-md-1 col-lg-1" for="shipment">Dimensions:</label>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<input type="text" class="form-control" name="shipment_length" id="shipment_length" placeholder="L"> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<input type="text" class="form-control" name="shipment_width" id="shipment_width" placeholder="W"> 
						</div>
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							<input type="text" class="form-control" name="shipment_height" id="shipment_height" placeholder="H"> 
						</div>						
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Charges:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="shipment_charges" id="shipment_charges">
						</div>
					</div>						
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Description of Shipments:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <textarea class="form-control" rows="5" name="shipment_description" id="shipment_description"></textarea>
						</div>
					</div>			
				  </div>
				</div>
			  </div>
			<!--End Shipment Details-->  
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					Company Details</a>
				  </h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse">
				  <div class="panel-body">
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">Recipient/Company Name:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="recipient_name" id="recipient_name">
						</div>
					</div>			
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">Address:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <textarea class="form-control" rows="5" name="recipient_address" id="recipient_address"></textarea>						  
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">City:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="recipient_city" id="recipient_city">
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">Postal/Zip Code:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="recipient_zipcode" id="recipient_zipcode">
						</div>
					</div>	
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">Province/Region:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="recipient_province" id="recipient_province">
						</div>
					</div>						
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">Country:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="recipient_country" id="recipient_country">
						</div>
					</div>				
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="recipient">Phone:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="recipient_phone" id="recipient_phone">
						</div>
					</div>							
				  </div>
				</div>
			  </div>		
			  <div class="panel panel-default">
				<div class="panel-heading">
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
					Payment</a>
				  </h4>
				</div>
				<div id="collapse4" class="panel-collapse collapse">
				  <div class="panel-body">
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="shipment">Payment Type:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
							<label class="radio-inline">
							  <input type="radio" name="cash"><p class="payment">Cash</p>
							</label>
							<label class="radio-inline">
							  <input type="radio" name="cod"><p class="payment">COD</p>
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="payment">Address:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <input type="text" class="form-control" name="payment_address" id="payment_address">
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="payment">Delivery Instruction:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <textarea class="form-control" rows="5" name="payment_delivery_instruction" id="payment_delivery_instruction"></textarea>
						</div>
					</div>		
					<div class="form-group">
						<label class="control-label col-xs-3 col-sm-3 col-md-3 col-lg-3" for="payment">Description of payment:</label>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						  <textarea class="form-control" rows="5" name="payment_description" id="payment_description"></textarea>
						</div>
					</div>					
				  </div>
				</div>
			  </div>
			<div class="form-group btn-success-width btn-success-margin">
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
					<button class="btn btn-block btn-success ">Success</button>
				</div>
			</div>	 
		   {!! Form::close() !!} 
			</div>
		</div>
	</div>
</div>
@endsection