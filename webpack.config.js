var webpack = require('webpack');

module.exports = {
  entry: ['./app/app.js'],
  output: {
    path: __dirname,
    filename: 'bundle.js'
  },
  module: {
    loaders: [
      { test: /\.html$/, loader: "file?name=[name].[ext]" },
	  { test: /\.scss$/, loaders: ["style", "css", "sass"] },
      { test: /\.(png|jpg)$/, loader: 'file?name=images/[name].[ext]' },
	  { test: /\.(eot|svg|ttf|woff|woff2|otf)$/, loader: 'file?name=fonts/[name].[ext]' },
      { test: /\.js$/, loaders: ["react-hot", "babel-loader"], exclude: '/node_modules/' },
      { test: /\.jsx$/, loaders: ['jsx-loader', "babel-loader"] }
    ]
  },
  query: {
    presets: ['es2015', 'react']
  },
  plugins: [
    new webpack.NoErrorsPlugin()
  ]
};
