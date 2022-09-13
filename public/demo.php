<!DOCTYPE html>
<html class="light" style="--tg-viewport-height:100vh; --tg-viewport-stable-height:100vh;" data-lt-installed="true" lang="en">
<script>(function () {
        window['_docs_annotate_canvas_by_ext'] = 'kohfgcgbkjodfcfkcackpagifgbcmimk';
    })();</script>
<head>
	<title>Telegram Web App</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<meta name="viewport"
	      content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="MobileOptimized" content="176">
	<meta name="HandheldFriendly" content="True">
	<meta name="robots" content="noindex,nofollow">
	<script src="https://tg.dev/js/telegram-web-app.js?25"></script>
	<script>
        function setThemeClass() {
            document.documentElement.className = Telegram.WebApp.colorScheme;
        }

        Telegram.WebApp.onEvent('themeChanged', setThemeClass);
        setThemeClass();

	</script>
	<link href="https://tg.dev/css/bootstrap.min.css?3" rel="stylesheet">
	<link href="https://tg.dev/css/bootstrap-extra.css?2" rel="stylesheet">
	<link href="https://webappcontent.telegram.org/css/webappdemo.css?5" rel="stylesheet">
</head>
<body class="" style="--bg-color:undefined" data-new-gr-c-s-check-loaded="14.1079.0" data-gr-ext-installed="">
<section id="top_sect" class="second">
	<button id="main_btn" onclick="DemoApp.sendMessage(&#39;&#39;);" style="display: none;">Send «Hello, World!»
	</button>
	<button id="with_webview_btn" onclick="DemoApp.sendMessage(&#39;&#39;, true);" style="display: none;">Send «Hello,
		World!» with inline webview button
	</button>
	<button onclick="DemoApp.expand();">Expand Webview</button>
	<button onclick="DemoApp.toggleMainButton(this);">Hide Main Button</button>
	<input type="text" placeholder="Regular field">
	<div class="input" contenteditable="true" data-placeholder="Contenteditable field"></div>
	<div id="peer_wrap" style="display:none">
		<img id="peer_photo" class="chat_img" src="https://webappcontent.telegram.org/demo?mode=menu">
		<span id="peer_name"></span>
	</div>
	<div class="sect_row">Header: <select id="header_color_sel">
			<option value="bg_color" selected="">bg_color</option>
			<option value="secondary_bg_color">secondary_bg_color</option>
		</select></div>
	<div class="sect_row">Background: <input type="color" id="bg_color_input"> <select id="bg_color_sel">
			<option value="bg_color" selected="">bg_color</option>
			<option value="secondary_bg_color">secondary_bg_color</option>
			<option value="custom" id="bg_color_val">custom...</option>
		</select></div>
</section>
<section>
	<div id="btn_status" class="hint" style="display: none;">
	</div>
	<p>Test links:</p>
	<ul>
		<li><a id="regular_link" href="https://webappcontent.telegram.org/demo?nextpage=1">Regular link #1</a> (opens
			inside webview)
		</li>
		<li><a href="https://telegram.org/" target="_blank">target="_blank" link</a> (opens outside webview)</li>
		<li><a href="javascript:window.open(&#39;https://telegram.org/&#39;);">window.open() link</a> (opens outside
			webview)
		</li>
		<li><a href="https://t.me/like">LikeBot t.me link</a> (opens inside Telegram app)</li>
		<li>
			<a href="javascript:Telegram.WebApp.openTelegramLink(&#39;https://t.me/vote&#39;);">web_app_open_tg_link()</a>
			(opens inside Telegram app)
		</li>
		<li><a href="javascript:Telegram.WebApp.openLink(&#39;https://google.com/&#39;);">web_app_open_link()</a> (opens
			outside webview)
		</li>
		<li><a href="tg://resolve?domain=vote">VoteBot tg:// link</a> (does not open)</li>
	</ul>
	<p>Test permissions:</p>
	<ul>
		<li><a href="javascript:;" onclick="return DemoApp.requestLocation(this);">Request Location</a> <span></span>
		</li>
		<li><a href="javascript:;" onclick="return DemoApp.requestVideo(this);">Request Video</a> <span></span></li>
		<li><a href="javascript:;" onclick="return DemoApp.requestAudio(this);">Request Audio</a> <span></span></li>
	</ul>
	<p>Test alerts:</p>
	<div class="columns">
		<ul>
			<li><a href="javascript:;" onclick="alert(&#39;Hello!&#39;);">alert</a></li>
			<li><a href="javascript:;" onclick="confirm(&#39;Are you sure?&#39;);">confirm</a></li>
			<li><a href="javascript:;" onclick="prompt(&#39;How old are you?&#39;);">prompt</a></li>
		</ul>
		<ul>
			<li><a href="javascript:;" onclick="DemoApp.showAlert(&#39;Hello!&#39;);">showAlert</a></li>
			<li><a href="javascript:;" onclick="DemoApp.showConfirm(&#39;Are you sure?&#39;);">showConfirm</a></li>
			<li><a href="javascript:;" onclick="DemoApp.showPopup();">showPopup</a></li>
		</ul>
	</div>
	<p>Haptics:</p>
	<ul>
		<li>Impact: <a href="javascript:Telegram.WebApp.HapticFeedback.impactOccurred(&#39;heavy&#39;);">heavy</a>,
			&nbsp; <a href="javascript:Telegram.WebApp.HapticFeedback.impactOccurred(&#39;light&#39;);">light</a>,
			&nbsp; <a href="javascript:Telegram.WebApp.HapticFeedback.impactOccurred(&#39;medium&#39;);">medium</a>,
			&nbsp; <a href="javascript:Telegram.WebApp.HapticFeedback.impactOccurred(&#39;rigid&#39;);">rigid</a>,
			&nbsp; <a href="javascript:Telegram.WebApp.HapticFeedback.impactOccurred(&#39;soft&#39;);">soft</a><br><br>
		</li>
		<li>Notification: <a href="javascript:Telegram.WebApp.HapticFeedback.notificationOccurred(&#39;error&#39;);">error</a>,
			&nbsp; <a
					href="javascript:Telegram.WebApp.HapticFeedback.notificationOccurred(&#39;success&#39;);">success</a>,
			&nbsp; <a
					href="javascript:Telegram.WebApp.HapticFeedback.notificationOccurred(&#39;warning&#39;);">warning</a><br><br>
		</li>
		<li>Selection: <a href="javascript:Telegram.WebApp.HapticFeedback.selectionChanged();">changed</a><br><br></li>
	</ul>
	<pre><code id="webview_data">{}</code></pre>
	<div class="hint">
		Data passed to webview.
		<span id="webview_data_status" class="status_need">Checking hash...</span>
	</div>
	<pre><code id="theme_data">{}</code></pre>
	<div class="hint">
		Theme params
	</div>
	<div class="hint">
		Version: <span id="ver">6.0</span>,
		platform: <span id="platform">unknown</span>
	</div>
</section>
<div class="viewport-border" text="1920 x 880"></div>
<div class="viewport-stable_border" text="1920 x 880 | is_expanded: true"></div>
<script src="https://tg.dev/js/jquery.min.js"></script>
<script src="https://tg.dev/js/bootstrap.min.js"></script>
<script src="js/webappdemo.js?version=<?php echo filemtime('js/cafe.js'); ?>"></script>
<script>
    Telegram.WebApp.onEvent('themeChanged', function () {
        $('#theme_data').html(JSON.stringify(Telegram.WebApp.themeParams, null, 2));
    });

    $('#main_btn').toggle(!!DemoApp.initDataUnsafe.query_id);
    $('#with_webview_btn').toggle(!!DemoApp.initDataUnsafe.query_id && !DemoApp.initDataUnsafe.receiver);
    // $('#data_btn').toggle(!DemoApp.initDataUnsafe.query_id || !DemoApp.initDataUnsafe.receiver);
    $('#webview_data').html(JSON.stringify(DemoApp.initDataUnsafe, null, 2));
    $('#theme_data').html(JSON.stringify(Telegram.WebApp.themeParams, null, 2));
    $('#regular_link').attr('href', $('#regular_link').attr('href') + location.hash);
    $('#text_field').focus();

    $('#ver').text(Telegram.WebApp.version);
    $('#platform').text(Telegram.WebApp.platform);

    if (DemoApp.initDataUnsafe.receiver) {
        $('#peer_wrap').show();
        $('#peer_name').text(DemoApp.initDataUnsafe.receiver.first_name + ' ' + DemoApp.initDataUnsafe.receiver.last_name);
        if (DemoApp.initDataUnsafe.receiver.photo_url) {
            $('#peer_photo').attr('src', DemoApp.initDataUnsafe.receiver.photo_url);
        } else {
            $('#peer_photo').hide();
        }
    } else if (DemoApp.initDataUnsafe.chat) {
        $('#peer_wrap').show();
        $('#peer_name').text(DemoApp.initDataUnsafe.chat.title);
        if (DemoApp.initDataUnsafe.chat.photo_url) {
            $('#peer_photo').attr('src', DemoApp.initDataUnsafe.chat.photo_url);
        } else {
            $('#peer_photo').hide();
        }
    }

    DemoApp.checkInitData();

    DemoApp.init();

    function setViewportData() {
        $('.viewport-border').attr('text', window.innerWidth + ' x ' + round(Telegram.WebApp.viewportHeight, 2));
        $('.viewport-stable_border').attr('text', window.innerWidth + ' x ' + round(Telegram.WebApp.viewportStableHeight, 2) + ' | is_expanded: ' + (Telegram.WebApp.isExpanded ? 'true' : 'false'));
    }

    Telegram.WebApp.setHeaderColor('secondary_bg_color');
    Telegram.WebApp.onEvent('viewportChanged', setViewportData);
    setViewportData();


    var prev_bg_color_val = $('#bg_color_sel').val();
    $('#bg_color_input').val(Telegram.WebApp.backgroundColor);
    $('body').attr('style', '--bg-color:' + Telegram.WebApp.backgroundColor);
    $('#header_color_sel').val('secondary_bg_color');
    $('#header_color_sel').on('change', function (e) {
        var color_key = e.target.value;
        $('#top_sect').toggleClass('second', color_key == 'secondary_bg_color');
        Telegram.WebApp.setHeaderColor(color_key);
        $('body').attr('style', '--bg-color:' + Telegram.WebApp.backgroundColor);
    });
    $('#bg_color_input').on('change', function (e) {
        var color = e.target.value;
        $('#bg_color_val').text(color);
        $('#bg_color_sel').val('custom');
        prev_bg_color_val = $('#bg_color_sel').val();
        Telegram.WebApp.setBackgroundColor(color);
        $('body').attr('style', '--bg-color:' + Telegram.WebApp.backgroundColor);
    });
    $('#bg_color_sel').on('change', function (e) {
        var color_key = e.target.value;
        if (color_key == 'custom') {
            $('#bg_color_sel').val(prev_bg_color_val);
            $('#bg_color_input').focus().click();
        } else {
            $('#bg_color_val').text('custom...');
            Telegram.WebApp.setBackgroundColor(color_key);
            $('body').attr('style', '--bg-color:' + Telegram.WebApp.backgroundColor);
            $('#bg_color_input').val(Telegram.WebApp.backgroundColor);
            prev_bg_color_val = $('#bg_color_sel').val();
        }
    });
    Telegram.WebApp.onEvent('themeChanged', function () {
        $('#bg_color_input').val(Telegram.WebApp.backgroundColor);
        $('body').attr('style', '--bg-color:' + Telegram.WebApp.backgroundColor);
    });

</script>
</body>
</html>