<header class="header">
            <div class="header__inner">
                <div class="container-fluid">
                    <div class="header__row row justify-content-between">
                        <div class="header__col-left col d-flex align-items-center">
                            <div class="header__left-toggle">
                                <button class="header__toggle-menu toggle-sidebar" type="button">
                                    <svg class="icon-icon-menu">
                                        <use xlink:href="#icon-menu"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="header__col-right col d-flex align-items-center">
                            <div class="header__tools">
                                <div class="header__notes header__tools-item">
                                    <a class="header__tools-toggle header__tools-toggle--message" href="#" data-tippy-content="Notifications" data-tippy-placement="bottom" data-toggle="dropdown">
                                        <svg class="icon-icon-message">
                                            <use xlink:href="#icon-message"></use>
                                        </svg> <span class="badge-signal"></span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu__top dropdown-menu__item"><span class="dropdown-menu__title">Notifications</span><span class="badge badge--red">5</span><a class="dropdown-menu__clear-all" href="#" role="button">Clear All</a>
                                        </div>
                                        <div class="dropdown-menu__items scrollbar-thin scrollbar-visible" data-simplebar="data-simplebar">
                                            <div class="dropdown-menu__item">
                                                <a class="dropdown-menu__item-remove" href="#">
                                                    <svg class="icon-icon-cross">
                                                        <use xlink:href="#icon-cross"></use>
                                                    </svg>
                                                </a>
                                                <a class="dropdown-menu__item-block dropdown-menu__note" href="#">
                                                    <div class="dropdown-menu__item-left">
                                                        <div class="dropdown-menu__item-icon color-green">
                                                            <svg class="icon-icon-cart">
                                                                <use xlink:href="#icon-cart"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-menu__item-right">
                                                        <h4 class="dropdown-menu__item-title">New Order Received</h4><span class="dropdown-menu__item-time">25 min ago</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="dropdown-menu__divider"></div><a class="dropdown-menu__item dropdown-menu__link-all" href="#">View all Notifications
                        <svg class="icon-icon-keyboard-right">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </div>
                                </div>
                            </div>
                            <div class="header__profile dropdown">
                                <a class="header__profile-toggle dropdown__toggle" href="#" data-toggle="dropdown">
                                    <div class="header__profile-image"><span class="header__profile-image-text">MA</span>
                                        <img src="<?= base_url();?>assets/img/content/humans/item-4.jpg" alt="#" />
                                    </div>
                                    <div class="header__profile-text"><span>Mark Anderson</span>
                                    </div><span class="icon-arrow-down">
                      <svg class="icon-icon-arrow-down">
                        <use xlink:href="#icon-arrow-down"></use>
                      </svg></span>
                                </a>
                                <div class="profile-dropdown dropdown-menu dropdown-menu--right"><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-user">
                          <use xlink:href="#icon-user"></use>
                        </svg></span><span>My Profile</span></a>
                        <div class="dropdown-menu__divider"></div><a class="profile-dropdown__item dropdown-menu__item" href="#" tabindex="0"><span class="profile-dropdown__icon">
                        <svg class="icon-icon-logout">
                          <use xlink:href="#icon-logout"></use>
                        </svg></span><span>Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>