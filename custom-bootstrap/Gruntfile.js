module.exports = function(grunt) {
  require('load-grunt-tasks')(grunt);

  var config = {
    // Load data from package.json
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      sass: {
        files: 'src/style/**/*.scss',
        tasks: ['sass:dev'],
        options: {
          livereload: true
        }
      },
    },
    sass: {
      dev: {
        options: {
          lineNumbers: true,
          sourcemap: true,
          sourceComments: "sass",
          outputStyle: 'nested'
        },
        files: {
          'dist/css/built.css': 'src/style/main.scss',
        }
      },
      dist: {
        options: {
          compressed: true
        },
        files: {
          'dist/css/built.css': 'src/style/main.scss'
        }
      }
    },
    cssmin: {
      css:{
        src: 'dist/css/built.css',
        dest: 'dist/css/built.min.css'
      }
    }
  };

  // Initialize the configuration.
  grunt.initConfig(config);

  grunt.registerTask("prodbuild", ['cssmin', 'sass:dist']);
  grunt.registerTask("devbuild", ['cssmin', 'sass:dev']);
  grunt.registerTask("default", ['devbuild']);
};
