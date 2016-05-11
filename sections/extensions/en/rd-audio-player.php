<h3>RD Audio Player</h3>
<p>Intense uses <b>RD Audio Player</b> extension for implementing audio player functionality.</p>

<h4>Adding audio player to the page</h4>
<p>To add audio player to the target HTML page, use the following marking:</p>

<pre><code>
        &lt;div data-rd-audio-playlist-name="audio-playlist" class="rd-audio"&gt;
            &lt;div class="rd-audio-controls"&gt;
                &lt;div class="rd-audio-controls-left"&gt;
                    &lt;a href="#" class="rd-audio-prev mdi mdi-fast-forward rd-audio-icon"&gt;&lt;/a&gt;
                    &lt;a href="#" class="rd-audio-play-pause mdi mdi-play rd-audio-icon has-controls"&gt;&lt;/a&gt;
                    &lt;a href="#" class="rd-audio-next mdi mdi-fast-forward rd-audio-icon"&gt;&lt;/a&gt;
                &lt;/div&gt;
                &lt;div class="rd-audio-progress-bar-wrap"&gt;
                    &lt;div class="rd-audio-progress-bar"&gt;&lt;/div&gt;
                    &lt;div class="rd-audio-time"&gt;
                        &lt;span class="rd-audio-current-time"&gt;00:00&lt;/span&gt;
                        &lt;span class="rd-audio-time-divider"&gt;/&lt;/span&gt;
                        &lt;span class="rd-audio-duration"&gt;00:00&lt;/span&gt;
                    &lt;/div&gt;
                    &lt;div class="rd-audio-title-wrap"&gt;
                        &lt;span class="rd-audio-author"&gt;&lt;/span&gt;
                        &lt;span class="rd-audio-title-divider"&gt;- &lt;/span&gt;
                        &lt;span class="rd-audio-title"&gt;&lt;/span&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;a href="#" class="rd-audio-volume mdi mdi-volume-high rd-audio-icon"&gt;&lt;/a&gt;
                &lt;div class="rd-audio-volume-bar"&gt;&lt;/div&gt;
                &lt;div class="rd-audio-controls-right"&gt;
                    &lt;a href="#" class="rd-audio-playlist-button rd-audio-icon mdi mdi-dots-horizontal"&gt;&lt;/a&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    </code></pre>

<p>You can alter this marking in order to change the appearance of the video player. To make player work, you just need to add classes for certain elements.
    You will find a list of these classes below in a class map:</p>

<h4>Audio player class map</h4>
    q
<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-prev</dt>
            <dd>the player switches to the previous track;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-play-pause</dt>
            <dd>play/pause  button;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-next</dt>
            <dd>next track button;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-stop</dt>
            <dd>stop button;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-progress-bar</dt>
            <dd>playback progress bar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-progress-bar-slider</dt>
            <dd>playback progress bar slider;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-duration</dt>
            <dd>displays track duration;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-current-time</dt>
            <dd>displays current playback time;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-title</dt>
            <dd>displays track title;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-author</dt>
            <dd>displays track author;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-volume</dt>
            <dd>a button to enable\disable sound;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-volume-bar</dt>
            <dd>volume bar;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-volume-bar-slider</dt>
            <dd>volume bar slider;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>.rd-audio-playlist</dt>
            <dd>playlist.</dd>
        </dl>
    </li>
</ul>

<h4>Changing the track in audio player</h4>
<p>To change the track, specify the new audio track path without the format in <b>'data-rd-audio-src'</b> attribute. This attribute won’t work, if you have a playlist:</p>
<pre><code>
        &lt;div data-rd-audio-src="path/to/audio" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Adding a playlist to the audio player</h4>

<p>This plugin supports creating an unlimited number of playlists on the page.To load a certain playlist, add the <b>'data-rd-audio-playlist-name'</b> attribute and specify the playlist name:</p>

<pre><code>
        &lt;div data-rd-audio-playlist-name="name" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
        ...
        ...
        &lt;ul data-rd-audio-playlist="name"&gt;
            ...
        &lt;/ul&gt;
    </code></pre>
<p>The main principles of creating a playlist are specified below.
</p>

<h4>Changing audio title in audio player</h4>


<p>To change the title of the audio, specify the audio title in <b>'data-rd-audio-title'</b> attribute. This attribute won’t work, if you have a playlist:</p>
<pre><code>
        &lt;div data-rd-audio-title="Your Title" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Changing the author of the audio track title in audio player</h4>

<p>To change the author of the track, specify the author in <b>'data-rd-audio-author'</b> attribute. This attribute won’t work, if you have a playlist:</p>

<pre><code>
        &lt;div data-rd-audio-author="Your Author" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>

<h4>Track autoplay</h4>

<p>To enable track autoplay, add the <b>'data-rd-audio-autoplay'</b> attribute with <b>'true'</b> value: </p>
<pre><code>
        &lt;div data-rd-audio-autoplay="true" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Audio loop</h4>

<p>To enable audio loop, add the <b>'data-rd-audio-loop'</b> attribute with <b>'true'</b> value: </p>

<pre><code>
        &lt;div data-rd-audio-loop="true" class="rd-audio"&gt;
            ...
        &lt;/div&gt;
    </code></pre>
<h4>Adding a playlist to the audio player</h4>

<p>HTML marking for creating a playlist looks the following way:</p>

<pre><code>
        &lt;ul data-rd-audio-playlist="audio-playlist" data-rd-audio-play-on="li" class="rd-audio-playlist"&gt;
            &lt;li data-rd-audio-src="path/to/audio1" data-rd-audio-title="title 1"
                                                                        data-rd-audio-author="author 1"&gt;
                ...
            &lt;/li&gt;
            &lt;li data-rd-audio-src="path/to/audio2" data-rd-audio-title="title 2"
                                                                        data-rd-audio-author="author 2"&gt;
                ...
            &lt;/li&gt;
        &lt;/ul&gt;
    </code></pre>

<p>The marking inside the element can take any form.
    To add a url of a video file with list elements, use the following attributes:
</p>

<ul class="marked-list">
    <li>
        <dl class="inline-term">
            <dt>data-rd-audio-src</dt>
            <dd>path to the audio file;</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-rd-audio-title</dt>
            <dd>audio track title (an additional attribute, necessary for displaying the audio track title in the player);</dd>
        </dl>
    </li>
    <li>
        <dl class="inline-term">
            <dt>data-rd-audio-author</dt>
            <dd>track author (an additional attribute, necessary for displaying the audio track author in the player).</dd>
        </dl>
    </li>
</ul>
