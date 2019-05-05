	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		
		<ul class="nav menu">			

			<li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
				<a href="{{ url('/admin/dashboard') }}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a>
			</li>

			<li class="parent {{ Request::is('admin/add_user', 'admin/view', 'admin/view2') ? 'active' : '' }}">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>Users &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> </span> </a>	
				<ul class="children collapse" id="sub-item-1">

					<li>
						<a href="{{ url('/admin/add_user') }}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Users</a>
					</li>

					<li>
						<a href="{{ url('/admin/view') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Users List</a>
					</li>

					<li>
						<a href="{{ url('/admin/view2') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Admins List</a>
					</li>
										
				</ul>
			</li>


			<li class="parent {{ Request::is('menus/*', 'submenu/*', 'menu/*') ? 'active' : '' }}">
				<a href="#">
					<span data-toggle="collapse" href="#sub-item-2"><svg class="glyph stroked open folder"><use xlink:href="#stroked-open-folder"/></svg>Menus &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>
				</a>
				<ul class="children collapse" id="sub-item-2">

					<li>
						<a href="{{ url('/menus/create') }}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add menu </a>
					</li>

					<li>
						<a href="{{ url('/submenu/create') }}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Submenu</a>
					</li>

					<li>
						<a href="{{ url('/menu/view') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Menus List</a>
					</li>

					<li>
						<a href="{{ url('/submenu/view') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Sub Menus List</a>
					</li>
										
				</ul>
			</li>

			<li class="parent {{Request::is('tablecontent/*') ? 'active' : '' }}"><a href="#"><span data-toggle="collapse" href="#sub-item-3"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg>Content &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span></a>

				<ul class="children collapse" id="sub-item-3" >
					
					<li>
						<a href="{{ url('/tablecontent/create') }}"><svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"/></svg> Add Table Content</a>
					</li>

					<li>
						<a href="{{ url('/tablecontent/view') }}"><svg class="glyph stroked clipboard with paper"><use xlink:href="#stroked-clipboard-with-paper"/></svg>Table Content </a>
					</li>

				</ul>

			</li>

			<li class="parent {{Request::is('homepage/*') ? 'active' : '' }}"><a href="#"> <span data-toggle="collapse" href="#sub-item-4"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></svg>Home Page <svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg> </span></a>

				<ul class="children collapse" id="sub-item-4" >

					<li>
						<a href="{{ url('/homepage/featuredposts') }}"><svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"/></svg> Featured Posts</a>
					</li>

					<li>
						<a href="{{ url('/homepage/services') }}"><svg class="glyph stroked star"><use xlink:href="#stroked-star"/></svg> Services</a>
					</li>
					
					<li>
						<a href="{{ url('/homepage/counter') }}"><svg class="glyph stroked clock"><use xlink:href="#stroked-clock"/></svg> Counter</a>
					</li>

					<li>
						<a href="{{ url('/homepage/courses') }}"><svg class="glyph stroked notepad "><use xlink:href="#stroked-notepad"/></svg>Courses </a>
					</li>

				</ul>

			</li>
			

			{{-- unused lists below... --}}
			{{-- <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li>
			<li><a href="tables.html"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Tables</a></li>
			<li><a href="forms.html"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Forms</a></li>
			<li><a href="panels.html"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Alerts &amp; Panels</a></li>
			<li><a href="icons.html"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Icons</a></li> --}}					
		</ul>		
	</div><!--/.sidebar-->