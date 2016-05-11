<h3>Isotope. Фильтр макета</h3>
<p>Intense использует Isotope для создания фильтров макета.</p>

<h4>Добавление Isotope на страницу</h4>
<p>Для того чтобы добавить <b>isotope</b> в соответствующий макет целевой страницы,
  достаточно просто добавить дата атрибут  <b>data-isotope-layout</b> к целевой HTML разметке, указав соответствующий режим макета:
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
<p>Поддерживаются следующие режимы макета:</p>

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

<p>Для добавления <b>isotope</b> в макеты, которые не содержат элементы сетки, необходимо дополнительно определить класс <b>.isotope-item</b> для каждого элемента isotope:</p>
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

<p class="alert alert-info">Обратите внимание: в данной ситуации, определять размеры элементов Isotope прийдется вручную. Intense предоставляет готовый функционал только для элементов сетки.</p>

<h4>Фильтрация элементов Isotope</h4>

<p>Для добавления <b>isotope</b> фильтров на страницу необходимо определить группу элементов <b>isotope</b> с помощью атрибута <b>data-isotope-group</b> и соответствующие типы фильтров для каждого из элементов:</p>

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