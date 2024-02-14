/**
 * 切换元素状态
 * @param {string} elementId 元素的ID
 */
function toggleElement(elementId) {
    var element = $('#' + elementId);
    var isShown = !element.hasClass('show');

    if (isShown) {
        element.removeClass('notShow').addClass('show');
    } else {
        element.removeClass('show').addClass('notShow');
    }
}
