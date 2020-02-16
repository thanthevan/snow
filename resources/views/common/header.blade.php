<div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall"
    data-retarget-mouse-scroll="false">
    <div class="mdk-header__content">

        <div class="navbar navbar-expand-sm navbar-main navbar-dark bg-primary pl-md-0 pr-0" id="navbar" data-primary>
            <div class="container-fluid page__container pr-0">
                <!-- Navbar toggler -->
                <button class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar" type="button"
                    data-toggle="sidebar">
                    <span class="material-icons">short_text</span>
                </button>
                <form style="visibility: hidden" class="ml-auto search-form search-form--light d-none d-sm-flex flex"
                    action="">
                </form>
                <div class="dropdown">
                    <a href="#" data-toggle="dropdown" data-caret="false"
                        class="dropdown-toggle navbar-toggler navbar-toggler-dashboard border-left d-flex align-items-center ml-navbar">
                        <span class="fa fa-heart" style="padding-right:10px"></span> Vô đây chơi
                    </a>
                    <div id="company_menu" class="dropdown-menu dropdown-menu-right navbar-company-menu">
                        <div class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">
                            @php
                            $user = Auth::user();
                             $avt =  'storage/uploads/'.$user->avatar; 
                              @endphp
                            <span class="mr-3">
                                <img style="object-fit: cover" src="{{ $avt }}" width="43" height="43" alt="avatar">
                            </span>
                          
                            <span class="flex d-flex flex-column">
                                <strong class="h5 m-0">{{ $user->name}}</strong>
                               
                            </span>

                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('profile') }}">
                            <span class="material-icons mr-2">account_circle</span> Chỉnh in phô
                        </a>
                        <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('logout') }}">
                            <span class="material-icons mr-2">exit_to_app</span> Đăng xuất nè 
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>