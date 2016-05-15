@extends('app')
 
@section('content')

<div class="container-fluid">


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>Proses</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td>4</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>	   
					  <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.0</td>
                        <td>Win 95+</td>
                        <td>5</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Trident</td>
                        <td>Internet
                          Explorer 5.5</td>
                        <td>Win 95+</td>
                        <td>5.5</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.0</td>
                        <td>OSX.2+</td>
                        <td>1.8</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Gecko</td>
                        <td>Camino 1.5</td>
                        <td>OSX.3+</td>
                        <td>1.8</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 2.0</td>
                        <td>OSX.4+</td>
                        <td>419.3</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>Safari 3.0</td>
                        <td>OSX.4+</td>
                        <td>522.1</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>OmniWeb 5.5</td>
                        <td>OSX.4+</td>
                        <td>420</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>iPod Touch / iPhone</td>
                        <td>iPod</td>
                        <td>420.1</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>
                      <tr>
                        <td>Webkit</td>
                        <td>S60</td>
                        <td>S60</td>
                        <td>413</td>
                        <td>
							<button class="btn btn-block btn-success ">Edit</button><br />
							<button class="btn btn-block btn-success ">Change Status</button>
						</td>
                      </tr>					  
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

			  </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

    <!-- DataTables -->
		
	{!!Html::script('plugins/jQuery/jQuery-2.1.4.min.js')!!}	
	
	<script>
	$(function () { 

		//Data Tables
		$("#example1").DataTable();
		
	});		
	</script>	
		
</div>
@endsection