var kindEditorJs = $("script#kindeditor_require_js");
var kindEditorPath = kindEditorJs.attr('src').split('/');
kindEditorPath = kindEditorPath.slice(0, kindEditorPath.length - 1).join('/');
document.write('<script type="text/javascript" src="' + kindEditorPath + '/kindeditor.js" ></script>');
document.write('<script type="text/javascript" src="' + kindEditorPath + '/lang/zh_CN.js" ></script>');