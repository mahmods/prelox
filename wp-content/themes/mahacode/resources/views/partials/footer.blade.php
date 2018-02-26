<?php $info = App::contactInfo() ?>
<!--Start Footer-->
<div class="footer" data-src="@asset('images/footer.png')">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <a href="index.html">
                        <img src="@asset('images/logo-footer.png')">
                    </a>
                    <p>منتج طبيعي 100% ذو تركيبه فريدة مبتكره ومثبته علميا وحائزه علي براءة إختراع</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-2">
                    <h2>فروعنا</h2>
                    <ul class="link">
                        <li>
                            <a href="#">شركة الدجلة</a>
                        </li>
                        <li>
                            <a href="#">شركة الدجلة</a>
                        </li>
                        <li>
                            <a href="#">شركة الدجلة</a>
                        </li>
                        <li>
                            <a href="#">شركة الدجلة</a>
                        </li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <h2>كن دائما على اتصال بنا</h2>
                    <p>منتج طبيعي 100% ذو تركيبه فريدة مبتكره ومثبته علميا وحائزه علي براءة إختراع</p>
                    <form>
                        <input type="text" placeholder="البريد الالكترونى :">
                        <input type="submit" value="ارسال">
                    </form>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-3">
                    <h2>@php(pll_e("اتصل بنا"))</h2>

                    <div class="footer-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{$info['address']}}</span>
                    </div>

                    <div class="footer-icon">
                        <i class="fas fa-envelope"></i>
                        <span>{{$info['email_1']}}</span>
                    </div>
                    <div class="footer-icon">
                        <i class="fas fa-phone"></i>
                        <span>{{$info['phone_1']}}</span>
                    </div>

                    <ul class="social">
                    <li>
                    <a href="{{$info['facebook']}}" class="fab fa-facebook-f" target="_blank" title="social"></a>
                  </li>
                  <li>
                    <a href="{{$info['twitter']}}" class="fab fa-twitter" target="_blank" title="social"></a>
                  </li>
                  <li>
                    <a href="{{$info['linkedin']}}" class="fab fa-linkedin-in" target="_blank" title="social"></a>
                  </li>
                  <li>
                    <a href="{{$info['youtube']}}" class="fab fa-youtube" target="_blank" title="social"></a>
                  </li>
                    </ul>

                </div>

            </div>

        </div>
        <a href="#" id="button-up" class="fas fa-long-arrow-alt-up"></a>
    </div>
    <!--End Footer-->

    <!--Start Copyright-->
    <div class="copyright">
        <div class="container">
            <span>جميع الحقوق محفوظة لدينا</span>
            <div class="mahacode-copyrights">
                <a target="_blank" href="http://mahacode.com/" class="logo">
                    <img src="@asset('images/mahacode.png')" alt="logo">
                </a>
                <div class="mc-tooltip">
                    <h3>تصميم وتطوير شركة مها كود</h3>
                    <h4 class="fas fa-home">info@mahacode.com</h4>
                    <h4 class="fas fa-phone-volume">002 010 936 780 12</h4>
                    <h4 class="fas fa-phone-volume">002 010 077 179 14</h4>
                    <div class="btns-icons">
                        <a href="http://mahacode.com/" target="_blank" class="fas fa-home"></a>
                        <a href="#" target="_blank" class="fab fa-whatsapp"></a>
                        <a href="https://www.behance.net/mahacode" target="_blank" class="fab fa-behance"></a>
                        <a href="https://www.instagram.com/maha.code/" target="_blank" class="fab fa-instagram"></a>
                        <a href="http://www.twitter.com/mahacode" target="_blank" class="fab fa-twitter"></a>
                        <a href="https://www.facebook.com/MahaCode/" target="_blank" class="fab fa-facebook-f"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Copyright-->