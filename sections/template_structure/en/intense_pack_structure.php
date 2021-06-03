<h2 class="item2">Intense template structure</h2>

<h3>Package structure</h3>

<h6>After Intense template package extracting you'll see the following files structure:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                documentation
            </dt>
            <dd>includes template's documentation files (on template editing and setup).</dd>
        </dl>
        <ul>
            <li class="file">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.html
                    </dt>
                    <dd>main documentation file. Includes link to online documentation you are currently reading.</dd>
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
            <dd>includes template's sceenshots. Not to be used at live site.
            </dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                site
            </dt>
            <dd> includes template's pages as .html files.</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        bat
                    </dt>
                    <dd>includes all .php scripts, used in template.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        audio
                    </dt>
                    <dd>includes all audio files, used in template.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        css
                    </dt>
                    <dd> includes all .css files, used in template.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>fonts</dt>
                    <dd>includes all custom typography and iconic fonts, used in template.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>images</dt>
                    <dd>includes all images, used in .html files.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>js</dt>
                    <dd>includes JavaScript libraries and jQuery plugins.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt><i class="fa fa-folder"></i>video</dt>
                    <dd>includes all audio files, used in template.</dd>
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
            <dd>includes template's source files.</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        psd
                    </dt>
                    <dd>includes .psd files (availability of PSD source files depends on the template, they may not be available in the particular template package).</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        scss
                    </dt>
                    <dd>includes .scss  files, used in template.</dd>
                </dl>
            </li>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        pug
                    </dt>
                    <dd>includes .pug  files, used in template.</dd>
                </dl>
            </li>
        </ul>
    </li>
</ul>

<h3>HTML Structure</h3>

<h6><b>.html</b> page structure of Intense templates is built the following way:</h6>

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

<h3>CSS Structure</h3>

<p>All Intense Template styles are located in <b>style.css</b> file.</p>
<p>Code is commented according to <a href="//cssdoc.net">CSSDoc</a> standard.</p>
<p>Structure of <b>style.css</b> file is built on the following principle:</p>
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