System.register('beeta-dev/ext-embed/main', ['flarum/extend', 'flarum/app', 'flarum/components/UserCard', 'flarum/components/Button'], function (_export) {
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

			app.initializers.add('beeta-dev-ext-embed', function () {

				extend(UserCard.prototype, 'infoItems', function (items) {
					//var user = this.props.user;

					items.add('postcount', Button.component({
						className: 'Button Button-icon Button--share',
						icon: 'share-alt',
						children: 'Avalie o topeco'
						//children: app.forum.attribute('vingle.share.social') ? app.forum.attribute('vingle.share.social') : 'Share',
						/*onclick: function onclick() {
      	return alert("teste");
      }*/
					}), 5);
				});
			});
		}
	};
});