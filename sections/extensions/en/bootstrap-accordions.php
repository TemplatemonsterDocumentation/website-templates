<h3>Bootstrap Accordions. Accordions</h3>
<p>HTML Website Template uses <b>Bootstrap</b> extension for implementing accodrions.
   To add accordions to the target page, use the following marking:</p>

<pre><code>
&lt;div id="accordionOne" role="tablist" aria-multiselectable="true" class="accordion-custom"&gt;
  &lt;!-- Bootstrap panel--&gt;
  &lt;div class="panel panel-custom"&gt;
    &lt;div id="accordionOneHeading1" role="tab" class="accordion-custom-title"&gt;
      &lt;a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse1"
            aria-controls="accordionOneCollapse1" aria-expanded="true"&gt;Accodrion 1
        &lt;div class="accordion-custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;
    &lt;div id="accordionOneCollapse1" role="tabpanel" aria-labelledby="accordionOneHeading1"
          aria-expanded="true" class="panel-collapse collapse in"&gt;
      &lt;div class="accordion-custom-body"&gt;
        &lt;p&gt;Accordion content 1&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Bootstrap panel--&gt;
  &lt;div class="panel panel-custom"&gt;
    &lt;div id="accordionOneHeading2" role="tab" class="accordion-custom-title"&gt;
      &lt;a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse2"
          aria-controls="accordionOneCollapse2" aria-expanded="false" class="collapsed"&gt;Accodrion 2
        &lt;div class="accordion-custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;
    &lt;div id="accordionOneCollapse2" role="tabpanel"
          aria-labelledby="accordionOneHeading2"
          aria-expanded="false" class="panel-collapse collapse"&gt;
      &lt;div class="accordion-custom-body"&gt;
        &lt;p&gt;Accordion content 2&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;!-- Bootstrap panel--&gt;
  &lt;div class="panel panel-custom"&gt;
    &lt;div id="accordionOneHeading3" role="tab" class="accordion-custom-title"&gt;
        &lt;a role="button" data-toggle="collapse" data-parent="#accordionOne" href="#accordionOneCollapse3"
            aria-controls="accordionOneCollapse3" aria-expanded="false" class="collapsed"&gt;Accodrion 3
        &lt;div class="accordion-custom-arrow"&gt;&lt;/div&gt;&lt;/a&gt;&lt;/div&gt;
    &lt;div id="accordionOneCollapse3" role="tabpanel" aria-labelledby="accordionOneHeading3"
          aria-expanded="false" class="panel-collapse collapse"&gt;
      &lt;div class="accordion-custom-body"&gt;
        &lt;p&gt;Accordion content 3&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
