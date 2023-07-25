<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel 7.X</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{URL::to('/home')}}">Home</a></li>
            <li><a href="{{URL::to('/apropos')}}">Apropos</a></li>
            <li><a href="{{URL::to('/services')}}">Services</a></li>
            <li><a href="{{URL::to('/detail')}}">User détail</a></li>
        </ul>
         <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL::to('/create')}}">Nouveau Produit</a></li>
        </ul>
    </div>
</nav>