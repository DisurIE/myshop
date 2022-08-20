{* Шаблон главной страницы*}

    {foreach $rsProducts as $item name=products}
        <div class="center__card">
            <a href="/product/{$item['id']}">
                <img src="images/products/{$item['image']}">
            </a>
            <a href="/product/{$item['id']}">{$item['name']}<a>
        </div>
    {/foreach}