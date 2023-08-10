const siteURL = "banesco.usa",
  gulp = require("gulp"),
  del = require("del"),
  plumber = require("gulp-plumber"),
  gulpSass = require("gulp-sass")(require("sass")),
  sassGlob = require("gulp-sass-glob"),
  imagemin = require("gulp-imagemin"),
  cwebp = require("gulp-cwebp"),
  browserSync = require("browser-sync").create(),
  autoprefixer = require("autoprefixer"),
  sourcemaps = require("gulp-sourcemaps"),
  size = require("gulp-size"),
  uglify = require("gulp-uglify-es").default,
  jshint = require("gulp-jshint"),
  rename = require("gulp-rename"),
  chalk = require("chalk"),
  babel = require("gulp-babel"),
  postcss = require("gulp-postcss"),
  scssparser = require("postcss-scss"),
  stripCssComments = require("gulp-strip-css-comments");

const theme = {
  css: {
    src: [
      "./assets/sass/app.scss",
      //'./blocks/**/*.scss'
    ],
    dist: "./dist/css",
  },
  js: {
    src: ["./assets/js/app.js", "./blocks/**/*.js"],
    dist: "./dist/js",
  },
  img: {
    src: "./assets/img/**/*.{png,jpg,gif,svg,svgz}",
    webp: "./assets/img/**/*.{png,jpg,jpeg}",
    dist: "./dist/img",
  },
  fonts: {
    src: ["./assets/fonts/fontInUsev/*"],
    dist: "./dist/webfonts",
  },
  vendor: {
    src: ["./assets/vendor/**", "!assets/vendor/index.php"],
    dist: "./dist/vendor",
  },
  clean: {
    src: "./dist/**/*.map",
  },
  // Additional dist locations for different SCSS and JS files
  customCss: {
    src: ["./custom-assets/sass/custom.scss"],
    dist: "./build/css",
  },
  // Legacy CSS
  legacyCss: {
    src: ["./custom-assets/legacy-sass/legacy-sass.scss"],
    dist: "./build/legacy-css",
  },
  // Legacy JS
  legacyJs: {
    src: ["./custom-assets/legacy-js/legacy-custom.js"],
    dist: "./build/legacy-js",
  },
  customJs: {
    src: ["./custom-assets/js/custom.js"],
    dist: "./build/js",
  },
};

const watchFiles = {
  sass: [
    "./blocks/**/*.scss",
    "./blocks-general/**/*.scss",
    "./assets/sass/*.scss",
    "./assets/sass/**/*.scss",
  ],
  js: ["./assets/js/app.js", "./blocks/**/*.js"],
};

const sassOptions = {
  options: {
    errLogToConsole: true,
    outputStyle: "compressed",
  },
};

/*
	Styling configuration
*/
const themeSass = function () {
  var plugins = [autoprefixer({ cascade: false })];
  return gulp
    .src(theme.css.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(postcss(plugins, { parser: scssparser }))
    .pipe(gulpSass(sassOptions.options).on("error", gulpSass.logError))
    .pipe(
      rename({
        dirname: "",
        suffix: ".min",
        extname: ".css",
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(gulp.dest(theme.css.dist))
    .pipe(browserSync.stream());
};
themeSass.displayName = "sass:theme";

exports.sass = gulp.parallel(themeSass);

/*
	Styling configuration for Custom CSS
*/
const customSass = function () {
  var plugins = [autoprefixer({ cascade: false })];
  return gulp
    .src(theme.customCss.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(postcss(plugins, { parser: scssparser }))
    .pipe(gulpSass(sassOptions.options).on("error", gulpSass.logError))
    .pipe(
      rename({
        dirname: "",
        suffix: ".min",
        extname: ".css",
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(gulp.dest(theme.customCss.dist))
    .pipe(browserSync.stream());
};
customSass.displayName = "sass:custom";

exports.sass = gulp.parallel(themeSass, customSass);

/*
	Styling configuration for LEGACY CSS
*/
const customLegacySass = function () {
  var plugins = [autoprefixer({ cascade: false })];
  return gulp
    .src(theme.legacyCss.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sassGlob())
    .pipe(postcss(plugins, { parser: scssparser }))
    .pipe(gulpSass(sassOptions.options).on("error", gulpSass.logError))
    .pipe(
      rename({
        dirname: "",
        suffix: ".min",
        extname: ".css",
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(gulp.dest(theme.legacyCss.dist))
    .pipe(browserSync.stream());
};
customLegacySass.displayName = "sass:legacy";

exports.sass = gulp.parallel(themeSass, customLegacySass);

/*
	Scripts configuration
*/
const swallow = function (error) {
  console.log(error.toString());
  this.emit("end");
};
const themeJs = function () {
  return gulp
    .src(theme.js.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(jshint())
    .pipe(jshint.reporter("jshint-stylish"))
    .pipe(
      babel({
        presets: [
          [
            "@babel/env",
            {
              modules: false,
            },
          ],
        ],
      })
    )
    .pipe(uglify())
    .on("error", swallow)
    .pipe(
      rename({
        dirname: "",
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(size({ showFiles: true }))
    .pipe(gulp.dest(theme.js.dist))
    .pipe(browserSync.stream());
};

themeJs.displayName = "js:theme";

exports.js = gulp.parallel(themeJs);

/*
	Scripts configuration For Custom js
*/

const customJs = function () {
  return gulp
    .src(theme.customJs.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(jshint())
    .pipe(jshint.reporter("jshint-stylish"))
    .pipe(
      babel({
        presets: [
          [
            "@babel/env",
            {
              modules: false,
            },
          ],
        ],
      })
    )
    .pipe(uglify())
    .on("error", swallow)
    .pipe(
      rename({
        dirname: "",
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(size({ showFiles: true }))
    .pipe(gulp.dest(theme.customJs.dist))
    .pipe(browserSync.stream());
};
customJs.displayName = "js:custom";

exports.js = gulp.parallel(themeJs, customJs);

/*
	Scripts configuration For LEGACY js
*/

const legacyJs = function () {
  return gulp
    .src(theme.legacyJs.src)
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(jshint())
    .pipe(jshint.reporter("jshint-stylish"))
    .pipe(
      babel({
        presets: [
          [
            "@babel/env",
            {
              modules: false,
            },
          ],
        ],
      })
    )
    .pipe(uglify())
    .on("error", swallow)
    .pipe(
      rename({
        dirname: "",
        suffix: ".min",
      })
    )
    .pipe(sourcemaps.write("/"))
    .pipe(size({ showFiles: true }))
    .pipe(gulp.dest(theme.legacyJs.dist))
    .pipe(browserSync.stream());
};
legacyJs.displayName = "js:legacy";

exports.js = gulp.parallel(themeJs, legacyJs);

/*
	Images functions
*/
const images = function () {
  return gulp
    .src(theme.img.src)
    .pipe(
      imagemin(
        [
          imagemin.gifsicle({ interlaced: true }),
          imagemin.mozjpeg({ progressive: true }),
          imagemin.optipng({ optimizationLevel: 5 }),
          imagemin.svgo({
            plugins: [{ cleanupIDs: true }],
          }),
        ],
        {
          verbose: true,
        }
      )
    )
    .pipe(gulp.dest(theme.img.dist));
};
images.displayName = "img";
exports.images = images;

const webpImages = function () {
  return gulp.src(theme.img.webp).pipe(cwebp()).pipe(gulp.dest(theme.img.dist));
};
webpImages.displayName = "img:webp";
exports.webpImages = webpImages;

/*
	Cleaning functions
*/
const themeSourcemaps = function () {
  return gulp
    .src(theme.css.dist + "/*.css")
    .pipe(stripCssComments({ preserve: false }))
    .pipe(gulp.dest(theme.css.dist));
};
const cleanDirectories = function (done) {
  del([theme.clean.src]).then((paths) => {
    console.log(chalk.blue.underline.bold("\nDeleted files and folders"));
    console.log(chalk.yellow(paths.join("\n") + "\n"));
  });
  done();
};
const themeJsClean = function () {
  return gulp
    .src(theme.js.dist + "/*.js")
    .pipe(plumber())
    .pipe(uglify())
    .pipe(gulp.dest(theme.js.dist));
};

themeSourcemaps.displayName = "clean:sass:theme";
themeJsClean.displayName = "clean:js:theme";
cleanDirectories.displayName = "clean";

/*
	Move assets
*/
const moveFonts = function (done) {
  return gulp.src(theme.fonts.src).pipe(gulp.dest(theme.fonts.dist));
  done();
};
moveFonts.displayName = "move:fonts";

exports.moveFonts = moveFonts;

const moveVendorAssets = function (done) {
  return gulp.src(theme.vendor.src).pipe(gulp.dest(theme.vendor.dist));
  done();
};
moveVendorAssets.displayName = "move:vendor";

/*
	Server functions
*/
const templates = [
  "./*.{php,html}",
  "./**/*.{php,html}",
  "./**/**/*.{php,html}",
  "./blocks/**/*.{php,html}",
  "!./node_modules",
];

const serverconf = {
  proxy: {
    target: siteURL,
  },
  files: templates,
  host: siteURL,
  open: "external",
  port: 10006,
  reloadDelay: 1000,
};

// ! For https use
// Currently only works with valet setups
// const homedir = require('os').homedir();
// const crtKey = homedir + '/.config/valet/Certificates/' + siteURL + '.key';
// const crtCrt = homedir + '/.config/valet/Certificates/' + siteURL + '.crt';
// const
// 	syncConfig = {
// 		proxy: {
// 			target: 'https://' + siteURL
// 		},
// 		files: templates.watch,
// 		host: siteURL,
// 		open: "external",
// 		https: {
// 			key: crtKey,
// 			cert: crtCrt,
// 		},
// 		port: 3000,
// 		reloadDelay: 1000
// 	};

// browser-sync
const server = function (done) {
  if (browserSync) browserSync.init(serverconf);
  done();
};
server.displayName = "watch:server";

const reload = function (done) {
  browserSync.reload();
  done();
};
exports.server = server;

const gulpWatch = function (done) {
  gulp.watch("./blocks/**/*.scss", themeSass);
  gulp.watch("./assets/sass/*.scss", themeSass);
  gulp.watch("./assets/sass/**/*.scss", themeSass);

  gulp.watch("./assets/js/app.js", themeJs);
  gulp.watch("./blocks/**/*.js", themeJs);

  gulp.watch(theme.img.src, gulp.series(images, reload));
  gulp.watch(theme.img.webp, gulp.series(webpImages, reload));

  // Watch custom SCSS and JS files
  gulp.watch("./custom-assets/sass/**/*.scss", customSass);
  gulp.watch("./custom-assets/sass/*.scss", customSass);
  gulp.watch("./blocks-general/**/*.scss", customLegacySass);
  gulp.watch("./custom-assets/legacy-sass/**/*.scss", customLegacySass);
  gulp.watch("./custom-assets/legacy-sass/*.scss", customLegacySass);
  gulp.watch("./custom-assets/js/custom.js", customJs);
  gulp.watch("./custom-assets/js/legacy-custom.js", legacyJs);

  done();
};
gulpWatch.displayName = "watch:watch";

/*
	Build functions
*/
exports.watch = gulp.series(server, gulpWatch);
exports.clean = gulp.parallel(themeSourcemaps, themeJsClean, cleanDirectories);
exports.build = gulp.series(
  gulp.parallel(
    themeSass,
    customLegacySass,
    legacyJs,
    themeJs,
    images,
    webpImages,
    moveFonts,
    moveVendorAssets
  ),
  gulp.parallel(themeSourcemaps, themeJsClean, cleanDirectories)
);
exports.default = gulp.series(
  gulp.parallel(themeSass, themeJs, images, webpImages)
);