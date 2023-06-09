<li class="nav-item ">
    <a class="nav-link collapsed " href="/profile"><i class="fas fa-fw fa-user"></i>Profile   </a>
</li>

@if(Auth::user()->role === "admin")
<li class="nav-item ">
    <a class="nav-link collapsed " href="{{ route('users.index') }}"><i class="fas fa-fw fa-car"></i>Drivers</a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="{{ route('tasks.index') }}"><i class="fas fa-fw fa-tasks"></i>Tasks</a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="/notify"><i class="fas fa-fw fa-bell"></i>Notifications</a>
</li>
<li class="nav-item ">
    <a class="nav-link collapsed " href="/reports"><i class="fas fa-fw fa-folder"></i>Reports</a>
</li>

@else
    <li class="nav-item ">
        <a class="nav-link collapsed " href="{{ route('activities.index') }}"><i class="fas fa-fw fa-landmark"></i>Activity</a>
    </li>
    <li class="nav-item ">
        <a class="nav-link collapsed " href="/deliveryNote"><i class="fas fa-fw fa-list"></i>Delivery Note</a>
    </li>
@endif


<li class="nav-item ">
    <a class="nav-link collapsed "  href="{{ route('logout') }}"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fas fa-fw fa-reply"></i> {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

</li>


{{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
{{--    {{ __('Logout') }}--}}
{{--</a>--}}



