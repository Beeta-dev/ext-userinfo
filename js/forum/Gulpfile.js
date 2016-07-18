var flarum = require('flarum-gulp');

flarum({
  modules: {
    'beeta-dev/ext-userinfo': [
      'src/**/*.js'
    ]
  }
});