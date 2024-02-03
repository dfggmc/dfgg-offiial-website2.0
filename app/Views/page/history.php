<ul id="menu">
    <li><a href="/"><button class="BetterButton" data-menuanchor="home" class="active"><i class="fa-solid fa-house"></i>首页</button></a></li>
    <li><a href="#2024"><button class="BetterButton" data-menuanchor="2024">2024 - 当前</button></a></li>
    <li><a href="#2023"><button class="BetterButton" data-menuanchor="2023">2023</button></a></li>
    <li><a href="#2022"><button class="BetterButton" data-menuanchor="2022">2022</button></a></li>
    <?php
      require_once APPPATH . '/Views/public/toggle.php'
    ?>
</ul>

<div id="fullpage">
    <div class="section" style="text-align: center;">
        <div class="animate__animated animate__backInDown">
            <h1>dfgg Minecraft服务器官网 - 服务器历史</h1>
        </div>
    </div>

    <div class="section">
        <div class="section2-element" style="margin: 80px">
            <h2>2024 - 当前</h2>
        </div>
    </div>

    <div class="section">
        <div class="section3-element" style="margin: 80px">
            <h2>2023</h2>
        </div>
    </div>

    <div class="section">
        <div class="section4-element" style="margin: 80px">
            <h2>2022</h2>
        </div>
    </div>
</div>
<script>
    $('#fullpage').fullpage({
        anchors: ['home', '2024', '2023', '2022'],
        sectionsColor: ['#03A9F4', '#4BBFC3', '#7BAABE', '#64FFDA'],
        fitToSection: true,
        loopTop: true,
        loopBottom: true,
        menu: '#menu',
    });
    $(document).on('pjax:end', function() {
        $.fn.fullpage.destroy('all'); // 销毁之前的实例
        $('#fullpage').fullpage({
            anchors: ['home', '2024', '2023', '2022'],
            sectionsColor: ['#03A9F4', '#4BBFC3', '#7BAABE', '#64FFDA'],
            fitToSection: true,
            loopTop: true,
            loopBottom: true,
            menu: '#menu',
        });
    });
</script>