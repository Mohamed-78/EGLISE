<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user" style="background: #000; margin: 0px; margin-top:-1.5em;">
    <div>
      <p class="app-sidebar__user-name">{{Auth::user()->Name}}</p>
      <p class="app-sidebar__user-designation">ADMINISTRATEUR</p>
    </div>
  </div>
  <ul class="app-menu">
    <li><a class="app-menu__item active" href="{{route('home')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">TABLEAU DE BORD</span></a></li>

     <li><a class="app-menu__item" href="{{route('home')}}"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Nos actualités</span></a></li>

      <li><a class="app-menu__item" href="{{route('collection')}}"><i class="app-menu__icon fa fa-file"></i><span class="app-menu__label">Nos collections</span></a></li>

    <li><a class="app-menu__item" href="{{route('verset')}}"><i class="app-menu__icon fa fa-book"></i><span class="app-menu__label">Verset du jour</span></a></li>

    <li><a class="app-menu__item" href="{{ route('message') }}"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Messages</span></a></li>
    <br>
    <li><a class="app-menu__item" target="_blank" href="/"><i class="app-menu__icon fa fa-globe"></i><span class="app-menu__label">SITE INTERNET</span></a></li>
  </ul>
</aside>