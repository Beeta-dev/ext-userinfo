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
                extend(UserCard.prototype, 'init', function () {
                    var user = this.props.user;
                    $('.item-bio').html('<div>Posts: ' + user.commentsCount() + ' Topics: ' + user.discussionsCount() + '</div>');
                });
                extend(UserCard.prototype, 'infoItems', function (items) {
                    var user = this.props.user;
                    items.add('postcount', Button.component({
                        className: 'Button Button-icon',
                        icon: '',
                        children: 'Posts: ' + user.commentsCount() + ' Topics: ' + user.discussionsCount()
                    }), 5);
                });
            });
        }
    };
});