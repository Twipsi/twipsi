const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const path = require('path');

module.exports = {
      entry: './resources/js/app.js',
      output: {
            clean: true,
            filename: '[name].bundle.js',
            path: __dirname + '/public/build',
      },
      plugins: [
            new MiniCssExtractPlugin({
                  filename: "[name].bundle.css",
            }),
      ],
      module: {
            rules: [
                  {
                        test: /\.s[ac]ss$/i,
                        use: [
                              { loader: MiniCssExtractPlugin.loader},
                              "css-loader", "sass-loader",
                        ],
                  },
            ],
      },
      mode: 'development',
      devServer: {
            static: {
                  directory: __dirname + '/public/',
            },
            open: true
      }
};