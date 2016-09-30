<h3>How to work with the optimization of styles file</h3>
<ol class="index-list">
  <li>To minify the styles file, use one of the following services: <a href="https://cssminifier.com/" target="_blank">CSS Minifier</a>,
    <a href="http://csscompressor.com/" target="_blank">CSS Compressor</a>, <a href="http://www.cleancss.com/css-minify/" target="_blank">Minify and Compress CSS</a>.</li>

  <li>Name the file with the minification results style.min.css.</li>

  <li>Copy it to the css/ folder of your template.</li>
  <li>
    Attach this file in the HTML files of your website instead of the one that is not modified.
    <br>
    Enter:
<pre><code>
    &lt;link rel="stylesheet" href="css/style.min.css"&gt;
</code></pre>
    instead of:
<pre><code>
    &lt;link rel="stylesheet" href="css/style.css"&gt;
</code></pre>
  </li>
</ol>