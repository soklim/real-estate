<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/home" class="simple-text logo-normal">
      {{ __('PH Dashboard') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

    <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
            <i class="fa fa-user"></i>
            <p>{{ __('User Management') }}</p>
        </a>
    </li>
      <li class="nav-item{{ $activePage == 'project' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Project') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'house-type' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">library_books</i>
            <p>{{ __('House Type') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'house' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('House') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'newsletter' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Newsletter') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'newsletter' ? ' active' : '' }}">
          <a class="nav-link" href="#">
             <i class="material-icons">location_ons</i>
             <p>{{ __('Message') }}</p>
          </a>
      </li>
    <li class="nav-item{{ $activePage == 'resource' ? ' active' : '' }}">
        <a class="nav-link" href="#">
            <i class="material-icons">location_ons</i>
            <p>{{ __('Resource') }}</p>
        </a>
    </li>



    </ul>
  </div>
</div>
