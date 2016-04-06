module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // SCSS to CSS
    sass: {
      dev: {
        files: {
          'css/style.css': 'scss/style.scss',
          'css/foundation.css': 'scss/foundation.scss'
        },
        options: {
          sourceMap: true
        }
      }
    },

    // Combine JS Files
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['js/lib/jquery-1.12.3.js', 'js/lib/jquery.lazylinepainter-1.7.0.min.js', 'js/lib/jquery.waypoints.min.js', 'js/lib/jquery.mixitup.min.js','js/lib/sticky.min.js','js/lib/custom.js'],
        dest: 'js/init.js'
      }
    },

    // Uglify JS
    uglify: {
      dist: {
        files: {
          'js/init.min.js': ['js/init.js']
        }
      }
    },

    // Minify Images
    imagemin: {
      dist: {
        files: [{
          expand: true,
          cwd: 'images/lib',
          src: ['**/*.{png,jpg,gif,svg}'],
          dest: 'images'
        }]
      }
    },

    // Watch Files
    watch: {
      css: {
        files: ['**/*.scss'],
        tasks: ['sass']
      },
      js: {
        files: ['js/lib/**/*.js'],
        tasks: ['concat', 'uglify']
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-newer');

  // Default task(s).
  grunt.registerTask('dev', ['sass', 'watch']);
  grunt.registerTask('dist', ['newer:concat', 'newer:uglify', 'newer:imagemin', 'watch']);
};