const path = require('path'),
  settings = require('./settings');

module.exports = {
  entry: {
    App: settings.themeLocation + "/src/js/scripts-bundled.js",
    QuizForm: settings.themeLocation + "/src/js/quiz-form/quiz-form.js"
  },
  output: {
    path: path.resolve(__dirname, settings.themeLocation + "/js"),
    filename: "[name].js"
  },
  resolve: {
    alias: {
      '@': path.resolve(__dirname,  settings.themeLocation + '/src'),
    }
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react']
          }
        }
      }
    ]
  },
  mode: 'development'
  // mode: 'production'
}