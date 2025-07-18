<section class="container-fluid no-padding">
    <div class="row wrapper no-padding">
        <div class="col-xl-1 col-sm-2">
            <nav class="menu-left">
                <ul class="list">
                    <form>
                        <li>
                            <button type="submit">
                                <span class="icon flaticon-home"></span>
                                <span class="text">Home</span>
                            </button>
                        </li>
                    </form>
                    <form>
                        <li>
                            <button type="submit" class="active">
                                <span class="icon flaticon-notepad-1"></span>
                                <span class="text">Tasks</span>
                            </button>
                        </li>
                    </form>
                    <form>
                        <li>
                            <button type="submit">
                                <span class="icon flaticon-settings-5"></span>
                                <span class="text">Settings</span>
                            </button>
                        </li>
                    </form>
                    <form method="POST" action="/logout">
                        @csrf
                        <li>
                            <button type="submit">
                                <span class="icon flaticon-power"></span>
                                <span class="text">Exit</span>
                            </button>
                        </li>
                    </form>
                </ul>
            </nav>
        </div>
        <div class="col-xl-11 col-sm-10">
            <div class="main-content">
                <header class="header-content">
                    <ul class="list list-inline">
                        <li>
                            <a href="" title="">
                                <span class="state red"></span>
                                <span>Task</span>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                                <span class="state yellow"></span>
                                <span>Story</span>
                            </a>
                        </li>
                        <li>
                            <a href="" title="">
                                <span class="state green"></span>
                                <span>Bug</span>
                            </a>
                        </li>
                    </ul>
                    <div class="action">
                        <a href="/tasks/create" title="">New Task</a>
                        <a href="{{ route('boards.create') }}">
                            <button class="btn btn-blue">New Board <span class="flaticon-add"></span></button>
                        </a>
                    </div>
                </header>
                <x-dashboard :tasks="$tasks" />
            </div>
        </div>
    </div>
</section>
