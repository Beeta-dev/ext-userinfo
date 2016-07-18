import { extend } from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard';
import Button from 'flarum/components/Button';

app.initializers.add('beeta-dev-ext-embed', function() {
    
    extend(UserCard.prototype, 'infoItems', function(items) {
    	//var user = this.props.user;

        items.add('postcount',
			Button.component({
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