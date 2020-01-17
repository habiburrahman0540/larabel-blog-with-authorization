<aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{Storage::disk('public')->url('profile/'.Auth::user()->image)}}" width="48" height="48" alt="" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">more_vert</i>
                        <ul class="dropdown-menu pull-right">
                        @if(Request::is('admin*'))
                        <li class="{{Request::is('admin/profile*') ? 'active' : ''}}">
                        <a href="{{route('admin.profile')}}">
                            <i class="material-icons">person</i>
                            <span>User Profile</span>
                        </a>
                    </li> 
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>{{ __('Logout') }}
                        
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    
                    </li>  
                    @endif  
                    @if(Request::is('author*'))
                        <li class="{{Request::is('author/profile*') ? 'active' : ''}}">
                        <a href="{{route('author.profile')}}">
                            <i class="material-icons">person</i>
                            <span>User Profile</span>
                        </a>
                    </li> 
                            <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>{{ __('Logout') }}
                        
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    
                    </li>  
                    @endif          
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
@if(Request::is('admin*'))
                    <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}">
                        <a href="{{route('admin.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/tag*') ? 'active' : ''}}">
                        <a href="{{route('admin.tag.index')}}">
                            <i class="material-icons">label</i>
                            <span>Tag</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/category*') ? 'active' : ''}}">
                        <a href="{{route('admin.category.index')}}">
                            <i class="material-icons">apps</i>
                            <span>Category</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/post*') ? 'active' : ''}}">
                        <a href="{{route('admin.post.index')}}">
                            <i class="material-icons">library_books</i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/pending/post*') ? 'active' : ''}}">
                        <a href="{{route('admin.post.pending')}}">
                            <i class="material-icons">library_books</i>
                            <span>Pending All Post</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/author') ? 'active' : ''}}">
                        <a href="{{route('admin.author.index')}}">
                            <i class="material-icons">supervisor_account</i>
                            <span>Author</span>
                        </a>
                    </li><li class="{{Request::is('admin/author/post*') ? 'active' : ''}}">
                        <a href="{{route('admin.post.authorpost')}}">
                            <i class="material-icons">library_books</i>
                            <span>Author Post</span>
                        </a>
                    </li>
                    
                    <li class="{{Request::is('admin/favorite*') ? 'active' : ''}}">
                        <a href="{{route('admin.favorite.index')}}">
                            <i class="material-icons">favorite_border</i>
                            <span>Favorite Post</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/comment*') ? 'active' : ''}}">
                        <a href="{{route('admin.comment.index')}}">
                            <i class="material-icons">chat</i>
                            <span>Comments</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/subscriber*') ? 'active' : ''}}">
                        <a href="{{route('admin.subscriber.index')}}">
                            <i class="material-icons">subscriptions</i>
                            <span>Subscriber</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/settings*') ? 'active' : ''}}">
                        <a href="{{route('admin.settings')}}">
                            <i class="material-icons">build</i>
                            <span>User Settings</span>
                        </a>
                    </li>
                    <li class="{{Request::is('admin/footer*') ? 'active' : ''}}">
                        <a href="{{route('admin.footer.index')}}">
                            <i class="material-icons">web</i>
                            <span>Footer Content</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('logout') }} " onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            
                            
                            <i class="material-icons">exit_to_app</i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                    @endif
                    @if(Request::is('author*'))
                    <li class="{{Request::is('author/dashboard') ? 'active' : ''}}">
                        <a href="{{route('author.dashboard')}}">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="{{Request::is('author/post*') ? 'active' : ''}}">
                        <a href="{{route('author.post.index')}}">
                            <i class="material-icons">library_books</i>
                            <span>Posts</span>
                        </a>
                    </li>
                    <li class="{{Request::is('author/favorite*') ? 'active' : ''}}">
                        <a href="{{route('author.favorite.index')}}">
                            <i class="material-icons">favorite</i>
                            <span>Favorite Post</span>
                        </a>
                    </li>
                    <li class="{{Request::is('author/comment*') ? 'active' : ''}}">
                        <a href="{{route('author.comment.index')}}">
                            <i class="material-icons">chat</i>
                            <span>Comments</span>
                        </a>
                    </li>
                    <li class="{{Request::is('author/settings*') ? 'active' : ''}}">
                        <a href="{{route('author.settings')}}">
                            <i class="material-icons">settings</i>
                            <span>User Settings</span>
                        </a>
                    </li>
                    <li>
                    <a href="{{ route('logout') }} " onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            
                            
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </li>
                    @endif
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="{{route('admin.dashboard')}}">Laravel My Blog Project</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>