@include('frontend.dashboard.header')
<div class="container-fluid">

	<div class="row">

		<div class="col-sm-12">
			<h5 class="page-title">Dashboard</h5>
			<hr>
			<div>
				<div class="section">
			      <div class="container">
			        <div class="row">
			          <div class="col-md-8">
			              
			              <div class="panel panel-danger">
    			              <div class="panel-heading">
    			                <h3 class="panel-title">Company Status</h3>
    			              </div>
    			              <div class="panel-body">
    			                  <p>Admin hasn't yet approved your company. Current status is '.</p>
    			              </div>
			              </div>
			              
			          </div>
			          <div class="col-md-4">
			            <div class="panel panel-primary">
			              <div class="panel-heading">
			                <h3 class="panel-title">Profile Progress</h3>
			              </div>
			              <div class="panel-body">
			                <ul class="list-group">
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.prfile')}}">Member Profile</a>
			                    <span class="badge pull-right">Complete</span>
			                  </li>
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.info')}}">Company Information</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.ceo')}}">CEO / Ddirector's Info.</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.service')}}">Services</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.representative')}}">Representatives</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.refrence')}}">Trade References</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                  <li class="list-group-item"><a href="">Certifications</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                  <li class="list-group-item"><a href="{{route('frontend.dashboard.branch')}}">Company Branches</a>
			                    <span class="badge pull-right"></span>
			                  </li>
			                </ul>
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

@include('frontend.dashboard.footer')