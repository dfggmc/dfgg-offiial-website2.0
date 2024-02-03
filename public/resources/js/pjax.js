/**----------------------
 *   ---- 全站Pjax ----
 * ---------------------*/
$(document).pjax('a:not(a[target="_blank"],a[no-pjax])', {
    container: '#mian',
    fragment: '#mian',
    timeout: 8000
});

$(document).on('pjax:send', function () {
    NProgress.start();
});

$(document).on('pjax:end', function () {
    NProgress.done();
    translate.execute(); //进行翻译 
});

$(document).on('pjax:error', function (e, s) {
    if (s == 'timeout') {
        NProgress.done();
        alert('加载超时，请检查网络');
        e.preventDefault();
    }
});