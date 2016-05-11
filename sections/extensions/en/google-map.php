<h3>RD Google Maps</h3>
<h6>Intense uses <b>RD Google Maps</b> plugin for implementing Google Maps.
  Plugin supports the following settings:</h6>
<ul class="marked-list">
    <li>Changing map coordinates;</li>
    <li>Adding custom map markers;</li>
    <li>Adding pop-up windows for the markers;</li>
    <li>Custom map styling.</li>
</ul>

<h4>Changing map coordinates</h4>

<p>To change map coordinates to your custom ones, specify 2 attributes in .html file in the corresponding section:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div id="google-map" class="map_model"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<p><b>data-x</b> (northern longitude) and <b>data-y</b> (western latitude). As a result, you'll get the following lines of code:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div class="rd-google-map"&gt;
            &lt;div id="google-map" class="map_model" data-x="-73.9994068" data-y="40.643180"&gt;
                ...
            &lt;/div&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<p>You can find out the coordinates with the help of Google Maps service. To do this, right-click the target map sector and select the "What's there?" option.
  In the pop-up window, you 'll the needed to copy coordinates below the location name, where the first number is <b>data-x</b> and the second one is <b>data-y</b>.</p>
<p class="alert alert-warning">Attention: it is often the case, that the coordinates get mixed. Then, the map will display a wrong address in the opposite hemisphere.</p>

<h4>How to add a map marker</h4>
<p>To add a custom map marker, add a new element to the list in the .html file:</p>
<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;ul class="map_locations"&gt;
            ...
        &lt;/ul&gt;
        ...
    </code></pre>

<p>and define two data attributes in it: <b>data-x</b> (longitude) and <b>data-y</b> (latitude). As a result, you’ll get:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;ul class="map_locations"&gt;
            &lt;li data-x="-73.9994068" data-y="40.643180"&gt;&lt;/li&gt;
        &lt;/ul&gt;
        ...
    </code></pre>

<p>If you do not specify the coordinates, the script will ignore an empty list item and the marker will not be displayed.</p>

<p>The full code example looks the following way:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div class="rd-google-map"&gt;
            &lt;div id="google-map" class="map_model"&gt;&lt;/div&gt;

            &lt;ul class="map_locations"&gt;
                &lt;li data-x="-73.9874068" data-y="40.643180"&gt;
                    &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                        &lt;span&gt;800 2345-6789&lt;/span&gt;
                    &lt;/p&gt;
                &lt;/li&gt;
                &lt;li data-x="-72.9874068" data-y="39.643180"&gt;
                    &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                        &lt;span&gt;800 2345-6789&lt;/span&gt;
                    &lt;/p&gt;
                &lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    </code></pre>
<p>where:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;li data-x="-73.9874068" data-y="40.643180"&gt;
            &lt;p&gt; 9870 St Vincent Place, Glasgow, DC 45 Fr 45.
                &lt;span&gt;800 2345-6789&lt;/span&gt;
            &lt;/p&gt;
        &lt;/li&gt;
        ...
    </code></pre>
<p>is the new map marker.</p>

<h4>Adding marker popup windows</h4>

<p>To add a marker popup window, just add the pop-up window content to the corresponding item of the map markers list:</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;li data-x="-73.9994068" data-y="40.643180" &gt;
            ...
        &lt;/li&gt;
        ...
    </code></pre>

<p>As a result, you'll get the following lines of code :</p>

<pre><code>
        &lt;!-- RD Google Map--&gt;
        ...
        &lt;li data-x="-73.9994068" data-y="40.643180" &gt;
            Our office
        &lt;/li&gt;
        ...
    </code></pre>

<h4>Changing map styling</h4>
<p>RD Google Map supports many map styling variants. Some ready-made styling solution can be found on the following website:<a href="https://snazzymaps.com/">https://snazzymaps.com/.</a></p>

<p>On this website, copy the set of styles you like to the <b>'data-style'</b> attribute of the map on the target *.html page.</p>
<pre><code>
        &lt;!-- RD Google Map--&gt;
        &lt;div id="google-map" class="map_model" data-styles='Your Map Styles'&gt;
            ...
        &lt;/div&gt;
    </code></pre>