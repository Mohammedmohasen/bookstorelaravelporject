<nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li>
                        <a href="#dashboard" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Shop</span></i></a>
                        <ul id="dashboard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{ route('book') }}"></i>BOOKS</a></li>
                           <li><a href="{{ route('category') }}">Category</a></li>
                           <li><a href="{{ route('author') }}">AUTHER</a></li>
                           <li><a href="{{ route('publishing') }}">publishing house</a></li>
                           <li><a href="{{ route('dashboard')}}">Dashboard</a></li>

                        </ul>
                     </li>
                     <li >
                        <a href="#admin" class="iq-waves-effect" data-toggle="collapse" aria-expanded="true"><span class="ripple rippleEffect"></span><i class="las la-home iq-arrow-left"></i><span>Admin</span></i></a>
                        <ul id="admin" class="iq-submenu collapse show" data-parent="#iq-sidebar-toggle">
                           <li><a href="{{ route('add-publishing-house') }}">ADD publishing house</a></li>
                           <li><a href="{{ route('add-category')}}">ADD Books Category</a></li>
                           <li><a href="{{ route('add-author')}}">ADD Author</a></li>
                           <li><a href="{{ route('add-BOOKS')}}">ADD Books</a></li>

                        </ul>
                     </li>
                  </ul>
