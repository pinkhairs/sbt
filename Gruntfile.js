module.exports = function(grunt) {

// Project configuration.
grunt.initConfig({
pkg: grunt.file.readJSON('package.json'),
sass: {
options: {
    sourceMap: true
},
dist: {
    files: {
        'css/style.css': 'scss/style.scss',
        'css/foundation.css': 'scss/foundation.scss',
    }
}
},
watch: {
  css: {
    files: ['**/*.scss'],
    tasks: ['sass'],
    options: {
      style: 'expanded'
    },
    },
  },
});

// Load the plugin that provides the "uglify" task.
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-sass');

// Default task(s).
grunt.registerTask('default', ['watch', 'sass']);
};