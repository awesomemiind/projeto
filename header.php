<ul class="sidenav sidenav-fixed" id="mobile-demo">
    <li>
      <div class="user-view">
      <div class="background">
      </div>
        <a href="#user"><div class="circle"><i class="fas fa-user-ninja" style="font-size: 50px;"></i></div>
        <a href="#name"><span class="white-text name">Marcelo Nascimento</span></a>
        <a href="#email"><span class="white-text email">marcelo.nascimento@gmail.com</span></a>
      </div>
    </li>
      <li><a href="#"><i class="material-icons">cloud</i>First Link With Icon</a></li>
      <li><a href="#"><i class="fas fa-box-open side-icon"></i>Second Link</a></li>
      <li><div class="divider"></div></li>
      <li><a class="subheader">Subheader</a></li>
      <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    
<header>
    <div>  
    <nav style="background: #723881;">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center-align"><i class="fab fa-battle-net"></i></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger">
            <i class="material-icons">menu</i>
            </a>

            <ul class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
            </ul>
        </div>
        </nav>
    </div>
</header>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>