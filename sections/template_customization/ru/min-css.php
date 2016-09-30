<h3>Инструкция по работе с оптимизацией файла стилей</h3>
<ol class="index-list">
  <li>Для минификации файла стилей вам нужно воспользоваться одним из сервисов: <a href="https://cssminifier.com/" target="_blank">CSS Minifier</a>,
    <a href="http://csscompressor.com/" target="_blank">CSS Compressor</a>, <a href="http://www.cleancss.com/css-minify/" target="_blank">Minify and Compress CSS</a>.</li>
  <li>Файл с результатом минификации назовите style.min.css.</li>
  <li>Скопируйте его в папку css/  вашего шаблона.</li>
  <li>
    Подключите данный файл в ваши HTML файлы вместо неминифицированного:
<pre><code>
    &lt;link rel="stylesheet" href="css/style.min.css"&gt;
</code></pre>
    Вместо этого:
<pre><code>
    &lt;link rel="stylesheet" href="css/style.css"&gt;
</code></pre>
  </li>
</ol>