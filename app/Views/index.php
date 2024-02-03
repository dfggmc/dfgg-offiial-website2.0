<div id="page-link">
    <link rel="stylesheet" href="/resources/css/index.css">
    <link rel="stylesheet" href="/resources/css/server-photo.css">
 </div>

<ul id="menu">
    <li><a href="/"><button class="BetterButton" data-menuanchor="home" class="active"><i class="fa-solid fa-house"></i>首页</button></a></li>
    <li><a href="#about"><button class="BetterButton" data-menuanchor="about">关于</button></a></li>
    <li><a href="#link"><button class="BetterButton" data-menuanchor="link">一些链接</button></a></li>
    <li><a href="#friends"><button class="BetterButton" data-menuanchor="friends">友链</button></a></li>
    <li><a href="#photos"><button class="BetterButton" data-menuanchor="photos">服务器截图</button></a></li>
    <?php
      require_once APPPATH . '/Views/public/toggle.php'
     ?>
</ul>

<div id="fullpage">
    <div class="section" style="text-align: center;">
        <div class="animate__animated animate__backInDown">
            <h1>欢迎来到dfgg Minecraft服务器官网!</h1>
            <h2>一个使用 <i class="ignore">Cuberite_dfgg</i> 作为服务端的1.12.2创造服务器</h2>
        </div>
    </div>

    <div class="section">
        <div class="section2-element" style="margin: 80px">
            <h2>什么？机顶盒也能开服务器？？？！</h2>
            <p style="font-size: 2em;">没错而且还很稳定!</p><img style="max-width: 500px; max-height: 300px;" src="/resources/image/wokao.jpg" alt="我靠">
             <br>
             <iframe src="https://state.dfggmc.eu.org/servers" width="25%" height="76px" frameborder="0"></iframe>
        </div>
    </div>

    <div class="section">
        <div class="section3-element">
            <h2 style="text-align: center;">关于服务器的链接</h2>
            <div style="
                display: flex;
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
                ">
                <a href="http://qm.qq.com/cgi-bin/qm/qr?_wv=1027&k=qngv2g9NvWoMA6MKs-WCtpfPKt8G2VDH&authKey=f2KlfjKOIaMmaVU%2Bn8QzP%2BuBb1%2BzEGtL7X5gJ66QFH%2F7O6NiH5diRBK7I0IsHA%2Bc&noverify=0&group_code=132939895" target="_blank">
                    <button class="BetterButton">
                        加入 QQ 群
                    </button>
                </a>
                <a href="https://discord.gg/jWCdnXB5nR" target="_blank">
                    <button class="BetterButton">
                        加入 Discord 聊天
                    </button>
                </a>
                <a href="https://bbs.dfggmc.top" target="_blank">
                    <button class="BetterButton">
                        论坛
                    </button>
                </a>
            </div>

        </div>
    </div>

    <div class="section">
        <div class="section2-element" style="margin: 80px">
            <h2>友链</h2>
            <div class="section2-element-content">
                <a href="https://peg195.eu.org/" target="_blank" rel="noopener noreferrer">
                    <div class="section2-element-content-item">
                        <img src="https://imag.xcccx.top/uploads/2024/02/02/65bce58830205.gif" alt="peg195的博客">
                        <p>peg195的博客</p>
                    </div>
                </a>
                <a href="https://xcccx.top" target="_blank" rel="noopener noreferrer">
                    <div class="section2-element-content-item">
                        <img src="https://imag.xcccx.top/uploads/2024/02/02/65bce58322f63.png" alt="xcccx的博客">
                        <p>xcccx的博客</p>
                    </div>
                </a>
                <a href="https://maserver.netlify.app/" target="_blank" rel="noopener noreferrer">
                    <div class="section2-element-content-item">
                        <img src="https://maserver.netlify.app/images/brand.svg" alt="M&A互助公社 服务器">
                        <p>M&A互助公社 服务器</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="slide server-photo-slide1">
            <p style="margin: 80px;">服务器截图 - 主城</p>
        </div>
        <div class="slide server-photo-slide2">
            <p style="margin: 80px;">服务器截图 - 主城黄昏</p>
        </div>
        <div class="slide server-photo-slide3">
            <p style="margin: 80px;">服务器截图 - 2024新春截图</p>
        </div>
    </div>
</div>
<script>
    $('#fullpage').fullpage({
        anchors: ['home', 'about', 'link', 'friends', 'photos'],
        sectionsColor: ['#03A9F4', '#4BBFC3', '#7BAABE', '#64FFDA', '#f90'],
        fitToSection: true,
        loopTop: true,
        loopBottom: true,
        menu: '#menu',
    });

    $(document).on('pjax:end', function() {
        $.fn.fullpage.destroy('all'); // 销毁之前的实例
        $('#fullpage').fullpage({
            anchors: ['home', 'about', 'link', 'friends', 'photos'],
            sectionsColor: ['#03A9F4', '#4BBFC3', '#7BAABE', '#64FFDA', '#f90'],
            fitToSection: true,
            loopTop: true,
            loopBottom: true,
            menu: '#menu',
        });
    });
</script>