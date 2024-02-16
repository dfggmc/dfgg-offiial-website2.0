/**
 * 切换元素状态
 * @param {string} element 元素
 */
function toggleElement(element) {
    var element = $(element);
    var isShown = !element.hasClass('show');

    if (isShown) {
        element.removeClass('notShow').addClass('show');
    } else {
        element.removeClass('show').addClass('notShow');
    }
}
