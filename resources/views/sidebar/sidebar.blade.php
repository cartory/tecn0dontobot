<link href="{{ url('/css/sidebars.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ url('js/sidebars.js') }}"></script>
<style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


<div class="p-3 " >
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-5 fw-semibold">OdontoBOT</span>
    </a>
    @php
    use Harimayco\Menu\Models\Menus;
    use Harimayco\Menu\Models\MenuItems;
   $publicMenu = Menu::getByName('Public');

  @endphp
    <ul class="list-unstyled ps-0">

      
      
        @foreach ($publicMenu as $unMenu)
        <li class="mb-1 ">
        <button href="{{ $unMenu['link'] }}" class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#{{ $unMenu['label'] }}-collapse" aria-expanded="false">
           
          {{ $unMenu['label'] }} 
        </button>
        <div class="collapse" id="{{ $unMenu['label'] }}-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
           
           
        @foreach ($unMenu['child'] as $child)
        <li><a href="{{ $child['link'] }}" class="link-dark rounded">{{ $child['label'] }}</a></li>  
        @endforeach
       </ul>
        </div>
      </li>
        @endforeach
       
       
   

      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          {{ Auth::user()->name }}
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">New...</a></li>
            <li><a href="#" class="link-dark rounded">Profile</a></li>
            <li><a href="#" class="link-dark rounded">Settings</a></li>
            <li>   <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </div>