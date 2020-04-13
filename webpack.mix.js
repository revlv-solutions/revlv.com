const mix = require('laravel-mix')
const http = process.argv.includes('--https') ? 'https' : 'http'

function resolve (dir) {
  return path.join(__dirname, '..', dir)
}

const createLintingRule = () => ({
  test: /\.(js|vue)$/,
  loader: 'eslint-loader',
  enforce: 'pre',
  options: {
    formatter: require('eslint-friendly-formatter'),
    emitWarning: !mix.inProduction(),
    failOnWarning: true
  },
  exclude: /node_modules/
})

mix.webpackConfig({
  devServer: {
    overlay: true,
    contentBase: path.join(__dirname, 'public'),
    headers: {
      'Access-Control-Allow-Origin': '*',
      'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE, PATCH, OPTIONS',
      'Access-Control-Allow-Headers': 'X-Requested-With, content-type, Authorization'
    }
  },
  output: {
    publicPath: Mix.isUsing('hmr')
               ? http + '://' + Config.hmrOptions.host + ':' + Config.hmrOptions.port + '/'
               : '/',
    chunkFilename: 'js/[name].[chunkhash].js'
  },
  module: {
    rules: [
      ...(!mix.inProduction() ? [createLintingRule()] : [])
    ]
  },
  resolve: {
    alias: {
      '@components': path.resolve(__dirname, 'resources/js/components')
    }
  }
})

mix.copyDirectory('resources/fonts/**/*.*', 'public/fonts')
mix.copyDirectory('resources/img/**/*.*', 'public/img')

mix
  .less('resources/less/main.less', 'public/css/main.css')
  .js([
    'resources/js/app.js',
    'resources/js/branding.js',
  ], 'public/js/app.js')
  .options({
    processCssUrls: false
  })
  .sourceMaps()

  mix.styles([
    'node_modules/normalize.css/normalize.css',
    'resources/fonts/nunito-sans/nunito-sans.css',
    'resources/fonts/nucleo-webfonts/mini/nucleo-mini.css',
    'resources/fonts/nucleo-webfonts/glyph/nucleo-glyph.css',
    'resources/fonts/nucleo-webfonts/outline/nucleo-outline.css',
    'public/css/main.css'
  ], 'public/css/all.css')
