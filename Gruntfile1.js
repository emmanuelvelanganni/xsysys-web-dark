module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
		uglify: {
			options: {
				mangle: false
			},
			my_target: {
				files: {
					//'jQuery/dest/webworkerscript.min.js': ['jQuery/src/webworkerscript.js']
				}
			}
		},
		jshint: {
			options: {
				curly: true
			},
			dev: {        
				//src: ['jQuery/**/*.js',  '!jQuery/folder not to check/*.js']
				//src: ['jQuery/dest/*.js']
			}
		},
		compass: {
			options: {
				sassDir: 'sass',
				cssDir: 'stylesheets',
				outputStyle: 'expanded',
			}
		},
		/*sass: {
            options: {
                 style:'compressed' // Minify output
            },
            dist: {
                files: [
                  {
                      expand: true, // Recursive
                      cwd: "sass", // The startup directory
                      src: ["*.scss"], // Source files
                      dest: "stylesheets", // Destination
                      ext: ".css" // File extension 
                  }
                ]
            }
        },*/
		autoprefixer: {
			options: {
				//browsers: ['opera 12', 'ff 15', 'chrome 25', 'ie 8', 'ie 9'],
				browsers: ['last 1 version', '> 1%', 'ie 8'],
				safe: true
			},
			// prefix the specified file
			multiple_files: {
				expand: true, // Recursive
                cwd: "stylesheets", // The startup directory
                src: ["*.scss"], // Source files
                dest: "stylesheets", // Destination
                ext: ".css" // File extension 
			}
		},
		cssmin: {
			combine: {
				files: {
					  expand: true, // Recursive
                      cwd: "stylesheets", // The startup directory
                      src: ["*.css"], // Source files
                      dest: "stylesheets", // Destination
                      ext: ".css" // File extension 
				},
			},
		},
		watch: {
			options: {
				livereload: true // refreshes browser window whenever changes are applied
			},
			compass: {
				files: ['sass/.{scss,sass}'],
				tasks: ['compass:server', 'autoprefixer']
			},
			/*css: {
				files: ['sass/*.scss'],
				tasks: ['sass']
			},*/
			css: {
				files: ['sass/*.scss'],
				tasks: ['compass', 'autoprefixer:css'],
				options: {
					spawn: false,
				}
			},
			csspostprocess: {
				files: 'stylesheets/*.css',
				tasks: ['autoprefixer:css', 'cssmin'],
			},
			scripts: {
				files: ['jQuery/dest/*.js'],
				tasks: ['jshint']
			}
		}
  });

  // Load the plugin that provides the "uglify" task.
  //grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  // Default task(s).
  grunt.registerTask('default', ['uglify','jshint','autoprefixer','cssmin','watch']);
  grunt.registerTask('test', ['clean', 'copy', 'autoprefixer', 'nodeunit']);
};