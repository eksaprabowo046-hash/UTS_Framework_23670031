<!-- BEGIN #sidebar -->
<div id="sidebar" class="app-sidebar">
	<!-- BEGIN scrollbar -->
	<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
		<!-- BEGIN menu -->
		<div class="menu">
			<div class="menu-header">Navigation</div>
			
			<!-- Dashboard -->
			<div class="menu-item {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
				<a href="{{ route('admin.dashboard') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-laptop"></i></span>
					<span class="menu-text">Dashboard</span>
				</a>
			</div>
			
			<!-- Calendar -->
			<div class="menu-item {{ request()->routeIs('admin.calendar') ? 'active' : '' }}">
				<a href="{{ route('admin.calendar') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-calendar"></i></span>
					<span class="menu-text">Calendar</span>
				</a>
			</div>
			
			<div class="menu-divider"></div>
			<div class="menu-header">Components & UI</div>
			
			<!-- Form Elements -->
			<div class="menu-item {{ request()->routeIs('admin.form_elements') ? 'active' : '' }}">
				<a href="{{ route('admin.form_elements') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-file-alt"></i></span>
					<span class="menu-text">Form Elements</span>
				</a>
			</div>
			
			<!-- Table Plugins -->
			<div class="menu-item {{ request()->routeIs('admin.table_plugins') ? 'active' : '' }}">
				<a href="{{ route('admin.table_plugins') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-table"></i></span>
					<span class="menu-text">Table Plugins</span>
				</a>
			</div>
			
			<!-- UI Modal & Notification -->
			<div class="menu-item {{ request()->routeIs('admin.ui_modal_notification') ? 'active' : '' }}">
				<a href="{{ route('admin.ui_modal_notification') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-bell"></i></span>
					<span class="menu-text">UI Modal & Notification</span>
				</a>
			</div>
			
			<div class="menu-divider"></div>
			<div class="menu-header">Authentication & Pages</div>
			
			<!-- Login Page -->
			<div class="menu-item {{ request()->routeIs('admin.login') ? 'active' : '' }}">
				<a href="{{ route('admin.login') }}" class="menu-link">
					<span class="menu-icon"><i class="fa fa-sign-in-alt"></i></span>
					<span class="menu-text">Login Page</span>
				</a>
			</div>
			
			<!-- Landing Page Link -->
			<div class="menu-item">
				<a href="{{ route('landing.home') }}" target="_blank" class="menu-link">
					<span class="menu-icon"><i class="fa fa-crown text-warning"></i></span>
					<span class="menu-text">Landing Page</span>
				</a>
			</div>

			<div class="p-3 px-4 mt-auto hide-on-minified">
				<div class="card bg-theme bg-opacity-15 border-0">
					<div class="card-body p-3">
						<h6 class="card-title text-theme fw-600 mb-1">NPM Ganjil</h6>
						<p class="card-text fs-12px mb-0 text-body">23670031<br>Prudenta Fajar Octora</p>
					</div>
				</div>
			</div>
		</div>
		<!-- END menu -->
	</div>
	<!-- END scrollbar -->
	
	<!-- BEGIN mobile-sidebar-backdrop -->
	<button class="app-sidebar-mobile-backdrop" data-dismiss="sidebar-mobile"></button>
	<!-- END mobile-sidebar-backdrop -->
</div>
<!-- END #sidebar -->
