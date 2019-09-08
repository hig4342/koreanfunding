<div id="topmenu">
    <div class="logo"><img src="/images/logo.png" height="60px" width="auto"></div>
    <ul>
        <li class="menu">
            <div class="dropbtn">대회소개</div>
            <ul class="submenu">
                <li>공모요강</li>
                <li>인사말</li>
            </ul>
        </li>
        <li class="menu">접수하기</li>
        <li class="menu">공지사항</li>
        <li class="menu">모의투자</li>
        @auth
        <li class="menu">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                {{ __('로그아웃') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
        @else
            <li class="menu"><a href="{{ route('login') }}">로그인</a></li>
            @if (Route::has('register'))
            <li class="menu"><a href="{{ route('register') }}">회원가입</a></li>
            @endif
        @endauth
    </ul>
</div>
