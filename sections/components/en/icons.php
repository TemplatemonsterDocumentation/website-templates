<h3>Icons</h3>
<h6>HTML Website Template contains more than 2500 ready-made icons.
    A list of all icons can be found on the <b>Components > Toolkit Components > Icons</b> page. To add an icon to the target page, use the following marking:</h6>
<pre><code>
    &lt;span class="your-icon-class"&gt;&lt;/span&gt;
  </code></pre>
<p>    A list of classes for adding target icons is also available on the <b>Components > Toolkit Components > Icons</b> page.</p>
<p>In HTML Website Template, icon styling is defined as button styling:</p>
<ul class="marked-list">
  <li>
    <dl class="inline-term">
      <dt>.icon</dt>
      <dd>the basic icon class;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>.icon-xs, .icon-sm, .icon-md, .icon-lg, .icon-xl</dt>
      <dd>icon layout classes, responsible for its size;</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>.icon-default, .icon-primary, ...</dt>
      <dd>icon styling classes, responsible for its color and background.</dd>
    </dl>
  </li>
  <li>
    <dl class="inline-term">
      <dt>fa-*, glyph-*, mdi-* ...</dt>
      <dd>classes, responsible for icon code (symbol) insert.</dd>
    </dl>
  </li>
</ul>
<p>Here is an example:</p>
<pre><code>
    &lt;span href="#" class="icon icon-md icon-default"&gt;&lt;/span&gt;
  </code></pre>

<p>In this example, one creates a middle-sized icon  with primary template color styling.</p>


<h4>Effects for icons</h4>
<p>For implementing effects for icons HTML Website Templates use <b>mo.js</b>.</p>

<p>E.g.:</p>
<pre>
  <code>
    &lt;div class="mojs-icon-effect mojs-icon-effect-1"&gt;
    &lt;span class="icon icon-md fa-automobile"&gt;&lt;/span&gt;
    &lt;/div&gt;
  </code>
</pre>

<p>Styles example:</p>

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

<p>And script:</p>

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

<p>If you wand change color or figure that uses for effects icon, you can change value in script. For details, please, visit <a href="http://mojs.io/tutorials/shape/">official documentation</a></p>
