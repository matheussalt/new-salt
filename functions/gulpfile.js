const gulp = require("gulp");
const minifyCss = require("gulp-minify-css");
const sass = require("gulp-sass");
const autoprefixer = require("gulp-autoprefixer");
const concat = require("gulp-concat");
const minifyJs = require("gulp-uglify-es").default;
const babel = require("gulp-babel");

async function cssMinify() {
  gulp
    .src("../app/style.scss")
    .pipe(sass())
    .on("error", swallowError)
    .pipe(autoprefixer("last 2 version", "safari 5", "ie 8", "ie 9"))
    .pipe(minifyCss())
    .pipe(gulp.dest("../app"));
}

async function jsMinify() {
  gulp
    .src("../app/js/**/*.js")
    .pipe(
      babel({
        plugins: ["@babel/transform-runtime"]
      })
    )
    .on("error", swallowError)
    .pipe(concat("app.js"))
    .pipe(minifyJs())
    .pipe(gulp.dest("../app"));
}

function swallowError(error) {
  console.log(error.toString());

  this.emit("end");
}

async function watch() {
  gulp.watch("../app/css/**/*.scss", cssMinify);
  gulp.watch("../app/js/**/*.js", jsMinify);
}

gulp.task("default", watch);
