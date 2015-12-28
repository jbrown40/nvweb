module.exports = function(grunt) {

  var globalConfig = {
    themeDir: 'themes/notevote'
  };

  // Project configuration.
  grunt.initConfig({
    globalConfig: globalConfig,
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        files: {
          '<%=globalConfig.themeDir %>/css/app.css' : '<%=globalConfig.themeDir %>/scss/app.scss'
        },                  // Target
        options: {              // Target options
          style: 'compressed',
          loadPath: [
          '<%=globalConfig.themeDir %>/bower_components/bootstrap-sass/assets/stylesheets/'
          ],
          sourcemap: true
        }
      }
    },
    //concat all the files into the build folder includePaths: 

    concat: {
      js:{
        src: [
    
          '<%=globalConfig.themeDir %>/javascript/*.js'
        ],
        dest: '<%=globalConfig.themeDir %>/build/build.src.js'
      }
    },

    //minify those concated files
    //toggle mangle to leave variable names intact

    uglify: {
      my_target:{
        files:{
        '<%=globalConfig.themeDir %>/build/build.js': ['<%=globalConfig.themeDir %>/build/build.src.js'],
        }
      }
    },

    watch: {
      scripts: {
        files: ['<%=globalConfig.themeDir %>/javascript/*.js', '<%=globalConfig.themeDir %>/javascript/**/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
          spawn: true,
        }
      },
      css: {
        files: ['<%=globalConfig.themeDir %>/scss/*.scss',
                '<%=globalConfig.themeDir %>/scss/**/*.scss',
               
                ],
        tasks: ['sass'],
        options: {
          spawn: true,
        }
      }
    },

    criticalcss: {
            custom: {
                options: {
                    url: "http://localhost:8888/nvweb/",
                    width: 1200,
                    height: 900,
                    filename: "<%=globalConfig.themeDir %>/css/app.css", // Using path.resolve( path.join( ... ) ) is a good idea here
                    buffer: 800*1024,
                    ignoreConsole: false
                }
            }
        }

  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-criticalcss');

  // Default task(s).
  // Note: order of tasks is very important
  grunt.registerTask('default', ['sass', 'concat', 'uglify', 'watch']);

};