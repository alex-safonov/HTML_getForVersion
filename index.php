Подключение
<script type="text/javascript" src="/static/build/js/phone-check.js?<? echo time(); ?>"></script>
Отобразится как:
<script type="text/javascript" src="/static/build/js/phone-check.js?1656410046"></script>
При дальнейших загрузках версия будет меняться:
<script type="text/javascript" src="/static/build/js/phone-check.js?1659027002"></script>

Сборка в Битрикс:
Page\Asset::getInstance()->addJs('/static/build/js/phone-check.js');
