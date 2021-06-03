<h3>Responsive Units</h3>
<h6>HTML Website Templates содержат новую систему управления контентом, основанную на Flex.
    Мы назвали ее Responsive Units. Используя эту систему вы можете легко управлять лейаутом элементов:
    встраивать их в горизонтальном или вертикальном порядке на любом разрешении, управлять их расположением относительно друг друга и т.д.</h6>
<p>Принцип работы Responsive Units несколько схож с принципом работы Media в Bootstrap.</p>
<p>Логика работы Responsive Units соответствует принципам Mobile First.
    Базовая разметка для Responsive Unit выглядит следующим образом:</p>
<pre><code>
        &lt;div class="unit unit-horizontal"&gt;
            &lt;div class="unit-left"&gt;
                Unit Left
            &lt;/div&gt;
            &lt;div class="unit-body"&gt;
                Unit Body
            &lt;/div&gt;
            &lt;div class="unit-right"&gt;
                Unit Right
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Как выровнять элементы относительно друг друга</h4>
<p>Для выравнивания элементов оносительно друг друга в Responsive Unit используются служебные классы: <b>.unit-*-middle</b>, <b>.unit-*-top</b>, <b>.unit-*-bottom</b>.
    Так, если вам необходимо выровнять элементы в Unit  относительно друг друга по центру начиная с <b>XS</b> разрешения, код будет выглядеть следующим образом:</p>

<pre><code>
        &lt;div class="unit unit-horizontal unit-xs-middle"&gt;
            &lt;div class="unit-left"&gt;
                Unit Left
            &lt;/div&gt;
            &lt;div class="unit-body"&gt;
                Unit Body
            &lt;/div&gt;
            &lt;div class="unit-right"&gt;
                Unit Right
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Как изменить лейаут элементов с горизонтального на вертикальный</h4>
<p>Для того, чтобы изменить лейаут элементов в Responsive Unit с горизонтального на вертикальный на разных разрешениях нужно использовать
    соответствующую комбинацию <b>unit-*</b>, <b>unit-*-horizontal</b> или <b>unit-*</b>, <b>unit-*-vertical</b> для целевого разрешения. Так, если вам необходимо, чтобы по
    умолчанию леайут Responsive Unit был вертикальным, но с <b>SM</b> разрешения становился горизонтальным, воспользуйтесь следующим примером:
</p>

<pre><code>
        &lt;div class="unit unit-vertical unit-sm unit-sm-horizontal">
            &lt;div class="unit-left">
                Unit Left
            &lt;/div>
            &lt;div class="unit-body">
                Unit Body
            &lt;/div>
            &lt;div class="unit-right">
                Unit Right
            &lt;/div>
        &lt;/div>
    </code></pre>

<h4>Как инвертировать лейаут элементов</h4>
<p>
    Вы также можете выполнять инверсию соответствующего лейаута в Responsive Unit. Так, если вам необходимо, что по умолчанию Responsive Unit
    был вертикальным с прямым порядком отображения его элементов и начиная с <b>SM</b> разрешения он
    становился вертикальным, а его элементы имели обратный порядок <b>(right-body-left)</b>, используйте следующий пример.
</p>
<pre><code>
        &lt;div class="unit unit-vertical unit-sm unit-sm-horizontal unit-sm--inverse"&gt;
            &lt;div class="unit-left"&gt;
                Unit Left
            &lt;/div&gt;
            &lt;div class="unit-body"&gt;
                Unit Body
            &lt;/div&gt;
            &lt;div class="unit-right"&gt;
                Unit Right
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>