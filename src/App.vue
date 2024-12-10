<template>
  <header>
            <div class="window-restrict row vertical-center space-between">
                <div class="row vertical-center">
                    <!-- <div class="logo"><img src="img/png-transparent-2013-audi-a5-2012-audi-a6-2012-audi-a5-coupe-car-audi-compact-car-sedan-vehicle.png"></img></div> -->
                    <div class="drom">Дром</div>
                </div>

                <div>Белгородская область</div>

                <nav>
                    <ul>
                      <li><router-link to="/auto">Автомобили</router-link></li>
                      <li><router-link to="/auto">Запчасти</router-link></li>
                    </ul>
                </nav>

                <div>Вход и регистрация</div>
            </div>
        </header>

  <RouterView />

  <footer>
    <div class="window-restrict row space-between">
      <div>БГТУ им.Шухова</div>
      <div>© ПВ-211 Тутов Данил</div>
    </div>
  </footer>
</template>