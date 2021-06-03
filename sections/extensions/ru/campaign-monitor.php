<h3>Campaign Monitor</h3>
<p>
  Для подключения формы подписки к своему аккаунту Campaign Monitor, Вам необходимо зайти на страницу списков(1), создать список(2) или выбрать уже существующий(3).
</p>

<img src="img/campain.png" alt="">
<hr>

<h6>
  Перейти в раздел "Sign up forms"
</h6>

<img src="img/campain-1.jpg" alt="">


<h6>
  Перейти в раздел "Copy/paste a form to your site"
</h6>

<img src="img/campain-2.png" alt="">

<h6>
  Сгеннерировать код формы
</h6>

<img src="img/campain-3.png" alt="">

<p>
  Скопировать атрибут <mark>action</mark> элемента form и атрибут <mark>name</mark> элемента input[type='email'] сгенерированной формы и вставить в форму вашего сайта соответственно.
  <br>
  Пример кода формы:
</p>

<pre><code>&lt;form action="http://templatemonster1.createsend.com/t/d/s/xlyhhk/" class="subscribe-campaign rd-mailform-inline" data-form-output="form-output-global" method="post"&gt;
  &lt;div class="form-wrap"&gt;
    &lt;label class="form-label" for="campaign-email"&gt;Enter your e-mail&lt;/label&gt;
    &lt;input class="form-input" id="campaign-email" type="email" name="cm-xlyhhk-xlyhhk" required="" data-constraints="@Email @Required"&gt;
  &lt;/div&gt;
  &lt;button class="button button-primary" type="submit"&gt;Subscribe&lt;/button&gt;
&lt;/form&gt;</code></pre>