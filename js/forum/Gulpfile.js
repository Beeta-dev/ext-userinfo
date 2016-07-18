var flarum = require('flarum-gulp');

flarum({
  modules: {
    'beeta-dev/ext-embed': [
      'src/**/*.js'
    ]
  }
});