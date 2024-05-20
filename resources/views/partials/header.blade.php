<header>
        <div class="container  ">
            <div class="d-flex justify-content-between">
                <div class=" py-3"><img src="/img/dc-logo.png" alt="logo"></div>
                <div class="d-flex align-items-center">
                    <ul class="text-uppercase d-flex h-100 mb-0 ">
                        <li class="d-flex align-items-center" v-for="(menu, index) in menuList" :key="index">
                            <a :href="menu.path">{{ menu.name }}</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </header>
