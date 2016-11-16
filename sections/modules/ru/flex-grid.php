<h3>Flex Grid System</h3>
<p>HTML Website Templates используют специально подготовленную Flex Grid систему. Данная система предоставляет более гибкое и комплексное решение, по сравнению с Bootstrap Grid. </p>
<p>Различные аспекты работы Flex Grid системы по-умолчанию представленны в следующей таблице:</p>

<table class="table table--skin-1">
    <tr>
        <th></th>
        <th>XXS Devices <br>(< 480px)</th>
        <th>XS Devices <br>(≥ 480px)</th>
        <th>SM Devices <br>(≥ 768px)</th>
        <th>MD Devices <br>(≥ 992px)</th>
        <th>LG Devices <br>(≥ 1200px)</th>
        <th>Xl Devices <br>(≥ 1800px)</th>
    </tr>
    <tr>
        <td>Поведение сетки</td>
        <td>Instant flow</td>
        <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
    </tr>
    <tr>
        <td>Ширина контейнера</td>
        <td colspan="2">300~450px, Fluid</td>
        <td>750px</td>
        <td>970px</td>
        <td>1170px</td>
        <td>1770px</td>
    </tr>
    <tr>
        <td>Преффикс класса</td>
        <td>.cell-</td>
        <td>.cell-xs-</td>
        <td>.cell-sm-</td>
        <td>.cell-md-</td>
        <td>.cell-lg-</td>
        <td>.cell-xl-</td>
    </tr>
    <tr>
        <td># колонок</td>
        <td>1</td>
        <td colspan="5">12</td>
    </tr>
    <tr>
        <td>Ширина колонки</td>
        <td>100%</td>
        <td>~25 → ~37px</td>
        <td>~62px</td>
        <td>~81px</td>
        <td>~97px</td>
        <td>~149px</td>
    </tr>
    <tr>
        <td>Ширина Гаттера</td>
        <td colspan="6">30px (по 15px с обеих сторон колонки)</td>
    </tr>
    <tr>
        <td>Вложенность</td>
        <td colspan="6">Да</td>
    </tr>
    <tr>
        <td>Смещения</td>
        <td>Нет</td>
        <td colspan="5">Да</td>
    </tr>
    <tr>
        <td>Управление порядком вывода колонок</td>
        <td>Нет</td>
        <td colspan="5">Да</td>
    </tr>
    <tr>
        <td>Управление горизонтальным выравнием</td>
        <td>Нет</td>
        <td colspan="5">Да</td>
    </tr>
    <tr>
        <td>Управление вертикальным выравниванием</td>
        <td>Нет</td>
        <td colspan="5">Да</td>
    </tr>
    <tr>
        <td>Инвертируемость</td>
        <td>Нет</td>
        <td colspan="5">Да</td>
    </tr>
</table>

<h4>Вкладываемость колонок</h4>
<p>Для реализации вложености колонок в Grid системе, добавьте новый <b>.range</b> и набор целевых колонок <b>.cell-*-*</b> в уже существующую колонку. </p>

<table class="table table--skin-2">
    <tr>
        <td colspan="6">
            Уровень 1: .cell-*-9
            <table class="table">
                <tr>
                    <td>Уровень 2: .cell-*-6</td>
                    <td>Уровень 2: .cell-*-6</td>
                </tr>
            </table>
        </td>
        <td>Ур.1: .cell-*-1</td>
        <td>Ур.1: .cell-*-1</td>
        <td>Ур.1: .cell-*-1</td>
    </tr>
</table>

<p>Например,</p>

<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-9"&gt;
                Уровень 1: .cell-md-9
                &lt;div class="range"&gt;
                    &lt;div class="cell-md-6"&gt;
                        Уровень 2: .cell-md-6
                    &lt;/div&gt;
                    &lt;div class="cell-md-6"&gt;
                        Уровень 2: .cell-md-6
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p class="alert alert-info">
    Обратите внимание: ширина вложенных колонок расчитывается исходя из ширины родительской колонки, а не контейнера.
</p>

<h4>Смещение колонок</h4>
<p>Для того, чтобы добавить смещение для одной из колонок необходимо воспользоваться соответствующим классом <b>.cell-*-preffix-*</b>.</p>

<table class="table">
    <tr>
        <td class="col-4"></td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4"></td>
    </tr>
</table>

<p>Например,</p>

<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-4 cell-md-preffix-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Инвертирование колонок</h4>
<p>Для того, чтобы инвертировать порядок вывода всех колонок в <b>.range</b> необходимо добавить соответствующий класс <b>.range-*</b> или <b>.range-*-reverse</b>:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-reverse</dt>
            <dd>инвертирует порядок вывода колонок, начиная с указанного разрешения.</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.range-*</dt>
            <dd>возвращает нормальный порядок вывода колонок, в случае, когда был применен <b>.range-*-reverse</b> на разрешении ниже.</dd>
        </dl>
    </li>
</ul>
<p>Например,</p>

<pre><code>
        &lt;div class="range range-xs-reverse range-sm"&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Отключение гаттера</h4>

<p>Для того, чтобы отключить наличие гаттера на колонках просто добавьте класс <b>.range-condensed</b> на родительский блок с классом <b>.range</b>.</p>
<p>Например,</p>
<pre><code>
        &lt;div class="range range-condensed"&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Управление вертикальным выравниванием колонок</h4>
<p>Для того, чтобы выровнять колонки по-вертикали относительно друг друга воспользуйтесь одним из следующих классов:</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-middle</dt>
            <dd>выравнивает все вложенные колонки 1 уровня по центру;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-1">.cell-*-6</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>
<p>Например,</p>
<pre><code>
        &lt;div class="range range-md-middle"&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-bottom</dt>
            <dd>прижимает все вложенные колонки 1 уровня к низу;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-1">.cell-*-6</td>
    </tr>
</table>
<p>Например,</p>
<pre><code>
        &lt;div class="range range-md-bottom"&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.cell-*-middle</dt>
            <dd>выравнивает целевую колонку по центру;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-2">.cell-*-6.cell-*-middle</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>Например,</p>

<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6 cell-md-middle"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>



<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.cell-*-top</dt>
            <dd>прижимает целевую колонку к верху;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6 bg-2">.cell-*-6.cell-*-top</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
</table>

<p>Например,</p>
<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6 cell-md-top"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.cell-*-bottom</dt>
            <dd>прижимает целевую колонку к низу.</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-6 bg-1" rowspan="3">.cell-*-6</td>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6">&nbsp;</td>
    </tr>
    <tr>
        <td class="col-6 bg-2">.cell-*-6.cell-*-bottom</td>
    </tr>
</table>

<p>Например,</p>
<pre><code>
        &lt;div class="range"&gt;
            &lt;div class="cell-md-6"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
            &lt;div class="cell-md-6 cell-md-bottom"&gt;
                Уровень 1: .cell-md-6
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<h4>Управление горизонтальным выравниванием колонок</h4>

<p>Для того, чтобы выровнять колонки по-горизонтали воспользуйтесь одним из следующих классов:</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-left</dt>
            <dd>выравнивает вложенные колонки 1 уровня по левому краю;</dd>
        </dl>
    </li>
</ul>

<table class="table">
    <tr>
        <td class="col-4 bg-1" >.cell-*-4</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4">&nbsp;</td>
    </tr>
</table>
<p>Например,</p>
<pre><code>
        &lt;div class="range range-md-left"&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-center</dt>
            <dd> выравнивает вложенные колонки 1 уровня по центру;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td></td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td></td>
    </tr>
</table>
<p>Например,</p>

<pre><code>
        &lt;div class="range range-md-center"&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-right</dt>
            <dd>выравнивает вложенные колонки 1 уровня по правому краю;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-4">&nbsp;</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td class="col-4 bg-1">.cell-*-4</td>
    </tr>
</table>
<p>Например,</p>

<pre><code>
        &lt;div class="range range-md-right"&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-justify </dt>
            <dd>выравнивает вложенные колонки 1 уровня по ширине;</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td class="col-4 bg-1" >.cell-*-4</td>
        <td class="col-4">&nbsp;</td>
        <td class="col-4 bg-1">.cell-*-4</td>
    </tr>
</table>
<p>Например,</p>

<pre><code>
        &lt;div class="range range-md-justify"&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
            &lt;div class="cell-md-4"&gt;
                Уровень 1: .cell-md-4
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.range-*-around </dt>
            <dd>выравнивает вложенные колонки 1 уровня по ширине c добавлением отступа по краям.</dd>
        </dl>
    </li>
</ul>
<table class="table">
    <tr>
        <td></td>
        <td class="col-4 bg-1" >.cell-*-4</td>
        <td class="col-3">&nbsp;</td>
        <td class="col-4 bg-1">.cell-*-4</td>
        <td></td>
    </tr>
</table>
<p>Например,</p>

<pre><code>
        &lt;div class="range range-md-around">
            &lt;div class="cell-md-4">
                Уровень 1: .cell-md-4
            &lt;/div>
            &lt;div class="cell-md-4">
                Уровень 1: .cell-md-4
            &lt;/div>
        &lt;/div>
    </code></pre>

