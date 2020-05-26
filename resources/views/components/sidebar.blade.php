<div>
  <div class="sidebar__top">
    <div class="sidebar__name">
      {{ Auth::user()->name }}
    </div>
    

      <ul>
        <li><a href="{{ route('home') }}">Dashboard</a></li>
        <li><a href="{{ route('customers') }}">Klanten</a></li>
        <li><a href="{{ route('users') }}">Gebruikers</a></li>
        <li><a href="{{ route('settings') }}">Instellingen</a></li>
      </ul>
    
  </div>
  
  <div class="sidebar__bottom">
    <a class="" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
        {{ __('Log uit') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
  </div>
</div>