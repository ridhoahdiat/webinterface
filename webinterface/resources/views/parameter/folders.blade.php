@extends('parameter.indexparam');

@section('contents')

<div class="row mb-4">
    
	<div class="col-lg-12 col-md-6 mb-md-0 mb-4">
  	
      	<div class="card">
        
	        <div class="card-header pb-0">
	          <div class="row">
	            <div class="col-lg-6 col-7">
		            
                   	<h6>
		            	<a href="{{ url('parameter') }}">
				            <i class="fa fa-arrow-left" href="{{ url('parameter') }}"></i> 
			            </a> Folder
		            </h6>
					
					<p class="text-sm mb-0">
		                Table list folder yang digunakan oleh aplikasi
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
	              <thead>
	                <tr>
	                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Folder ID</th>
	                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Folder</th>
	                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Link Folder</th>
	                </tr>
	              </thead>
	              <tbody>

	              	@foreach ($params as $param)
				        <tr>
				        	<td>
			                    <div class="d-flex px-2 py-1">
				                    <div class="d-flex flex-column justify-content-center">
				                    	<h6 class="mb-0 text-sm">{{ $param->FOLDER_ID }}</h6>
				                    </div>
			                    </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
			                     	<span class="text-xs font-weight-bold">{{ $param->FOLDER_NAME }}</span>
				                </div>
			                </td>
							<td>
			                    <div class="align-middle text-center text-sm">
				                   	<span class="text-xs font-weight-bold">{{ $param->FOLDER_LINK }}</span>
			                    </div>
			                </td>
						</tr>
				    @endforeach

	                
	              </tbody>
	            </table>

	          </div>
	        </div>

      	</div>

  	</div>

</div>

@endsection