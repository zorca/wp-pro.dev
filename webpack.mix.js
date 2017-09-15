const mix = require('laravel-mix');

mix
  .setPublicPath('.')
  .sass('web/app/themes/theme/assets/styles/main.scss', 'web/app/themes/theme/dist/styles/main.css')
  .js('web/app/themes/theme/assets/scripts/main.js', 'web/app/themes/theme/dist/scripts/main.js');
