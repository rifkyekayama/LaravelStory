<div class="panel panel-default">
    <div class="panel-body">
        <ul class="nav nav-pills nav-stacked">
            <li class="{{ Request::is('home') ? 'active' : '' }}">
                <a href="/home">Dasboard</a>
            </li>
            <li class="{{ Request::is('google/maps') ? 'active' : '' }}">
                <a href="/google/maps">Google Maps</a>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="">Basic Google Maps</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('scout') ? 'active' : '' }}">
                <a href="/scout">Laravel Scout</a>
            </li>
            <li class="{{ Request::is('timer') ? 'active' : '' }}">
                <a href="/timer">Timer</a>
            </li>
        </ul>
    </div>
</div>