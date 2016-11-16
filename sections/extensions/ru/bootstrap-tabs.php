<h3>Bootstrap Tabs.Табы</h3>
<p>HTML Website Templates используют расширение <b>Bootstrap </b> для реализации табов. Для внедрения табов на целевую страницу необходимо воспользоваться  следующей разметкой.</p>

<pre><code>
&lt;div class="tabs-custom"&gt;
  &lt;ul class="tabs-custom-list accordion-custom"&gt;
    &lt;li class="accordion-custom-title active"&gt;&lt;a href="#tabs-1-1" data-toggle="tab"&gt;Tab 1
        &lt;div class="accordion-custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="accordion-custom-title"&gt;&lt;a href="#tabs-1-2" data-toggle="tab"&gt;Tab 2
        &lt;div class="accordion-custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class="accordion-custom-title"&gt;&lt;a href="#tabs-1-3" data-toggle="tab"&gt;Tab 3
        &lt;div class="accordion-custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
  &lt;!-- Tab panes--&gt;
  &lt;div class="tab-content text-secondary"&gt;
    &lt;div id="tabs-1-1" class="tab-pane accordion-custom-body tab-content-item fade in active"&gt;Tab content 1&lt;/div&gt;
    &lt;div id="tabs-1-2" class="tab-pane accordion-custom-body tab-content-item fade"&gt;Tab content 2&lt;/div&gt;
    &lt;div id="tabs-1-3" class="tab-pane accordion-custom-body tab-content-item fade"&gt;Tab content 3&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>