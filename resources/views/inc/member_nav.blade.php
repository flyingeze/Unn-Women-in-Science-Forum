<div class="content--nav pb--30">
        <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
            @if(auth()->user()->role == 'admin')<li><a href="{{ route('admin') }}">Admin Dashboard</a></li>@endif
            <li @if($mcode=="m1") class="active" @endif><a href="{{ route('profile') }}">Profile</a></li>
            <li @if($mcode=="m2") class="active" @endif><a href="{{ route('mytopics') }}">Topics</a></li>
            <li @if($mcode=="m3") class="active" @endif ><a href="{{ route('myreplies') }}">Replies Created</a></li>
            <li @if($mcode=="m4") class="active" @endif><a href="{{ route('settings') }}">Settings</a></li>
        </ul>
    </div>