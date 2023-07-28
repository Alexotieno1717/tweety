<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>
    <li>
        <a href="/explore" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">
            Notifications
        </a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">
            Messages
        </a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">
            Bookmarks
        </a>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">
            Lists
        </a>
    </li>
    <li>
        <a href="{{ route('profile', current_user()) }}" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="/logout"
               class="font-bold text-lg mb-4 block"
               onclick="event.preventDefault();
                                            this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>
    </li>
    <li>
        <a href="#" class="font-bold text-lg mb-4 block">
            More
        </a>
    </li>


</ul>
