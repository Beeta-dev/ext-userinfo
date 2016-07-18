import { extend } from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard';
import Button from 'flarum/components/Button';

app.initializers.add('beeta-dev-ext-userinfo', function() {
    extend(UserCard.prototype, 'init', function() {
    	var user = this.props.user;
    	$('.item-bio').html('<div>Posts: '+user.commentsCount()+' Topics: '+user.discussionsCount()+'</div>');
    });
    extend(UserCard.prototype, 'infoItems', function(items) {
    	var user = this.props.user;
        items.add('postcount',
			Button.component({
				className: 'Button Button-icon',
				icon: '',
				children: 'Posts: '+user.commentsCount()+' Topics: '+user.discussionsCount()
			}), 5);

    });
});