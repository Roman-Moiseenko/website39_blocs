<style>
#direct-cocon ul, ul#direct-cocon {
    list-style: none;
}
#direct-cocon a {
    color: var(--sp-primary);
    text-decoration-line: none;
}
#direct-cocon a:hover {
    text-decoration-line: underline;
}
#direct-cocon li {
    color: #888888;
}
#link-direct {
    font-size: 22px;
    cursor: pointer;
    font-weight: 600;
    padding-bottom: 20px;
}
#link-direct:hover {
    color:  var(--sp-primary);
}
</style>
<script>
    jQuery(document).on('click', '#link-direct', function () {
        let _up = 'Ссылки на статьи блока <i class="fas fa-angle-up"></i>';
        let _down = 'Ссылки на статьи блока <i class="fas fa-angle-down"></i>';
        let _block = jQuery('#block-direct');
        if (_block.is(':hidden')) {
            _block.slideDown();
            jQuery('#link-direct').html(_up);
        } else {
            _block.slideUp();
            jQuery('#link-direct').html(_down);
        }
    });
</script>

<div>
    <a id="link-direct">Ссылки на статьи блока <i class="fas fa-angle-down"></i></a>
</div>

<div id="block-direct" style="display: none">
<ul id="direct-cocon">
    <li>
        <a href="https://website39.site/stati/sozdanie-i-prodvizhenie-sajta/informaczionnye-sajty/">Информационные сайты</a>
        <ul>
            <li>
                <a href="https://website39.site/stati/sozdanie-i-prodvizhenie-sajta/informaczionnye-sajty/blogi/">Блог для коммерческой фирмы</a>
            </li>
            <li>
                <a href="https://website39.site/stati/sozdanie-i-prodvizhenie-sajta/informaczionnye-sajty/novostnoj-portal/">Новостной портал</a>
            </li>
            <li>Сайт-визитка</li>
            <li>Онлайн журнал</li>
        </ul>
    </li>
    <li>Сайты для продажи товаров и услуг
        <ul>
            <li>Лендинг</li>
            <li>Сайт-каталог</li>
            <li>Сайт-услуг</li>
            <li>Интернет магазин</li>
            <li>Маркетплейс</li>
        </ul>
    </li>
    <li>Корпоративные решения
        <ul>
            <li>Корпоративный портал</li>
            <li>Готовые CMR решения</li>
        </ul>
    </li>
    <li>
        <a href="https://website39.site/stati/sozdanie-i-prodvizhenie-sajta/etapy-sozdaniya-sajtov/">Этапы создания сайтов</a>
        <ul>
            <li>
                <a href="https://website39.site/stati/sozdanie-i-prodvizhenie-sajta/etapy-sozdaniya-sajtov/prototipirovanie-sajta/">Прототипирование сайта</a>
            </li>
            <li>Дизайн сайта</li>
            <li>Верстка сайта</li>
            <li>На чем создавать сайт</li>
            <li>Программирование дополнительных модулей</li>
        </ul>
    </li>
    <li>Продвижение сайтов
        <ul>
            <li>Анализ конкурентов и семантическое ядро</li>
            <li>Продвижение контентом</li>
            <li>Коммерческие факторы</li>
            <li>Линкбилдинг или спамим ссылками</li>
            <li>Социальные сети</li>
            <li>Продвижение медицинских сайтов</li>
        </ul>
    </li>
</ul>
</div>
<p style="padding-bottom: 20px;"></p>