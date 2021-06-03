<h2 class="item2">Структура шаблонов Intense 2</h2>

<h3>Структура архива</h3>

<h6>После распаковки архива шаблона вы увидите следующую структуру файлов:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                builder
            </dt>
            <dd>начальный Novi builder для загрузки проектов</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                builder-documentation
            </dt>
            <dd>содержит файлы документации для Novi builder</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.txt
                    </dt>
                    <dd>файл документации. Содержит ссылку на онлайн-документацию для Novi builder</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                builder-projects
            </dt>
            <dd>папка с проектами для Novi builder</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        *.zip
                    </dt>
                    <dd>проекты для Novi builder</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                dev
            </dt>
            <dd>содержит все файлы в исходном виде (сокращение от 'development')</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        &lt;название_темы&gt;
                    </dt>
                    <dd>содержит исходные файлы для тем</dd>
                </dl>
                <ul>
                    <li class="folder">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-folder"></i>
                                components
                            </dt>
                            <dd>папка с компонентами</dd>
                        </dl>
                        <ul>
                            <li class="folder">
                                <dl class="inline-term">
                                    <dt>
                                        <i class="fa fa-folder"></i>
                                        &lt;компонент&gt;
                                    </dt>
                                    <dd>название папки соответствует названию компонента, содержит исходные файлы (таких папок может быть сколько угодно)</dd>
                                </dl>
                                <ul>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.pug
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.scss
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.css
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.js
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.min.js
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.php
                                            </dt>
                                        </dl>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="folder">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-file"></i>
                                *.html
                            </dt>
                            <dd>страницы шаблона</dd>
                        </dl>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                dist
            </dt>
            <dd>содержит оптимизированные файлы для отправки на сервер (сокращение от 'distributive')
            </dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        &lt;название_темы&gt;
                    </dt>
                    <dd>содержит оптимизированные файлы для загрузки шаблона на Хостинг</dd>
                </dl>
                <ul>
                    <li class="folder">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-folder"></i>
                                components
                            </dt>
                            <dd> папка с компонентами
                            </dd>
                        </dl>
                        <ul>
                            <li class="folder">
                                <dl class="inline-term">
                                    <dt>
                                        <i class="fa fa-folder"></i>
                                        &lt;компонент&gt;
                                    </dt>
                                    <dd>название папки соответствует названию компонента, содержит оптимизированные файлы (здесь не может быть *.pug и *.scss файлов, таких папок может быть сколько угодно)
                                    </dd>
                                </dl>
                                <ul>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.css
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.min.js
                                            </dt>
                                        </dl>
                                    </li>
                                    <li class="folder">
                                        <dl class="inline-term">
                                            <dt>
                                                <i class="fa fa-file"></i>
                                                *.php
                                            </dt>
                                        </dl>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="folder">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-file"></i>
                                *.html
                            </dt>
                            <ddстраницы шаблона
                            </dd>
                        </dl>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                documentation.txt
            </dt>
            <dd>основной файл документации. Содержит ссылку на онлайн-документацию, которую Вы сейчас читаете.</dd>
        </dl>
    </li>
</ul>

<h3>Структура HTML</h3>

<h6>Структура <b>.html</b> страниц в Intense строится по следующему принципу:</h6>

<pre><code>&lt;!DOCTYPE html&gt;
   &lt;html lang="en"&gt;
     &lt;head&gt;
         &lt;!-- Your Stylesheets & Title --&gt;
         &lt;link rel="stylesheet" href="components/base/base.css"&gt;
         &lt;!-- Javascript --&gt;
         &lt;script src="js/core.min.js"&gt;&lt;/script&gt;
         &lt;script src="js/script.js"&gt;&lt;/script&gt;
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
     &lt;/body&gt;
   &lt;/html&gt;
     </code></pre>

<h3>Структура CSS</h3>

<p>Все стили шаблона расположены отдельно в каждом компоненте <b>components/&lt;компонент&gt;/*.css.</b></p>