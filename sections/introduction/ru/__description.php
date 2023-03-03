<h2 class="item1">Введение</h2>

<h5>Благодарим Вас за приобретение шаблона. Данное руководство покажет, как работать с шаблоном, как его
    редактировать, настраивать и сделать полноценным сайтом. Мы сделали всё возможное, чтобы эта инструкция была
    предельно понятной и простой в использовании.
</h5>

<h3>Что такое Landing Page?</h3>

<p><b>Landing Page</b> – это качественно свёрстанная страница. Контент страницы написан на HTML, а
    динамическая анимация на JavaScript.</p>

<h3>Подготовка</h3>

<p>Прежде чем перейти к установке Landing Page, нужно
    полностью подготовиться. Рекомендуется выполнить следующие подготовительные шаги:</p>

<h4>Програмное обеспечение</h4>

<p>Для полноценной работы с шаблоном вебсайта мы рекомендуем скачать все требуемые приложения. Список необходимого
    программного обеспечения находится на странице предпросмотра шаблона. </p>

<p>Требования для различных шаблонов могут меняться, поэтому мы перечислим самые основные:</p>

<ol class="index-list">
    <li>Прежде всего нужны правильные приложения для распаковывания защищенного паролем архива sources_#########.zip.
        Можно воспользоваться WinZip 9+ (Windows) и Stuffit Expander 10+ (Mac). Это обязательное ПО.
    </li>
    <li>Также может понадобиться программа Adobe Photoshop (версии CS3 или выше). Она используется для редактирования
        исходного файла .PSD и
        необходима, если требуется изменить графический дизайн и изображения шаблона.
    </li>
    <li>Для редактирования исходного кода файла шаблона нужно использовать редактор кода, например Sublime Text,
        Notepad++, Atom и т.п.
    </li>
    <li>Чтобы загрузить файлы на хостинг сервер, потребуется FTP менеджер, например “файловый менеджер в админке вашего
        хостинг-провайдера” или десктопные приложения, такие как Total Commander, FileZilla, CuteFTP
        и т.д.
    </li>
</ol>

<h4>Хостинг</h4>

<p>Просто запустить файл index.html прямо из папки с сайтом можно, но Вы не увидите всего
    функционала шаблона. Для отображения полноценно работающего сайта необходимо поставить шаблон на хостинг сервер.</p>

<p>При наличии активного сервера, нужно проверить его на соответствие требованиям Landing Page, указанным на
    странице шаблона. В большинстве шаблонов обязательным требованием является только PHP 5.4 и выше.</p>

<p>Также можно установить Landing Page на компьютер при помощи локального сервера. Для
    создания локального хостинг сервера необходимо использовать программное обеспечение WAMP, AppServ, MAMP и т.п. Любое
    из них устанавливается, как обычная программа.</p>

<h6>Вы можете воспользоваться следующими туториалами для настройки
    локального сервера:</h6>

<ul class="marked-list">
    <li><a href="/help/how-to-install-appserv-web-development-environment.html">Как установить
            среду веб-разработки AppServ</a></li>
    <li><a href="/help/how-to-install-wamp-web-development-environment.html">Как установить
            среду веб-разработки WAMP</a></li>
    <li><a href="/help/how-to-install-xamp-web-development-environment.html">Как установить
            среду веб-разработки XAMP</a></li>
</ul>

<h2>Структура</h2>

<h6>После извлечения из архива структура папок и файлов шаблона выглядит следующим образом:</h6>


<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                documentation
            </dt>
            <dd> содержит файлы документации по редактированию и установке шаблона.</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        documentation.html
                    </dt>
                    <dd>основной файл документации. Вы его сейчас читаете.</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                builder
            </dt>
            <dd> содержит папки и файлы html5 билдера вместе с приобретенным шаблоном</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-file"></i>
                screenshots
            </dt>
            <dd>содержит скриншоты шаблона. Не для рабочего сайта.</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                site
            </dt>
            <dd>содержит .html файл страницы шаблона.</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        bat
                    </dt>
                    <dd>содержит рабочий .php скрипт контактной формы.</dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        css
                    </dt>
                    <dd>содержит все файлы .css, используемые в дизайне.</dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        images
                    </dt>
                    <dd>содержит все изображения, используемые в файле .html.</dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        js
                    </dt>
                    <dd>содержит библиотеки JavaScript и плагины jQuery.</dd>
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
            <dd>содержит исходные файлы темы.</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        psd
                    </dt>
                    <dd>содержит файлы .psd Adobe Photoshop.</dd>
                </dl>
            </li>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        sass
                    </dt>
                    <dd>содержит файлы .scss SASS, используемые в шаблоне.</dd>
                </dl>
            </li>
        </ul>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                info.txt
            </dt>
            <dd>содержит информацию о защищенной паролем папке "sources".</dd>
        </dl>
    </li>
</ul>

<h3>Валидация</h3>

<p class="alert alert-info">HTML и CSS файлы шаблона семантически корректны. Однако могут возникать некоторые ошибки
    при проверке через сервис
    W3C. Связано это с использованием свойств CSS3 и HTML5. Мы хотим предоставлять Вам самый качественный и
    дружественный продукт, для этого иногда приходится использовать новые, ещё не принятые как стандарт правила, которые
    отлично работают во всех браузерах, но пока не являются валидными.</p>