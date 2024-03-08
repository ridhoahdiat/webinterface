@extends('parameter.indexparam');

@section('contents')

<div class="row mb-4">

	<div class="col-lg-12 col-md-6 mb-md-0 mb-4">
  	
      	<div class="card">
        
	        <div class="card-header pb-0">
	          <div class="row">
	            <div class="col-lg-6 col-7">
		            <h6>Config</h6>
		            <p class="text-sm mb-0">
		                Menu konfigurasi aplikasi web interface
		            </p>
	            </div>
	            <div class="col-lg-6 col-5 my-auto text-end">
	              <div class="dropdown float-lg-end pe-4">
	                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
	                  <i class="fa fa-ellipsis-v text-secondary"></i>
	                </a>
	                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
	                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
	                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
	                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
	                </ul>
	              </div>
	            </div>
	          </div>
	        </div>

	        <div class="card-body px-0 pb-2">
	          <div class="table-responsive">
	            
	            <table class="table align-items-center mb-0">
	              <!-- <thead>
	                <tr>
	                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Param Name</th>
	                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Param ID</th>
	                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Value of varchar 1</th>
	                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Value of varchar 2</th>
	                </tr>
	              </thead> -->
	              <tbody>

	              	
				        <tr>
				        	<td>
			                    <div class="align-middle text-center text-sm">
			                    	<a href="{{ url('parameter/prm') }}">
							            <span class="text-xs font-weight-bold"> Parameter </span>
							        </a>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
			                    	<a href="{{ url('parameter/dtb') }}">
			                     		<span class="text-xs font-weight-bold"> Database </span>
			                     	</a>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
			                    	<a href="{{ url('parameter/tbl') }}">
				                   		<span class="text-xs font-weight-bold"> Table </span>
				                   	</a>
			                    </div>
			                </td>
							<td>
								<div class="align-middle text-center text-sm">
			                     	<a href="{{ url('parameter/fld') }}">
			                     		<span class="text-xs font-weight-bold"> Folder </span>
			                     	</a>
				                </div>
			                </td>
						</tr>

						<tr>
				        	<td>
			                    <div class="align-middle text-center text-sm">
				                    <a href="{{ url('parameter/fie') }}">
				                    	<span class="text-xs font-weight-bold"> Field </span>
				                    </a>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
			                     	<a href="{{ url('parameter/fil') }}">
			                     		<span class="text-xs font-weight-bold"> File </span>
			                     	</a>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
				                   	<a href="{{ url('parameter/int') }}">
				                   		<span class="text-xs font-weight-bold"> Interface </span>
				                   	</a>
			                    </div>
			                </td>
							<td>
								<div class="align-middle text-center text-sm">
			                     	<a href="{{ url('parameter/wkf') }}">
			                     		<span class="text-xs font-weight-bold"> Workflow </span>
			                     	</a>
				                </div>
			                </td>
						</tr>

						<tr>
				        	<td>
			                    <div class="align-middle text-center text-sm">
				                    <a href="{{ url('parameter/qry') }}">
				                    	<span class="text-xs font-weight-bold"> Query </span>
				                    </a>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
			                     	<span class="text-xs font-weight-bold"> </span>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
				                   	<span class="text-xs font-weight-bold"> </span>
			                    </div>
			                </td>
							<td>
								<div class="align-middle text-center text-sm">
			                     	<span class="text-xs font-weight-bold"> </span>
				                </div>
			                </td>
						</tr>
				    

	                
	              </tbody>
	            </table>

	          </div>
	        </div>

      	</div>

  	</div>

</div>

@endsection