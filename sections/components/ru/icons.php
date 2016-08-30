<h3>Иконки</h3>

<p>В HTML Website Templates стилзация иконок определяется аналогично кнопкам:</p>
<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>.icon</dt>
      <dd>базовый класс иконки;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>.icon-xs, .icon-sm, .icon-md, .icon-lg, .icon-xl</dt>
      <dd>классы лейаута иконки, отвечающие за ее размер;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>.icon-default, .icon-primary, …</dt>
      <dd>классы стилизации иконки, отвечающие за ее цвет и фон;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>fa-*, glyph-*, material-design-* и т.д.</dt>
      <dd>классы, которые отвечают за вставку кода (символа) иконки.</dd>
    </dl>
  </li>
</ul>

<p>Рассмотрим пример,</p>
<pre>
  <code>
    &lt;span href="#" class="icon icon-md icon-default"&gt;&lt;/span&gt;
  </code>
</pre>

<p>В данном примере создается иконка среднего размера со стилизацией по основному цвету шаблона.</p>


<h4>Эффекты для иконок</h4>
<p>Для создание эффектов иконок HTML Website Templates использует скрипт <b>mo.js</b>.</p>
<p>Базовая разметка для создание иконки с эффектов выглядит следующим образом:</p>

<pre>
  <code>
    &lt;div class="mojs-icon-effect mojs-icon-effect-1"&gt;
    &lt;span class="icon icon-md fa-automobile"&gt;&lt;/span&gt;
    &lt;/div&gt;
  </code>
</pre>

<p>Стили:</p>

<pre>
  <code>
    //.mojs-icon-effect
    .mojs-icon-effect-1 {
    display: inline-block;
    color: #fff;
    transition: color .44s ease-in-out;
    position: relative;
    }
  </code>
</pre>

<p>И скрипт:</p>

<code>
  <pre>
'use strict';

var plugins = {
  mojsIconEffect: $('.mojs-icon-effect')
}

$(document).ready(function () {

  function moJsIconsEffect(el, options) {
    this.el = el;
    this.options = $.extend({}, this.options);
    $.extend(this.options, options);

    this.checked = false;
    this.hovered = false;

    this.timeline = new mojs.Timeline();

    for (var i = 0, len = this.options.tweens.length; i < len; ++i) {
      this.timeline.add(this.options.tweens[i]);
    }

    var self = this;

    this.el.addEventListener('mouseenter', function (e) {
      if (self.hovered == false) {
        self.options.onCheck(self.el);
        self.timeline.replay();
        self.hovered = true;
        self.checked = !self.checked;
      }
    });
    this.el.addEventListener('mouseleave', function (e) {
      if (self.hovered) {
        self.options.onUnCheck(self.el);
        self.checked = !self.checked;
        self.hovered = false;
      }
    });
  }

  moJsIconsEffect.prototype.options = {
    tweens: [
      new mojs.Burst({})
    ],
    onCheck: function () {
      return false;
    },
    onUnCheck: function () {
      return false;
    }
  };

  /**
   * MoJs icon effects
   * @description Enables effects for icons
   */
  if (plugins.mojsIconEffect.length) {

    // .mo-js-icon-effect-1
    var iconElements = $('.mojs-icon-effect-1');

    for (var i = 0; i < iconElements.length; i++) {
      var el1 = iconElements[i];

      new moJsIconsEffect(el1, {
        tweens: [
          // burst animation
          new mojs.Burst({
            parent: el1,
            radius: {30: 90},
            count: 6,
            children: {
              fill: '#c3c3c3',
              opacity: 0.6,
              radius: 15,
              duration: 1700,
              easing: mojs.easing.bezier(0.1, 1, 0.3, 1)
            }
          }),
          // ring animation
          new mojs.Shape({
            parent: el1,
            type: 'circle',
            radius: {0: 60},
            fill: 'transparent',
            stroke: '#C0C1C3',
            strokeWidth: {20: 0},
            opacity: 0.6,
            duration: 700,
            easing: mojs.easing.sin.out
          }),
          // icon scale animation
          new mojs.Tween({
            duration: 1200,
            onUpdate: $.proxy(function (progress) {
              var el1span = this.querySelector('span');
              if (progress > 0.3) {
                var elasticOutProgress = mojs.easing.elastic.out(1.43 * progress - 0.43);
                el1span.style.WebkitTransform = el1span.style.transform = 'scale3d(' + elasticOutProgress
+ ',' + elasticOutProgress + ',1)';
              } else {
                el1span.style.WebkitTransform = el1span.style.transform = 'scale3d(0,0,1)';
              }
            }, el1)
          })
        ],
        onCheck: function (ctx) {
          ctx.style.color = '#5a5a5a';
        },
        onUnCheck: function (ctx) {
          ctx.style.color = '#fff';
        }
      });
    }
  }
});
  </pre>
</code>

<p>Изменить цвета или фигуры которые используются для эффекта Вы можете непосредственно в скрипте, заменив соответствующие значения. Более детальную информацию Вы сможете найти в официальной
  <a href="http://mojs.io/tutorials/shape/">документации скрипта</a>.</p>
