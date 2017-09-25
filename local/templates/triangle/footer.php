<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Цитаты</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a><img src="<?=SITE_TEMPLATE_PATH?>/images/home/Thomas-Edison01.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Большинство людей упускают появившуюся возможность, потому что она бывает одета в комбинезон и с виду напоминает работу</blockquote>
                                <h3><a href="https://ru.wikipedia.org/wiki/Эдисон,_Томас Алва">Томас Эдисон</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/images/home/Addison.jpg" alt=""></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Умный человек счастлив, лишь когда удостаивается собственной похвалы, дурак же довольствуется аплодисментами окружающих</blockquote>
                                <h3><a href="https://ru.wikipedia.org/wiki/Аддисон,_Джозеф">Джозеф Аддисон</a></h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => "/include/contacts.php"
                        )
                        );?>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <?$APPLICATION->IncludeComponent(
                        "bitrix:main.feedback",
                        "template1",
                        Array(
                        "EMAIL_TO" => "belova_oksana15@mail.ru",
                        "EVENT_MESSAGE_ID" => array(),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array(),
                        "USE_CAPTCHA" => "Y"
                        )
                        );?>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2016. All Rights Reserved.</p>
                        <p>Crafted by <a target="_blank" href="<?=SITE_TEMPLATE_PATH?>http://designscrazed.org/">Allie</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html><?
$bg_color = $APPLICATION->GetPageProperty('logo_background_color');
if (!empty($bg_color)){
        $APPLICATION->SetPageProperty('logo_add_class',' logotype-'.$bg_color);
}
