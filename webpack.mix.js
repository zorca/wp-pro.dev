const mix = require('laravel-mix');

mix
  .options({
    processCssUrls: false,
    publicPath: './'
  })
  .sass('./web/app/themes/theme/assets/styles/main.scss', './web/app/themes/theme/dist/styles/main.css')
  .js('./web/app/themes/theme/assets/scripts/main.js', './web/app/themes/theme/dist/scripts/main.js')
  .copyDirectory('./web/app/themes/theme/assets/fonts', './web/app/themes/theme/dist/fonts');
