<ul id="menu">
    <li><a href="/"><button class="BetterButton" data-menuanchor="home" class="active"><i class="fa-solid fa-house"></i>首页</button></a></li>
    <?php
    require_once APPPATH . '/Views/public/toggle.php'
    ?>
</ul>

<div id="fullpage">
    <div class="section" style="text-align: center;">
        <div class="animate__animated animate__backInDown">
            <h1>dfgg Minecraft服务器官网 - 服务器赞助名单</h1>
        </div>
    </div>
</div>
<script>
    $('#fullpage').fullpage({
        anchors: ['home'],
        sectionsColor: ['#03A9F4'],
        fitToSection: true,
        loopTop: true,
        loopBottom: true,
        menu: '#menu',
    });
    $(document).on('pjax:end', function() {
        $.fn.fullpage.destroy('all'); // 销毁之前的实例
        $('#fullpage').fullpage({
            anchors: ['home'],
            sectionsColor: ['#03A9F4'],
            fitToSection: true,
            loopTop: true,
            loopBottom: true,
            menu: '#menu',
        });
    });
</script>