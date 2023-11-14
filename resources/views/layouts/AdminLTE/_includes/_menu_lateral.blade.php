<aside class="main-sidebar">
	<section class="sidebar">
		<ul class="sidebar-menu" data-widget="tree">
			<li class="{{ Request::segment(1) === null ? 'active' : null }} {{ Request::segment(2) === 'home' ? 'active' : null }}">
				<a href="{{ route('home') }}" title="Dashboard"><i class="fa fa-dashboard"></i> <span> Dashboard</span></a>
			</li>
			<li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}">
				<a href="{{ route('profile') }}" title="Profile"><i class="fa fa-user"></i> <span> Profile</span></a>
			</li>
			@if(currentUserRole() == ADMIN)
			<li class="{{ Request::segment(2) === 'user' ? 'active' : null }}">
				<a href="{{ route('user') }}" title="Users">
					<i class="fa fa-user"></i> <span> Users</span>
				</a>
			</li>
			<li class="treeview 
				{{ Request::segment(2) === 'config' ? 'active menu-open' : null }} {{ Request::segment(2) === 'role' ? 'active menu-open' : null }} {{ Request::segment(2) === 'role' ? 'active menu-open' : null }}">
				<a href="#">
					<i class="fa fa-gear"></i>
					<span>Settings </span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu ">
					@if (Auth::user()->can('root-dev', ''))
						<li class="{{ Request::segment(2) === 'config' && Request::segment(2) === null ? 'active' : null }}">
							<a href="{{ route('config') }}" title="App Config">
								<i class="fa fa-gear"></i> <span> Settings App</span>
							</a>
						</li>
					@endif					
					<li class="{{ Request::segment(2) === 'user' ? 'active' : null }}	{{ Request::segment(2) === 'role' ? 'active' : null }}">
						<a href="{{ route('role') }}" title="Users">
							<i class="fa fa-unlock-alt"></i> <span> Roles</span>
						</a>
					</li>
				</ul>
			</li> 
			@endif     
		</ul>
	</section>
</aside>