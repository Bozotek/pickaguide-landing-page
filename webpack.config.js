var webpack = require('webpack');

module.exports = {
  entry: ['./app/scripts/app.jsx'],
  output: {
    path: './public',
    filename: 'app.js'
  },
  module: {
    loaders: [
      { test: /\.html$/, loader: "file?name=[name].[ext]"} ,
      { test: /\.css$/, loader: 'style!css' },
      { test: /\.(png|jpg)$/, loader: 'file?name=images/[name].[ext]'},
      { test: /\.js$/, loaders: ["react-hot", "babel-loader"], exclude: '/node_modules/' },
      { test: /\.jsx$/, loaders: ['jsx-loader', "babel-loader"] }
    ]
  },
  plugins: []
};
