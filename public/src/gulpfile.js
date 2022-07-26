var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var notify = require("gulp-notify");
var notifier = require('node-notifier');
var streamqueue = require('streamqueue');
var gutil = require('gulp-util');
var spawn = require('child_process').spawn;
var argv = require('yargs').argv;

var fatalLevel = 'error';
var ERROR_LEVELS = ['error', 'warning'];

function isFatal(level) {
    return ERROR_LEVELS.indexOf(level) <= ERROR_LEVELS.indexOf(fatalLevel || 'error');
}

function handleError(level, error) {
    notifier.notify({
        'title': 'Error',
        'subtitle': 'Build Error',
        'message': error.message,
        'sound': 'Basso', // Case Sensitive string of sound file (see below)
        'icon': 'Terminal Icon', // Set icon? (Absolute path to image)
        'contentImage': void 0, // Attach image? (Absolute path)
        'open': void 0, // URL to open on click
        'wait': false // if wait for notification to end
    }, function (error, response) {
        console.log(response);
    });
    gutil.log(error.message);
    gutil.log("file:" + error.fileName);
    gutil.log("line:" + error.lineNumber);
    if (isFatal(level)) {
        process.exit(1);
    }
}

// Convenience handler for error-level errors.
function onError(error) {
    handleError.call(this, 'error', error);
}
// Convenience handler for warning-level errors.
function onWarning(error) {
    handleError.call(this, 'warning', error);
}

gulp.task('auto-reload', function () {
    var p;

    gulp.watch('gulpfile.js', spawnChildren);
    spawnChildren();

    function spawnChildren(e) {
        // kill previous spawned process
        if (p) {
            p.kill();
        }

        notifier.notify({
            'title': 'Gulp Reloading',
            'subtitle': 'Gulpfile.js',
            'message': 'Gulpfile.js has changed, reloading...',
            'sound': 'Submarine', // Case Sensitive string of sound file (see below)
            'icon': 'Terminal Icon', // Set icon? (Absolute path to image)
            'contentImage': void 0, // Attach image? (Absolute path)
            'open': void 0, // URL to open on click
            'wait': false // if wait for notification to end
        }, function (error, response) {
            console.log(response);
        });
        // `spawn` a child `gulp` process linked to the parent `stdio`
        p = spawn('gulp', [argv.task], {stdio: 'inherit'});
    }
});

/**
 * Run all tasks & end (deployment use)
 */
gulp.task('default', ['sass', 'js']);

gulp.task('js', function () {
    // main.js
    streamqueue({objectMode: true},
        gulp.src([
            'bower_components/jquery/dist/jquery.min.js',
            'bower_components/jquery-ui/jquery-ui.js',
            'bower_components/foundation-sites/dist/js/foundation.min.js',
            'bower_components/slick-carousel/slick/slick.min.js',
            'bower_components/sweetalert/dist/sweetalert.min.js',
            'javascript/main.js'
        ])
    )
        .pipe(concat('main.js'))
        .pipe(gulp.dest('../js'))
        .pipe(notify("Built file: <%= file.relative %>!"))
        .on('error', onWarning);

});

gulp.task('sass', function () {
    gulp.src([
        './scss/*.scss',
        './fonts/*.eot',
        './fonts/*.svg',
        './fonts/*.ttf',
        './fonts/*.woff',
        './fonts/*.woff2'])
        .pipe(sourcemaps.init())
        .pipe(sass({
            includePaths: [
                'bower_components/foundation-sites/scss',
                'bower_components/slick-carousel/slick',
                'bower_components/sweetalert/dist'
            ]
        }))
        .on('error', onWarning)
        .pipe(autoprefixer({
            browsers: ['last 20 versions'],
            cascade: false
        }))
        .pipe(minifyCss())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('../css'))
        .pipe(notify("Built file: <%= file.relative %>!"));
});

/**
 * Watch for changes (development use only)
 */
gulp.task('watch', ['sass', 'js'], function () {
    gulp.watch(['javascript/**/*.js'], ['js']);
    gulp.watch(['./scss/*.scss'], ['sass']);
});