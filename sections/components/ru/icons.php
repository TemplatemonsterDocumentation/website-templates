<h3>Иконки</h3>
<h6>Intense содержит более 2500 готовых к использованию шрифтовых иконок. Список всех иконок представлены на странице <b>Components > Toolkit Components > Icons</b>.
    Для вставки соответствующей иконки на целевую страницу воспользуйтесь следующей разметкой:</h6>
<pre><code>
        &lt;span class="your-icon-class"&gt;&lt;/span&gt;
    </code></pre>
<p>Список классов для вставки целевых иконок также доступен на странице <b>Components > Toolkit Components > Icons</b>.</p>
<p>В Intense стилзация иконок определяется аналогично кнопкам:</p>
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.icon</dt>
            <dd>базовый класс иконки;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.icon-xs, .icon-sm, .icon-md, .icon-lg, .icon-xl</dt>
            <dd>классы макета иконки, отвечающие за ее размер;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.icon-default, .icon-primary, …</dt>
            <dd>классы стилизации иконки, отвечающие за ее цвет и фон;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>fa-*, glyph-*, mdi-* и т.д.</dt>
            <dd>классы, которые отвечают за вставку кода (символа) иконки.</dd>
        </dl>
    </li>
</ul>
<p>Рассмотрим пример:</p>
<pre><code>
         &lt;span href="#" class="icon icon-md icon-default"&gt;&lt;/span&gt;
    </code></pre>

<p>В данном примере создается иконка среднего размера со стилизацией по основному цвету шаблона.</p>