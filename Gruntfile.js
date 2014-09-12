module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      build: {
        src: ['dev/js/*.js', 'js/global.js'],
        dest: 'build/js/global.min.js'
      }
    },
      compass: {                  // Task
        dist: {                   // Target
          options: {              // Target options
            sassDir: 'assets/dev/scss/',
            cssDir: ['assets/build/css/', '.' ],
            environment: 'production',
            outputStyle: 'nested'
          }
        }
      },
      watch: {
          css: {
            files: '**/*.scss',
            tasks: ['compass'],
            options: {
              livereload: true,
            },
          },
           scripts: {
            files: 'js/*.js',
            tasks: ['uglify'],
            options: {
              debounceDelay: 250,
            },
          },
      },

      connect: {
        uses_defaults: {}
      }

  });

  // Load the plugin that provides the tasks.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-connect');
  // Default task(s).
  grunt.registerTask('default', ['uglify', 'compass', 'watch']);

};
