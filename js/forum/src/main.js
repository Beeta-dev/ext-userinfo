import { extend } from 'flarum/extend';
import app from 'flarum/app';
import UserCard from 'flarum/components/UserCard';
import Post from 'flarum/components/Post';
import Button from 'flarum/components/Button';

app.initializers.add('beeta-dev-ext-userinfo', function() {
    extend(UserCard.prototype, 'init', function() {
        var user = this.props.user;
        // Calc
        var todate = new Date();
        var age= [], fromdate= new Date(user.joinTime()),
        y= [todate.getFullYear(), fromdate.getFullYear()],
        ydiff= y[0]-y[1],
        m= [todate.getMonth(), fromdate.getMonth()],
        mdiff= m[0]-m[1],
        d= [todate.getDate(), fromdate.getDate()],
        ddiff= d[0]-d[1];

        if(mdiff < 0 || (mdiff=== 0 && ddiff<0))--ydiff;
        if(mdiff<0) mdiff+= 12;
        if(ddiff<0){
            fromdate.setMonth(m[1]+1, 0);
            ddiff= fromdate.getDate()-d[1]+d[0];
            --mdiff;
        }
        mdiff = (mdiff/3);
        var goku = '';
        var g;
        for (g = 0; g < ydiff; g++) { 
            goku += "<img src='http://www.beeta.com.br/forum/assets/rank/goku.png' />";
        }
        var esfera = '';
        var e;
        for (e = 0; e < mdiff; e++) { 
            esfera += "<img src='http://www.beeta.com.br/forum/assets/rank/esfera.gif' />";
        }
        setTimeout(function(){
            $(".UserCard--popover .UserCard-info").append("<div class='daterank'>"+goku+"<br/>"+esfera+"</div>");
            $(".UserHero .UserCard-info").append("<div class='daterank daterankhero'>"+goku+"<br/>"+esfera+"</div>");
        }, 100);
    });
    extend(UserCard.prototype, 'infoItems', function(items) {
    	var user = this.props.user;
        items.add('postcount', Button.component({
                        className: "Button",
                        icon: '',
                        children: 'Posts: '+user.commentsCount()+' - Topics: '+user.discussionsCount()+''
                    }),5);
    });
    extend(Post.prototype, 'footerItems', function(items) {
        var userId = this.props.post.data.relationships.user.data.id;
        var bio = this.props.post.store.data.users[userId].data.attributes.bio;
        items.add("assinatura",bio);
    });
});