<h2 class="item2">Структура шаблонов Intense</h2>

<h3>Структура архива</h3>

<h6>После распаковки архива шаблона вы увидите следующую структуру файлов:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                documentation
            </dt>
            <dd>содержит файлы документации по редактированию и установке шаблона.</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd>основной файл документации. Содержит ссылку на онлайн-документацию, которую Вы сейчас читаете.</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                screenshots
            </dt>
            <dd>содержит скриншоты шаблона. Не для рабочего сайта.
            </dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                site
            </dt>
            <dd>содержит .html файлы страниц шаблона.</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        bat
                    </dt>
                    <dd>содержит все .php скрипты, используемые в шаблоне.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        audio
                    </dt>
                    <dd>содержит все аудио файлы, используемые в шаблоне.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        css
                    </dt>
                    <dd>содержит все файлы .css, используемые в шаблоне.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>fonts</dt>
                    <dd>содержит все нестандартные типографические и иконочные шрифты, используемые в шаблоне.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>images</dt>
                    <dd>содержит все изображения, используемые в файлах .html.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>js</dt>
                    <dd>содержит библиотеки JavaScript и плагины jQuery.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>video</dt>
                    <dd>содержит все видео файлы, используемые в шаблоне.</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                sources
            </dt>
            <dd>содержит исходные файлы шаблона.</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd>содержит файлы .psd Adobe Photoshop.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        scss
                    </dt>
                    <dd>содержит файлы .scss SCSS, используемые в шаблоне.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        pug
                    </dt>
                    <dd>содержит файлы .pug Pug, используемые в шаблоне.</dd>
                </dl>
            </li>
        </ul>
    </li>
</ul>

<h3>Структура HTML</h3>

<h6>Структура <b>.html</b> страниц в Intense строится по следующему принципу:</h6>

<pre><code>&lt;!DOCTYPE html&gt;
   &lt;html lang="en"&gt;
     &lt;head&gt;
         &lt;!-- Your Stylesheets, Core Scripts (jQuery etc) & Title --&gt;
         ...
     &lt;/head&gt;
     &lt;body&gt;
     &lt;div class="page"&gt;
         &lt;!-- Page Head --&gt;
         &lt;header class="page-head"&gt;
             ...
         &lt;/header&gt;

         &lt;!-- Page Content--&gt;
         &lt;section&gt;
                     ...
         &lt;/section&gt;

         &lt;!-- Page Footer--&gt;
         &lt;footer class="page-footer"&gt;
                 ...
         &lt;/footer&gt;
     &lt;/div&gt;
     &lt;!-- Javascript --&gt;
     &lt;script src="js/core.min.js"&gt;&lt;/script&gt;
     &lt;script src="js/script.js"&gt;&lt;/script&gt;
     &lt;/body&gt;
   &lt;/html&gt;
     </code></pre>

<h3>Структура CSS</h3>

<p>В Intense все стили шаблона расположены в файле <b>style.css</b>.</p>
<p>Структура файла style.css строится по следующему принципу:</p>
<pre><code>/**
* Template Style
*
* [Table of contents]
*   1. Custom styles
*     1.1 Main Styles
*     1.2 Typography
*     1.3 Backgrounds
*     1.4 Colors
*     1.5 Main layout
*
*   2. Components
*     2.1 Icons
*     2.2 Buttons
*     2.3 Forms
*     2.4 Tables
*     2.5 Lists
*     2.6 Post
*     2.7 Thumbnail
*     2.8 Tooltip
*     2.9 Snackbars
*     2.10 Navigation
*     2.11 Preloader
*     2.12 Breadcrumbs
*     2.13 Panel custom
*
*   3. Helpers
*     3.1 Text-alignment
*     3.2 Text-styling
*     3.3 Visibility responsive
*     3.4 Groups
*     3.5 Context Styling
*     3.6 Sections
*     3.7 Offsets
*
*   4. Modules
*     4.1 Flex grid
*     4.2 Unit-responsive
*
*   5 Plugins
*     5.1 Animate
*     5.2 Isotope
*     5.3 Owl Carousel
*     5.4 RD Navbar
*     5.5 RD Parallax
*     5.6 RD Google-Map
*     5.7 RD Search
*     5.8 To top
*     5.9 Tabs
*     5.10 Photoswipe
*     5.11 Progress-bars
*     5.12 Counter
*     5.13 jquery-circle-progress
*     5.14 Timecircles
*     5.15 Swiper
*
*   6. Fonts
*     6.1 FontAwesome
*     6.2 MDI
**/
</code></pre>