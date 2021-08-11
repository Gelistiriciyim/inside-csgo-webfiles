<ul>
                                                    <li class="eposta"><?= $bilgi["email"] ?></li>
                                                    <li class="bakiye"><?= $bilgi["bakiye"] ?> TL</li>
                                                    <li class="sayfa"><a href="/user/profil.php"><i class="fa fa-fw fa-user"></i> <span class="yazi">Profil Detayları</span> </a></li>
                                                    <li class="sayfa "><a href="/user/bakiye.php"><i class="fa fa-fw fa-credit-card"></i> <span class="yazi">Bakiye Yükle</span> </a></li>
                                                    <li class="sayfa "><a href="/user/sure.php"><i class="fa fa-fw fa-download"></i> <span class="yazi">Program Süresi</span> </a></li>
                                                    <li class="sayfa "><a href="/user/ekstre.php"><i class="fa fa-fw fa-list"></i> <span class="yazi">Hesap Ekstresi</span> </a></li>
                                                    <script>function endstar_out(){toastr.options={closeButton:!1,debug:!1,newestOnTop:!1,progressBar:!0,positionClass:"toast-bottom-right",preventDuplicates:!1,onclick:null,showDuration:"300",hideDuration:"1000",timeOut:"5000",extendedTimeOut:"1000",showEasing:"swing",hideEasing:"linear",showMethod:"fadeIn",hideMethod:"fadeOut"};var e=$("#outform").serialize();$.ajax({type:"POST",data:e,url:"../core/kernel.php",success:function(e){"no"==$.trim(e)?(toastr.error("Lütfen geçerli kullanıcı adı veya şifre girin"),grecaptcha.reset()):"basarili"==$.trim(e)&&(toastr.success("Başarılı şekilde çıkış yaptınız!"),setTimeout(function(){window.location="/"},1500),grecaptcha.reset())}})}</script>
                                                    <form id="outform" action="" method="POST"  onsubmit="return false;">
                                                    <input type="hidden" name="out" value="1">
                                                    <li class="sayfa " onclick="endstar_out()"><a href="#out"><i class="fa fa-fw fa-power-off"></i> <span class="yazi">Çıkış Yap</span> </a></li>
                                                    </form>
                                                </ul>