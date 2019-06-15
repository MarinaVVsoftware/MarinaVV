const path = require("path");
const ImageminPlugin = require("imagemin-webpack");
const imageminGifsicle = require("imagemin-gifsicle");
const imageminJpegtran = require("imagemin-jpegtran");
const imageminOptipng = require("imagemin-optipng");
const imageminSvgo = require("imagemin-svgo");

module.exports = {
  entry: {},
  output: {
    file: "[name].js",
    path: path.resolve(__dirname, "dist")
  },
  module: {
    rules: []
  }
};
