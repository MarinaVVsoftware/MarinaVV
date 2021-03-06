const path = require("path");
const ImageminPlugin = require("imagemin-webpack");
const imageminGifsicle = require("imagemin-gifsicle");
const imageminJpegtran = require("imagemin-jpegtran");
const imageminOptipng = require("imagemin-optipng");
const imageminSvgo = require("imagemin-svgo");

const config = {
  entry: {
    scripts: "./src/entryPoints/scripts.js",
    images: "./src/entryPoints/images.js",
    fonts: "./src/entryPoints/fonts.js",
    styles: "./src/entryPoints/styles.js"
  },
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "[name].js"
  },
  mode: "production",
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /(node_modules)/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"]
          }
        }
      },
      {
        test: /\.(scss|sass)$/,
        use: [
          {
            loader: "style-loader"
          },
          {
            loader: "css-loader"
          },
          {
            loader: "postcss-loader",
            options: {
              config: {
                path: "./.config"
              }
            }
          },
          {
            loader: "sass-loader"
          }
        ]
      },
      {
        test: /\.css$/,
        use: [
          {
            loader: "style-loader"
          },
          {
            loader: "css-loader"
          },
          {
            loader: "postcss-loader",
            options: {
              config: {
                path: "./.config"
              }
            }
          }
        ]
      },
      {
        test: /\.(jpe?g|png|gif|svg)$/i,
        exclude: [/fonts/, /node_modules/],
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: "images/",
              name: "[name].[ext]"
            }
          }
        ]
      },
      {
        test: /\.pdf$/,
        use: [
          {
            loader: "file-loader",
            options: {
              outputPath: "staticFiles",
              name: "[name].[ext]"
            }
          }
        ]
      },
      {
        test: /\.(eot|woff|ttf|woff2|svg)(\?v=\d+\.\d+\.\d+)?$/,
        exclude: [/images/, /node_modules/],
        use: [
          {
            loader: "file-loader",
            options: {
              name: "[name].[ext]",
              outputPath: "fonts/"
            }
          }
        ]
      },
      {
        test: /\.gz$/,
        enforce: "pre",
        use: "gzip-loader"
      }
    ]
  },
  plugins: [
    // Optimize the images
    new ImageminPlugin({
      bail: false,
      cache: false,
      imageminOptions: {
        plugins: [
          imageminGifsicle({
            interlaced: true
          }),
          imageminJpegtran({
            progressive: true
          }),
          imageminOptipng({
            optimizationLevel: 8
          }),
          imageminSvgo({
            removeViewBox: true
          })
        ]
      }
    })
  ]
};

module.exports = config;
