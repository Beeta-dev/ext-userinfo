System.register('beeta-dev/ext-userinfo/main', ['flarum/extend', 'flarum/app', 'flarum/components/UserCard', 'flarum/components/UserPage', 'flarum/components/Button'], function (_export) {
    'use strict';

    var extend, app, UserCard, UserPage, Button;
    return {
        setters: [function (_flarumExtend) {
            extend = _flarumExtend.extend;
        }, function (_flarumApp) {
            app = _flarumApp['default'];
        }, function (_flarumComponentsUserCard) {
            UserCard = _flarumComponentsUserCard['default'];
        }, function (_flarumComponentsUserPage) {
            UserPage = _flarumComponentsUserPage['default'];
        }, function (_flarumComponentsButton) {
            Button = _flarumComponentsButton['default'];
        }],
        execute: function () {

            app.initializers.add('beeta-dev-ext-userinfo', function () {
                extend(UserCard.prototype, 'init', function () {
                    var user = this.props.user;
                    // Calc
                    var todate = new Date();
                    var age = [],
                        fromdate = new Date(user.joinTime()),
                        y = [todate.getFullYear(), fromdate.getFullYear()],
                        ydiff = y[0] - y[1],
                        m = [todate.getMonth(), fromdate.getMonth()],
                        mdiff = m[0] - m[1],
                        d = [todate.getDate(), fromdate.getDate()],
                        ddiff = d[0] - d[1];

                    if (mdiff < 0 || mdiff === 0 && ddiff < 0) --ydiff;
                    if (mdiff < 0) mdiff += 12;
                    if (ddiff < 0) {
                        fromdate.setMonth(m[1] + 1, 0);
                        ddiff = fromdate.getDate() - d[1] + d[0];
                        --mdiff;
                    }
                    /*
                    if(ydiff> 0) age.push(ydiff+ ' year'+(ydiff> 1? 's ':' '));
                    if(mdiff> 0) age.push(mdiff+ ' month'+(mdiff> 1? 's':''));
                    if(ddiff> 0) age.push(ddiff+ ' day'+(ddiff> 1? 's':''));
                    if(age.length>1) age.splice(age.length-1,0,' and ');    
                    return age.join('');
                    */
                    var goku;
                    var g;
                    for (g = 0; g < ydiff; g++) {
                        goku += "<img src='http://www.beeta.com.br/forum/img/rank/goku.png' />";
                    }
                    var esfera;
                    var e;
                    for (e = 0; e < mdiff; e++) {
                        esfera += "<img src='http://www.beeta.com.br/forum/img/rank/esfera.gif' />";
                    }
                    setTimeout(function () {
                        $(".UserCard--popover .UserCard-info").append("<div class='daterank'>" + goku + "<br/>" + esfera + "</div>");
                    }, 100);
                    if ($(".daterankhero").html() == undefined) {
                        setTimeout(function () {
                            $(".UserHero .UserCard-info").append("<div class='daterank daterankhero'>" + goku + "<br/>" + esfera + "</div>");
                        }, 100);
                    }
                });
                extend(UserCard.prototype, 'infoItems', function (items) {
                    var user = this.props.user;
                    items.add('postcount', Button.component({
                        className: "Button",
                        icon: '',
                        children: 'Posts: ' + user.commentsCount() + ' - Topics: ' + user.discussionsCount() + ''
                    }));
                });
            });
        }
    };
});