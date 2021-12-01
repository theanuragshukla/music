<!DOCTYPE html>
<html lang="en" >
    <head>
    	<link rel="icon" href="logo.png" type="image/x-icon">
        <title>Music Player</title>
        <meta name="viewport" content="height=device-height, width=device-width,initial-scale=1.0,user-scalable=no ,minimum-scale=1, maximum-scale=1" />
        <meta name="title" content="Music Player">
        <meta name="description" content="A music Player Built as a Hobby Project. Here You can Play Music of 2 Languages i.e., HINDI and ENGLISH in 2 audio qualities i.e, 44Kbps and 128kbps.">
        <meta name="keywords" content="music,musicplayer,songs,hindi,english,128kbps,spotify">
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="author" content="Anurag Shukla | https://github.com/itsanuragshukla">

        <link rel="stylesheet" href="style.css">
<!--    <script src ="jquery.js"></script>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body id="body">

        <div class="nav">
            <div class="hambar" onclick="openSideNav()">
                <svg class="ham ham6" viewBox="0 0 100 100" onclick="this.classList.toggle('active')">
                    <path class="line top" d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272" />
                    <path class="line middle" d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272" />
                    <path class="line bottom" d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272" />
                </svg>
            </div>
            <div class ="nameAndSearch">
                <input oninput="search()" class="searchActive"placeholder="Search Songs..." id="searchBar">
                <div class ="name" id="name" data-target-resolver></div>
            </div>
            <div onclick="openSearch()">
                <svg width="16" height="16" fill="#66fcf1" class="search" viewBox="0 0 16 16" id="search">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </div>
        </div>

        <div class ="categories">

            <div class ="category activeCategory" onclick="switchCategory(this)" id="english">English</div>
         <div class ="category" onclick="switchCategory(this)" id="hindi">Hindi</div>
        </div>


        <div class="main">
            <div class ="content" id="content"></div>
        </div>

        <div class="footer">
            <div class="cardlist">
                <!--<div class ="footerart" onclick="slideUp($('#player' ))"></div>-->
                <div class ="footerdetails" onclick="slideUp($('#player' ))">
                    <div class="footertitle"></div>
                    <div class="footerauthor"></div>
                </div>
                <div class="footerseekBar">
                    <input class ="footer_seek_slider" type="range" min="0" max="100" step = "any" value="0" onchange="seekTo(this)">
                    <div class ="footertime">
                        <div id="footercurr">00:00</div>
                        <div id="footerdur">00:00</div>
                    </div>
                </div>
                <div class ="footerbtn" >
                    <svg class="playbtn" id="footerplaybtn" viewBox="0 0 16 16" onclick="play()">
                        <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                    </svg>
                </div>
            </div>
        </div>
        <div id="player" onclick ="">
            <div class ="bottomControl">

            <svg onclick ="slideUp(this.parentElement.parentElement)" id="up" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
            </svg>
            <div class="selectQuality">
            <label for ="quality">Quality : </label>
            <select id="quality" class="quality" onchange="qChange(this)">
            <option selected value="44">44kbps</option>
            <option value="128">128kbps</option>
            </select>
            </div>
            </div>
            <div class="topControl">
                <div class="prev">
                    <svg viewBox="0 0 16 16" onclick="prev()">
                        <path fill-rule="evenodd" d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z"/>
                        <path d="M.904 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.692-1.01-1.233-.696L.904 7.304a.802.802 0 0 0 0 1.393z"/>
                    </svg>
                </div>
                <div class="albumart" onclick ="">
                    <img id="artwork" alt="art" src="">
                </div>
                <div class="next">
                    <svg viewBox="0 0 16 16" onclick="next()">
                        <path fill-rule="evenodd" d="M.5 3.5A.5.5 0 0 0 0 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z"/>
                        <path d="M.904 8.697l6.363 3.692c.54.313 1.233-.066 1.233-.697V4.308c0-.63-.692-1.01-1.233-.696L.904 7.304a.802.802 0 0 0 0 1.393z"/>
                    </svg>

                </div>
            </div>
            <div class ="middleControl">
                <div id="title" class="title"></div>
                <div id="artist" class ="artist"></div>
                <div class="seekBar ">
                    <input class ="seek_slider" type="range" min="0" max="100" step = "any" value="0" onchange="seekTo(this)">
                </div>
                <div class ="time">
                    <div id="curr">00:00</div>
                    <div id="dur">00:00</div>
                </div>
            </div>
            <div class ="bottomControl">
                <svg class="playbtn" id="playbtn" viewBox="0 0 16 16" onclick="play()">
                    <path d="M11.596 8.697l-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                </svg>
                <div class="volumeseekBar seekbar ">
                <svg class="volUp" viewBox="0 0 16 16">
                <path d="M9 4a.5.5 0 0 0-.812-.39L5.825 5.5H3.5A.5.5 0 0 0 3 6v4a.5.5 0 0 0 .5.5h2.325l2.363 1.89A.5.5 0 0 0 9 12V4zm3.025 4a4.486 4.486 0 0 1-1.318 3.182L10 10.475A3.489 3.489 0 0 0 11.025 8 3.49 3.49 0 0 0 10 5.525l.707-.707A4.486 4.486 0 0 1 12.025 8z"/>

                </svg>
                    <input class ="volume_slider seek_slider" type="range" min="0" max="100" step = "any" value="100" onchange="setVolume(this.value)">
                <svg class="volUp" viewBox="0 0 16 16">
                <path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
                <path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
                <path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06z"/>
                </svg>
                </div>
                <svg class = "playbtn" onclick="stop()" viewBox="0 0 16 16" id="stop" fill="#0b0c10">
                    <path d="M5 3.5h6A1.5 1.5 0 0 1 12.5 5v6a1.5 1.5 0 0 1-1.5 1.5H5A1.5 1.5 0 0 1 3.5 11V5A1.5 1.5 0 0 1 5 3.5z"/>
                </svg>
            </div>
        </div>
        <div class="sideNav" id="sideNav"></div>
        <div id="pre" class="preloader">
        <div class="loaders"></div>
        </div>
		<!--song urls-->
		<script src="./src/english44.js"></script>
		<script src ="./src/hindi44.js"></script>
		<script src="./src/english128.js"></script>
		<script src ="./src/hindi128.js"></script>
		
		<!-- song data urls-->
		<script src="dataeng.js"></script>
		<script src="data.js"></script>
		
		<!--artwork-->
		<script src ="./art/artHi.js"></script>
		<script src ="./art/artEng.js"></script>
		
		<script src="resolver.min.js"></script>
		<script src="script.js"></script>
    </body>
</html>