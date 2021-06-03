<h2 class="item2">Intense 2 template structure</h2>

<h3>Package structure</h3>

<h6>After template package extracting you'll see the following files structure:</h6>

<ul class="files_structure">
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                builder
            </dt>
            <dd>initial Novi builder for uploading projects</dd>
        </dl>
    </li>
    <li class="folder">
        <dl class="inline-term">
            <dt>
                <i class="fa fa-folder"></i>
                builder-documentation
            </dt>
            <dd>contains documentation files to Novi builder</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        documentation.txt
                    </dt>
                    <dd>template documentation file. It contains a link to the online documentation to Novi builder</dd>
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
            <dd>folder with projects for Novi builder</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-file"></i>
                        *.zip
                    </dt>
                    <dd>projects for Novi builder</dd>
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
            <dd>contains all files in their initial form (an abbreviation of 'development')</dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        &lt;skin_name&gt;
                    </dt>
                    <dd>contains source files for themes</dd>
                </dl>
                <ul>
                    <li class="folder">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-folder"></i>
                                components
                            </dt>
                            <dd>the folder with components</dd>
                        </dl>
                        <ul>
                            <li class="folder">
                                <dl class="inline-term">
                                    <dt>
                                        <i class="fa fa-folder"></i>
                                        &lt;component&gt;
                                    </dt>
                                    <dd>the folder name matches the component name and includes the source files (any number of such folders is allowed)</dd>
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
                            <dd>template pages</dd>
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
            <dd>contains the optimized files to be sent to a server (abbreviation of 'distribution')
            </dd>
        </dl>
        <ul>
            <li class="folder">
                <dl class="inline-term">
                    <dt>
                        <i class="fa fa-folder"></i>
                        &lt;skin_name&gt;
                    </dt>
                    <dd>contains optimized files for uploading a template to the Hosting</dd>
                </dl>
                <ul>
                    <li class="folder">
                        <dl class="inline-term">
                            <dt>
                                <i class="fa fa-folder"></i>
                                components
                            </dt>
                            <dd> the folder with components
                            </dd>
                        </dl>
                        <ul>
                            <li class="folder">
                                <dl class="inline-term">
                                    <dt>
                                        <i class="fa fa-folder"></i>
                                        &lt;component&gt;
                                    </dt>
                                    <dd> the folder name matches the component name and includes the source files (any number of such folders is allowed but there can't be any <b>*.pug</b> and <b>*.scss</b> files)
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
                            <dd>template pages
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
            <dd>the main template documentation file. It contains a link to the online documentation that you’re reading now.</dd>
        </dl>
    </li>
</ul>

<h3>HTML Structure</h3>

<h6><b>.html</b> page structure of Intense 2 templates is built the following way:</h6>

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

<h3>CSS Structure</h3>

<p>All template styles are located separately in each component <b>components/&lt;component&gt;/*.css.</b></p>