<div class="navbar js-navbar">
    <div class="container navbar--content no-padding-bottom no-padding-top clearfix">
        <a href="{% url 'index' %}" class="navbar--logo">
            @include('includes.svg-logo', [
                'class' => 'navbar--logo--image'
            ])
            <span class="navbar--logo--site-name">{{ env('APP_NAME') }}</span>
            <span class="navbar--logo--site-slogan">Restaurant manager</span>
        </a>
        <div class="navbar--menu-wrapper">
            <button type="button" class="navbar--menu-toggle js-navbar--toggle"></button>
            @auth
                <div class="navbar--auth-info">
                    <div class="navbar--auth-info--menu-separator"></div>
                    <a href="#" class="navbar--auth-info--user-avatar">
                        <img src="http://via.placeholder.com/45x45" class="navbar--auth-info--user-avatar--image">
                    </a>
                    <span class="navbar--auth-info--label">Logged as:</span>
                    <a href="#" class="navbar--auth-info--user-name">Test Name</a>
                </div>
            @endauth
            <ul class="navbar--menu row">
                <li class="navbar--menu--item active"><a href="#" class="navbar--menu--link">Home</a></li>
            </ul>
        </div>
    </div>
</div>
