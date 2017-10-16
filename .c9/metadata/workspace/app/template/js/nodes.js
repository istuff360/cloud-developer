{"filter":false,"title":"nodes.js","tooltip":"/app/template/js/nodes.js","undoManager":{"mark":5,"position":5,"stack":[[{"start":{"row":0,"column":0},"end":{"row":114,"column":0},"action":"insert","lines":["/**"," * Module - nodes"," * "," * @usage:  load.script('/js/module/nodes.js', function(){});"," */","/*global $, load, ace*/","var nodes = (function() {","","    var init = function(options) {","","        var textarea = $('textarea[name=\"source\"]').hide();","        var editor = ace.edit(\"source\");","        editor.getSession().setUseWorker(false);","        editor.setTheme(\"ace/theme/eclipse\");","        editor.getSession().setMode(\"ace/mode/php\");","","        editor.getSession().setValue(textarea.val());","        editor.getSession().on('change', function() {","            textarea.val(editor.getSession().getValue());","        });","","        $(\"#fileList\").simpleFileBrowser({","            json: options.files,","            path: '/',","            view: 'details',","            select: false,","            breadcrumbs: true,","            onSelect: function(obj, file, folder, type) {","                $('button.new-file').data('folder', folder);","            },","            onOpen: function(obj, file, folder, type) {","                if (type == 'file') {","                    $('.remove-file').removeClass('hidden').data('file', folder + '/' + file);","                    $('.save-file').removeClass('hidden').data('file', folder + '/' + file);","                    $('.new-file').data('file', folder + '/' + file);","","                    if (!folder) {","                        folder = '';","                    }","                    else {}","","                    loadFile(folder + '/' + file);","                }","                else {","                    $('.remove-file').addClass('hidden');","                    $('.save-file').addClass('hidden');","                    $('button.new-file').data('folder', folder);","                }","                $('.sfbBreadCrumbs li').first().html('/var/www/html');","            }","        });","","        function loadFile(path) {","            $.get('http://phive.free.lxd.systems/nodes/file/' + options.route_id + path,","                function(data, status) {","                    textarea.val(data);","                    editor.getSession().setValue(data);","                    $(\"#select\").html(data);","                });","        }","","        $(\"input[name='path']\").on(\"change\", function() {","            var input = $(this);","","            $(\"#example1\").simpleFileBrowser(\"chgOption\", {","                path: input.val()","            });","            $(\"#example1\").simpleFileBrowser(\"redraw\");","        });","","        $('button.remove-file').on('click', function(e) {","            e.preventDefault();","            if (!$(this).data('file')) {","                $(this).data('file', '');","            }","            $.get('http://phive.free.lxd.systems/nodes/file/' + options.route_id + $(this).data('file') + '?del=1',","                function(data, status) {","                    window.location = '/nodes/view/' + options.route_id;","                });","        });","","        $('button.save-file').on('click', function(e) {","            e.preventDefault();","            if (!$(this).data('file')) {","                $(this).data('file', '');","            }","            $.post('http://phive.free.lxd.systems/nodes/file/' + options.route_id + $(this).data('file') + '?save=1', {","                    data: editor.getSession().getValue()","                },","                function(data, status) {","                    //window.location = '';","                });","        });","","        $('button.new-file').on('click', function(e) {","            e.preventDefault();","            if (!$(this).data('folder')) {","                $(this).data('folder', '');","            }","            var new_file = $(this).data('folder') + '/' + $('#new-file-name').val();","","            $.get('http://phive.free.lxd.systems/nodes/file/' + options.route_id + new_file,","                function(data, status) {","                    window.location = '/nodes/view/' + options.route_id;","                });","        });","","        $('.sfbBreadCrumbs').first('li').html('/var/www/html');","    };","","    return {","        init: init","    };","})();",""],"id":1}],[{"start":{"row":21,"column":23},"end":{"row":21,"column":40},"action":"remove","lines":["simpleFileBrowser"],"id":2},{"start":{"row":21,"column":23},"end":{"row":21,"column":34},"action":"insert","lines":["fileBrowser"]},{"start":{"row":64,"column":27},"end":{"row":64,"column":44},"action":"remove","lines":["simpleFileBrowser"]},{"start":{"row":64,"column":27},"end":{"row":64,"column":38},"action":"insert","lines":["fileBrowser"]},{"start":{"row":67,"column":27},"end":{"row":67,"column":44},"action":"remove","lines":["simpleFileBrowser"]},{"start":{"row":67,"column":27},"end":{"row":67,"column":38},"action":"insert","lines":["fileBrowser"]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":11},"action":"insert","lines":["// "],"id":3},{"start":{"row":11,"column":8},"end":{"row":11,"column":11},"action":"insert","lines":["// "]},{"start":{"row":12,"column":8},"end":{"row":12,"column":11},"action":"insert","lines":["// "]},{"start":{"row":13,"column":8},"end":{"row":13,"column":11},"action":"insert","lines":["// "]},{"start":{"row":14,"column":8},"end":{"row":14,"column":11},"action":"insert","lines":["// "]},{"start":{"row":16,"column":8},"end":{"row":16,"column":11},"action":"insert","lines":["// "]},{"start":{"row":17,"column":8},"end":{"row":17,"column":11},"action":"insert","lines":["// "]},{"start":{"row":18,"column":8},"end":{"row":18,"column":11},"action":"insert","lines":["// "]},{"start":{"row":19,"column":8},"end":{"row":19,"column":11},"action":"insert","lines":["// "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":11},"action":"remove","lines":["// "],"id":4},{"start":{"row":11,"column":8},"end":{"row":11,"column":11},"action":"remove","lines":["// "]},{"start":{"row":12,"column":8},"end":{"row":12,"column":11},"action":"remove","lines":["// "]},{"start":{"row":13,"column":8},"end":{"row":13,"column":11},"action":"remove","lines":["// "]},{"start":{"row":14,"column":8},"end":{"row":14,"column":11},"action":"remove","lines":["// "]},{"start":{"row":16,"column":8},"end":{"row":16,"column":11},"action":"remove","lines":["// "]},{"start":{"row":17,"column":8},"end":{"row":17,"column":11},"action":"remove","lines":["// "]},{"start":{"row":18,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["// "]},{"start":{"row":19,"column":8},"end":{"row":19,"column":11},"action":"remove","lines":["// "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":11},"action":"insert","lines":["// "],"id":5},{"start":{"row":11,"column":8},"end":{"row":11,"column":11},"action":"insert","lines":["// "]},{"start":{"row":12,"column":8},"end":{"row":12,"column":11},"action":"insert","lines":["// "]},{"start":{"row":13,"column":8},"end":{"row":13,"column":11},"action":"insert","lines":["// "]},{"start":{"row":14,"column":8},"end":{"row":14,"column":11},"action":"insert","lines":["// "]},{"start":{"row":16,"column":8},"end":{"row":16,"column":11},"action":"insert","lines":["// "]},{"start":{"row":17,"column":8},"end":{"row":17,"column":11},"action":"insert","lines":["// "]},{"start":{"row":18,"column":8},"end":{"row":18,"column":11},"action":"insert","lines":["// "]},{"start":{"row":19,"column":8},"end":{"row":19,"column":11},"action":"insert","lines":["// "]}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":11},"action":"remove","lines":["// "],"id":6},{"start":{"row":11,"column":8},"end":{"row":11,"column":11},"action":"remove","lines":["// "]},{"start":{"row":12,"column":8},"end":{"row":12,"column":11},"action":"remove","lines":["// "]},{"start":{"row":13,"column":8},"end":{"row":13,"column":11},"action":"remove","lines":["// "]},{"start":{"row":14,"column":8},"end":{"row":14,"column":11},"action":"remove","lines":["// "]},{"start":{"row":16,"column":8},"end":{"row":16,"column":11},"action":"remove","lines":["// "]},{"start":{"row":17,"column":8},"end":{"row":17,"column":11},"action":"remove","lines":["// "]},{"start":{"row":18,"column":8},"end":{"row":18,"column":11},"action":"remove","lines":["// "]},{"start":{"row":19,"column":8},"end":{"row":19,"column":11},"action":"remove","lines":["// "]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":114,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":1019,"mode":"ace/mode/javascript"}},"timestamp":1502198917326,"hash":"76221cf60b25c608c9b4158b55e8b7d6d44dde1f"}