<h3>Форма подписки</h3>
<p>Для добавления виджета формы подписки на страницу воспользуйтесь следующим примером:</p>

<pre><code>
        &lt;form data-form-output="form-output-global" data-form-type="subscribe"
              method="post" action="bat/rd-mailform.php" class="rd-mailform"&gt;
            &lt;div class="form-group"&gt;
                &lt;div class="input-group input-group-sm"&gt;
            &lt;span class="input-group-addon"&gt;
                &lt;span class="input-group-icon mdi mdi-email"&gt;  &lt;/span&gt;
            &lt;/span&gt;
                    &lt;input placeholder="Type your E-Mail" type="email" name="email"
                           data-constraints="@Required @Email" class="form-control"/&gt;
            &lt;span class="input-group-btn"&gt;
                &lt;button type="submit" class="btn btn-sm btn-primary"&gt;  Subscribe&lt;/button&gt;
            &lt;/span&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/form&gt;
    </code></pre>

