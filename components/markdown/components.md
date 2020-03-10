# Components

## Alert
Alerts are used as feedback by certain actions of a user or other events. Style sheets linking occurs when the `.alert` primary class is present on the page.

Markup example:
```html
<div class="alert alert-primary">
  Attention! This is a multi-purpose alert that's seful anywhere!
</div>
```
The component has predefined styles (class modifiers), each of which has its own semantic goal.

Color modifiers:
- primary - `.alert-primary`
- secondary - `.alert-secondary`
- success - `.alert-success`
- info - `.alert-info`
- warning - `.alert-warning`
- danger - `.alert-danger`
- light - `.alert-light`
- dark - `.alert-dark`

Modifiers of primary color brightening or darkening (incompatible with gradient modifier):
- brightening - `.alert-lighter`
- darkening - `.alert-darker`

Size modifiers:
- small alert - `.alert-sm`
- large alert - `.alert-lg`

Border modifiers:
- left border - `.alert-border-left`
- right border - `.alert-border-right`
- top border - `.alert-border-top`
- bottom border - `.alert-border-bottom`

`.alert-gradient` modifier makes a gradient background out of primary background.  
This component is a part of [Bootstrap 4](https://getbootstrap.com)  framework. Read more about it on the following page: [Bootstrap Alerts](https://getbootstrap.com/docs/4.1/components/alerts).


## Badge
Badge is used as a small counter or label.  
Style sheets linking occurs when the `.badge` primary class is present on the page.

Markup example:
```html
<span class="badge badge-primary">Badge</span>
```

The component has its own modifiers. Color modifiers:
- primary - `.badge-primary`
- secondary - `.badge-secondary`
- success - `.badge-success`
- info - `.badge-info`
- warning - `.badge-warning`
- danger - `.badge-danger`
- light - `.badge-light`
- dark - `.badge-dark`

Modifier `.badge-pill` makes a badge round.  
This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Badges](https://getbootstrap.com/docs/4.1/components/badge).


## Breadcrumbs
Компонент используется для указания местоположения текущей страницы в навигационной иерархии.  
Подключение стилей происходит при наличии основного класса `.breadcrumbs` на странице.

Markup example:
```html
<ul class="breadcrumbs mt-1 p-0">
  <li class="breadcrumbs-item">
    <a class="breadcrumbs-link" href="index.html">
      <span class="breadcrumbs-icon fa-home"></span>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="breadcrumbs-item">Documentation</li>
  <li class="breadcrumbs-item">Components List</li>
</ul>
```


## Button
Buttons are used in forms in the first place.  
Style sheets linking occurs when the `.btn` primary class is present on the page.

Markup example:
```html
<button class="btn btn-primary btn-block">Button</button>
```

The component has predefined styles (class modifiers), each of which has its own semantic goal.

Color modifiers:
- primary - `.btn-primary`, `.btn-outline-primary`
- secondary - `.btn-secondary`, `.btn-outline-secondary`
- success - `.btn-success`, `.btn-outline-success`
- info - `.btn-info`, `.btn-outline-info`
- warning - `.btn-warning`, `.btn-outline-warning`
- danger - `.btn-danger`, `.btn-outline-danger`
- light - `.btn-light`, `.btn-outline-light`
- dark - `.btn-dark`, `.btn-outline-dark`

Size modifiers:
- small button - `.btn-sm`
- large button - `.btn-lg`

A modifier `.btn-block` makes a block out of a button. It occupies the full width of a parent element.  
Active (`:active`) and disabled (`[disabled]`) states of a button are also provided. They can be artificially set using `.active` and `.disabled` classes correspondingly.  
This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Buttons](https://getbootstrap.com/docs/4.1/components/buttons).


## Card
Card is a flexible and expandable container of content. It includes heading and footer options, a wide range of content, contextual background colors and powerful display options.  
Style sheets linking occurs when the `.card` primary class is present on the page.

Code example:
```html
<div class="card">
  <img class="card-img-top" src="https://via.placeholder.com/300x150/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Card](https://getbootstrap.com/docs/4.1/components/card).


## CKeditor
CKeditor is a set of wise [WYSIWYG](https://en.wikipedia.org/wiki/WYSIWYG) editor components.  
Plugin and style sheets linking occurs when the element that matches the `[data-ckeditor]` selector is present on the page.

Markup example:
```html
<textarea data-ckeditor name="ckeditor">This is the CKEditor Plugin...</textarea>
```

To specify the editor type, a `data-ckeditor` attribute with acceptable values is used.
- `inline`
- `balloon`
- `document`

All available parameters of the plugin can be viewed on [CKeditor](https://ckeditor.com) website.


## Close
A common icon for hiding content, e.g. modal windows and notifications.  
Style sheets linking occurs when the `.close` primary class is present on the page.

Code example:
```html
<button type="button" class="close" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Close](https://getbootstrap.com/docs/4.1/utilities/close-icon).


## Code
Code component is a set of styles for changing the appearance of `<code>`, `<kbd>` and `<pre>` tags. In addition to `<code>` , there is a `.code-bg` class, which adds a background and inner paddings. Style sheets linking occurs when the `<code>` tag is present on the page.  
This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Code](https://getbootstrap.com/docs/4.1/content/code).


## Colorpicker
Bootstrap Colorpicker is a modular color selection plugin for Bootstrap 4.  
Plugin and style sheets linking occurs when the element that matches the `[data-colorpick]` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" readonly value="#FF0000" data-colorpick>
```

This template provides a `data-colorpick` attribute for Bootstrap Colorpicker that can accept a JSON object with the plugin parameters, e.g.:
```html
<input ... data-colorpick='{ "color" :"#00FF00" }'>
```
All available parameters of the plugin can be viewed on [Bootstrap Colorpicker](https://farbelous.io/bootstrap-colorpicker) website.


## Countdown
__Countdown__ is a customizable plugin for a countdown with progress circles.  
Plugin and style sheets linking occurs when the element that matches the `.countdown` selector is present on the page.

Markup example:
```html
<div class="countdown">
  <div class="countdown-block">
    <svg class="countdown-circle" x="0px" y="0px" width="100px" height="100px" viewbox="0 0 100 100" data-progress-days>
      <circle class="clipped" cx="50" cy="50" r="50" ></circle>
    </svg>
    <h1 class="countdown-counter" data-counter-days>00</h1>
  </div>
  <div class="countdown-block">
    <svg class="countdown-circle" x="0px" y="0px" width="100px" height="100px" viewbox="0 0 100 100" data-progress-hours>
      <circle class="clipped" cx="50" cy="50" r="50" ></circle>
    </svg>
    <h1 class="countdown-counter" data-counter-hours>00</h1>
  </div>
  <div class="countdown-block">
    <svg class="countdown-circle" x="0px" y="0px" width="100px" height="100px" viewbox="0 0 100 100" data-progress-minutes>
      <circle class="clipped" cx="50" cy="50" r="50" ></circle>
    </svg>
    <h1 class="countdown-counter" data-counter-minutes>00</h1>
  </div>
  <div class="countdown-block">
    <svg class="countdown-circle" x="0px" y="0px" width="100px" height="100px" viewbox="0 0 100 100" data-progress-seconds>
      <circle class="clipped" cx="50" cy="50" r="50" ></circle>
    </svg>
    <h1 class="countdown-counter" data-counter-seconds="">00</h1>
  </div>
</div>
```

This template provides the following attributes for Countdown:
- `data-from` - countdown start time (format `YYYY-MM-DDTHH:mm:ss.sssZ`)
- `data-to` - countdown finish time (format `YYYY-MM-DDTHH:mm:ss.sssZ`)
- `data-count` - countdown format (`until`, `since`, `auto`)

For example:
```html
<div class="countdown" data-from="1995-12-17T03:24:00" data-to="2050-01-01" data-count="auto">...</div>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://oxayaza.page.link/gitHub_aCounters#countdown-usage).


## Cropper
__Cropper.js__ is a plugin for cropping images.  
Plugin and style sheets linking occurs when the element that matches the `[data-cropper-container]` selector is present on the page.

Markup example:
```html
<div data-cropper-container>
  <div class="img-container"><img src="images/my-logo.png" alt="Sample Picture"></div>
  <button data-cropper='{ "setDragMode": "move" }'>Drag mode: move</button>
  <button data-cropper='{ "setDragMode": "crop" }'>Drag mode: crop</button>
  <button data-cropper='{ "zoom": 0.1 }'>Zoom: +0.1</button>
  <button data-cropper='{ "zoom": -0.1 }'>Zoom: -0.1</button>
  <button data-cropper='{ "reset": null }'>Reset</button>
</div>
```

`cropper` component implies a mandatory availability of an element matching the `.img-container img` selector.  
The template provides a `data-cropper` attribute for managing the __Cropper.js__ plugin. It accepts a JSON object with parameters matching methods of the plugin, and parameter values that will be passed to a method, e.g.: `data-cropper='{ "setDragMode": "move" }'` matches `cropper.setDragMode( 'move' )`. This attribute works only with the elements that are located in a `data-cropper-container` container.  
Next values of a `data-cropper` attribute that apply to buttons are provided:
- `{ "setDragMode": "move" }`
- `{ "setDragMode": "crop" }`
- `{ "zoom": 0.1 }`
- `{ "zoom": -0.1 }`
- `{ "rotate": -45 }`
- `{ "rotate": 45 }`
- `{ "scaleX": -1 }`
- `{ "scaleY": -1 }`
- `{ "disable": null }`
- `{ "enable": null }`
- `{ "clear": null }`
- `{ "reset": null }`
- `{ "destroy": null }`
- `{ "setAspectRatio": 1.7777777777777777 }`
- `{ "setAspectRatio": 1.3333333333333333 }`
- `{ "setAspectRatio": 1 }`
- `{ "setAspectRatio": 0.6666666666666666 }`
- `{ "setAspectRatio": null }`
- `{ "viewMode": 0 }`
- `{ "viewMode": 1 }`
- `{ "viewMode": 2 }`
- `{ "viewMode": 3 }`
- `{ "getCroppedCanvas": { maxWidth: 4096, maxHeight: 4096 }, target: "#modal" }`
- `{ "getCroppedCanvas": { width: 160, height: 90 }, target: "#modal" }`
- `{ "getCroppedCanvas": { width: 320, height: 180 }, target: "#modal" }`
- `{ "getData": null, target: "#cropper-input" }`
- `{ "setData": null, target: "#cropper-input" }`
- `{ "getContainerData": null, target: "#cropper-input" }`
- `{ "getImageData": null, target: "#cropper-input" }`
- `{ "getCanvasData": null, target: "#cropper-input" }`
- `{ "setCanvasData": null, target: "#cropper-input" }`
- `{ "getCropBoxData": null, target: "#cropper-input" }`
- `{ "setCropBoxData": null, target: "#cropper-input" }`

Next values of a `data-cropper` attribute that apply to checkboxes are provided:
- `{ "responsive": "checkbox" }`
- `{ "restore": "checkbox" }`
- `{ "checkCrossOrigin": "checkbox" }`
- `{ "checkOrientation": "checkbox" }`
- `{ "modal": "checkbox" }`
- `{ "guides": "checkbox" }`
- `{ "center": "checkbox" }`
- `{ "highlight": "checkbox" }`
- `{ "background": "checkbox" }`
- `{ "autoCrop": "checkbox" }`
- `{ "movable": "checkbox" }`
- `{ "rotatable": "checkbox" }`
- `{ "scalable": "checkbox" }`
- `{ "zoomable": "checkbox" }`
- `{ "zoomOnTouch": "checkbox" }`
- `{ "zoomOnWheel": "checkbox" }`
- `{ "cropBoxMovable": "checkbox" }`
- `{ "cropBoxResizable": "checkbox" }`
- `{ "toggleDragModeOnDblclick": "checkbox" }`

All available plugin parameters and their description can be viewed in [GitHub repository](https://github.com/fengyuanchen/cropperjs#cropperjs).


## Date Range Picker
Date Range Picker is a plugin for choosing a time range with stylization feature.  
Plugin and style sheets linking occurs when the element that matches the `[name="daterange"]` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" name="daterange">
```

This template provides a `data-predefined` attribute for Date Range Picker that allows to enable preset time ranges, such as:
- Today
- Yesterday
- Last 7 Days
- Last 30 Days
- This Month
- Last Month

Modifying time ranges can be done via the `ranges` parameter of a `daterangepicker` component initialization in _components/base/script.js_ file.  
All available parameters of the plugin can be viewed on [Date Range Picker](http://www.daterangepicker.com) website.


## Bootstrap Date/Timepicker
__Bootstrap Date/Timepicker__ is a plugin for choosing date and time with stylization feature.  
Plugin and style sheets linking occurs when the element that matches the `[data-datetimepicker]` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" name="datetime" data-datetimepicker>
```

This template provides a `data-datetimepicker` attribute for Bootstrap Date/Timepicker that can accept a JSON object with the plugin parameters, e.g.:
```html
<input ... data-datetimepicker='{ "format": "LT", "inline": true, "target": "#time3" }'>
```
`inline: true` parameter in `data-datetimepicker` attribute implies a mandatory availability of `target` parameter with field selector, where the value will be written.  
All available parameters of the plugin can be viewed on [Bootstrap Date/Timepicker](http://eonasdan.github.io/bootstrap-datetimepicker) website.


## Driver
__Driver.js__ is a plugin for focusing an object on the page. This plugin allows to implement the site tour feature on any page.  
Plugin and style sheets linking occurs when the element that matches the `[data-driver]` selector is present on the page.

This template provides a `data-driver` attribute for __Driver.js__ that can accept a JSON object with the plugin parameters, e.g.:
```html
<div ... data-driver='{ "title": "Click Next", "description": "...", "position": "top" }'>...</div>
```

An attribute can be added to any visible element on the page. The site tour starts automatically 3 seconds after the page loads or on pressing the element with the `data-driver-start` attribute if it’s present on the page. The site tour elements are highlighted as they are shown in the document.

All available parameters of the plugin can be viewed on [Driver.js](https://kamranahmed.info/driver.js) website.


## Dropdown
Dropdown elements are switchable, contextual elements of surface covering for displaying link lists etc. They are interactive thanks to JavaScript plugin in Bootstrap 4. Switching of a dropdown element is performed on click and not on hover. It is done intentionally.  
Plugin and style sheets linking occurs when the `.dropdown-toggle` primary class is present on the page.

Markup example:
```html
<div class="dropdown">
  <button class="btn dropdown-toggle btn-primary" data-toggle="dropdown">
    <span>Dropdown</span>
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Option 1</a>
    <a class="dropdown-item" href="#">Option 2</a>
    <a class="dropdown-item" href="#">Option 3</a>
  </div>
</div>
```

`.dropdown-toggle` element is also a `button` component and it can have the same class modifiers.

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Dropdowns](https://getbootstrap.com/docs/4.1/components/dropdowns).


## Dropzone
__DropzoneJS__ is an open-source library that allows to drag and drop files with a feature of image preview.  
Plugin and style sheets linking occurs when the element that matches the `.dropzone-form` selector is present on the page.

Markup example:
```html
<form class="dropzone-form" action="components/dropzone/dropzone.php">Drop Files Here (or click)</form>
```

This template provides a `data-dropzone` attribute for DropzoneJS that can accept a JSON object with the plugin parameters, e.g.:
```html
<form class="dropzone-form " action="components/dropzone/dropzone.php" data-dropzone='{ "maxFilesize": 2,"maxfiles": 10 }'>...</form>
```

A `components/dropzone/dropzone.php` file is provided exclusively for demonstration of plugin operation.

All available parameters of the plugin can be viewed on [DropzoneJS](https://www.dropzonejs.com) website.


## Dual Listbox
Dual Listbox is an improved version of a simple choice field.  
Plugin and style sheets linking occurs when the element that matches the `.dual-listbox` selector is present on the page.

Markup example:
```html
<select class="dual-listbox" multiple="" data-available-title="Available" data-selected-title="Selected">
  <option value="1">One</option>
  <option value="2">Two</option>
  ...
</select>
```

`data-available-title` and `data-selected-title` attributes are used for modifying the headings of available and selected items.

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/maykinmedia/dual-listbox#dual-listbox).


## EasyZoom
__EasyZoom__ is a jQuery plugin for zooming and panning images.  
Plugin and style sheets linking occurs when the element that matches the `.easyzoom` selector is present on the page.

Markup example:
```html
<div class="easyzoom easyzoom--overlay">
  <a href="images/img-01-1440x660.jpg">
    <img src="images/img-01-720x330.jpg" alt="">
  </a>
</div>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/i-like-robots/EasyZoom).


## Tower File Input
__Tower File Input__ is a jQuery plugin, which is an improved version of a file field with a feature of image preview.  
Plugin and style sheets linking occurs when the element that matches the `.tower-file-input` selector is present on the page.

Markup example:
```html
<div class="tower-file">
  <input class="tower-file-input" id="file1" type="file">
  <label class="btn btn-success" for="file1">Select File</label>
</div>
```

This template provides a `data-tfi-opts` attribute for File Input that can accept a JSON object with the plugin parameters, e.g.:
```html
<input class="tower-file-input" data-tfi-opts='{ "iconClass": "mdi-upload" }' ...>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/StrutTower/tower-file-input) or on [Tower File Input](https://htmlpreview.github.io/?https://github.com/StrutTower/tower-file-input/blob/master/demo/index.html) website.


## Flot
__Flot__ is a library of canvas-graphs.
Plugin and style sheets linking occurs when the element that matches the `.flotchart-container` selector is present on the page.  
This template provides a `data-flotchart-options` attribute for Flot that can accept a JSON object with the plugin parameters, and `data-flotchart-data` that accepts a JSON object with graphic data:
```html
<div class="flotchart-container" data-flotchart-options="{...}" data-flotchart-data="{ ... }">...</div>
```

All available parameters of the plugin can be viewed on [Flotcharts](http://www.flotcharts.org) website.


## Highcharts
__Highcharts__ is a library of SVG graphs.  
Plugin and style sheets linking occurs when the element that matches the `.highcharts-container` selector is present on the page.
This template provides a `data-highcharts-options` attribute for Highcharts that can accept a JSON object with the plugin parameters, e.g.:
```html
<div class="highcharts-container" data-highcharts-options="{...}">...</div>
```

All available parameters of the plugin can be viewed on [Highcharts](https://www.highcharts.com) website.


## Highlight
__Highlight.js__ is a tool for highlighting the code syntax.  
Plugin linking occurs when the element that matches the `.highlight` selector is present on the page.

Markup example:
```html
<pre class="highlight html">
  ...
</pre>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/highlightjs/highlight.js#highlightjs).


## Input
Inputs are used in forms in the first place.  
Style sheets linking occurs when the element that matches the `.form-group, .input-group, .form-check, .custom-control, .form-control` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" placeholder="Type Here...">
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Forms](https://getbootstrap.com/docs/4.1/components/forms).


## jsTree
__jsTree__ is a jQuery plugin that provides an interactive tree structure of anything.  
Plugin and style sheets linking occurs when the element that matches the `.jstree` selector is present on the page.

Markup example:
```html
<div class="jstree">
  <ul>
    <li>Node 1</li>
    <li>Folder 1
      <ul>
        <li>Node 2.1</li>
        <li>Node 2.2</li>
      </ul>
    </li>
  </ul>
</div>
```

This template provides a `data-jstree-params` attribute for jsTree that can accept a JSON object with the plugin parameters, e.g.:
```html
<div class="jstree" data-jstree-params='{ "plugins": [ "checkbox" ] }'>...</div>
```

All available parameters of the plugin can be viewed on [jsTree](https://www.jstree.com) website.


## Jumbotron
A component designed for demonstration of website’s key content.  
Style sheets linking occurs when the `.jumbotron` primary class is present on the page.

Markup example:
```html
<section class="jumbotron">
  <h1>Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-3">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p><a class="btn btn-primary mt-2" href="#">Learn more</a>
</section>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Jumbotron](https://getbootstrap.com/docs/4.1/components/jumbotron).


## jVectorMap
__jVectorMap__ is jQuery plugin for creating vector maps.  
Plugin and style sheets linking occurs when the element that matches the ё.jvector-map-wrapё selector is present on the page.  
This template provides a `data-jvector-map` attribute for jVectorMap that can accept a JSON object with the vector map.  
You can read detailed information about this plugin on [jVectorMap](http://jvectormap.com) official website.


## Lightgallery
__Lightgallery__ is a jQuery plugin for creating a gallery.  
Plugin and style sheets linking occurs when the element that matches the `[data-lightgallery]ё selector is present on the page.

Markup example:
```html
<div class="d-sm-flex group-10" data-lightgallery>
  <a class="lightgallery-item" href="https://via.placeholder.com/800x600">
    <img src="https://via.placeholder.com/140x90" alt="">
  </a>
  <a class="lightgallery-item" href="https://via.placeholder.com/800x600">
    <img src="https://via.placeholder.com/140x90" alt="">
  </a>
  <a class="lightgallery-item" href="https://via.placeholder.com/800x600">
    <img src="https://via.placeholder.com/140x90" alt="">
  </a>
</div>
```

This template provides a `data-lightgallery` attribute for Lightgallery that can accept a JSON object with the plugin parameters, e.g.:
```html
<div data-lightgallery='{ "thumbnail": false }'>...</div>
```

All available parameters of the plugin can be viewed in its [GitHub repository](http://sachinchoolur.github.io/lightGallery#lightgallery).


## Markdown
__Markdown.js__ is a converter and editor of Markdown markup.  
Plugin and style sheets linking occurs when the element that matches the `.markdown` selector is present on the page.

Markup example:
```html
<div class="markdown">This is the Markdown Editor! Check out my sweet preview below!</div>
```

This template provides a `data-markdown-params` attribute for Markdown.js that can accept a JSON object with the plugin parameters, e.g.:
```html
<div class="markdown" data-markdown-params='{ "footer": "Footer Sample" }'>...</div>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/evilstreak/markdown-js#markdown-js).


## jQuery Masked Input
__jQuery Masked Input__ is a plugin that allows to set a template of the input field value.  
Plugin and style sheets linking occurs when the element that matches the `[data-masked]` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" data-masked="99/99/9999" placeholder="11/11/1111">
```

This template provides a `data-masked` attribute for jQuery Masked Input that accepts a string with an entered value template, e.g.:
```html
<input ... data-masked="99/99/9999">
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/digitalBush/jquery.maskedinput#overview).


## Bootstrap Maxlength
Bootstrap Maxlength is used for displaying maximum acceptable symbol length in a text field.  
Plugin and style sheets linking occurs when the element that matches the `[maxlength]` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" maxlength="25" placeholder="Type Here...">
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/mimo84/bootstrap-maxlength/#configurable-options).


## Media Object
__Media object__ is an object where an image is located next to the text content (message, tweet, post). Style sheets linking occurs when the `.media` primary class is present on the page.

Code example:
```html
<div class="media">
  <img class="mr-3" src=".../64x64" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Media heading</h5>
    Cras sit amet nibh libero, in gravida nulla.
  </div>
</div>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Media Object](https://bootstrap-4.ru/docs/4.1/layout/media-object).


## Modal
Bootstrap Modal is a plugin for adding dialog windows, lightboxes, notifications or any other content in a pop-up window.  
Plugin and style sheets linking occurs when the `.modal` primary class is present on the page.

Markup example:
```html
<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Modals](https://getbootstrap.com/docs/4.1/components/modal).


## MultiSwitch
__MultiSwitch__ is a plugin for creating groups of class switches.  
Plugin and style sheets linking occurs when the element that matches the `[data-multi-switch]` selector is present on the page.

Markup example:
```html
<button ... data-multi-switch='{ "targets": ".target" }'>...</button>
```

This template provides a `data-multi-switch` attribute for MultiSwitch that can accept a JSON object with the plugin parameters, e.g.:
```html
<button ... data-multi-switch='{ "targets": ".sidebar", "scope": ".sidebar", "isolate": "[data-multi-switch]" }'>...</button>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/OXAYAZA/Multi-Switches#multi-switches).


## Nav
Navigation is a page component that allows to transfer between website pages or through the selected content.  
Plugin and style sheets linking occurs when the `.nav` primary class is present on the page.

Markup example:
```html
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Navs](https://getbootstrap.com/docs/4.1/components/navs).


## Nestable
__Nestable__ jQuery Plugin is an hierarchical list plugin with drag-and-drop elements.  
Plugin and style sheets linking occurs when the element that matches the `.nestable` selector is present on the page.

Markup example:
```html
<div class="dd nestable">
  <ol class="dd-list">
    <li class="dd-item">
      <div class="dd-handle">Item 1</div>
      <ol class="dd-list">
        <li class="dd-item">
          <div class="dd-handle">Item 2</div>
        </li>
        <li class="dd-item">
          <div class="dd-handle">Item 3</div>
        </li>
        <li class="dd-item">
          <div class="dd-handle">Item 4</div>
        </li>
      </ol>
    </li>
  </ol>
</div>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/dbushell/Nestable).


## Nprogress
__Nprogress__ is a progress plugin, which is generally used to display loading of the page content.  
The plugin connects immediately after the page loading event ([load](https://developer.mozilla.org/ru/docs/Web/Events/load)).

For `.bar` loading bar, color modifiers are provided:
- primary - `.bar-primary`
- secondary - `.bar-secondary`
- success - `.bar-success`
- info - `.bar-info`
- warning - `.bar-warning`
- danger - `.bar-danger`
- light - `.bar-light`
- dark - `.bar-dark`

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/rstacruz/nprogress/#basic-usage).


## Pagination
A pagination component. Style sheets linking occurs when the `.pagination` primary class is present on the page.

Code example:
```html
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Pagination](https://getbootstrap.com/docs/4.1/components/pagination).


## Particles
__Particles.js__ is a plugin for creating canvas with moving particles.  
Plugin and style sheets linking occurs when the element that matches the `#particles-container` selector is present on the page.

This template provides a `data-particles` attribute for Particles.js that can accept a JSON object with the plugin parameters, e.g.:
```html
<div id="particles-container" data-particles='{ "color": { "value": "#85e2ff" } }'>...</div>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/VincentGarreau/particles.js).


## PNotify
PNotify is a notification plugin.  
The plugin and style sheets connect immediately after the page loading event ([window load](https://developer.mozilla.org/ru/docs/Web/Events/load)).
The plugin is configured globally in the `pnotify` component initialization, in _components/base/script.js_ file.
All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/sciactive/pnotify#table-of-contents).


## Counter & ProgressCircle
Counter is a simple plugin of an animated counter.  
ProgressCircle is a plugin for radial progress bar.  
Plugins and style sheets linking occurs when the element that matches the `.progress-circle-wrap` selector is present on the page.  
Both plugins are used together to create a counter with an animated progress bar.

Markup example:
```html
<div class="progress-circle-wrap">
  <div class="progress-counter-wrap">
    <div class="progress-counter-value">
      <span class="progress-counter">80</span>
    </div>
  </div>
  <svg class="progress-circle" x="0" y="0" width="160" height="160" viewbox="0 0 160 160">
    <circle class="bg" cx="80" cy="80" r="66"></circle>
    <circle class="fg clipped" cx="80" cy="80" r="66" style="stroke: #28a745"></circle>
  </svg>
</div>
```

Text from the `.progress-counter` element is used as a value for calculation.

All available plugin parameters can be viewed in their [GitHub repository](https://oxayaza.page.link/gitHub_aCounters).


## Progress
Progress bars components are built from two elements of HTML & CSS to set the width and several attributes.  
We do not use HTML5 `<progress>` element that allows us to place progress bars vertically as well as animate them and place text labels above them.  
Style sheets linking occurs when the `.progress` primary class is present on the page.

Code example:
```html
<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Progress](https://getbootstrap.com/docs/4.1/components/progress).


## RD Navbar
__RD Navbar__ is a jQuery plugin for creating a navigation panel.  
Plugin and style sheets linking occurs when the element that matches the `.rd-navbar` selector is present on the page.

An example of the simplest markup:
```html
<div class="rd-navbar-wrap">
  <nav class="rd-navbar">
    <ul class="rd-navbar-nav">
      <li class="rd-navbar-nav-item"><a class="rd-navbar-link"></a></li>
      <li class="rd-navbar-nav-item"><a class="rd-navbar-link"></a></li>
      <li class="rd-navbar-nav-item"><a class="rd-navbar-link"></a></li>
      <li class="rd-navbar-nav-item"><a class="rd-navbar-link"></a></li>
    </ul>
  </nav>
</div>
```

All RD Navbar parameters are configured only in initialization.
All available parameters of the plugin can be viewed on [RD Navbar](http://cms.devoffice.com/coding-dev/rd-navbar/documentation) website.


## Select2
__Select2__ is an improved select field that can be stylized.  
Plugin and style sheets linking occurs when the element that matches the `.select2` selector is present on the page.

Markup example:
```html
<select class="select2" name="country" data-placeholder="Country">
  <option label="placeholder"></option>
  <option>USA</option>
  <option>UK</option>
  <option>Ukraine</option>
  <option>Australia</option>
  <option>Korea</option>
  <option>Japan</option>
  <option>Germany</option>
  <option>Belarus</option>
  <option>Poland</option>
</select>
```

This template provides the following attributes for Select2:
- `data-placeholder` - generated field placeholder;
- `data-minimum-results-search` - minimal amount of displayed options;
- `data-container-class` - additional class for content of a generated component;
- `data-dropdown-class` - additional class for a dropdown of the generated component.

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/select2/select2#select2).


## Slick
__Slick Slider__ is a jQuery plugin for creating a content carousel.  
Plugin and style sheets linking occurs when the element that matches the `.slick-slider` selector is present on the page.

Markup example:
```html
<div class="slick-slider">
  <div><div class="slide-content">...</div></div>
  ...
  <div><div class="slide-content">...</div></div>
</div>
```

This template provides a `data-slick` attribute for Slick Slider that can accept a JSON object with the plugin parameters, e.g.:
```html
<div class="slick-slider" data-slick='{"dots":true,"arrows":true}'>...</div>
```

Also, there are attributes for specifying the carousel responsiveness according to breakpoints:
- `data-slick-sm` - 576px
- `data-slick-md` - 768px
- `data-slick-lg` - 992px
- `data-slick-xl` - 1200px
- `data-slick-xxl` - 1600px

An example with responsive attributes:
```html
<div class="slick-slider" data-slick='{"dots":true,"arrows":true}' data-slick-sm='{"arrows":fase}'>...</div>
```

All available parameters of the plugin can be viewed on [Slick Slider](http://kenwheeler.github.io/slick) website.


## Spinner
__jQuery UI Spinner__ is a plugin for an improved input of numerical values in fields with up/down buttons that can be stylized.  
Plugin and style sheets linking occurs when the element that matches the `[data-spinner]` selector is present on the page.

Markup example:
```html
<input class="form-control ui-spinner-input" data-spinner type="number" name="spinner" value="5">
```

This template provides a `data-spinner` attribute for Spinner that can accept a JSON object with the plugin parameters, e.g.:
```html
<input ... data-spinner='{ "min": 0, "step": 5 }'>
```

All available parameters of the plugin can be viewed on [jQuery UI](https://api.jqueryui.com/spinner) website.


## Summernote
Summernote is a simple [WYSIWYG](https://en.wikipedia.org/wiki/WYSIWYG) editor based on Bootstrap.
Plugin and style sheets linking occurs when the element that matches the `.summernote` selector is present on the page.

Markup example:
```html
<div class="summernote">Hello summernote.</div>
```

This template provides a `data-summernote-opts` attribute for Summernote that can accept a JSON object with the plugin parameters, e.g.:
```html
<div class="summernote" data-summernote-opts='{ "airMode": true }'>...</div>
```

All available parameters of the plugin can be viewed on [Summernote](https://summernote.org/getting-started) website.


## Table
Table stylization component. Style sheets linking occurs when the `.table` primary class is present on the page.

Code example:
```html
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>Bird</td>
    </tr>
  </tbody>
</table>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Tables](https://getbootstrap.com/docs/4.1/components/tables).


## Tags Manager
__Tags Manager__ is a jQuery plugin for creating tag input fields.  
Plugin and style sheets linking occurs when the element that matches the `.tag-manager` selector is present on the page.

Markup example:
```html
<div class="tag-manager">
  <input class="form-control tag-manager-input" type="text" placeholder="Create a new tag...">
  <div class="tag-manager-container"></div>
</div>
```

This template provides a `data-tag-manager` attribute for Tags Manager that can accept a JSON object with the plugin parameters, e.g.:
```html
<div class="tag-manager" data-tag-manager='{ "prefilled": [ "admin", "template", "sample" ] }'>...</div>
```

`tagManager` component implies a mandatory availability of `.tag-manager-input` and `.tag-manager-container` elements in it.
All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/max-favilli/tagmanager).


## Time Spinner
__Time Spinner__ is a modified [jQuery UI Spinner](#section=components&anchor=spinner) for specifying time.  
Plugin and style sheets linking occurs when the element that matches the `[data-time-spinner]` selector is present on the page.

Markup example:
```html
<input class="form-control ui-spinner-input" data-time-spinner type="text" name="spinner" value="08:30 PM">
```


## Tooltip
__Tooltip__ can be added to any markup element.  
Plugin and style sheets linking occurs when an element with the `[data-toggle="tooltip"]` attribute is present on the page.

Markup example:
```html
<button class="btn btn-primary" data-toggle="tooltip">Tooltip</button>
```

This component is a part of [Bootstrap 4](https://getbootstrap.com) framework. Read more about it on the following page: [Bootstrap Tooltips](https://getbootstrap.com/docs/4.1/components/tooltips).


## Typeahead
__Typeahead.js__ is a plugin for autofilling text fields.
Plugin and style sheets linking occurs when the element that matches the `[data-typehead]` selector is present on the page.

Markup example:
```html
<input class="form-control" type="text" placeholder="States" data-typehead='[
  "Alabama",
  "Alaska",
  "Arizona",
  "Arkansas",
  "California"
]'>
```

The `data-typehead` attribute is used to indicate autofilling options as a line array.
All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/twitter/typeahead.js#typeaheadjs).


## xZoom
__xZoom__ is a jQuery plugin for zooming images.  
Plugin and style sheets linking occurs when the element that matches the `.xzoom` selector is present on the page.

Markup example:
```html
<img class="xzoom" src="images/img-01-720x330.jpg" data-xoriginal="images/img-01-1440x660.jpg" alt="">
```

This template provides a `data-xzoom-opts` attribute for xZoom that can accept a JSON object with the plugin parameters, e.g.:
```html
<img ... data-xzoom-opts='{ "position": "lens", "zoomWidth": 300, "zoomHeight": 300 }'>
```

All available parameters of the plugin can be viewed in its [GitHub repository](https://github.com/payalord/xZoom#xzoom).
