<?php

class CommentBoxHooks {
    static function onSkinAfterContent( &$data, $skin )  {
        $url = "https://" . $_SERVER['HTTP_HOST'] . "/" . (@$_GET['title'] ?? @substr($_SERVER['REQUEST_URI'], 1));
        $data = <<<HTML
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
<script defer="defer" src="https://discuzz.mph.am/static/js/main.js"></script>
<x-discuzz 
        url="$url" 
        baseUrl="https://discuzz.mph.am/" 
        theme="light" 
        service='{"apiKey":"AIzaSyDm837cbdbvkrAdYL9TAqUF3iML6UvZXk4","authDomain":"fire-talk-88.firebaseapp.com","projectId":"fire-talk-88","storageBucket":"fire-talk-88.appspot.com","messagingSenderId":"719566664522","appId":"1:719566664522:web:e1a9d26be22387e55b47b3"}' 
        auths='["google", "apple", "facebook", "github", "twitter", "microsoft", "yahoo"]' 
></x-discuzz>
HTML;
		return true;
	}

	static function onSkinAfterBottomScripts( $skin, &$text ) {
        $text .= <<<HTML

HTML;
		return true;
	}
}
