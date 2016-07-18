System.register('beeta-dev/ext-userinfo/main', ['flarum/extend', 'flarum/app', 'flarum/components/UserCard', 'flarum/components/Button'], function (_export) {
    'use strict';

    var extend, app, UserCard, Button;
    return {
        setters: [function (_flarumExtend) {
            extend = _flarumExtend.extend;
        }, function (_flarumApp) {
            app = _flarumApp['default'];
        }, function (_flarumComponentsUserCard) {
            UserCard = _flarumComponentsUserCard['default'];
        }, function (_flarumComponentsButton) {
            Button = _flarumComponentsButton['default'];
        }],
        execute: function () {

            app.initializers.add('beeta-dev-ext-userinfo', function () {
                extend(UserCard.prototype, 'infoItems', function (items) {
                    var user = this.props.user;
                    var date = user.joinTime();
                    var hours = date.getHours();
                    var minutes = date.getMinutes();
                    var ampm = hours >= 12 ? 'pm' : 'am';
                    hours = hours % 12;
                    hours = hours ? hours : 12; // the hour '0' should be '12'
                    minutes = minutes < 10 ? '0' + minutes : minutes;
                    var strTime = hours + ':' + minutes + ' ' + ampm;
                    var df = new Date(date.getMonth() + 1 + "/" + (date.getDate() + 1) + "/" + date.getFullYear() + "  " + strTime);
                    var dt = new Date();
                    var allMonths = dt.getMonth() - df.getMonth() + 12 * (dt.getFullYear() - df.getFullYear());
                    var allYears = dt.getFullYear() - df.getFullYear();
                    var partialMonths = dt.getMonth() - df.getMonth();
                    if (partialMonths < 0) {
                        allYears--;
                        partialMonths = partialMonths + 12;
                    }
                    var goku = "";
                    var i = "";
                    for (i = 0; i < allYears; i++) {
                        goku += "<img src='http://www.beeta.com.br/forum/img/rank/goku.png' />";
                    }
                    var esfera = "";
                    for (i = 0; i < partialMonths; i++) {
                        esfera += "<img src='http://www.beeta.com.br/forum/img/rank/esfera.gif' />";
                    }
                    items.add('postcount', 'Posts: ' + user.commentsCount() + ' - Topics: ' + user.discussionsCount() + '', 5);
                    items.add('gokucount', goku, 5);
                    items.add('esferacount', esfera, 5);
                });
            });
        }
    };
});