<h3>RD Search</h3>
<p>This plugin allows to implement the search on several pages with the ability to set up the layout for search results.</p>
<p> The basic form marking should look the following way: </p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search"&gt;
            &lt;div class="form-group"&gt;
                &lt;label for="search" class="form-label"&gt;Type and hit enter...&lt;/label&gt;
                &lt;input id="search" type="text" name="s" autocomplete="off" class="form-control"/&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    </code></pre>
<p>You can paste this marking in any desired place, <b>'rd-search'</b> class is required.</p>
<p>    This search allows to display results with any marking, but you should correctly set up all the target pages.</p>
<h4>Search pages setup</h4>

<p>All the setup is carried out in the <b>head</b> section of every page and is necessary for generating the search results template:</p>

<pre><code>
        &lt;head&gt;
            ...
        &lt;/head&gt;
    </code></pre>

<h4>Title display in search results</h4>
<p>To display the title in search results, specify it for every page inside the <b>title</b> tag:</p>

<pre><code>
        &lt;!-- Site Title--&gt;
        &lt;title&gt;HTML Website Template - multi-page template by TemplateMonster&lt;/title&gt;
    </code></pre>

<h4>Keywords display in search results</h4>
<p>To display keywords (tags) in search results, specify them for every page in <b>'content'</b> attribute of the <b>&lt;meta name="keywords"&gt;</b> tag:</p>
<pre><code>
        &lt;meta name="keywords" content="HTML Website Template web design multipurpose template"&gt;
    </code></pre>

<h4>Additional information display in search results</h4>
<p>To display additional information in search results, specify it for every page in <b>meta</b> tag with <b>name</b> and <b>content</b> attributes, where <b>'name'</b>
  is the unique information name, and <b>'content'</b> is the information that should be displayed. For example, to display the page description, add the following tag:</p>
<pre><code>
        &lt;meta name="description" content="This page ..."&gt;
    </code></pre>
<p>The amount of tags is unlimited.
</p>
<h4>Search form setup</h4>
<p>Search setup is carried out on the target page in the form with <b>.rd-search</b> class:</p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search"&gt;
            ...
        &lt;/form&gt;
    </code></pre>

<h4>Search filter setup</h4>
<p>    You can set up a filter, which specifies pages, on which the search should be carried out (by title).
  For example, to carry out search on HTML pages, the title of which contains <b>'blog'</b> word, use the following code:</p>

<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search" data-search-filter="*blog*.html"&gt;
            ...
        &lt;/form&gt;
    </code></pre>
<p>The default search filter can be changed in <b>script.js</b> file in <b>defaultFilter</b> variable, which can be found in the code after the following comment:</p>

<pre><code>
        /**
        * RD Search
        * @description Enables search
        */
    </code></pre>

<h4>Live Search setup</h4>
<p>You can enable live search to display search results without reloading the page.
  To do this, add the  <b>data-search-live</b> attribute with  <b>id</b> specification, which will display the result. For example:</p>
<pre><code>
        &lt;form action="search-results.html" method="GET" class="rd-search" data-search-live="search-results"&gt;
            ...
        &lt;/form&gt;
        &lt;div id="search-results"&gt;&lt;/div&gt;
    </code></pre>

<h4>Search results template setup</h4>
<p>Search results template is closely connected with the setup of the page described above,
  namely with specifying different meta-tags. You can set up the HTML markup for search results. To do this, add <b>data-search-template</b> attribute,
  to which you should add the corresponding marking for displaying the search results. The line support <b>#{rule}</b> data transfer format.  </p>
<p>Here, <b>'rule'</b> is the <b>'name'</b> attribute of the meta-tag, which is specified on the page. There are 4 default values, which do not require meta-tags and display the necessary information:
</p>





<ul class="marked-list">
    <li>#{title} -contains the value of the <b>&lt;title/&gt;</b> tag of the target page;
    </li>
    <li>#{tokens} - contains a part of the found content of the target page, which meets the search results;
    </li>
    <li>#{href} - contains the path to the target page;
    </li>
    <li>#{count} - amount of the found instances on the page.
    </li>
</ul>
<p>For example:</p>
<pre><code>
        &lt;form  action="search-results.html" method="GET" class="rd-search" data-search-template=""&gt;
            &lt;div class="result-item"&gt;
                &lt;h3 class="title"&gt;&lt;a href="#{href}"&gt;#{title}&lt;/a&gt;&lt;/h3&gt;
                &lt;p class="tags"&gt;in #{keywords}&lt;/p&gt;
            &lt;/div&gt;
        ...
        &lt;/form&gt;
        &lt;div id="search-results"&gt;&lt;/div&gt;
    </code></pre>
<p>The default search results template can be changed in <b>script.js</b> file in the <b>defaultTemplate</b> variable, which can be found in the code after the following comment:</p>

<pre><code>
        /**
        * RD Search
        * @description Enables search
        */
    </code></pre>

