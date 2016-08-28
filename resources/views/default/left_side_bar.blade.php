<div >
    <nav style="height: 150px;" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-left"  >
                <img alt="image" class="img-responsive img-circle" src="/images/profile.jpg"/>
            </div>
            <div class="nav-left"  style=" font-size: xx-large; color: #777">
                LUIZ ALBERTONI SOFTWARE
            </div>
            <div class="navbar-right" >
                <img alt="image" style="height: 100px" class="img-responsive img-responsive" src="/images/logo.png"/>
            </div>

            <div >
                <ul class="nav navbar-nav container" style="position:absolute;bottom: 0;margin-left: 15%;;float: left;">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="{{ URL::route('curriculum') }}">Curriculum</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="#">Contato</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="flag flag-{{Lang::getLocale()}} "  />
                            @lang('messages.language')&nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li role="presentation">
                                <a href="{{ URL::route('home', 'br') }}" >
                                <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="flag flag-br" alt="Português" />&nbsp;Português</a>
                            </li>
                            <li role="presentation">
                                <a href="{{ URL::route('home', 'us') }}"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="flag flag-us" alt="English" />&nbsp;English</a>
                            </li>
                            <li role="presentation">
                                <a href="{{ URL::route('home', 'es') }}"><img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" class="flag flag-es" alt="Espanhol" />&nbsp;Español</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>

    </nav>

</div>
