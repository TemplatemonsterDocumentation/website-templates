<h3>RD Search</h3>
<p>Данный плагин позволяет реализовать поиск по определенным страницам с возможностью задавать разметку для результатов поиска.
</p>
<p> Базовая разметка данной формы выглядит следующим образом: </p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="search" class="form-label"&gt;Type and hit enter...&lt;/label&gt;
                &lt;input id="search" type="text" name="s" autocomplete="off" class="form-control"/&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    </code></pre>
<p>Вы можете вставить данную разметку в любом необходимом месте, обязательным является наличие класса <b>rd-search</b>.</p>
<p>Данный поиск позволяет производить вывод результатов с любой разметкой, но для этого требуется правильно настроить все целевые страницы.</p>
<h4>Настройка страниц для поиска</h4>

<p>Вся настройка выполняется внутри секции <b>head</b> каждой страницы и необходима для формирования шаблона результата поиска.</p>

<pre><code>
        &lt;head&gt;
            ...
        &lt;/head&gt;
    </code></pre>

<h4>Вывод заголовка в результатах</h4>
<p>Для вывода заголовка в результатах поиска необходимо его указать для каждой страницы внутри тега <b>title</b>:
</p>

<pre><code>
        &lt;!-- Site Title--&gt;
        &lt;title&gt;TemplateMonster&lt;/title&gt;
    </code></pre>

<h4>Вывод ключевых слов в результатах
</h4>
<p>Для вывода ключевых слов(тегов) в результатах поиска необходимо их указать для каждой страницы в атрибуте <b>content</b> тега <b>&lt;meta name="keywords"&gt;</b> :</p>
<pre><code>
        &lt;meta name="keywords" content="web design multipurpose template"&gt;
    </code></pre>
<h4>Вывод дополнительной информации в результатах</h4>
<p>Для вывода дополнительной информации в результатах поиска необходимо указать её для каждой страницы в
    теге <b>meta</b> с атрибутами <b>name</b> и <b>content</b>. Где <b>name</b> - уникальное название информации, а <b>content</b> - информация, которую необходимо вывести.
    Например для вывода описания страницы необходимо добавить следующий тег:
</p>
<pre><code>
        &lt;meta name="description" content="This page ..."&gt;
    </code></pre>
<p>Количество данных тегов может быть неограниченым.
</p>
<h4>Настройка формы поиска</h4>
<p>Настройка поиска выполняется на целевой странице в форме с классом <b>.rd-search</b>.</p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search"&gt;
            ...
        &lt;/form&gt;
    </code></pre>

<h4>Настройка фильтра поиска</h4>
<p>Вы можете указать фильтр, который будет указывать на каких страницах производить поиск(по названию). Например для выполнения поиска по HTML страницам, в названиях которых присутсвует слово <b>blog</b> выглядит следующим образом:
</p>

<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search" data-search-filter="*blog*.html"&gt;
            ...
        &lt;/form&gt;
    </code></pre>
<p>Фильтр поиска по-умолчанию можно изменить в файле <b>script.js</b>  в переменной <b>defaultFilter</b>, который находится в коде после следующего комментария:</p>

<pre><code>
        /**
        * RD Search
        * @description Enables search
        */
    </code></pre>

<h4>Настройка Live поиска</h4>
<p>Вы можете включить опцию live поиска для отображения результатов без перезагрузки страницы. Для этого небходимо добавить атрибут <b>data-search-live</b> с указанием <b>id</b> элемента, в который будет выведен результат. Например:
</p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search" data-search-live="search-results"&gt;
            ...
        &lt;/form&gt;
        &lt;div id="search-results"&gt;&lt;/div&gt;
    </code></pre>

<h4>Настройка шаблона для результатов поиска</h4>
<p>Шаблон для результатов поиска тесно связан с настройкой страницы описаной выше, а именно указание различных мета тегов.
    Вы можете указать HTML разметку элемента результатов поиска. Для этого небходимо добавить атрибут <b>data-search-template</b>,
    в который передать соответствующую разметку для вывода результатов поиска. Строка поддерживает передачу параметров в формате <b>#{rule}</b>.
    Где <b>rule</b> - атрибут name тега meta указанного на странице. Существует 4 значения по умолчанию, которые не требуют мета тегов и выводят необходимую информацию:
</p>
<ul class="marked-list">
    <li>#{title} - содержит значение тега <b>&lt;title/&gt;</b> целевой страницы
    </li>
    <li>#{tokens} - содержит часть найденного содержимого целевой страницы, соответствующего критериям поиска.
    </li>
    <li>#{href} - содержит путь к найденной странице.
    </li>
    <li>#{count} - количество найденных совпадений на странице.
    </li>
</ul>
<p>Например:</p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search"
            data-search-template="&lt;div class="result-item"&gt;&lt;h3 class="title"&gt;&lt;a href="#{href}"&gt;#{title}&lt;/a&gt;&lt;/h3&gt;"
            &lt;p class="tags"&gt;in #{keywords}&lt;/p&gt;&lt;/div&gt;"&gt;
        ...
        &lt;/form&gt;
        &lt;div id="search-results"&gt;&lt;/div&gt;
    </code></pre>
<p>Шаблон результата поиска по-умолчанию можно изменить в файле <b>script.js</b>  в переменной <b>defaultTemplate</b>, который находится в коде после следующего комментария:</p>

<pre><code>
        /**
        * RD Search
        * @description Enables search
        */
    </code></pre>

