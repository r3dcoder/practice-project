<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">Navigation</li>

            <li class="nav-item">
                <a href="{{ route('userDashboard') }}" class="nav-link {{ Route::currentRouteName()=='userDashboard' ? 'active': ''}}">
                    <i class="icon icon-speedometer"></i> Dashboard
                </a>
            </li>

            <li class="nav-item ">
                <a href="{{ route('userComments') }}" class="nav-link {{ Route::currentRouteName()=='userComments' ? 'active': ''}}">
                    <i class="icon icon-target"></i> Comments
                </a>
            </li>

            @if(Auth::user()->author==true)

            <li class="nav-title">Author</li>
            <li class="nav-item">
                <a href="{{ route('authorDashboard') }}" class="nav-link {{ Route::currentRouteName()=='authorDashboard' ? 'active': ''}}">Dashboard
                </a>
            </li>

            <li class="nav-item">

                <a href="{{ route('authorComments') }}" class="nav-link {{ Route::currentRouteName()=='authorComments' ? 'active': ''}}">Comments
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('authorPosts') }}" class="nav-link {{ Route::currentRouteName()=='authorPosts' ? 'active': ''}}">
                    post
                </a>
            </li>
            @endif


            @if(Auth::user()->admin==true)
            <li class="nav-title">Admin</li>
            <li class="nav-item">
                <a href="{{ route('adminDashboard') }}" class="nav-link {{ Route::currentRouteName()=='adminDashboard' ? 'active': ''}}">Dashboard
                </a>
            </li>

            <li class="nav-item">

                <a href="{{ route('adminComments') }}" class="nav-link {{ Route::currentRouteName()=='adminComments' ? 'active': ''}}">Comments
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('adminPosts') }}" class="nav-link {{ Route::currentRouteName()=='adminPosts' ? 'active': ''}}">
                    Car Reservation
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('adminUsers') }}" class="nav-link {{ Route::currentRouteName()=='adminUsers' ? 'active': ''}}">
                    User
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('adminRoom') }}" class="nav-link {{ Route::currentRouteName()=='adminRoom' ? 'active': ''}}">
                    Room reservation
                </a>
            </li>
                @endif

        </ul>

    </nav>
</div>
