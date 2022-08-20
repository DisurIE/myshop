<aside class="menu__left">
    <div class="menu__caption">
        Меню
        <ul>
            {foreach $rsCategories as $item}
                <a class="list__link" href="#!">{$item['name']}</a>
                {if isset($item['children'])}
                {foreach $item['children'] as $child}
                    <a class="list__link-sub" href="#!">{$child['name']}</a>
                {/foreach}
                {/if}
            {/foreach}
        </ul>
    </div>
</aside>