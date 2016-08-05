<h3>Isotope. Лейаут фильтр</h3>
<p>HTML Website Templates используют Isotope для создания лейаут фильтров.</p>

<h4>Внедрение Isotope на страницу</h4>
<p>Для того, чтобы внедрить <b>isotope</b> в соответствующий лейаут целевой страницы достаточно просто добавить дата атрибут <b>data-isotope-layout</b>
    к целевой HTML разметке, указав соответствующий режим лейаута.
</p>
<pre><code>
        &lt;div class="row" data-isotope-layout="masonry"&gt;
            &lt;div class="col-sm-6 col-md-4"&gt;
                Item 1
            &lt;/div&gt;
            &lt;div class="col-sm-6 col-md-4"&gt;
                Item 2
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<p>Поддерживаются следующие режимы лейаута:
</p>

<ol class="index-list">
    <li>
        <dl class="inline-term">
            <dt>masonry </dt>
            <dd>элементы групируются в хаотическом порядке;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fitRows </dt>
            <dd>элементы группируются в горизонтальном порядке;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>vertical </dt>
            <dd>элементы группируются в вертикальном порядке.</dd>
        </dl>
    </li>
</ol>

<p>Для внедрения isotope в лейауты, которые не содержат элементы сетки, необходимо дополнительно определить класс <b>.isotope-item</b> для каждого элемента isotope.</p>
<pre><code>
        &lt;div data-isotope-layout="masonry"&gt;
            &lt;div class="isotope-item"&gt;
                Item 1
            &lt;/div&gt;
            &lt;div class="isotope-item"&gt;
                Item 2
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">Обратите внимание: в данной ситуации, определять размеры элементов Isotope прийдется в ручную.</p>

<h4>Фильтрация элементов Isotope</h4>

<p>Для внедрения isotope фильтров на страницу необходимо определить группу элементов isotope с помощью дата атрибута <b>data-isotope-group</b> и соответствующие типы фильтров для каждого из элементов.</p>

<pre><code>
        &lt;div data-isotope-group="gallery" data-isotope-layout="masonry"&gt;
            &lt;div class="isotope-item" data-filter="type-1"&gt;
                Item 1
            &lt;/div&gt;
            &lt;div class="isotope-item" data-filter="type-2"&gt;
                Item 2
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<p>Теперь для фильтрации элементов достаточно определить лишь соответствующие контрольные кнопки фильтров для целевой группы элементов Isotope.</p>
<pre><code>
        &lt;button data-isotope-filter="*" data-isotope-group="gallery"&gt;
            Show All
        &lt;/button&gt;
        &lt;button data-isotope-filter="type-1" data-isotope-group="gallery"&gt;
            Type 1
        &lt;/button&gt;
        &lt;button data-isotope-filter="type-2" data-isotope-group="gallery"&gt;
            Type 2
        &lt;/button&gt;
    </code></pre>