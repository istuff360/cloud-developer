{"filter":false,"title":"ajax.php","tooltip":"/app/module/cms/view/ajax.php","undoManager":{"mark":45,"position":45,"stack":[[{"start":{"row":9,"column":0},"end":{"row":26,"column":71},"action":"remove","lines":["","        <!-- Bootstrap core CSS -->","        <link href=\"/css/bootstrap.min.css?developer\" rel=\"stylesheet\" />","","        <!-- Animation library for notifications -->","        <link href=\"/css/animate.min.css?developer\" rel=\"stylesheet\"/>","","        <!--  Paper Dashboard core CSS -->","        <link href=\"/css/paper-dashboard.css?developer\" rel=\"stylesheet\"/>","","        <!--  Cloud Developer App CSS -->","        <link href=\"/css/app.css?developer\" rel=\"stylesheet\" />","","        <!--  Fonts and icons -->","        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css\" rel=\"stylesheet\">","        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>","        <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css\" integrity=\"sha256-e47xOkXs1JXFbjjpoRr1/LhVcqSzRmGmPqsrUQeVs+g=\" crossorigin=\"anonymous\" />","        <link href=\"/css/themify-icons.css?developer\" rel=\"stylesheet\">"],"id":2}],[{"start":{"row":10,"column":8},"end":{"row":10,"column":32},"action":"remove","lines":["<?= $f3->decode($css) ?>"],"id":3}],[{"start":{"row":13,"column":8},"end":{"row":82,"column":22},"action":"remove","lines":["<div class=\"wrapper\">","            <div class=\"sidebar\" data-background-color=\"<?= ($f3->get('setting.side_nav_color') == 'light' ? 'white' : 'black') ?>\" data-active-color=\"<?= $f3->get('setting.active_color') ?>\">","                <div class=\"sidebar-wrapper\">","                    <div class=\"logo\">","                        <a href=\"/\" class=\"simple-text\">","                            <i class=\"fa fa-cloud\"></i> <?= $meta['name'] ?>","                        </a>","                    </div>","                    <ul class=\"nav\">","                        <?php if (!empty($_SESSION['developer'])): ?>","                        <li<?= ($PATH == '/admin' ? ' class=\"active\"' : '') ?>><a href=\"/admin\" class=\"ajax-link\"><i class=\"fa fa-fw fa-dashboard\"></i><p>Dashboard</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/module')) === '/admin/module' ? ' class=\"active\"' : '') ?>><a href=\"/admin/module\" class=\"ajax-link\"><i class=\"fa fa-fw fa-folder-o\"></i><p>Modules</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/page')) === '/admin/page' ? ' class=\"active\"' : '') ?>><a href=\"/admin/page\" class=\"ajax-link\"><i class=\"fa fa-fw fa-file\"></i><p>Pages</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/menu')) === '/admin/menu' ? ' class=\"active\"' : '') ?>><a href=\"/admin/menu\" class=\"ajax-link\"><i class=\"fa fa-fw fa-list\"></i><p>Menu</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/objects')) === '/admin/objects' ? ' class=\"active\"' : '') ?>><a href=\"/admin/objects\" class=\"ajax-link\"><i class=\"fa fa-fw fa-code\"></i><p>Objects</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/snippet')) === '/admin/snippet' ? ' class=\"active\"' : '') ?>><a href=\"/admin/snippet\" class=\"ajax-link\"><i class=\"fa fa-fw fa-code\"></i><p>Snippets</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/template')) === '/admin/template' ? ' class=\"active\"' : '') ?>><a href=\"/admin/template\" class=\"ajax-link\"><i class=\"fa fa-fw fa-columns\"></i><p>Templates</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/tasks')) === '/admin/tasks' ? ' class=\"active\"' : '') ?>><a href=\"/admin/tasks\" class=\"ajax-link\"><i class=\"fa fa-fw fa-tasks\"></i><p>Tasks</p></a></li>","                        <li<?= (substr($PATH, 0, strlen('/admin/settings')) === '/admin/settings' ? ' class=\"active\"' : '') ?>><a href=\"/admin/settings\" class=\"ajax-link\"><i class=\"fa fa-fw fa-cogs\"></i><p>Settings</p></a></li>","                        <li><a href=\"/admin/sign-out\"><i class=\"fa fa-fw fa-sign-out\"></i><p>Sign Out</p></a></li>","                        <?php endif ?>","                    </ul>","                </div>","            </div>","            <!-- -->","            <div class=\"main-panel\">","                <nav class=\"navbar navbar-default\">","                    <div class=\"container-fluid\">","                        <div class=\"navbar-header\">","                            <button type=\"button\" class=\"navbar-toggle\">","                                <span class=\"sr-only\">Toggle navigation</span>","                                <span class=\"icon-bar bar1\"></span>","                                <span class=\"icon-bar bar2\"></span>","                                <span class=\"icon-bar bar3\"></span>","                            </button>","                            <a class=\"navbar-brand\" href=\"#\"><?= (!empty($page['title']) ? $page['title'] : '') ?></a>","                        </div>","                        <div class=\"collapse navbar-collapse\">","                            <ul class=\"nav navbar-nav navbar-right\">","                                <li>","                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">","                                        <i class=\"ti-panel\"></i>","                                        <p>Stats</p>","                                    </a>","                                </li>","                                <li class=\"dropdown\">","                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">","                                        <i class=\"ti-bell\"></i>","                                        <p class=\"notification\">5</p>","                                        <p>Notifications</p>","                                        <b class=\"caret\"></b>","                                    </a>","                                    <ul class=\"dropdown-menu\">","                                        <li><a href=\"#\">Notification 1</a></li>","                                        <li><a href=\"#\">Notification 2</a></li>","                                        <li><a href=\"#\">Notification 3</a></li>","                                        <li><a href=\"#\">Notification 4</a></li>","                                        <li><a href=\"#\">Another notification</a></li>","                                    </ul>","                                </li>","                                <li>","                                    <a href=\"#\">","                                        <i class=\"ti-settings\"></i>","                                        <p>Settings</p>","                                    </a>","                                </li>","                            </ul>","                        </div>","                    </div>","                </nav>"],"id":4}],[{"start":{"row":17,"column":57},"end":{"row":18,"column":0},"action":"insert","lines":["",""],"id":5},{"start":{"row":18,"column":0},"end":{"row":18,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":18,"column":24},"end":{"row":18,"column":48},"action":"insert","lines":["<?= $f3->decode($css) ?>"],"id":6}],[{"start":{"row":18,"column":48},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":19,"column":0},"end":{"row":19,"column":24},"action":"insert","lines":["                        "]}],[{"start":{"row":19,"column":24},"end":{"row":19,"column":48},"action":"insert","lines":["<?= $f3->decode($css) ?>"],"id":8}],[{"start":{"row":19,"column":41},"end":{"row":19,"column":44},"action":"remove","lines":["css"],"id":9},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"insert","lines":["j"]}],[{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"insert","lines":["a"],"id":10}],[{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"insert","lines":["v"],"id":11}],[{"start":{"row":19,"column":44},"end":{"row":19,"column":45},"action":"insert","lines":["a"],"id":12}],[{"start":{"row":19,"column":45},"end":{"row":19,"column":46},"action":"insert","lines":["s"],"id":13}],[{"start":{"row":19,"column":46},"end":{"row":19,"column":47},"action":"insert","lines":["c"],"id":14}],[{"start":{"row":19,"column":47},"end":{"row":19,"column":48},"action":"insert","lines":["r"],"id":15}],[{"start":{"row":19,"column":48},"end":{"row":19,"column":49},"action":"insert","lines":["i"],"id":16}],[{"start":{"row":19,"column":49},"end":{"row":19,"column":50},"action":"insert","lines":["p"],"id":17}],[{"start":{"row":19,"column":50},"end":{"row":19,"column":51},"action":"insert","lines":["t"],"id":18}],[{"start":{"row":26,"column":0},"end":{"row":50,"column":35},"action":"remove","lines":["","    <!--   Core JS Files   -->","    <script src=\"//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js\" integrity=\"sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=\" crossorigin=\"anonymous\"></script>","    <script src=\"//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=\" crossorigin=\"anonymous\"></script>","    ","    <!--   Plugin JS Files   -->","    <script src=\"//cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.js\" integrity=\"sha256-0dCrNKhVyiX4bBpScyU5PT/iZpxzlxjn2oyaR7GQutE=\" crossorigin=\"anonymous\"></script>","    <script src=\"//ajaxorg.github.io/ace-builds/src-min-noconflict/ace.js\"></script>","    <script src=\"//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js\"></script>","","    <!--  Checkbox, Radio & Switch Plugins -->","    <script src=\"/js/bootstrap-checkbox-radio.js?developer\"></script>","","    <!--  Charts Plugin -->","    <script src=\"/js/chartist.min.js?developer\"></script>","","    <!--  Notifications Plugin -->","    <script src=\"/js/bootstrap-notify.js?developer\"></script>","","    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->","    <script src=\"/js/paper-dashboard.js?developer\"></script>","","    <!-- App JS -->","    <script src=\"/js/app.js?developer\"></script>","    <?= $f3->decode($javascript) ?>"],"id":19}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":20}],[{"start":{"row":26,"column":0},"end":{"row":27,"column":0},"action":"remove","lines":["",""],"id":21}],[{"start":{"row":22,"column":0},"end":{"row":24,"column":14},"action":"remove","lines":["                <!-- -->","            </div>","        </div>"],"id":22}],[{"start":{"row":13,"column":0},"end":{"row":15,"column":37},"action":"remove","lines":["        ","                <!-- -->","                <div class=\"content\">"],"id":23}],[{"start":{"row":19,"column":0},"end":{"row":19,"column":22},"action":"remove","lines":["                </div>"],"id":24}],[{"start":{"row":14,"column":32},"end":{"row":14,"column":48},"action":"remove","lines":["container-fluid "],"id":25}],[{"start":{"row":13,"column":0},"end":{"row":14,"column":20},"action":"remove","lines":["","                    "],"id":26}],[{"start":{"row":12,"column":10},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":27}],[{"start":{"row":12,"column":10},"end":{"row":13,"column":8},"action":"insert","lines":["","        "],"id":28}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":24},"action":"remove","lines":["    "],"id":29}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":20},"action":"remove","lines":["    "],"id":30}],[{"start":{"row":14,"column":12},"end":{"row":14,"column":16},"action":"remove","lines":["    "],"id":31}],[{"start":{"row":15,"column":20},"end":{"row":15,"column":24},"action":"remove","lines":["    "],"id":32}],[{"start":{"row":15,"column":16},"end":{"row":15,"column":20},"action":"remove","lines":["    "],"id":33}],[{"start":{"row":15,"column":12},"end":{"row":15,"column":16},"action":"remove","lines":["    "],"id":34}],[{"start":{"row":16,"column":20},"end":{"row":16,"column":24},"action":"remove","lines":["    "],"id":35}],[{"start":{"row":16,"column":16},"end":{"row":16,"column":20},"action":"remove","lines":["    "],"id":36}],[{"start":{"row":16,"column":12},"end":{"row":16,"column":16},"action":"remove","lines":["    "],"id":37}],[{"start":{"row":17,"column":16},"end":{"row":17,"column":20},"action":"remove","lines":["    "],"id":38}],[{"start":{"row":17,"column":12},"end":{"row":17,"column":16},"action":"remove","lines":["    "],"id":39}],[{"start":{"row":17,"column":8},"end":{"row":17,"column":12},"action":"remove","lines":["    "],"id":40}],[{"start":{"row":18,"column":0},"end":{"row":19,"column":0},"action":"remove","lines":["",""],"id":41}],[{"start":{"row":17,"column":14},"end":{"row":18,"column":0},"action":"remove","lines":["",""],"id":42}],[{"start":{"row":9,"column":0},"end":{"row":10,"column":8},"action":"remove","lines":["","        "],"id":43}],[{"start":{"row":8,"column":102},"end":{"row":9,"column":0},"action":"remove","lines":["",""],"id":44}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":36},"action":"insert","lines":["container-fluid "],"id":45}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":[" "],"id":46}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"remove","lines":[" "],"id":47}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":11,"column":36},"end":{"row":11,"column":36},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":2336,"mode":"ace/mode/php"}},"timestamp":1503071432441,"hash":"4d370e6f82d3cd2bc671c573dbf13fe4aa172908"}