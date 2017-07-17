<div class="first-header">
			<div class="container">
			<div class="row header">
				<div class="col-sm-3">
					<div class="logo">
					
						<img src="{{ asset('assets/img/logo.png') }}" alt="">
					</div>
				</div>
				<div class="col-sm-9">
                	<div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <img src="../images/burger.png" alt="menu">
                      </button>
                    </div>
                                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                       <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{ url('about-company') }}">About Company</a></li>
                         <li><a href="{{ url('services') }}">Services</a></li>
                          <li><a href="{{ url('portfolio') }}">Portfolio</a></li>
                            <li><a href="{{ url('contact') }}">Contact</a></li>
                      </ul>
                      
                    </div>
                </div>
			</div>
			</div>
			</div>