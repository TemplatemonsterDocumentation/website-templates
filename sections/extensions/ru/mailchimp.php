<h3>MailChimp</h3>
<p>
  Для подключения формы подписки к своему аккаунту <a href="https://mailchimp.com/">MailChimp</a>, вам необходимо создать список(или выбрать уже существующий)
  <br>(1)
  и перейти в "Signup forms" раздел (2).
</p>

<img src="img/mailchimp.png" alt="">
<hr>

<h6>
  Выбрать пункт "General forms".
</h6>
<img src="img/mailchimp-2.png" alt="">
<hr>

<h6>
  Скопировать ссылку из поля "Signup form URL" и перейти по ней.
</h6>
<img src="img/mailchimp-3.png" alt="">
<hr>

<h6>
  Вас перенаправит на другую страницу, с которой Вам нужно взять url:
</h6>
<img src="img/mailchimp-4.png" alt="">

<p>
  В данную ссылку необходимо добавить  <mark>/post</mark> после слова <mark>subscribe</mark>, чтобы ссылка приняла вид
</p>

<pre><code>https://********.***.list-manage.com/subscribe/post?u=*******************&id=*********</code></pre>

<h6>Данную ссылку необходимо вставить в атрибут action формы подписки, пример:</h6>

<pre><code>&lt;form class="mailchimp-mailform"
    data-form-output="form-output-global"
    <span class="color-2">action="https://templatemonster.us15.list-manage.com/subscribe/post?u=ba5bb362073a413f48e4a7b90&amp;id=8dc95d9dec"</span>
    method="post"&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label class="form-label rd-input-label" for="inline-email"&gt;Enter your e-mail&lt;/label&gt;
    &lt;input class="form-input" id="inline-email" type="email" name="EMAIL" data-constraints="@Email @Required"&gt;
  &lt;/div&gt;
  &lt;button class="button button-primary" type="submit"&gt;Subscribe&lt;/button&gt;
&lt;/form&gt;</code></pre>

<h6>Готово!</h6>