 <!-- ========== Left Sidebar Start ========== -->
 <div class="left-side-menu" id="solmenu">

     <div class="h-100" data-simplebar>

         <?php


            ?>
         <!--- Sidemenu -->
         <div id="sidebar-menu">
             <ul id="side-menu">
              
                 <li class="<?= $this->uri->segment(1) == 'home'|| empty($this->uri->segment(1))  ? 'menuitem-active' : '' ?>">
                     <a href="/home">
                         <i class="fe-airplay"></i>
                         <span class="badge badge-danger badge-pill float-right">0</span>
                         <span>Müşteriler</span>
                     </a>
                 </li>
                 <li class="<?= $this->uri->segment(1) == 'customers' ? 'menuitem-active' : '' ?>">
                     <a href="/customers">
                         <i class="fe-users"></i>
                         <span class="badge badge-danger badge-pill float-right">0</span>
                         <span>Müşteriler</span>
                     </a>
                 </li>
                 <li class="<?= $this->uri->segment(1) == 'returns' ? 'menuitem-active' : '' ?>">
                     <a href="/returns">
                         <i class="fe-repeat"></i>
                         <span class="badge badge-success badge-pill float-right">0</span>
                         <span>İadeler</span>
                     </a>
                 </li>
                 <li class="<?= $this->uri->segment(1) == 'sales' ? 'menuitem-active' : '' ?>">
                     <a href="/sales">
                         <i class="fe-shopping-bag"></i>
                         <span class="badge badge-danger badge-pill float-right">0</span>
                         <span>Satışlar</span>
                     </a>
                 </li>
                 <li class="
                 <?= $this->uri->segment(1) == 'products' ||
                        $this->uri->segment(1) == 'kproducts' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#urunIslemleri" <?= $this->uri->segment(1) == 'porders' ||
                                                                                            $this->uri->segment(1) == 'piorders' ||
                                                                                            $this->uri->segment(1) == 'dporders' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="fe-box"></i>
                         <span>Ürün İşlemleri</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse <?= $this->uri->segment(1) == 'products' || $this->uri->segment(1) == 'kproducts'  ? ' show' : '' ?>" id="urunIslemleri">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'products' ? 'active' : '' ?>">
                                 <a href="/products"><i class="mdi mdi-text-box-multiple mr-1"></i>Ürünler</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'kproducts' ? 'active' : '' ?>">
                                 <a href="/kproducts"><i class="mdi mdi-text-box-multiple mr-1"></i>Ürün Kategorileri</a>
                             </li>


                         </ul>
                     </div>
                 </li>
                 <li class="
                 <?= $this->uri->segment(1) == 'porders' ||
                        $this->uri->segment(1) == 'piorders' ||
                        $this->uri->segment(1) == 'dporders' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#odemeEmirleri" <?= $this->uri->segment(1) == 'porders' ||
                                                                                            $this->uri->segment(1) == 'piorders' ||
                                                                                            $this->uri->segment(1) == 'dporders' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="fe-clipboard"></i>
                         <span>Sipariş İşlemleri</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse <?= $this->uri->segment(1) == 'porders' || $this->uri->segment(1) == 'piorders' || $this->uri->segment(1) == 'dporders' ? ' show' : '' ?>" id="odemeEmirleri">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'porders' ? 'active' : '' ?>">
                                 <a href="/porders"><i class="mdi mdi-text-box-multiple mr-1"></i>Standart Siparişler</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'piorders' ? 'active' : '' ?>">
                                 <a href="/piorders"><i class="mdi mdi-text-box-multiple mr-1"></i>Özel Siparişler</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'dporders' ? 'active' : '' ?>">
                                 <a href="/dporders"><i class="mdi mdi-text-box-multiple mr-1"></i>İptal Edilen Siparişler</a>
                             </li>

                         </ul>
                     </div>
                 </li>
                 <li class="<?=
                            $this->uri->segment(1) == 'rcollections' ||
                                $this->uri->segment(1) == 'pcollections' ||
                                $this->uri->segment(1) == 'ucollections' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#odemeIslemleri" <?=
                                                                                        $this->uri->segment(1) == 'rcollections' ||
                                                                                            $this->uri->segment(1) == 'pcollections' ||
                                                                                            $this->uri->segment(1) == 'ucollections' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="fe-dollar-sign"></i>
                         <span>Ödemeler</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse <?=
                                            $this->uri->segment(1) == 'rcollections' ||
                                                $this->uri->segment(1) == 'pcollections' ||
                                                $this->uri->segment(1) == 'ucollections' ? '
                      show' : '' ?>" id="odemeIslemleri">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'p' ? 'active' : '' ?>">
                                 <a href="/rcollections"><i class="mdi mdi-cash-multiple mr-1"></i>Online Ödemeler</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'p' ? 'active' : '' ?>">
                                 <a href="/ucollections"><i class="mdi mdi-cash-multiple mr-1"></i>Şüpheli Ödemeler</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'p' ? 'active' : '' ?>">
                                 <a href="/pcollections"><i class="mdi mdi-cash-multiple mr-1"></i>Banka Havaleleri</a>
                             </li>
                         </ul>
                     </div>
                 </li>

                 <li class="<?=
                            $this->uri->segment(1) == 'privacy' ||
                                $this->uri->segment(1) == 'kvkk' ||
                                $this->uri->segment(1) == 'notifications' ||
                                $this->uri->segment(1) == 'otemplate' ||
                                $this->uri->segment(1) == 'stemplate' ||
                                $this->uri->segment(1) == 'wtemplate' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#tanimlamalar" <?=
                                                                                    $this->uri->segment(1) == 'privacy' ||
                                                                                        $this->uri->segment(1) == 'kvkk' ||
                                                                                        $this->uri->segment(1) == 'notifications' ||
                                                                                        $this->uri->segment(1) == 'otemplate' ||
                                                                                        $this->uri->segment(1) == 'stemplate' ||
                                                                                        $this->uri->segment(1) == 'wtemplate' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="fe-edit"></i>
                         <span>Tanımlamalar</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse<?=
                                            $this->uri->segment(1) == 'privacy' ||
                                                $this->uri->segment(1) == 'kvkk' ||
                                                $this->uri->segment(1) == 'notifications' ||
                                                $this->uri->segment(1) == 'otemplate' ||
                                                $this->uri->segment(1) == 'stemplate' ||
                                                $this->uri->segment(1) == 'wtemplate' ? '
                      show' : '' ?>" id="tanimlamalar">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'privacy' ? 'active' : '' ?>">
                                 <a href="/privacy"><i class="fe-edit mr-1 "></i>Gizlilik Sözleşmesi</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'kvkk' ? 'active' : '' ?>">
                                 <a href="/kvkk"><i class="fe-edit mr-1 "></i>KVKK Sözleşmesi</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'notifications' ? 'active' : '' ?>">
                                 <a href="/notifications"><i class="fe-edit mr-1 "></i>Bildirimler</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'otemplate' ? 'active' : '' ?>">
                                 <a href="/otemplate"><i class="fe-edit mr-1 "></i>E-Posta Şablonu</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'stemplate' ? 'active' : '' ?>">
                                 <a href="/stemplate"><i class="fe-edit mr-1 "></i>SMS Şablonu</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'wtemplate' ? 'active' : '' ?>">
                                 <a href="/wtemplate"><i class="fe-edit mr-1 "></i>Widget Şablonu</a>
                             </li>
                         </ul>
                     </div>
                 </li>
                 <li class="<?=
                            $this->uri->segment(1) == 'treport' ||
                                $this->uri->segment(1) == 'oreport' ||
                                $this->uri->segment(1) == 'sreport' ||
                                $this->uri->segment(1) == 'ireport' ||
                                $this->uri->segment(1) == 'creport' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#raporlar" <?=
                                                                                $this->uri->segment(1) == 'treport' ||
                                                                                    $this->uri->segment(1) == 'oreport' ||
                                                                                    $this->uri->segment(1) == 'sreport' ||
                                                                                    $this->uri->segment(1) == 'ireport' ||
                                                                                    $this->uri->segment(1) == 'creport' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="fe-bar-chart-2"></i>
                         <span>Raporlar</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse<?=
                                            $this->uri->segment(1) == 'treport' ||
                                                $this->uri->segment(1) == 'oreport' ||
                                                $this->uri->segment(1) == 'sreport' ||
                                                $this->uri->segment(1) == 'ireport' ||
                                                $this->uri->segment(1) == 'creport' ? '
                      show' : '' ?>" id="raporlar">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'treport' ? 'active' : '' ?>">
                                 <a href="treport"><i class="fe-bar-chart-2 mr-1"></i>Tahsilat Raporlar</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'oreport' ? 'active' : '' ?>">
                                 <a href="/oreport"><i class="fe-bar-chart-2 mr-1"></i>Ödeme Emir Raporları</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'sreport' ? 'active' : '' ?>">
                                 <a href="/sreport"><i class="fe-bar-chart-2 mr-1"></i>Sistem Raporları</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'ireport' ? 'active' : '' ?>">
                                 <a href="/ireport"><i class="fe-bar-chart-2 mr-1"></i>İşlem Logları</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'creport' ? 'active' : '' ?>">
                                 <a href="/creport"><i class="fe-bar-chart-2 mr-1"></i>Sanal Pos Logları</a>
                             </li>

                         </ul>
                     </div>
                 </li>



                 <li class="<?=
                            $this->uri->segment(1) == 'fsettings' ||
                                $this->uri->segment(1) == 'msettings' ||
                                $this->uri->segment(1) == 'ssettings' ||
                                $this->uri->segment(1) == 'asettings' ||
                                $this->uri->segment(1) == 'wsettings' ||
                                $this->uri->segment(1) == 'usettings' ||
                                $this->uri->segment(1) == 'tasks' ||
                                $this->uri->segment(1) == 'vpos' ||
                                $this->uri->segment(1) == 'irates' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#genelAyarlar" <?=
                                                                                    $this->uri->segment(1) == 'fsettings' ||
                                                                                        $this->uri->segment(1) == 'msettings' ||
                                                                                        $this->uri->segment(1) == 'ssettings' ||
                                                                                        $this->uri->segment(1) == 'asettings' ||
                                                                                        $this->uri->segment(1) == 'wsettings' ||
                                                                                        $this->uri->segment(1) == 'usettings' ||
                                                                                        $this->uri->segment(1) == 'tasks' ||
                                                                                        $this->uri->segment(1) == 'vpos' ||
                                                                                        $this->uri->segment(1) == 'irates' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="fe-sliders"></i>
                         <span>Ayarlar</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse<?=
                                            $this->uri->segment(1) == 'fsettings' ||
                                                $this->uri->segment(1) == 'msettings' ||
                                                $this->uri->segment(1) == 'ssettings' ||
                                                $this->uri->segment(1) == 'asettings' ||
                                                $this->uri->segment(1) == 'wsettings' ||
                                                $this->uri->segment(1) == 'usettings' ||
                                                $this->uri->segment(1) == 'tasks' ||
                                                $this->uri->segment(1) == 'vpos' ||
                                                $this->uri->segment(1) == 'irates' ? '
                      show' : '' ?>" id="genelAyarlar">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'fsettings' ? 'active' : '' ?>"><a href="/fsettings"><i class="fe-sliders mr-1"></i>Firma Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'msettings' ? 'active' : '' ?>"><a href="/msettings"><i class="fe-sliders mr-1"></i>Mail Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'ssettings' ? 'active' : '' ?>"><a href="/ssettings"><i class="fe-sliders mr-1"></i>Sms Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'asettings' ? 'active' : '' ?>"><a href="/asettings"><i class="fe-sliders mr-1"></i>Erişim Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'wsettings' ? 'active' : '' ?>"><a href="/wsettings"><i class="fe-sliders mr-1"></i>Widget Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'usettings' ? 'active' : '' ?>"><a href="/usettings"><i class="fe-sliders mr-1"></i>Sunucu Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'tasks' ? 'active' : '' ?>"><a href="/tasks"><i class="fe-sliders mr-1"></i>Zamanlanmış Görevler</a></li>
                             <li class="<?= $this->uri->segment(1) == 'vpos' ? 'active' : '' ?>"><a href="/vpos"><i class="fe-sliders mr-1"></i>Sanal Pos Ayarları</a></li>
                             <li class="<?= $this->uri->segment(1) == 'irates' ? 'active' : '' ?>"><a href="/irates"><i class="fe-sliders mr-1"></i>Taksit Oranları</a></li>
                         </ul>
                     </div>
                 </li>

                 <li class="<?=
                            $this->uri->segment(1) == 'faq' ||
                                $this->uri->segment(1) == 'userguide' ||
                                $this->uri->segment(1) == 'contactus' ? '
                 menuitem-active-custom' : '' ?>">
                     <a href="#" data-toggle="collapse" data-target="#yardim" <?=
                                                                                $this->uri->segment(1) == 'faq' ||
                                                                                    $this->uri->segment(1) == 'userguide' ||
                                                                                    $this->uri->segment(1) == 'contactus' ? '
                     aria-expanded="true"' : '' ?>>
                         <i class="mdi mdi-lifebuoy"></i>
                         <span>Yardım</span>
                         <span class="menu-arrow"></span>
                     </a>
                     <div class="collapse<?=
                                            $this->uri->segment(1) == 'faq' ||
                                                $this->uri->segment(1) == 'userguide' ||
                                                $this->uri->segment(1) == 'contactus' ? '
                      show' : '' ?>" id="yardim">
                         <ul class="nav-second-level">
                             <li class="<?= $this->uri->segment(1) == 'faq' ? 'active' : '' ?>">
                                 <a href="/faq"><i class="mdi mdi-lifebuoy mr-1"></i>Sıkça Sorulan Sorular</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'userguide' ? 'active' : '' ?>">
                                 <a href="/userguide"><i class="mdi mdi-lifebuoy mr-1"></i>Kullanım Klavuzu</a>
                             </li>
                             <li class="<?= $this->uri->segment(1) == 'contactus' ? 'active' : '' ?>">
                                 <a href="/contactus"><i class="mdi mdi-lifebuoy mr-1"></i>Bize Ulaşın</a>
                             </li>

                         </ul>
                     </div>
                 </li>

                 <li class="<?= $this->uri->segment(1) == 'logout' ? 'menuitem-active' : '' ?>">
                     <a href="/logout">
                         <i class="mdi mdi-logout text-danger"></i>
                         <span>Güvenli Çıkış</span>
                     </a>
                 </li>
             </ul>

         </div>
         <!-- End Sidebar -->

         <div class="clearfix"></div>

     </div>
     <!-- Sidebar -left -->

 </div>
 <!-- Left Sidebar End -->