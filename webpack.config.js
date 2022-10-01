module.exports = {
  entry: './resources/js/app.js',
  output: {
    filename: '[name].[contenthash].bundle.js',
    path: __dirname + '/public/build',
  },
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          // Creates `style` nodes from JS strings
          "style-loader",
          // Translates CSS into CommonJS
          "css-loader",
          // Compiles Sass to CSS
          "sass-loader",
        ],
      },
    ],
  },
};
