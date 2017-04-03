   const gulp       	= require('gulp'); // Подключаем Gulp
   const sass         = require('gulp-sass'); //Подключаем Sass пакет,
   const autoprefixer = require('gulp-autoprefixer');// Подключаем библиотеку для автоматического добавления префиксов
   const rename 			= require('gulp-rename');

gulp.task('sass', function(){ // Создаем таск Sass
    return gulp.src('./sass/**/*.scss') // Берем источник
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
        .pipe(rename('style.css'))
        .pipe(gulp.dest('.')); // Выгружаем результата в папку app/css
});
gulp.task('watch', ['sass'], () => {
    gulp.watch('./sass/**/*.scss', ['sass']); // Наблюдение за sass файлами в папке sass
});
gulp.task('default', ['watch']);